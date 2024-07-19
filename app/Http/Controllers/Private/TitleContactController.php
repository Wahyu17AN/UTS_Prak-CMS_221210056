<?php

namespace App\Http\Controllers\Private;

use App\Models\TitleContact;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TitleContactController extends Controller
{

    public function index(): View
    {
        $title_contact = TitleContact::orderBy('created_at', 'DESC')->get();
        return view('layouts.private.title_contact.index', compact('title_contact'));
    }

    public function create(): View
    {
        return view('layouts.private.title_contact.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title_logo' => 'required',
            'title_1' => 'required',
            'title_2' => 'required',
            'title_3' => 'required',
            'title_4' => 'required',
            'title_5' => 'required',
            'title_6' => 'required',
            'title_7' => 'required',
        ]);

        TitleContact::create($request->all());
        return redirect()->route('title_contact')
                        ->with('success', 'Title Contact created successfully.');
    }

    public function edit(string $id)
    {
        $title_contact = TitleContact::findOrFail($id);
        return view('layouts.private.title_contact.edit', compact('title_contact'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title_logo' => 'required',
            'title_1' => 'required',
            'title_2' => 'required',
            'title_3' => 'required',
            'title_4' => 'required',
            'title_5' => 'required',
            'title_6' => 'required',
            'title_7' => 'required',
        ]);

        $title_contact = TitleContact::findOrFail($id);
        $title_contact->update($request->all());
        return redirect()->route('title_contact')
                        ->with('success', 'Title Contact updated successfully.');
    }

    public function destroy(string $id)
    {
        $title_contact = TitleContact::findOrFail($id);
        $title_contact->delete();
        return redirect()->route('title_contact')
                        ->with('success', 'Title Contact deleted successfully.');
    }
}
