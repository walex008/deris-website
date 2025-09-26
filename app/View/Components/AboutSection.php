<?php

namespace App\View\Components;


use App\Models\PointList;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AboutSection extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $mission_list = PointList::query()->where('category', '=', 'mission')->get();
        $vision_list = PointList::query()->where('category', '=', 'vision')->get();
        $about = \App\Models\AboutSection::all()->first();
        return view('components.about-section', compact('mission_list', 'vision_list', 'about'));
    }
}
