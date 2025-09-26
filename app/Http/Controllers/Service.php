<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\Feature;
use App\Models\HighlightSection;
use App\Models\PointList;
use Illuminate\Http\Request;

class Service extends Controller
{
    public function index(){

        $first_section = HighlightSection::find(2);
        $second_section = HighlightSection::find(5);
        $about_section = AboutSection::first();
        $features = Feature::query()->where('is_active', '=', 1)->get();
        $point_list = PointList::query()->where('category', '=', 'service')->get();
        return view('services', compact('first_section', 'about_section', 'second_section', 'features', 'point_list'));
    }
}
