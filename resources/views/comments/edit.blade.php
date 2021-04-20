@extends('layouts.layout')


@section('title')
new Article
@endsection


@section('content')
@csrf


<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>edit Comment</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('comments.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>



    

    <form id="basic-form2" action="{{ route('comments.update' , $comment->id) }}" method="POST">
        @method('PUT')
        @csrf

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div>
                    <label for="author">author:</label>
                    <input type="text" id="author" name="author" value="{{$comment->author}}" require></input>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div>
                    <label for="text">text :</label>
                    <input type="text" id="text" name="text" value="{{$comment->text}}" require></input>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div>
                    <label for="conarticle_idtent">article_id:</label>
                    <input type="text" id="article_id" name="article_id"  value="{{$comment->article_id}}"  require></input>
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