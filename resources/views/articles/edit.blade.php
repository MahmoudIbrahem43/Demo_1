@extends('layouts.layout')


@section('title')
new Article
@endsection


@section('content')
@csrf






    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>edit Article</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('articles.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>



    

    <form id="basic-form" action="{{ route('articles.update' , $article->id) }}" method="POST">
        @method('PUT')
        @csrf

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div>
                    <label for="author">author:</label>
                    <input type="text" id="author" name="author" value="{{$article->author}}" require></input>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div>
                    <label for="title">title :</label>
                    <input type="text" id="title" name="title" value="{{$article->title}}" require></input>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div>
                    <label for="content">content:</label>
                    <input type="text" id="content" name="content"  value="{{$article->content}}"  require></input>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>



    <!-- <form action="{{ route('articles.update' , $article->id) }}" method="POST">
        @method('PUT')
        @csrf

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>author:</strong>
                    <input type="text" name="author" class="form-control" placeholder="author" value="{{$article->author}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="title" value="{{$article->title}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>content:</strong>
                    <input type="text" name="content" class="form-control" placeholder="content"  value="{{$article->content}}">
                </div>
            </div>



            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary" onclick="getSelectValues()">Submit</button>
            </div>
        </div>

    </form> -->


    @section('page_js')
    <script src="{{asset('assets/js/article.js')}}"></script>
    @endsection



    @endsection


