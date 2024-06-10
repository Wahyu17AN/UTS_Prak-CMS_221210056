<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index ()
    {
        $content = Home::latest()->first();
        return view('layouts.public.home', compact('content'));
    }
}
