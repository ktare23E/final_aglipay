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
}
