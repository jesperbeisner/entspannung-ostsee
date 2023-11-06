<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Actions\CreateUserAction;
use App\Exceptions\RuntimeException;
use Illuminate\Console\Command;

final class CreateUserCommand extends Command
{
    protected $signature = 'app:create-user {email} {password}';

    protected $description = 'Creates a new user';

    public function handle(CreateUserAction $createUserAction): int
    {
        $email = $this->argument('email');
        $password = $this->argument('password');

        try {
            $createUserAction->create($email, $password);
        } catch (RuntimeException $e) {
            $this->error($e->getMessage());

            return Command::FAILURE;
        }

        $this->info(sprintf('A new user with email "%s" was successful created.', $email));

        return Command::SUCCESS;
    }
}
