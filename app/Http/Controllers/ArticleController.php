<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index()
    {
      


        $articles = [];
        if (request()->ajax()) {
            $articles = Article::all();
            return datatables()->of($articles)->addIndexColumn()->make(true);
        }

        return view('articles.index', compact('articles'));
    }





    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required',
            'title' => 'required',
            'content' => 'required',

        ]);
        $articles = Article::create($request->all());
        return redirect()->route('articles.index');
    }


    public function create()
    {
        return view('articles.create');
    }



    public function edit(Article $article)
    {

        return view('articles.edit', compact('article'));
    }


    public function update(Request $request, Article $article)
    {
        $request->validate([
            'author' => 'required',
            'title' => 'required',
            'content' => 'required',

        ]);

        $article->update($request->all());
        return redirect()->route('articles.index');
    }


    public function destroy(Article $article)
    {

        $datafound = DB::table('Comments')->where('article_id', '=', $article->id)->get();
        if ($datafound->count() > 0) {
            $msg =  "You Can't Delete this Article ";
            return view('articles.index', compact('msg'));
        }
        $article->delete();
        return redirect()->route('articles.index');
    }



    public function deleteArticle(int $id)
    {
        $article = Article::where('id', '=', $id)->first();

        $result = [
            $msg = ""
        ];

        if ($article == null) {
            $result["msg"] =  "Article Not found !";
            return $result;
        }

        $datafound = DB::table('Comments')->where('article_id', '=', $article->id)->get();

        if ($datafound->count() > 0) {
            $result["msg"] =  "You Can't Delete this Article delete the Comment first";
            return $result;
        }

        $article->delete();
        return $result;
    }
}
