<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;
use App\Models\Like;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */






     
    //  public function index()
    //  {
    //      $posts = Post::with(['user', 'likes', 'comments.user'])->withCount(['likes', 'comments'])->latest()->get();
 
    //      return view('home', compact('posts'));
    //  }




    public function index(Request $request)
{
         
        // Retrieve all the unique categories from the database
        $categories = Post::distinct()->get(['category']);

     
         
        if ($request->has('category')) {
            $category = $request->input('category');
    
            $posts = Post::with(['user', 'likes', 'comments.user'])
                         ->withCount(['likes', 'comments'])
                         ->where('category', 'like', '%'.$category.'%')
                         ->latest()
                         ->get();
    
            return view('posts', compact('posts', 'category'));}
    elseif ($request->has('query')) {
        $query = $request->input('query');
        $posts = Post::with(['user', 'likes', 'comments.user'])
                     ->withCount(['likes', 'comments'])
                     ->where('content', 'like', '%'.$query.'%')
                    //  ->orWhereHas('category', function($q) use ($query) {
                    //      $q->where('name', 'like', '%'.$query.'%');
                    //  })
                     ->latest()
                     ->get();
        return view('search', compact('posts', 'query'));
    } else {
        $user = auth()->user();
        $postsCount = Post::where('user_id', $user->id)->count();
        $posts = Post::with(['user', 'likes', 'comments.user'])
                     ->withCount(['likes', 'comments'])
                     ->latest()
                     ->get();
        return view('home', compact('posts','postsCount'))->with('sidebarCategories', $categories);
    }
}









    // public function index()
    // {
    //     $posts = DB::table('posts')
    //         ->join('users', 'posts.user_id', '=', 'users.id')
    //         ->leftJoin('likes', 'posts.id', '=', 'likes.post_id')
    //         ->leftJoin('comments', 'posts.id', '=', 'comments.post_id')
    //         ->select('posts.content', 'posts.created_at', 'posts.id', 'posts.category', 'posts.image', 'users.name', 
    //             DB::raw('count(likes.id) as likes_count'), DB::raw('count(comments.id) as comments_count'))
    //         ->groupBy('posts.content', 'posts.created_at', 'posts.id', 'posts.category', 'posts.image', 'users.name')
    //         ->orderByDesc('posts.created_at')
    //         ->get();

    //     return view('home', compact('posts'));
    // }
    
     


    // public function index()
    // {
 
    //     $posts = DB::table('posts')
    //     ->join('users', 'posts.user_id', '=', 'users.id')
    //     ->select('posts.content', 'posts.created_at','posts.id', 'posts.category', 'posts.image', 'users.name')
    //     ->orderByDesc('posts.created_at')
    //     ->get();
    

    //     return view('home', compact('posts'));
    //     // return view('home', ['posts' => $posts]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'required|max:255',
            'image' => 'nullable|image|max:2048',
            'category' => 'required|max:255',
        ]);
    
        $post = new Post;
        $post->content = $validatedData['content'];
        $post->category = $validatedData['category'];
        $post->user_id = Auth::id();
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/images', $filename);
            $post->image = $filename;
        }
    
        $post->save();
    
        return redirect('/')->with('success', 'Post created successfully!');
    }


    public function storeComment(Request $request, $postId)
    {
        // dd('storeComment method called');
        $validatedData = $request->validate([
            'content' => 'required|max:255',
        ]);

        $comment = new Comment;
        $comment->content = $validatedData['content'];
        $comment->post_id = $postId;
        $comment->user_id = Auth::id();
        $comment->save();

        return redirect()->back()->with('success', 'Comment added successfully!');
    }

    public function storeLike(Request $request, $postId)
    {
        $like = new Like;
        $like->post_id = $postId;
        $like->user_id = Auth::id();
        $like->save();

        return redirect()->back()->with('success', 'Like added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */

     public function show(Post $post)
     {
        $post->load(['user', 'likes', 'comments.user']);

        return view('post', compact('post'));
     
        //  return view('post', compact('post', 'comments', 'likes'));
     }


     public function search(Request $request)
     {
        if($request->has('query')){

      
         $query = $request->input('query');
         $posts = Post::where('content', 'like', '%'.$query.'%')
                    //  ->orWhereHas('category', function($q) use ($query) {
                    //      $q->where('name', 'like', '%'.$query.'%');
                    //  })
                     ->get();
         return view('search', compact('posts', 'query'));
          }elseif($request->has('category')){
            $category = $request->input('category');
            $posts = Post::where('category', 'like', '%'.$category.'%')
                       //  ->orWhereHas('category', function($q) use ($query) {
                       //      $q->where('name', 'like', '%'.$query.'%');
                       //  })
                        ->get();
            return view('posts', compact('posts', 'category'));
          }
     }
     
     



//      public function search(Request $request)
// {
//     $query = $request->input('query');
//     $posts = Post::where('content', 'like', '%'.$query.'%')
//                 //  ->orWhere('body', 'like', '%'.$query.'%')
//                  ->orWhereHas('category', function($q) use ($query) {
//                      $q->where('name', 'like', '%'.$query.'%');
//                  })
//                  ->get();
//     return view('posts.index', compact('posts'));
// }



    // public function show(Post $post)
    // {   
    //     $comments = DB::table('comments')
    //     ->join('users', 'comments.user_id', '=', 'users.id')
    //     ->select('comments.id', 'comments.content', 'comments.created_at', 'users.name')
    //     ->where('comments.post_id', '=', $post->id)
    //     ->orderBy('created_at', 'DESC')
    //     ->get();

    // $likes = DB::table('likes')
    //     ->join('users', 'likes.user_id', '=', 'users.id')
    //     ->select('likes.id', 'users.name')
    //     ->where('likes.post_id', '=', $post->id)
    //     ->get();

    // return view('post', compact('post', 'comments', 'likes'));
    
    //     // return view('home', compact('post', 'comments', 'likes'));

    //     // return view('post.show', compact('post', 'comments', 'likesCount'));
    // }
    
//     public function showPost($id)
// {
//     $post = Post::findOrFail($id);

//     return view('post.show', ['post' => $post, 'postId' => $id]);
// }
// public function show($postId)
// {
//     $post = Post::findOrFail($postId);
//     $comments = $post->comments()->with('user')->get();
//     return view('posts.show', compact('post', 'comments'));
// }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $post = Post::find($id);
    $post->delete();

    return redirect()->back()->with('success', 'Deleted successfully!');
    }
}
