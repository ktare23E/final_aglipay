<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    //

    protected $fillable = [
        'document_type_id',
        'user_id',
        'file_path',
        'ocr_text',
        'save_date'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function documentType(){
        return $this->belongsTo(DocumentType::class);
    }
}
