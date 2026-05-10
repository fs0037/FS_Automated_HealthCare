<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller {

    public function store(Request $request) {
        Contact::create([
            'fullname'    => $request->fullname,
            'emailid'     => $request->emailid,
            'mobileno'    => $request->mobileno,
            'description' => $request->description,
        ]);

        return back()->with('success', 'মেসেজটি সফলভাবে সেভ হয়েছে!');
    }

    public function index() {
        $queries = Contact::orderBy('id', 'desc')->get();

        return view('admin.queries', compact('queries'));
    }
}

