<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

final class BlogController extends AbstractController
{
    public function index(): View
    {
        return view('blog.index');
    }

    public function create(): View
    {
        return view('blog.create');
    }

    public function store(): RedirectResponse
    {
        return to_route('blog')->with('success', 'Neuer Blog Post erfolgreich erstellt!');
    }
}
