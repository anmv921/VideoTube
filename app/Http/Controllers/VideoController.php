<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

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
        return view('videos.create');
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
            'id_user' => 0
        ]);
        return redirect()->route('videos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        $youtubeId = explode('?v=', $video->link)[1];
        return view('videos.show')->with([
            'video' => $video,
            'youtubeId' => $youtubeId,
            'youtubeEmbedURL' => env('YOUTUBE_EMBED_URL')
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
