<?php

namespace App\Http\Controllers;

use App\Filament\Resources\Testimonials\Schemas\TestimonialForm;
use App\Models\AboutSection;
use App\Models\Achievement;
use App\Models\Feature;
use App\Models\Footer;
use App\Models\Hero;
use App\Models\HighlightSection;
use App\Models\PointList;
use App\Models\SocialLink;
use App\Models\Tagline;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class Homepage extends Controller
{
    public function index(){
        $hero = Hero::all()->first();
        $features = Feature::query()->where('is_active', '=', 1)->get();
        $achievements = Achievement::all();
        $testimonials = Testimonial::all();
        $taglines = Tagline::all();
        $value = HighlightSection::all()->first();
        $service = HighlightSection::find(2);
        $testimonial = HighlightSection::find(3);

        return view('home', compact('hero','features',
                    'achievements', 'testimonials', 'taglines', 'value', 'service','testimonial'));
    }

}
