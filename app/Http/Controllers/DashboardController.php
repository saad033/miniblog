<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\facades\DB;


class DashboardController extends Controller
{
    //
    public function showPost()
    {
        // The Below is for ORM
        $posts= Post::all();
        return view('dashboard',['posts'=>$posts]);
        
        // The below method is One to many relation ship by using Query Builder
        // $posts = DB::table('posts')
        // ->join('users','posts.user_id','=', 'users.id')
        // ->get();
        // return view('dashboard',['posts'=>$posts]);
    }

}
