<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class AuthController extends AbstractController
{
    public function login(): View
    {
        return view('auth.login');
    }
}
