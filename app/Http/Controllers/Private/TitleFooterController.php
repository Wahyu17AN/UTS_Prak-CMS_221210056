<?php

namespace App\Http\Controllers\Private;

use App\Models\TitleFooter;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TitleFooterController extends Controller
{

    public function index()
    {
        $title_footer = TitleFooter::orderBy('created_at', 'DESC')->get();
        return view('layouts.private.title_footer.index', compact('title_footer'));
    }

    public function create()
    {
        return view('layouts.private.title_footer.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
        ]);

        TitleFooter::create($request->all());
        return redirect()->route('title_footer')
                        ->with('success', 'Title Footer created successfully.');
    }

    public function edit(string $id)
    {
        $title_footer = TitleFooter::findOrFail($id);
        return view('layouts.private.title_footer.edit', compact('title_footer'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $title_footer = TitleFooter::findOrFail($id);
        $title_footer->update($request->all());
        return redirect()->route('title_footer')
                        ->with('success', 'Title Footer updated successfully.');
    }

    public function destroy(string $id)
    {
        $title_footer = TitleFooter::findOrFail($id);
        $title_footer->delete();
        return redirect()->route('title_footer')
                        ->with('success', 'Title Footer deleted successfully.');
    }

}
