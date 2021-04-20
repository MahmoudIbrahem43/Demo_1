@extends('layouts.layout')


@section('title')
comments INDEX
@endsection


@section('content')
@csrf

<div class="container mt-5">
    <h2 class="mb-4">comments</h2>
    <div>
        <a href="{{route('comments.create')}}">Add new comments</a>
    </div>
    <br>
    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>id</th>
                <th>author</th>
                <th>text</th>
                <th>article_id</th>
                <th>#</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>


@section('page_js')
    <script src="{{asset('assets/js/comment.js')}}"></script>
    @endsection



    @endsection