<?php

namespace App\Http\Controllers\Private;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ViewMessageController extends Controller
{

    public function index(): View
    {
        $contacts = Contact::orderBy('created_at', 'DESC')->get();
        return view('layouts.private.contact.index', compact('contacts'));
    }

    public function show(string $id): View
    {
        $contact = Contact::findOrFail($id);
        return view('layouts.private.contact.show', compact('contact'));
    }

    public function destroy(string $id): RedirectResponse
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('contacts.index')
                         ->with('success', 'Contact deleted successfully.');
    }
}
