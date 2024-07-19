<?php

namespace App\Http\Controllers\Private;

use App\Models\Navbar;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NavbarController extends Controller
{

    public function index(): View
    {
        $navbar = Navbar::all();
        return view('layouts.private.navbar.index', compact('navbar'));
    }

    public function create(): View
    {
        return view('layouts.private.navbar.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title_logo' => 'required',
            'title_1' => 'required',
            'title_2' => 'required',
            'title_3' => 'required',
            'title_4' => 'required',
            'url' => 'required|url|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/navbar/';
            $navbarImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $navbarImage);
            $input['image'] = "$navbarImage";
        }

        Navbar::create($input);
        return redirect()->route('navbar.index')
                        ->with('success', 'Navbar created successfully.');
    }

    public function edit(Navbar $navbar): View
    {
        return view('layouts.private.navbar.edit', compact('navbar'));
    }

    public function update(Request $request, Navbar $navbar): RedirectResponse
    {
        $request->validate([
            'title_logo' => 'required',
            'title_1' => 'required',
            'title_2' => 'required',
            'title_3' => 'required',
            'title_4' => 'required',
            'url' => 'required|url|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/navbar/';
            $navbarImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $navbarImage);
            $input['image'] = "$navbarImage";
        } else {
            unset($input['image']);
        }

        $navbar->update($input);
        return redirect()->route('navbar.index')
                        ->with('success', 'Navbar updated successfully.');
    }

    public function destroy(Navbar $navbar): RedirectResponse
    {
        $navbar->delete();
        return redirect()->route('navbar.index')
                        ->with('success', 'Navbar deleted successfully.');
    }
}
