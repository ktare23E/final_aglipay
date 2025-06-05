<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\DocumentType;

class DocumentTypeController extends Controller
{
    //

    public function index(){
        $document_types = DocumentType::all();

        return Inertia::render('DocumentType/Index',[
            'document_types' => $document_types
        ]);
    }


    public function create(){
        return Inertia::render('DocumentType/Create');
    }

    public function store(Request $request){
        $request->validate([
            'document_type' => 'required|string|max:255',
        ]);

        DocumentType::create($request->all());
    }
}
