<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PostController extends Controller
{
     public function store(Request $request){

        if ($request->image) {

            $post_image = $request->file('image');
            $name_gen = hexdec(uniqid());
            $img_extention = strtolower($post_image->getClientOriginalExtension());
            $img_name = $name_gen . '.' . $img_extention;                                  
            $upload_location = 'image/post/';
            $url = $upload_location . $img_name;
            $post_image->move($upload_location, $img_name);


            $title = $request->title;
            $description = $request->description;

            $validate_data = $request->validate([
                'description' => ['required'],
                'title' => ['required'],
            ]);

            $userId = NULL;
            Post::create([
                'title' => $validate_data['title'],
                'Description' => $validate_data['description'],
                'image' => 'http://127.0.0.1:8000/'.$url,
                'userId' => $userId,

            ]);
        } else {
            return response()->json(['success' => 'Upload a image.']);
        }
        return response()->json(['success' => 'You have successfully upload image.']);
    }

    public function view()
    {
        $data = Post::get();
        if($data) {
            return response()->json(['data'=>$data]);
        } else {
            return response()->json(['failed'=>'no data']);
        }
    }








        
        
    //     $validate_data=$request->validate([
    //         'userId'=>[''],
    //         'title'=>[''],
    //         'description'=>[''],
    //         'image'=>[''],
    //     ]);

    //     $data=post::create([
    //         'user_id'=>$validate_data['userId'],
    //         'title'=>$validate_data['title'],
    //         'Description'=>$validate_data['description'],
    //         'image'=>$validate_data['image'],
            
    //     ]);

    //     return response()->json(['data'=>$data,'status'=>'200','message'=>'post created successfully']);
    // }

    // public function view(){
    //     $getpost=post::get();

    //     if($getpost){
    //          return response()->json(['data'=>$getpost,'status'=>'200']);
    //     }
    //    else{
    //     return response()->json(['failed'=>'no data']);
    //    }
    }