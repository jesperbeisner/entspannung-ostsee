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
}
