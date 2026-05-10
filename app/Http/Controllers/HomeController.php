<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Page;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\DB;

class HomeController extends Controller{

    public function index(){
        $directory = public_path('assets/images/slider');
        $files = \File::exists($directory) ? \File::files($directory) : [];
        $aboutData = \DB::table('tblpage')->where('PageType', 'aboutus')->first();
        $contactData = \DB::table('tblpage')->where('PageType', 'contactus')->first();

        return view('index', compact('files', 'aboutData', 'contactData'));
    }

    public function aboutUs(){
        $aboutData = Page::where('PageType', 'aboutus')->first();

        return view('aboutus', compact('aboutData'));
    }

    public function contactUs(){
        $contactData = Page::where('PageType', 'contactus')->first();

        return view('contactus', compact('contactData'));
    }

    public function showGallery(){
        $directory = public_path('assets/images/gallery');
        $files = File::exists($directory) ? File::files($directory) : [];

        return view('gallery', compact('files'));
    }

    public function storeContact(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'emailid' => 'required|string',
            'mobileno' => 'required|string',
            'description' => 'required|string',
        ]);

        Contact::create([
            'fullname' => $request->fullname,
            'emailid' => $request->emailid,
            'mobileno' => $request->mobileno,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Your information successfully submitted');
    }
}