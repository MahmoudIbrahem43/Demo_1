@extends('layouts.layout')


@section('title')
new Article
@endsection


@section('content')
@csrf

<style>
    .error {
        color: red;
        font-size: 19px;
    }
</style>


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



        <div class="form-group">
            <div>
                <label for="author">Author :</label>
                <input type="text" name="author" class="form-control" id="author" value="{{$article->author}}" require></input>
                <small id="author" class="form-text text-muted"></small>
            </div>

            <div>
                <label for="title">title :</label>
                <input type="text" name="title" class="form-control" id="title" value="{{$article->title}}" require></input>
                <small id="title" class="form-text text-muted"></small>
            </div>

            <div>
                <label for="content">content :</label>
                <input type="text" name="content" class="form-control" id="content" value="{{$article->content}}"  require></input>
                <small id="content" class="form-text text-muted"></small>
            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>


</form>




@section('page_js')
<script src="{{asset('assets/js/article.js')}}"></script>
@endsection



@endsection