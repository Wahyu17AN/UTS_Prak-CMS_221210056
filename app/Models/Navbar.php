<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_logo',
        'title_1',
        'title_2',
        'title_3',
        'title_4',
        'url',
        'image'
    ];
}
