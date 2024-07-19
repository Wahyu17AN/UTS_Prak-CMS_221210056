<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Home;
use App\Models\SocialMedia;
use App\Models\Footer;
use App\Models\TitleFooter;
use App\Models\Navbar;


class PublicHomeController extends Controller
{
    public function index ()
    {
        $content = Home::latest()->first();
        $socialMedia = SocialMedia::all();
        $footers = Footer::all();
        $title_footer = TitleFooter::latest()->first();
        $navbar = Navbar::latest()->first();


        return view('layouts.public.home', compact('content','socialMedia','footers','navbar','title_footer'));
    }
}
