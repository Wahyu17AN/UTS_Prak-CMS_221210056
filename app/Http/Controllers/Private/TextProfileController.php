<?php

namespace App\Http\Controllers\Private;

use App\Models\TextProfile;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TextProfileController extends Controller
{

    public function index(): View
    {
        $text_profiles = TextProfile::orderBy('created_at', 'DESC')->get();
        return view('layouts.private.text_profiles.index', compact('text_profiles'));
    }

    public function create(): View
    {
        return view('layouts.private.text_profiles.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title_1' => 'required',
            'title_2' => 'required',
            'title_3' => 'required',
            'title_4' => 'required',
            'title_5' => 'required',
            'title_6' => 'required',
            'title_logo' => 'required',
            'file_document' => 'nullable|file|mimes:pdf,doc,docx,ppt,pptx,xls,xlsx|max:2048',
        ]);

        $input = $request->all();

        if ($file = $request->file('file_document')) {
            $destinationPath = 'document/';
            $fileName = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $fileName);
            $input['file_document'] = "$fileName";
        }

        TextProfile::create($input);
        return redirect()->route('text_profiles.index')
                        ->with('success', 'Text Profile created successfully.');
    }

    public function edit($id): View
    {
        $text_profile = TextProfile::findOrFail($id);
        return view('layouts.private.text_profiles.edit', compact('text_profile'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'title_1' => 'required',
            'title_2' => 'required',
            'title_3' => 'required',
            'title_4' => 'required',
            'title_5' => 'required',
            'title_6' => 'required',
            'title_logo' => 'required',
            'file_document' => 'nullable|file|mimes:pdf,doc,docx,ppt,pptx,xls,xlsx|max:2048',
        ]);

        $input = $request->all();

        if ($file = $request->file('file_document')) {
            $destinationPath = 'document/';
            $fileName = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $fileName);
            $input['file_document'] = "$fileName";
        } else {
            unset($input['file_document']);
        }

        $text_profile = TextProfile::findOrFail($id);
        $text_profile->update($input);
        return redirect()->route('text_profiles.index')
                        ->with('success', 'Text Profile updated successfully.');
    }

    public function destroy($id): RedirectResponse
    {
        $text_profile = TextProfile::findOrFail($id);
        $text_profile->delete();
        return redirect()->route('text_profiles.index')
                        ->with('success', 'Text Profile deleted successfully.');
    }
}
