<?php

namespace App\Http\Controllers\Private;

use App\Models\SocialMedia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SocialMediaController extends Controller
{
    public function index()
    {
        $socialMedia = SocialMedia::all();
        return view('layouts.private.social_media.index', compact('socialMedia'));
    }

    public function create()
    {
        return view('layouts.private.social_media.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url|max:255'
        ]);

        SocialMedia::create($request->all());
        return redirect()->route('social_media.index')->with('success', 'Social Media link added successfully');
    }

    public function edit(SocialMedia $socialMedia)
    {
        return view('layouts.private.social_media.edit', compact('socialMedia'));
    }

    public function update(Request $request, SocialMedia $socialMedia)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url|max:255'
        ]);

        $socialMedia->update($request->all());

        return redirect()->route('social_media.index')->with('success', 'Social Media link updated successfully');
    }

    public function destroy(SocialMedia $socialMedia)
    {
        $socialMedia->delete();
        return redirect()->route('social_media.index')->with('success', 'Social Media link deleted successfully');
    }
}
