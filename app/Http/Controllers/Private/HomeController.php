<?php

namespace App\Http\Controllers\Private;

use App\Models\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $homes = Home::all();
        return view('layouts.private.homes.index', compact('homes'));
    }

    public function create(): View
    {
        return view('layouts.private.homes.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title_1' => 'required',
            'title_2' => 'required',
            'title_3' => 'required',
            'button_left' => 'required',
            'button_right' => 'required',
            'about_me_title' => 'required',
            'about_me_description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/home/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Home::create($input);
        return redirect()->route('home.index')
                        ->with('success', 'Home created successfully.');
    }

    public function edit(Home $home): View
    {
        return view('layouts.private.homes.edit', compact('home'));
    }

    public function update(Request $request, Home $home): RedirectResponse
    {
        $request->validate([
            'title_1' => 'required',
            'title_2' => 'required',
            'title_3' => 'required',
            'button_left' => 'required',
            'button_right' => 'required',
            'about_me_title' => 'required',
            'about_me_description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/home/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $home->update($input);
        return redirect()->route('home.index')
                        ->with('success', 'Home updated successfully.');
    }

    public function destroy(Home $home): RedirectResponse
    {
        $home->delete();
        return redirect()->route('home.index')
                        ->with('success', 'Home deleted successfully.');
    }
}
