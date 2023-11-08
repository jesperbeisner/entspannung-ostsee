<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class IndexController extends AbstractController
{
    public function index(): View
    {
        return view('index');
    }

    public function about(): View
    {
        return view('index');
    }

    public function lectures(): View
    {
        return view('index');
    }

    public function consulting(): View
    {
        return view('index');
    }

    public function soundMassage(): View
    {
        return view('index');
    }

    public function imprint(): View
    {
        return view('imprint');
    }

    public function agbs(): View
    {
        return view('agbs');
    }

    public function dataProtection(): View
    {
        return view('data-protection');
    }
}
