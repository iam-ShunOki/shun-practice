<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Author;
use App\Models\Thread;

class AcallController extends Controller
{
    public function index(){
        return Inertia::render('AcallApp', [
            'authors' => Author::get(),
            'threads' => Thread::get(),
        ]);
    }
}
