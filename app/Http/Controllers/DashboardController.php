<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): RedirectResponse
    {
        return match ($request->user()->role){
     'admin' =>redirect()->route('admin.dashboard'),
     'teacher' =>redirect()->route('teacher.dashboard'),
     'student' =>redirect()->route('student.dashboard'),
     default=>abort(403, 'Not in user Roles'),
    };
    }
public function admin(): View
{
    return view('dashboard.admin');
}
public function teacher(): View
{
    return view('dashboard.teacher');
}
public function student(): View
{
    return view('dashboard.student');
}
}