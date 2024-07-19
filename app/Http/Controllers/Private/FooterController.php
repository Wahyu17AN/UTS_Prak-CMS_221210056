<?php

namespace App\Http\Controllers\Private;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    public function index()
    {
        $footers = Footer::all();
        return view('layouts.private.footers.index', compact('footers'));
    }

    public function create()
    {
        return view('layouts.private.footers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url|max:255'
        ]);
        Footer::create($request->all());
        return redirect()->route('footers.index')->with('success', 'Footer added successfully');
    }

    public function edit(Footer $footer)
    {
        return view('layouts.private.footers.edit', compact('footer'));
    }

    public function update(Request $request, Footer $footer)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url|max:255'
        ]);

        $footer->update($request->all());
        return redirect()->route('footers.index')->with('success', 'Footer updated successfully');
    }

    public function destroy(Footer $footer)
    {
        $footer->delete();
        return redirect()->route('footers.index')->with('success', 'Footer deleted successfully');
    }
}
