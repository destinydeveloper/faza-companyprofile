<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cohensive\Embed\Facades\Embed;
use App\Models\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['video'] = Video::all();
        return view('admin.video.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'link_video' => 'required',
        ]);

        try {
            $embed_video = $this->embedVideo($request->link_video);

            Video::create([
                'link_video' => $request->link_video,
                'embed_file' => $embed_video,
            ]);

            return redirect()->route('video.index')
                             ->with(['success' => 'Data berhasil ditambahkan']);
        } catch (\Exception $e) {
            return redirect()->back()
                ->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['video'] = Video::findOrFail($id);
        return view('admin.video.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'link_video' => 'required',
        ]);

        try {
            $video = Video::findOrFail($id);

            $embed_video = $this->embedVideo($request->link_video);

            $video->update([
                'link_video' => $request->link_video,
                'embed_file' => $embed_video,
            ]);

            return redirect()->route('video.index')
                             ->with(['success' => 'Data berhasil diedit']);
        } catch (\Exception $e) {
            return redirect()->back()
                ->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Video::findOrFail($id)->delete();

            return redirect()->route('video.index')
                             ->with(['success' => 'Data berhasil dihapus']);
        } catch (\Exception $e) {
            return redirect()->back()
                ->with(['error' => $e->getMessage()]);
        }
    }

    private function embedVideo($linkVideo) {
        $embed = Embed::make($linkVideo)->parseUrl();

        if (!$embed) {
            return '';
        }

        $embed->setAttribute(['width' => '100%', 'height' => '315']);
        return $embed->getHtml();
    }


}
