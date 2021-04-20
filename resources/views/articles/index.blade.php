@extends('layouts.layout')


@section('title')
Article INDEX
@endsection


@section('content')
@csrf


<!-- main content -->
<div class="container mt-5">
    <h2 class="mb-4">articles</h2>
    <div>
        <a href="{{route('articles.create')}}">Add new Article</a>
    </div>
    <br>
    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>id</th>
                <th>author</th>
                <th>title</th>
                <th>content</th>
                <!-- <th>comment</th> -->
                <th>#</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>





    @section('page_js')
    <script src="{{asset('assets/js/article.js')}}"></script>
    @endsection



    @endsection