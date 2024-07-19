<?php

namespace App\Http\Controllers\Private;

use App\Models\Languages;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LanguagesController extends Controller
{

    public function index(): View
    {
        $languages = Languages::orderBy('created_at', 'DESC')->get();
        return view('layouts.private.languages.index', compact('languages'));
    }

    public function create(): View
    {
        return view('layouts.private.languages.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'languages' => 'required',
        ]);

        Languages::create($request->all());
        return redirect()->route('languages')
                        ->with('success', 'languages created successfully.');
    }

    public function edit(string $id)
    {
        $languages = Languages::findOrFail($id);
        return view('layouts.private.languages.edit', compact('languages'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'languages' => 'required'
        ]);

        $languages = Languages::findOrFail($id);
        $languages->update($request->all());
        return redirect()->route('languages')
                        ->with('success', 'languages updated successfully.');
    }

    public function destroy(string $id)
    {
        $languages = Languages::findOrFail($id);
        $languages->delete();
        return redirect()->route('languages')
                        ->with('success', 'languages deleted successfully.');
    }
}
