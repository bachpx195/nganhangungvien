$(document).ready(function () {
    // TableDatatablesAjax.init({
    //     //url: "/admin/candidate/getList",
    //     ajax: function(data, callback, settings){
    //         var params = {
    //             title: $('#title').val(),
    //             occupation: $('#occupation').val(),
    //             province: $('#province').val(),
    //             salaryGrade: $('#salaryGrade').val() ? [$('#salaryGrade').val()] : null,
    //             degree: $('#degree').val(),
    //             yearOfExp: $('#yearOfExp').val() ? [$('#yearOfExp').val()] : null,
    //             sex: $('#sex').val(),
    //             language: $('#language').val(),
    //         };
    //
    //         $.post('/admin/candidate/getList', {
    //             length: data.length,
    //             offset: data.start,
    //             params: params
    //         }, function(res) {
    //             // map your server's response to the DataTables format and pass it to
    //             // DataTables' callback
    //             callback({
    //                 recordsTotal: res.total,
    //                 recordsFiltered: res.total,
    //                 data: res.data
    //             });
    //         }, "json");
    //     },
    //     sortable: false,
    //     columns: [
    //         { "data": "candidate_code" },
    //         { "data": "cv_title" },
    //         { "data": "email" },
    //         { "data": "full_name" },
    //         { "data": "salary" },
    //         { "data": "yearOfExp" },
    //         { "data": ""}
    //     ]
    // });

    var datasource = new kendo.data.DataSource({
        type: "json",
        serverFiltering: true,
        serverPaging : true,
        transport: {
            read : function(options) {
                var params = {
                    title: $('#title').val(),
                    occupation: $('#occupation').val(),
                    province: $('#province').val(),
                    salaryGrade: $('#salaryGrade').val() ? [$('#salaryGrade').val()] : null,
                    degree: $('#degree').val(),
                    yearOfExp: $('#yearOfExp').val() ? [$('#yearOfExp').val()] : null,
                    sex: $('#sex').val(),
                    language: $('#language').val(),
                };

                $.post('/admin/candidate/getList', {
                    length: options.data.pageSize,
                    offset: options.data.page,
                    params: params
                }, function(res) {
                    options.success(res)
                }, "json");
            }
        },
        pageSize : 10,
        schema: {
            data : "data",
            type : 'json',
            total : "total"
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
        resizable : true,
        columns: [{
            title: "",
            width: "100px",
            template: function (item) {
                return '<a href="/admin/candidate/update/' + item.id + '" >'
                    + '<button type="button" class="btn btn-icon-toggle"><i class="fa fa-pencil"></i></button></a>'

                    + ' <a class="sweet-delete" data-id="' + item.id + '" '
                    + 'data-url="/admin/candidate/delete/' + item.id + '">'
                    + '<button type="button" class="btn btn-icon-toggle"><i class="fa fa-trash-o"></i></button></a>';
            }
        }, {
            field: "cv_title",
            title: "Tiêu đề"
        }, {
            field: "full_name",
            title: "Tên ứng viên"
        }, {
            field: "email",
            title: "Email"
        }, {
            field: "salary",
            title: "Mức lương"
        }, {
            field: "yearOfExp",
            title: "Kinh nghiệm",
        }]
    });

    $('#btnSearch').click(function (e) {
        e.preventDefault();
        datasource.read();
    })

    $('#admin-employers .set-vip').on('ifChanged', function(event){
        var _this = $(this);
        var id = _this.data('id');
        var vip = 1 - _this.data('vip');
        var url = _this.data('url');

        $.ajax({
            url: url,
            type: 'POST',
            data: {'vip': vip},
            complete: function(reponse) {
                if (reponse.success) {
                    _this.data('vip', vip);
                    if (vip) {
                        var text = "Đã chuyển thành tài khoản VIP!";
                    } else {
                        var text = "Đã bỏ trạng thái VIP!";
                    }

                    swal("Thành công!", text);
                }
            }
        });
    });
});