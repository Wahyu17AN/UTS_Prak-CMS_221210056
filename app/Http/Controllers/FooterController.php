<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Footer;
 
class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $footer = Footer::orderBy('created_at', 'DESC')->get();
  
        return view('footers.index', compact('footer'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('footers.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Footer::create($request->all());
 
        return redirect()->route('footers')->with('success', 'Footer added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $footer = Footer::findOrFail($id);
  
        return view('footers.show', compact('footer'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $footer = Footer::findOrFail($id);
  
        return view('footers.edit', compact('footer'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $footer = Footer::findOrFail($id);
  
        $footer->update($request->all());
  
        return redirect()->route('footers')->with('success', 'footer updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $footer = Footer::findOrFail($id);
  
        $footer->delete();
  
        return redirect()->route('footers')->with('success', 'footer deleted successfully');
    }
}