<?php

namespace App\Http\Controllers;
use App\Models\type;
use Illuminate\Http\Request;

class kacchiController extends Controller
{   

    public function store(Request $request)
    {   
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'price' => 'required'
        ]);

        type::create($request->all());

        return 'success';
        // return redirect()->route('projects.index')
        //     ->with('success', 'Project created successfully.');
    }
}
