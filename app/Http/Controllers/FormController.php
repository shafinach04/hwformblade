<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email'=> 'required|email',
            'age'=> 'required|numeric',
            'height'=>  'required|numeric|min:2.5|max:99.99',
            'image'=> 'required|image|max:2048'
        ]);

        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);


        return back()->with([
            'success'=> 'Form has been submitted successfully.',
            'image'=> $new_name,
            'name'=> $request->name,
            'email'=> $request->email,
            'age'=> $request->age,
            'height'=> $request->height
        ]);
    }
}