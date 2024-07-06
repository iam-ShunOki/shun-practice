<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Thread;
use App\Models\Author;

class ThreadController extends Controller
{
    public function index()
    {
        return Inertia::render('ThreadApp', [
            'threads' => Thread::get(),
            'authors' => Author::get(),
        ]);
    }
}
