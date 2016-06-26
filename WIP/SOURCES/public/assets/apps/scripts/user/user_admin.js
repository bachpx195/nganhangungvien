$(document).ready(function () {
    var datasource = new kendo.data.DataSource({
        type: "json",
        serverFiltering: true,
        serverPaging: true,
        transport: {
            read: function (options) {
                var params = {
                    user_info: $('#user_info').val()
                };

                $.post('/admin/user/getList', {
                    length: options.data.pageSize,
                    page: options.data.page,
                    params: params
                }, function (res) {
                    options.success(res)
                    $('#countResult').html(res.total);
                }, "json");
            }
        },
        pageSize: 10,
        schema: {
            data: "data",
            type: 'json',
            total: "total"
        }
    });

    $("#grid").kendoGrid({
        dataSource: datasource,
        height: 420,
        dataBind: true,
        selectable: true,
        pageable: {
            pageSize: 10,
            pageSizes: true,
            messages: {
                display: "{0} - {1} của {2} kết quả",
                empty: "Không có kết quả nào",
                page: "trang",
                of: "của {0}",
                itemsPerPage: "kết quả/trang",
                first: "Về trang đầu",
                previous: "Về trang trước",
                next: "Về trang tiếp theo",
                last: "Về trang cuối",
                refresh: "Làm mới",
                allPages: "Tất cả"
            }
        },
        resizable: true,
        columns: [{
            title: "",
            width: "90px",
            template: function (item) {
                return '<a href="/admin/nguoi-dung/cap-nhat?id=' + item.id + '" >'
                    + '<button type="button" class="btn btn-icon-toggle"><i class="fa fa-pencil"></i></button></a>'

                    + ' <a class="change-status" data-id="' + item.id + '" '
                    + 'data-status="' + item.status + '" '
                    + 'data-url="/admin/user/status/' + item.id + '">'
                    + '<button type="button" class="btn btn-icon-toggle">' + (item.status == 1 ? '<i class="fa fa-lock"></i>' : '<i class="fa fa-check-circle-o"></i>') + '</button></a>';
            }
        }, {
            field: "username",
            title: "Tên đăng nhập",
            width: "20%"
        }, {
            field: "full_name",
            title: "Họ và tên"
        }, {
            field: "email",
            title: "Email",
            width: "20%"
        }, {
            field: "phone_number",
            title: "Số điện thoại",
            width: "15%"
        }, {
            field: "status",
            title: "Kích hoạt",
            width: "80px",
            template: function (item) {
                return item.status == 1 ? "Kích hoạt" : "Chưa"
            }
        }]
    });

    $('#btnSearchUser').click(function (e) {
        e.preventDefault();
        datasource.read();
    });
});