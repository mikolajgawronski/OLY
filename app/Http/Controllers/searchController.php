<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\search;

class searchController extends Controller
{
    public function index(Request $req){
        $posts = DB::table('posts')->paginate(5);
        return view('posts.index',['posts'=>$posts]);
}
