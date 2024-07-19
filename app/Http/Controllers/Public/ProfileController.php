<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\TextProfile;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Skills;
use App\Models\Languages;
use App\Models\Footer;
use App\Models\TitleFooter;
use App\Models\Navbar;

class ProfileController extends Controller
{
    Public function index()
    {
        $content = TextProfile::latest()->first();
        $experiences = Experience::all();
        $education = Education::all();
        $skills = Skills::all();
        $languages = Languages::all();
        $footers = Footer::all();
        $title_footer = TitleFooter::latest()->first();
        $navbar = Navbar::latest()->first();

        return view('layouts.public.profile', compact ('content', 'experiences', 'education', 'skills', 'languages','footers','navbar','title_footer'));
    }
}
