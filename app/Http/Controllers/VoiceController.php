<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voice;

class VoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //return response(Voice::all());
      return response()->json([
        'success'=>true,
        'data'=>Voice::where('tag_id', 1)->get()
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // POST
      if ($request->isMethod('POST')) {
        // 保存
        $content = $request->content;
        $voice = Voice::create(['tag_id'=>1, 'type'=>'comment', 'content' => $content, 'path'=>'-']);

        //foreach ($request->file('files') as $index=> $e) {
        // $file = $request->file('photo');
        //   $ext = $file->guessExtension();
        //   $filename = "{'sample'}.{$ext}";
        //   $path = $file->storeAs('photos', $filename);
        // photosメソッドにより、商品に紐付けられた画像を保存する
        //$item->photos()->create(['path'=> $path]);
        //}
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
