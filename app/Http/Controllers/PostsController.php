<?php

namespace App\Http\Controllers;

use App\Subcategory;
use App\Category;
use App\search;
use Artesaos\SEOTools\Facades\SEOMeta;
use Request;
use Session;
use App\Http\Requests;
use App\Http\Requests\CreatePostRequest;
use App\Post;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;
use DB;
use App\Quotation;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only'=>'create']);
    }

    public function index(){
        SEOMeta::setTitle('OLY');
        $posts = Post::latest()->get();
        return view('posts.index')->with('posts',$posts);
    }
    
    public function show($id){
        $post = Post::findOrFail($id);
        SEOMeta::setTitle(__('mesages.ad')." : ".$post->title);
        $post->views++;
        $post->save();

        $posts = DB::table('posts')->get();
        $ilepost = count($posts);

        $kategorie = DB::table('categories')->get();
        $ilekat = count($kategorie);

        $uzytkownik = DB::table('users')->get();
        $ileus = count($uzytkownik);

        $katbuty = DB::select('SELECT * FROM `subcategories` INNER JOIN categories on subcategories.category_id = categories.id WHERE categories.name="buty"');
        $ileKatBut = count($katbuty);

        $elektronika = DB::select('SELECT * FROM `subcategories` INNER JOIN categories on subcategories.category_id = categories.id WHERE categories.name="elektronika"');
        $ileel = count($elektronika);

        $motor = DB::select('SELECT * FROM `subcategories` INNER JOIN categories on subcategories.category_id = categories.id WHERE categories.name="motoryzacja"');
        $ilemot = count($motor);

        return view('posts.show')->with('post',$post)
        ->with('ilepost',$ilepost)
        ->with('ilekat',$ilekat)
        ->with('ileus',$ileus)
        ->with('buty',$ileKatBut)
        ->with('elektronika',$ileel)
        ->with('motoryzacja',$ilemot);
    }

    public function create(){
        SEOMeta::setTitle(__('mesages.createAds'));
        $categories = Category::with(['subcategories'])->get();
        return view('posts.create')->with('categories',$categories);
    }

    public function store(CreatePostRequest $request){
        $post = new Post($request->all());
        Auth::user()->posts()->save($post);
        Session::flash('post_created','Ogłoszenie zostało dodane!');
        return redirect('posts');
    }

    public function edit($id){
        SEOMeta::setTitle(__('mesages.editAds'));
        $post = Post::findOrFail($id);
        if(Auth::id() == $post->user_id){
        $post = Post::findOrFail($id);
        $categories = Category::with(['subcategories'])->get();
        return view('posts.edit')->with('post',$post)->with('categories',$categories);
        }else return redirect('posts');
    }

    public function destroy($id)
    {
        $post = Post::find($id);

        //Check if post exists before deleting
        if (!isset($post)){
            return redirect('/posts')->with('error', 'No Post Found');
        }

        // Check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }

        $post->delete();
        return redirect('/posts')->with('success', 'Post Removed');
    }

    public function update($id, CreatePostRequest $request){
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect('posts/'.$id);
    }

    public function own(){
        SEOMeta::setTitle(__('mesages.myAds'));
        $id = Auth::id();
        $posts = Post::where('user_id',$id)->get();
        return view('posts.own')->with('posts',$posts);
    }

    public function search(){
        $search = Request::get('search');
        $test = DB::table('posts')->where('name','like','%'.$search.'%');
        echo '<scirpt>alert(1);</script>';
        return view('posts.search',['test'=>$test]);
    }

    public function list(){
        return Post::all();
    }

}
