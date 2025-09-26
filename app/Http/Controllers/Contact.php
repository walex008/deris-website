<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\HighlightSection;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class Contact extends Controller
{
    public function index(){

        $socials = SocialLink::all();
        $footer = Footer::all()->first();
        return view('contact', compact('socials', 'footer'));
    }
}
