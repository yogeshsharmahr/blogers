<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Str;
   
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.All_post', compact('posts'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

 
        
  
 if($request->hasFile('image')){

            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = public_path().'/images/';
            $file->move($path, $filename);
        }


            $request->validate([
            'title'=>'required',
            'body'=>'required',
            
        ]);

         $employees = new Post;
         $employees->title=$request->title;
         $employees->slug=Str::slug($request->title);
         $employees->categories=implode(',', $request->input('categories'));
        
         $employees->body=$request->body;

       if ($request->hasFile('image'))
       {
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        // echo $size = $image->getClientSize();
        // exit;
        $destinationPath = public_path('/product_image');
        $image->move($destinationPath, $name);
        $employees->image = $name;
        }
        $employees->save();
         return redirect()->back()->with('message','Post has been added successfully');
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    	$post = Post::all();
        
        return view('posts/show', compact('post'));
    }
    public function single_post( $slug)
    {
   
        $post =Post::where('slug',$slug)->get();
        return view ('posts.singlepost',compact('post'));

    }
}