<!DOCTYPE html>
<html>

<head>
    
    <title>new Comment</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>

<body>


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

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('comments.store') }}" method="POST">
        @csrf

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>author:</strong>
                    <input type="text" name="author" class="form-control" placeholder="author">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>text:</strong>
                    <input type="text" name="text" class="form-control" placeholder="text">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong for="article_id">Choose a article:</strong>
                    <select name="article_id" id="article_id" class="form-control">
                        @foreach($articles as $article)
                        <option value="{{$article->id}}">{{$article->author}}</option>
                        @endforeach
                    </select>
                </div>
            </div>





            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary" onclick="getSelectValues()">Submit</button>
            </div>
        </div>

    </form>

</body>

</html>