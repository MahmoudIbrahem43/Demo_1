<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller


{
    public function index()
    {
        $comments = Comment::all();
        return view('comments.index', compact('comments'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'outher' => 'required',
            'text' => 'required|unique',
            

        ]);
        $comments = Comment::create($request->all());
        return redirect()->route('comments.index');
    }


    public function create()
    {

        return view('comments.create');
    }


    public function edit(Comment $comment)
    {
        return view('comments.edit', compact('comment'));
    }


    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'author' => 'required',
            'title' => 'required|unique',
            'content' => 'required',

        ]);

        $comment->update($request->all());
        return redirect()->route('comments.index');
    }


    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->route('comments.index');
    }
}
