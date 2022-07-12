<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Post::all();
        return view('post.index', compact('rows'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
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
                'post_id_cat' => 'required',
                'post_title' => 'required',
            ],
            [
                'post_id_cat.required' => 'Id Kategori Post wajib diisi',
                'post_title.required' => 'Judul Post Wajib diisi',             
            ]
        );

       post::create([
            'post_id_cat' => $request->post_id_cat,
            'post_title' => $request->post_title,
        ]);

        return redirect('post');
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
        $row = post::findOrFail($id);
        return view('post.edit', compact('row'));
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
                'post_id_cat' => 'required',
                'post_title' => 'required',
            ],
            [
                'post_id_cat.required' => 'Id Kategori Post wajib diisi',
                'post_title.required' => 'Judul Post Wajib diisi',             
            ]
        );

        $row = post::findOrFail($id);
        $row->update([
            'post_id_cat' => $request->post_id_cat,
            'post_title' => $request->post_title,

        ]);

        return redirect('post');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = post::findOrFail($id);
        $row->delete();

        return redirect('post');
    }
}
