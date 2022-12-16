<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function showGallery()
    {
        $posts =  Post::all();
        // dd($posts);
        return view('gallery', compact('posts'),[
            'title'=>'Gallery'
        ]);
    }

    public function fileUpload(){
        return view('file-upload',[
            'title' => 'Upload'
        ]);
      }

      public function prosesFileUpload(Request $request){

        $validateData= $request->validate([
            'image' => 'required|file|image|max:5000',
            'title'=>'required', //nama dari title ini di dapat dari name di formnya
            'body' => 'required',
            'published_at' =>'required'
        ]);

        $post = new Post();
        $post->title = $request->title; //post title
        $post->body = $request->body; // post body
        $post->published_at = $request->published_at; //post published at

        $extFile = $request->image->getClientOriginalExtension();
        $namaFile = 'animal-'.time().'.'.$extFile;
        $post->image =$namaFile; // image name

        $path = $request->image->move('image', $namaFile);

        $post->save();

        $pathBaru = asset('image/'.$namaFile);
        return view('uploaded-image', [
            'title' => $post->title,
            'body' => $post->body,
            'published_at'=>$post->published_at,
            'imageName'=> $namaFile,
            'imagePath'=>$pathBaru,
            'title' => 'Upload'
            ]);
      }
}
