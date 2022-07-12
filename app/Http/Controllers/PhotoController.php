<?php

namespace App\Http\Controllers;
use App\Models\Photo;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Photo::all();
        return view('photo.index', compact('rows'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photo.create');
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
                'photo_id_post' => 'required',
                'photo_title' => 'required',
                'photo_file' => 'required',
            ],
            [
                'photo_id_post.required' => 'Id Post Photo wajib diisi',
                'photo_title.required' => 'Judul Photo Wajib diisi',
                'photo_file.required' => 'File Photo wajib diisi',       
            ]
        );

       photo::create([
            'photo_id_post' => $request->photo_id_post,
            'photo_title' => $request->photo_title,
            'photo_file' => $request->photo_file,
        ]);

        return redirect('photo');
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
        $row = photo::findOrFail($id);
        return view('photo.edit', compact('row'));
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
                'photo_id_post' => 'required',
                'photo_title' => 'required',
                'photo_file' => 'required',
            ],
            [
                'photo_id_post.required' => 'Id Post Photo wajib diisi',
                'photo_title.required' => 'Judul Photo Wajib diisi',
                'photo_file.required' => 'File Photo wajib diisi',       
            ]
        );

        $row = photo::findOrFail($id);
        $row->update([
            'photo_id_post' => $request->photo_id_post,
            'photo_title' => $request->photo_title,
            'photo_file' => $request->photo_file,

        ]);

        return redirect('photo');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = photo::findOrFail($id);
        $row->delete();

        return redirect('photo');
    }
}
