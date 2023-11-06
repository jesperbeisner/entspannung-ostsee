<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Interfaces\AuthServiceInterface;
use App\Interfaces\UserServiceInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

final class AuthController extends AbstractController
{
    public function __construct(
        private readonly UserServiceInterface $userService,
        private readonly AuthServiceInterface $authService,
    ) {
    }

    public function index(): RedirectResponse|View
    {
        if ($this->userService->findUser() !== null) {
            return to_route('index');
        }

        return view('auth.login');
    }

    public function execute(LoginRequest $loginRequest): RedirectResponse
    {
        $this->authService->login($loginRequest->getValidatedUser());

        return to_route('index');
    }

    public function logout(): RedirectResponse
    {
        $this->authService->logout();

        return to_route('index');
    }
}
