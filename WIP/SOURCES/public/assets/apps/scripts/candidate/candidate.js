var datasource = null;

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

function deleteCandidate(element) {
    var id = $(element).data('id');
    var url = $(element).data('url');
    swal({
            title: 'Bạn có muốn xóa?',
            text: 'Bạn sẽ không thể khôi phục lại được đối tượng này!!',
            type: "warning",
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
                    complete: function(data) {
                        if (data.status) {
                            swal("Thành công!", "Dữ liệu đã được xóa.", "success");
                            datasource.read();
                        }
                    }
                });
            }
        }
    );
}

$(document).ready(function () {
    datasource = new kendo.data.DataSource({
        type: "json",
        serverFiltering: true,
        serverPaging: true,
        transport: {
            read: function (options) {
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
            width: "132px",
            template: function (item) {
                return '<a href="/admin/candidate/update/' + item.id + '" >'
                    + '<button type="button" class="btn btn-icon-toggle"><i class="fa fa-pencil"></i></button></a>'

                    + ' <a class="delete-candidate" onclick="deleteCandidate(this)" data-id="' + item.id + '" '
                    + 'data-url="/admin/candidate/delete/' + item.id + '">'
                    + '<button type="button" class="btn btn-icon-toggle"><i class="fa fa-trash-o"></i></button></a>'

                    + '<a class="change-status" style="margin-left: 2px" data-id="' + item.id + '" '
                    + 'data-status="' + item.status + '" '
                    + 'data-url="/admin/candidate/status/' + item.id + '">'
                    + '<button type="button" class="btn btn-icon-toggle">' + (item.status == 1 ? '<i class="fa fa-lock"></i>' : '<i class="fa fa-check-circle-o"></i>') + '</button></a>';
            }
        }, {
            field: "status",
            title: "Trạng thái",
            width: "150px",
            template: function (item) {
                var html = "";
                if(item.status == 1){

                }else {

                }

                return html;
            }
        }, {
            field: "cv_title",
            title: "Tiêu đề",
            width: "150px"
        }, {
            field: "full_name",
            title: "Tên ứng viên",
            width: "150px"
        }, {
            field: "email",
            title: "Email",
            width: "150px"
        }, {
            field: "expectJobs",
            title: "Ngành nghề",
            width: "100px",
            template: function(item){
                return item.expectJobs.join(', ');
            }
        }, {
            field: "expectAddresses",
            title: "Tỉnh thành",
            width: "100px",
            template: function(item){
                return item.expectAddresses.join(', ');
            }
        }, {
            field: "salary",
            title: "Mức lương",
            width: "100px"
        }, {
            field: "yearOfExp",
            title: "Kinh nghiệm",
            width: "100px"
        }, {
            field: "maxLevel",
            title: "Trình độ",
            width: "100px"
        }, {
            field: "sex",
            title: "Giới tính",
            width: "80px"
        }, {
            field: "foreignLanguages",
            title: "Ngoại ngữ",
            width: "100px",
            template: function(item){
                return item.foreignLanguages.join(', ');
            }
        }, {
            field: "updated_at",
            title: "Thời gian cập nhật",
            width: "100px",
            template: function(item){
                return kendo.toString(new Date(item.updated_at.date), "dd/MM/yyyy");
            }
        }]
    });

    $('#btnSearchCandidate').click(function (e) {
        e.preventDefault();
        datasource.read();
    });
});