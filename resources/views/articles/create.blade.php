<!DOCTYPE html>
<html>

<head>
    <title>new article</title>

    
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />





</head>

<body>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Article</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('articles.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
    <form id="article" action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div>
            <label for="author">author:</label>
            <input type="text" id="author" name="author"></input>
        </div>
        <div>
            <label for="title">title:</label>
            <input type="text" id="title" name="title"></input>
        </div>
        <div>
            <label for="content">content:</label>
            <input type="text" id="content" name="content"></input>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary" onclick="getSelectValues()">Submit</button>
        </div>
    </form>




    <!-- ------------------------------------------------------ -->
    <!-- <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left"> -->
    <!-- <h2>Add New Article</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('articles.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <form action="{{ route('articles.store') }}" method="POST">
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
                    <strong>title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="title">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>content:</strong>
                    <input type="text" name="content" class="form-control" placeholder="content">
                </div>
            </div>



            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary" onclick="getSelectValues()">Submit</button>
            </div>
        </div>

    </form> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {

        $('#article').submit(function(e) {
            e.preventDefault();
            var author = $('#author').val();
            var title = $('#title').val();
            var content = $('#content').val();


            $(".error").remove();

            if (author.length < 1) {
                $('#author').after('<span class="error">This field is required</span>');
            }
            if (title.length < 1) {
                $('#title').after('<span class="error">This field is required</span>');
            }
            if (content.length < 1) {
                $('#content').after('<span class="error">This field is required</span>');
            }
            //   else {
            // var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
            // var validEmail = regEx.test(email);
            // if (!validEmail) {
            //   $('#email').after('<span class="error">Enter a valid email</span>');
            // }
            //   }
            //   if (password.length < 8) {
            //     $('#password').after('<span class="error">Password must be at least 8 characters long</span>');
            //   }
        });

    });
</script>
</body>



</html>