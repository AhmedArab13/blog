<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Http\Requests\PostRequest ;

class PostController extends Controller
{








    // public function index(){

    //     $posts = Post::all();  // object{items => array[records objects] } ---- Illuminate\Database\Eloquent\Collection
    //     // dd($posts) ;
    //     return  view('posts.index',['posts' => $posts ]);

    // }










    ///////////////  show one post  ///////////////////////

























    ////////// redirect to create form /////////////////









    // public function create()
    // {
    //     return view('posts.create') ;
    // }









//////////   store data in data base  ////////////////////









    // public function store (PostRequest $myRequestObject)

    // {






    //     $myRequestObject-> validate([

    //         'title' => 'required' ,
    //         'posted_by' => 'required' ,
    //         'description' => 'required' ,


    //     ] , [

    //         'title.required' => 'watch out the title field is empty' ,
    //         'posted_by' => 'watch out the post creator field is empty',
    //         'ddescription' => 'watch out the ddescription field is empty'

    //     ])  ;

    //     $data =  $myRequestObject->all() ;

    //     dd($data['posted_by']);

    //     hold the data from the Form using request object by the name of form input
    //     $requestdata = request();
    //     dd($requestdata->all() , $_POST); //      $request->all() =   $_POST




    //     Post::create([

    //         'title' => $data['title'] ,
    //         'description' => $data['description'] ,
    //         'posted_by' => $data['posted_by']


    //     ]);



    //     Post::create($data); // ignore token and take the properties we need

    //     return redirect()->route('posts.index') ;
    // }
}