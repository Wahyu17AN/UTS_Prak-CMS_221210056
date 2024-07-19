<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'starting_year',
        'year_ends',
        'school',
        'location',
        'graduation_status',
        'major',
        'description'
    ];
}
