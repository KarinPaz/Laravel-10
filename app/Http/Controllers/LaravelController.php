<?php

namespace App\Http\Controllers;

use App\Models\Laravel;

class LaravelController extends Controller
{
    public function index()
    {
        
        $registro = Laravel::orderBy('id')->get();

        return view('laravel.index', compact('registro'));
    }
    
      public function show($id)
    {
        $registro = Laravel::findOrFail($id);
        return view('laravel.show', compact('registro'));
    }
}
