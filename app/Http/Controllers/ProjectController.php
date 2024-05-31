<?php

namespace App\Http\Controllers;

use iluminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('layouts.public.project');
    }
}