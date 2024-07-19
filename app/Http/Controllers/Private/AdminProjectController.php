<?php

namespace App\Http\Controllers\Private;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminProjectController extends Controller
{
    public function index(): View
    {
        $project = Project::all();
        return view('layouts.private.project.index', compact('project'));
    }

    public function create(): View
    {
        return view('layouts.private.project.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title_project' => 'required',
            'project_description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/project/';
            $projectImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $projectImage);
            $input['image'] = "$projectImage";
        }

        Project::create($input);

        return redirect()->route('project.index')
                        ->with('success', 'Home created successfully.');
    }

    public function edit(Project $project): View
    {
        return view('layouts.private.project.edit', compact('project'));
    }

    public function update(Request $request, Project $project): RedirectResponse
    {
        $request->validate([
            'title_project' => 'required',
            'project_description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/project/';
            $projectImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $projectImage);
            $input['image'] = "$projectImage";
        } else {
            unset($input['image']);
        }

        $project->update($input);

        return redirect()->route('project.index')
                        ->with('success', 'Home updated successfully.');
    }

    public function destroy(Project $project): RedirectResponse
    {
        $project->delete();

        return redirect()->route('project.index')
                        ->with('success', 'Home deleted successfully.');
    }
}
