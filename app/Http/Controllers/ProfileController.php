<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    Public function index()
    {
        return view('layouts.public.profile');
    }
}