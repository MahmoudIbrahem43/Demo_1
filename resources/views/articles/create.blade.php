@extends('layouts.layout')


@section('title')
new Article
@endsection


@section('content')
@csrf




<body>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Article</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('articles.index') }}" title="Go back">
                    <i class="fas fa-backward "></i>
                </a>
            </div>
        </div>
    </div>

    <form id="basic-form" action="{{ route('articles.store') }}" method="POST">
      
        @csrf

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div>
                    <label for="author">author:</label>
                    <input type="text" id="author" name="author" require></input>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div>
                    <label for="title">title :</label>
                    <input type="text" id="title" name="title" require></input>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div>
                    <label for="content">content:</label>
                    <input type="text" id="content" name="content" require></input>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> -->

    @section('page_js')
    <script src="{{asset('assets/js/article.js')}}"></script>
    @endsection



    @endsection