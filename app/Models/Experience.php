<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'starting_year',
        'year_ends',
        'field',
        'company',
        'address',
        'description'
    ];
}
