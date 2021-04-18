<!DOCTYPE html>
<html>

<head>
    <title>new article</title>


    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<style>
form label {
    display: inline-block;
    width: 100px;
  }
  
  form div {
    margin-bottom: 10px;
  }
  
  .error {
    color: red;
    margin-left: 5px;
  }
  
  label.error {
    display: inline;
  }
</style>
</head>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('form[id="basic-form"]').validate({
                rules: {
                    author:"required",
                    title:"required",
                    content:"required",
                },
                messages: {
                    author: 'This field is required',
                    title: 'This field is required',
                    content: 'This field is required',
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
          
        });
    </script>




</body>



</html>