<?php

namespace App\Http\Controllers;

use App\Models\Yasuto;
use Illuminate\Http\Request;
use Inertia\Inertia;

class YasutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('HomeApp',[
                'yasuto' => Yasuto::get(),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Yasuto $yasuto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Yasuto $yasuto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Yasuto $yasuto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Yasuto $yasuto)
    {
        //
    }
}
