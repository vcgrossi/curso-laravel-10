<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Http\Request;

class Support extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'body',
        'status'
    ];
}
