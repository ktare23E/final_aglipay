<?php

namespace App\Models;

use Dom\Document;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Hash;

class DocumentType extends Model
{
    use HasFactory;


    protected $fillable = [
        'document_type'
    ];

    // public function setDocumentTypeAttribute($value){
    //     $this->attributes['document_type'] = 'testing';
    // }

    public function documents(){
        return $this->hasMany(Document::class);
    }
}
