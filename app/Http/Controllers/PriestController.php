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
            'email' => $priest->email,
            'address' => $priest->address,
            'dob' => $priest->dob,
            'id' => $priest->id
        ]);


        return Inertia::render('Priest/Index',[
            'priests' => $priests
        ]);
    }
}
