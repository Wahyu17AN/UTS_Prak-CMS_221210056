<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return response()
     */
    public function index(): View
    {
        $home = Home::latest()->paginate(5);

        return view('homes.index',compact('home'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('homes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Home::create($input);

        return redirect()->route('home.index')
                        ->with('success','home created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home): View
    {
        return view('homes.show',compact('home'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home): View
    {
        return view('homes.edit',compact('home'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $home->update($input);

        return redirect()->route('home.index')
                        ->with('success','data has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home): RedirectResponse
    {
        $home->delete();

        return redirect()->route('home.index')
                        ->with('success','data has been deleted successfully.');
    }
}
