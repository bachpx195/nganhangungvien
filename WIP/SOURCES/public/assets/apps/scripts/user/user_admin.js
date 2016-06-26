$(document).ready(function () {
    $(document).on('click', '.change-status', function (e) {
        var id = $(this).data('id');
        var status = 1 - $(this).data('status');
        var url = $(this).data('url');
        swal({
                title: 'Bạn có muốn thay đổi trạng thái?',
                type: "info",
                showCancelButton: true,
                confirmButtonColor: "#d9534f",
                confirmButtonText: "Đồng ý!",
                cancelButtonText: "Hủy!",
                closeOnConfirm: false,
                closeOnCancel: true
            }, function (isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: {'status': status},
                        complete: function(data) {
                            if (data.status) {
                                if (status == 1) {
                                    var text = "Đã kích hoạt tài khoản thành công!";
                                } else {
                                    var text = "Đã bỏ kích hoat tài khoản thành công!";
                                }
                                swal("Thành công!", text);
                                datasource.read();
                            }
                        }
                    });
                }
            }
        );
    });

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
            width: "95px",
            template: function (item) {
                return '<a href="/admin/nguoi-dung/cap-nhat/' + item.id + '" >'
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