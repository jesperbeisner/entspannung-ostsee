<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Factories\Models\UserFactory;
use App\Repositories\UserRepository;
use Illuminate\Console\Command;

final class CreateUserCommand extends Command
{
    protected $signature = 'app:create-user {email} {password}';

    protected $description = 'Creates a new user';

    public function handle(UserRepository $userRepository): int
    {
        $email = $this->argument('email');
        $password = $this->argument('password');

        $user = $userRepository->findByEmail($email);

        if ($user !== null) {
            $this->error(sprintf('A user with email "%s" already exists!', $email));

            return Command::FAILURE;
        }

        $user = UserFactory::create($email, $password);

        $userRepository->save($user);

        $this->info(sprintf('A new user with email "%s" was successful created.', $email));

        return Command::SUCCESS;
    }
}
