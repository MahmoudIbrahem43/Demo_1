$(document).ready(function () {

    var articles = $("#articles").DataTable({
        dom: "lBfrtip",
        buttons: ["excel", "print"],
        processing: true,
        serverSide: true,
        destroy: true,
        ajax: {
            url: home_url + "/articles",
            type: "GET",
        },

        columns: [{
            data: "author",
            name: "author"
        },
        {
            data: "title",
            name: "title"
        },
        {
            data: "text",
            name: "text"
        },

        {

            data: "edit",
            name: "edit",
            render: function (d, t, r, m) {
                //   console.log(d, t, r, m)
                var RowData = r;

                //ex: "http://127.0.0.1:8000/students/11/edit"
                return `
                        <a class="btn btn-info" href="${HostUrl + "/articles/" + RowData.id + "/edit"}">edit</a>
                        `;
            }
        },

        {
            data: "delete",
            name: "delete",
            render: function (d, t, r, m) {
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
        }



        ],
        columnDefs: [{
            targets: [0, 1, 2, 3],
            searchable: true
        }],
        ordering: true,
    });



});