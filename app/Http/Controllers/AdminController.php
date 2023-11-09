<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

/**
 * @see \Tests\Feature\Http\Controllers\AdminControllerTest
 */
final class AdminController extends AbstractController
{
    public function index(): View
    {
        return view('admin.index');
    }
}
