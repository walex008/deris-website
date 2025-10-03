<?php

namespace App\View\Components;

use App\Models\Footer;
use App\Models\HighlightSection;
use App\Models\Post;
use App\Models\SocialLink;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public ?string $metaTitle = null,
                                public ?string $metaDescription = null,
                                public ?string $metaKeywords = null)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $socials = SocialLink::all();
        $blog = HighlightSection::find(4);
        $footer = Footer::all()->first();
        $posts = Post::query()
                ->where('active', '=', 1)
                ->orderBy('created_at', 'DESC')
                ->limit(2)
                ->get();
        return view('layouts.app',  compact('socials', 'footer', 'blog', 'posts'));
    }
}
