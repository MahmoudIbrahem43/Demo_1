<!DOCTYPE html>
<html>

<head>
    <title>articles</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>


    @if(!empty($msg))
    <div class="alert  alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>  {{ $msg}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @csrf
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
                    <th>#</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(function() {
        var HostUrl = window.location.origin;
        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{route('articles.index')}}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'author',
                    name: 'author'
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'content',
                    name: 'content'
                },
                {
                    data: "edit",
                    name: "edit",
                    render: function(d, t, r, m) {
                        var RowData = r;
                        return `
                        <a class="btn btn-info" href="${ HostUrl + "/articles/" + RowData.id + "/edit"}">edit</a>
                        `;

                    }
                },
                {
                    data: "delete",
                    name: "delete",
                    render: function(d, t, r, m) {
                        var RowData = r;
                        var TokenValue = $('input[name="_token"]').val();
                        return `
                    <form action="${HostUrl + "/articles/" + RowData.id}" method="post">
                       <input type="hidden" name="_token" value="${TokenValue}">
                       <input type="hidden" name="_method" value="DELETE">
                       <button type="submit" class="btn btn-danger" title="delete">
                          <span>Delete</span>
                       </button>
                   </form> `;
                    }
                },
            ]
        });

    });
</script>
</script>





</html>