@extends('layouts.layout')


@section('title')
Setting
@endsection


@section('content')
@csrf
<!-- <meta charset="utf-8"> -->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->


<style>
    .container {
        max-width: 500px;
    }

    dl,
    ol,
    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }
</style>



<div class="container mt-5">
    <form action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data">
        <h3 class="text-center mb-5">upload Logo</h3>
        @csrf
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <strong>{{ $message }}</strong>
        </div>
        @endif

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        
            <div>
                <div class="form-group">
                    <label for="name">name :</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="name">
                    <small id="name" class="form-text text-muted"></small>
                </div>


    
              
                    <div class="form-group">
                        <label for="chooseFile">file input</label>
                        <input type="file"  name="logo" class="form-control-file" id="chooseFile">
                    </div>
          

                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                    Upload Files
                </button>
            </div>

        </form>


        @endsection