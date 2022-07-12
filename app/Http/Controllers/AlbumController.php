<?php

namespace App\Http\Controllers;
use App\Models\Album;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Album::all();
        return view('album.index', compact('rows'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('album.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'album_id_photo' => 'required',
                'album_title' => 'required',
            ],
            [
                'album_id_photo.required' => 'Id Photo Album wajib diisi',
                'album_title.required' => 'Judul Album Wajib diisi',        
            ]
        );

       album::create([
            'album_id_photo' => $request->album_id_photo,
            'album_title' => $request->album_title,
        ]);

        return redirect('album');
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
        $row = album::findOrFail($id);
        return view('slbum.edit', compact('row'));
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
        $request->validate(
            [
                'album_id_photo' => 'required',
                'album_title' => 'required',
            ],
            [
                'album_id_photo.required' => 'Id Photo Album wajib diisi',
                'album_title.required' => 'Judul Album Wajib diisi',        
            ]
        );

        $row = album::findOrFail($id);
        $row->update([
            'album_id_photo' => $request->album_id_photo,
            'album_title' => $request->album_title,
        ]);

        return redirect('album');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = album::findOrFail($id);
        $row->delete();

        return redirect('album');
    }
}
