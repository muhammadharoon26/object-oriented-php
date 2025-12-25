<?php

namespace App\Http\Controllers;

class FruitController extends Controller
{
    public function index()
    {
        $fruits = ['Apple', 'Banana'];
        return view('fruits', compact('fruits'));
    }
}
