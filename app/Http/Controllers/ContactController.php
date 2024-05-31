<?php

namespace App\Http\Controllers;

use iluminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('layouts.public.contact');
    }
}