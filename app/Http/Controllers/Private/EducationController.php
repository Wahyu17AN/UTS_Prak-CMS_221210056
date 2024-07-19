<?php

namespace App\Http\Controllers\Private;

use App\Models\Education;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EducationController extends Controller
{
    public function index(): View
    {
        $education = Education::orderBy('created_at', 'DESC')->get();
        return view('layouts.private.education.index', compact('education'));
    }

    public function create(): View
    {
        return view('layouts.private.education.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'starting_year' => 'required',
            'year_ends' => 'required',
            'school' => 'required',
            'location' => 'required',
            'graduation_status' => 'required',
            'major' => 'required',
            'description' => 'required'
        ]);

        Education::create($request->all());

        return redirect()->route('education')
                        ->with('success', 'experience created successfully.');
    }

    public function edit(string $id)
    {
        $education = Education::findOrFail($id);

        return view('layouts.private.education.edit', compact('education'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'starting_year' => 'required',
            'year_ends' => 'required',
            'school' => 'required',
            'location' => 'required',
            'graduation_status' => 'required',
            'major' => 'required',
            'description' => 'required'
        ]);

        $education = Education::findOrFail($id);

        $education->update($request->all());

        return redirect()->route('education')
                        ->with('success', 'experience updated successfully.');
    }

    public function destroy(string $id)
    {
        $education = Education::findOrFail($id);

        $education->delete();

        return redirect()->route('education')
                        ->with('success', 'Experience deleted successfully.');
    }
}
