<?php

namespace App\Models;

use Dom\Document;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DocumentType extends Model
{
    use HasFactory;


    protected $fillable = [
        'document_type'
    ];

    public function documents(){
        return $this->hasMany(Document::class);
    }
}
