<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'fist_name',
        'last_name',
        'gender',
        'email',
        'tel',
        'address1',
        'address2',
        'content'
    ];
}
