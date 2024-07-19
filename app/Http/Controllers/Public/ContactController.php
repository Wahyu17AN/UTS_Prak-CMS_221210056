<?php

namespace App\Http\Controllers\Public;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Footer;
use App\Models\TitleFooter;
use App\Models\TitleContact;
use App\Models\Navbar;

class ContactController extends Controller
{
    public function index()
    {
        $footers = Footer::all();
        $navbar = Navbar::latest()->first();
        $title_footer = TitleFooter::latest()->first();
        $title_contact = TitleContact::latest()->first();
        return view('layouts.public.contact', compact('footers','navbar','title_footer','title_contact'));
    }

    public function store(Request $request)
    {
        if (empty($request->name) || empty($request->email) || empty($request->phone_number) || empty($request->guest_message)) {
            return redirect()->route('contact')->with('error', 'Tidak boleh ada inputan kosong. Semua wajib diisi!');
        }

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'guest_message' => 'required'
        ]);

        try {
            DB::beginTransaction();

            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone_number = $request->phone_number;
            $contact->guest_message = $request->guest_message;
            $contact->save();

            $this->sendEmail($request->all());

            DB::commit();
            return redirect()->route('contact_public')->with('success', 'Thank you for your message');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('contact_public')->with('error', 'Failed to send message');
        }
    }

    private function sendEmail($data)
    {
        Mail::send('email.guest', $data, function ($message) use ($data) {
            $message->to($data['email'], $data['name'])
                ->subject('Email from Guest Book');
        });
    }
}
