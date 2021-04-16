<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function index()
    {
          $comments=[];
        if (request()->ajax()) {
            $comments = Comment::all();
          return datatables()->of($comments)->addIndexColumn()->make(true);
      }
     
       return view('comments.index', compact('comments'));
  }
       
     
    


    public function store(Request $request)
    {
       
        $request->validate([
            'author' => 'required',
            'text' => 'required',
            'article_id' => 'required',

        ]);
        $comments = Comment::create($request->all());
        return redirect()->route('comments.index');
    }


    public function create()
    {
        $articles=Article::all();
        return view('comments.create',compact('articles'));
    }



    public function edit(Comment $comment)
    {
        return view('comments.edit', compact('comment'));
    }


    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'author' => 'required',
            'text' => 'required',
            'article_id' => 'required',

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
