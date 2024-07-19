<?php

namespace App\Http\Controllers\Private;

use App\Models\Experience;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ExperienceController extends Controller
{

    public function index(): View
    {
        $experiences = Experience::orderBy('created_at', 'DESC')->get();
        return view('layouts.private.experiences.index', compact('experiences'));
    }

    public function create(): View
    {
        return view('layouts.private.experiences.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'starting_year' => 'required',
            'year_ends' => 'required',
            'field' => 'required',
            'company' => 'required',
            'address' => 'required',
            'description' => 'required'
        ]);

        Experience::create($request->all());
        return redirect()->route('experiences')
                        ->with('success', 'experience created successfully.');
    }

    public function show(string $id)
    {
        $experiences = Experience::findOrFail($id);
        return view('layouts.private.experiences.show', compact('experience'));
    }

    public function edit(string $id)
    {
        $experiences = Experience::findOrFail($id);
        return view('layouts.private.experiences.edit', compact('experiences'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'starting_year' => 'required',
            'year_ends' => 'required',
            'field' => 'required',
            'company' => 'required',
            'address' => 'required',
            'description' => 'required'
        ]);

        $experiences = Experience::findOrFail($id);
        $experiences->update($request->all());
        return redirect()->route('experiences')
                        ->with('success', 'experience updated successfully.');
    }

    public function destroy(string $id)
    {
        $experiences = Experience::findOrFail($id);
        $experiences->delete();
        return redirect()->route('experiences')
                        ->with('success', 'Experience deleted successfully.');
    }
}
