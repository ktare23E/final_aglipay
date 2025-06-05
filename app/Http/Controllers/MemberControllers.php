<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Inertia\Inertia;

class MemberControllers extends Controller
{
    //

    public function index(){
        $users = User::all();

        return Inertia::render('Members/Members',[
            'users' => $users
        ]);
    }

    public function viewMember(User $user){
        return Inertia::render('Members/ViewMember',[
            'user' => $user,
            'documents' => $user->documents
        ]);
    }
}
