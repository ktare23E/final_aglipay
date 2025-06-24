<?php

namespace App\Http\Controllers;

use App\Models\Priest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PriestController extends Controller
{
    //

    public function index(){
        $priests = Priest::all()->map(fn($priest) => [
            'first_name' => $priest->first_name,
            'last_name' => $priest->last_name,
            'address' => $priest->address,
            'position' => $priest->position,
            'dob' => $priest->dob,
            'status' => $priest->status,
            'id' => $priest->id
        ]);

        // return $priests;

        return Inertia::render('Priest/Index',[
            'priests' => $priests
        ]);
    }

    public function create(){
        return Inertia::render('Priest/Create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'position' => 'required',
            'dob' => 'required',
            'status' => 'required'
        ]);

        $priest = Priest::create($validated);
    }

    public function edit(Priest $priest){
        return Inertia::render('Priest/Edit');
    }

}
