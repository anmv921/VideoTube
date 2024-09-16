<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class VideoController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('videos.index', ["videos" => Video::all() ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('videos.create', ["categories" => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $youtubeId = explode('?v=', $request->input('link'))[1];

        $video = Video::create([
            'title' => $request->input('title'),
            'link' => $request->input('link'),
            'view_count' => $request->input('view_count'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'id_youtube' => $youtubeId,
            'user_id' => Auth::id()
        ]);
        return redirect()->route('videos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {

        $category = Category::where('id', $video->category_id)->get()[0]->name;

        $youtubeId = explode('?v=', $video->link)[1];
        return view('videos.show')->with([
            'video' => $video,
            'youtubeId' => $youtubeId,
            'youtubeEmbedURL' => env('YOUTUBE_EMBED_URL'),
            'category' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        //
    }
}
