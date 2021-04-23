@extends('layouts.layout')


@section('title')
new comment
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
            <h2>Add New comment</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('comments.index') }}" title="Go back">
                <i class="fas fa-backward "></i>
            </a>
        </div>
    </div>
</div>


<form id="basic-form2" action="{{ route('comments.store') }}" method="POST">


    <div class="row">
        <div class="form-group">
            <div>
                <label for="author">Author :</label>
                <input type="text" name="author" class="form-control" id="author" placeholder="author" />
                <small id="author" class="form-text text-muted"></small>
            </div>

            <div>
                <label for="text">text :</label>
                <input type="text" name="text" class="form-control" id="text" placeholder="text" />
                <small id="text" class="form-text text-muted"></small>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="article_id">Choose a article :</label>
                    <select name="article_id" id="article_id" class="form-control">
                        @foreach($articles as $article)
                        <option value="{{$article->id}}">{{$article->author}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

</form>

@section('page_js')
<script src="{{asset('assets/js/comment.js')}}"></script>
@endsection


@endsection