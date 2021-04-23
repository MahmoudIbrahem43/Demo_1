@extends('layouts.layout')


@section('title')
Setting
@endsection


@section('content')
@csrf



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

    .error {
   color: red;
   font-size: 18px;
}
</style>



<div class="container mt-5">
    <form id="basic-form" action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data">
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
                <input type="text" name="name" class="form-control" id="name" placeholder="name" value={{App\Http\Controllers\SettingController::showSetting()!=null?App\Http\Controllers\SettingController::showSetting()->name:""}} />
                <small id="name" class="form-text text-muted"></small>
            </div>




            <div class="form-group">
                <label for="chooseFile">file input</label>
                <input type="file" name="logo" class="form-control-file" id="chooseFile">
            </div>


            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                Upload Files
            </button>
        </div>

    </form>

    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}} "></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>


    <script>
        $(document).ready(function() {
            $('form[id="basic-form"]').validate({
                rules: {
                    name: "required",
                    logo: "required",
                  
                },
                messages: {
                    name: 'This name is required',
                    logo: 'This logo is required',
                   
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });

        });
    </script>


    @endsection