<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Exceptions\RuntimeException;
use App\Exceptions\ThisShouldNeverHappenException;
use App\Interfaces\PasswordServiceInterface;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

final class LoginRequest extends FormRequest
{
    private ?User $user = null;

    /**
     * @return array<string, array<int, string>>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:10'],
        ];
    }

    /**
     * @return array<int, callable(Validator): void>
     */
    public function after(UserRepository $userRepository, PasswordServiceInterface $passwordService): array
    {
        return [
            function (Validator $validator) use ($userRepository, $passwordService): void {
                $user = $userRepository->findByEmail($this->getValidatedEmail());

                if ($user === null) {
                    // Prevent timing attacks
                    $passwordService->check('clearly-not-the-same-password', '$2y$12$7txzxnEi/pRl8oGpikCmte3BIfmmkVAmu2z/gs.lLay7BxbOf4Ymy');

                    $validator->errors()->add('email', 'Email or password is wrong.');
                    $validator->errors()->add('password', 'Email or password is wrong.');

                    return;
                }

                if ($passwordService->check($this->getValidatedPassword(), $user->password) === false) {
                    $validator->errors()->add('email', 'Email or password is wrong.');
                    $validator->errors()->add('password', 'Email or password is wrong.');

                    return;
                }

                $this->user = $user;
            },
        ];
    }

    private function getValidatedEmail(): string
    {
        $email = $this->validated('email');

        if (!is_string($email)) {
            throw new ThisShouldNeverHappenException();
        }

        return $email;
    }

    private function getValidatedPassword(): string
    {
        $password = $this->validated('password');

        if (!is_string($password)) {
            throw new ThisShouldNeverHappenException();
        }

        return $password;
    }

    public function getValidatedUser(): User
    {
        if ($this->validator->errors()->count() > 0) {
            throw new RuntimeException('This method is not available when we have errors.');
        }

        if ($this->user === null) {
            throw new RuntimeException('How is this user null when we have no errors?');
        }

        return $this->user;
    }
}
