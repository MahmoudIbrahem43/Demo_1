<!DOCTYPE html>
<html>

<body>
    <title>Comments</title>

    <div>
        <h1>COMMENTS BLADE</h1>
        <br>
        <a href="{{route('comments.create')}}">Add new Comment</a>
        <table id="articles" class="table table-bordered table-responsive-lg">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>author</th>
                    <th>text</th>
                    <th>article_id</th>
                    <th> # </th>
                    <th> # </th>

                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

        <script src="{{asset('assets/js/comments.js')}}"></script>

</body>

</html>