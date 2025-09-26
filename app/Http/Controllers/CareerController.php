<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Post;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careers = Career::query()->where('active', '=', 1)->simplePaginate(5);
        return view('career.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Career $career)
    {
        $socials = SocialLink::all();
        $posts = Post::query()
            ->where('active', '=', 1)
            ->orderBy('published_at', 'DESC')
            ->limit(5)
            ->get();

        return view('career.show', compact('socials', 'posts', 'career'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
