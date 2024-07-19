<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\TitleProject;
use App\Models\Project;
use App\Models\Footer;
use App\Models\TitleFooter;
use App\Models\Navbar;

class ProjectController extends Controller
{
    public function index()
    {
        $content = TitleProject::latest()->first();
        $projects = Project::all();
        $footers = Footer::all();
        $title_footer = TitleFooter::latest()->first();
        $navbar = Navbar::latest()->first();
        return view('layouts.public.project', compact ('content', 'projects','footers','navbar','title_footer'));
    }
}
