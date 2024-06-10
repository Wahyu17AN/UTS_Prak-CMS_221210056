<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_1',
        'title_2',
        'title_3',
        'button_left',
        'button_right',
        'about_me_title',
        'about_me_description',
        'image'
    ];
}
