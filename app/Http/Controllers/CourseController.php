<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class CourseController extends AbstractController
{
    public function index(): View
    {
        return view('courses.index');
    }

    public function muscleRelaxation(): View
    {
        return view('courses.muscle-relaxation');
    }

    public function autogenicTraining(): View
    {
        return view('courses.autogenic-training');
    }
}
