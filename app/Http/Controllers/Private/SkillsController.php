<?php

namespace App\Http\Controllers\Private;

use App\Models\Skills;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SkillsController extends Controller
{

    public function index(): View
    {
        $skills = Skills::orderBy('created_at', 'DESC')->get();
        return view('layouts.private.skills.index', compact('skills'));
    }

    public function create(): View
    {
        return view('layouts.private.skills.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'skills' => 'required',
        ]);

        Skills::create($request->all());
        return redirect()->route('skills')
                        ->with('success', 'experience created successfully.');
    }

    public function edit(string $id)
    {
        $skills = Skills::findOrFail($id);
        return view('layouts.private.skills.edit', compact('skills'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'skills' => 'required'
        ]);

        $skills = Skills::findOrFail($id);
        $skills->update($request->all());
        return redirect()->route('skills')
                        ->with('success', 'experience updated successfully.');
    }

    public function destroy(string $id)
    {
        $skills = Skills::findOrFail($id);
        $skills->delete();
        return redirect()->route('skills')
                        ->with('success', 'Experience deleted successfully.');
    }
}
