<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

// class latihan_controller extends Controller
// {
//     public function showMyName()
//     {
//         $myname = [
//             "name" => "arjoarun",
//             "alamat" => "dusun waru",
//         ];

//         return view('latihan.myname', ['data' => $myname]);
//     }
// }

class latihan_controller extends Controller
{
    public function index(){
        return view('index');
    }


    public function store(Request $request) {

        $data = [
            'title'=> $request->title,
            'description' => $request->description,
            'photo' => $request->photo,
            'is_active' => $request->is_active,
        ];
        Post::create($data);
    }
    

}
