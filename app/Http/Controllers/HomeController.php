<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest ;
use App\Models\Post ;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */



    public function index()
    {


        $posts = Post::all();

        return view('home' ,['posts'  => $posts ]);
    }

    public function show ($id)
    {


        if ($id)
        {
            // $posts = Post::find($id);
        // $posts = Post::where('id',$id)  (not work) (عشان مش عارف امته هتخلص جملة هوير ك سيكول )
        // $posts = Post::where('id',$id)->where('title',"javascript")->where('created_at',".....")
        // first()  (finish sql statment but retrieve the first record that has the conditions (Limit 1))

        $posts = Post::where('id',$id)->first()  ;


        // $posts = Post::where('title','javascript')->get()  ; ( get() retreive all records that have the conditions )
        // dd($posts);
        // dd( Post::where('id',$id) )->first() ;

         return  view('posts.show',['posts' => $posts ]);

         //  $posts = Post::all();
        //  return  view('posts.show',['posts' => $posts[$id-1] ]);
        }

        else
        {
            return view('posts.create') ;
        }

    }






    public function create()
    {
        return view('posts.create') ;
    }








    public function store (PostRequest $myRequestObject)

    {






        // $myRequestObject-> validate([

        //     'title' => 'required' ,
        //     'posted_by' => 'required' ,
        //     'description' => 'required' ,


        // ] , [

        //     'title.required' => 'watch out the title field is empty' ,
        //     'posted_by' => 'watch out the post creator field is empty',
        //     'ddescription' => 'watch out the ddescription field is empty'

        // ])  ;

        $data =  $myRequestObject->all() ;

        // dd($data['posted_by']);

        // hold the data from the Form using request object by the name of form input
        // $requestdata = request();
        // dd($requestdata->all() , $_POST);
         //      $request->all() =   $_POST




        // Post::create([

        //     'title' => $data['title'] ,
        //     'description' => $data['description'] ,
        //     'posted_by' => $data['posted_by']


        // ]);



        Post::create($data); // ignore token and take the properties we need

        return redirect()->route('posts.index') ;
    }





public function edit ($id)
{

    $post = Post::where('id',$id)->first()  ;

    // dd($post);

    return view('posts.edit',['post'  => $post ]);

}


 public function update(Request $request, $id)
 {
    // Step 1: Retrieve the record

    $post = Post::findOrFail($id); // Assuming you are editing a post with ID $id

    // Step 2: Update the record
    $post->title = $request->input('title');
    $post->description = $request->input('description');

    // Add more fields as needed

    // Step 3: Save the changes
    $post->save();

     return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }







    public function destroy($id)
    {
        // Step 1: Retrieve the record
        $post = Post::findOrFail($id); // Assuming you are deleting a post with ID $id

        // Step 2: Delete the record
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    }

}