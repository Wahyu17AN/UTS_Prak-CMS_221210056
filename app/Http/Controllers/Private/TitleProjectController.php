<?php

namespace App\Http\Controllers\Private;

use App\Models\TitleProject;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TitleProjectController extends Controller
{
    public function index(): View
    {
        $title_project = TitleProject::orderBy('created_at', 'DESC')->get();
        return view('layouts.private.title_project.index', compact('title_project'));
    }

    public function create(): View
    {
        return view('layouts.private.title_project.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title_1' => 'required',
            'title_2' => 'required',
            'title_3' => 'required'
        ]);

        TitleProject::create($request->all());
        return redirect()->route('title_project')
                        ->with('success', 'Title Project created successfully.');
    }

    public function edit(string $id)
    {
        $title_project = TitleProject::findOrFail($id);
        return view('layouts.private.title_project.edit', compact('title_project'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title_1' => 'required',
            'title_2' => 'required',
            'title_3' => 'required'
        ]);

        $title_project = TitleProject::findOrFail($id);
        $title_project->update($request->all());
        return redirect()->route('title_project')
                        ->with('success', 'Title Project updated successfully.');
    }

    public function destroy(string $id)
    {
        $title_project = TitleProject::findOrFail($id);
        $title_project->delete();
        return redirect()->route('title_project')
                        ->with('success', 'Title Project deleted successfully.');
    }
}
