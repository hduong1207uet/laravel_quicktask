<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentFormRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();

        return view('comments.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $postIds = DB::table('posts')->select('id')->get();
        
        return view('comments.create' ,compact('postIds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentFormRequest $request)
    {
        Comment::create($request->all());

        return redirect(route('comments.index'))->with('success', __("comment_created"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Display the specified post contain comment.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showPost($id)
    {
        $post = Comment::findOrFail($id)->post;
        
        return view('comments.showPost', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        $postIds = DB::table('posts')->select('id')->get();

        return view('comments.edit', compact(['comment', 'postIds']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CommentFormRequest $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->update([
            'author' => $request->author,
            'content' => $request->content,
            'post_id' => $request->post_id,
        ]);
        
        return redirect(route('comments.index'))->with('success', __("comment_updated"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return redirect(route('comments.index'))->with('success', __("comment_deleted"));
    }
}
