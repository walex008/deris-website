<?php

namespace App\Http\Controllers;


use App\Models\PointList;
use Illuminate\Http\Request;

class AboutPage extends Controller
{
    public function index(){

        $about = \App\Models\AboutPage::first();
        $mission_list = PointList::query()->where('category', '=', 'mission')->get();
        $vision_list = PointList::query()->where('category', '=', 'vision')->get();
        return view('about', compact('about', 'mission_list', 'vision_list'));
    }
}
