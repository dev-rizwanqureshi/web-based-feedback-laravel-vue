<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class InertiaPageController extends Controller
{
    public function login()
    {
        return Inertia::render('Auth/login');
    }

    public function register()
    {
        return Inertia::render('Auth/register');
    }

    public function index()
    {
        return Inertia::render('index');
    }
    public function feedback()
    {
        return Inertia::render('feedback');
    }

    public function feedbackView($id)
    {
        return Inertia::render('feedbackView');
    }

}
