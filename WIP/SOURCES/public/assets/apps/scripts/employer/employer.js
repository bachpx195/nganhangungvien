$(document).ready(function () {
    function triggerActions() {
        $('.set-vip').on('change', function (event) {
            var _this = $(this);
            var id = _this.data('id');
            var vip = 1 - _this.data('vip');
            var url = _this.data('url');

            var d = new Date();
            var curr_day = d.getDate();
            var curr_month = d.getMonth() + 3;
            var curr_year = d.getFullYear();

            var curr_hour = d.getHours();
            var curr_min = d.getMinutes();

            var dateFormat = curr_year + '-' + curr_month + '-' + curr_day + ' ' + curr_hour + ':' + curr_min + ':00';

            if (vip == 1) {
                swal({
                    title: "Xác nhận gán VIP",
                    text: "Nhập ngày hết hạn VIP",
                    type: "input",
                    inputValue: dateFormat,
                    showCancelButton: true,
                    closeOnConfirm: false,
                    animation: "slide-from-top",
                    inputPlaceholder: "Write something"
                }, function (inputValue) {
                    if (inputValue === false) return false;
                    if (inputValue === "") {
                        swal.showInputError("Bạn hãy nhập ngày hết hạn VIP");
                        return false
                    }

                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: {
                            'vip': vip,
                            'expire_vip': dateFormat
                        },
                        complete: function (reponse) {
                            if (reponse.success) {
                                swal("Thành công!", 'Đã chuyển thành tài khoản VIP!');
                                datasource.read();
                            }
                        },
                        error: function (response) {
                            swal("Có lỗi xảy ra", response.message);
                            datasource.read();
                        }
                    });
                });
            } else {
                swal({
                        title: 'Bạn có muốn hủy VIP?',
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
                                data: {
                                    'vip': vip,
                                    'expire_vip': dateFormat
                                },
                                complete: function (reponse) {
                                    if (reponse.success) {
                                        swal("Thành công!", 'Đã bỏ trạng thái VIP!');
                                        datasource.read();
                                    }
                                },
                                error: function (response) {
                                    swal("Có lỗi xảy ra", response.message);
                                    datasource.read();
                                }
                            });
                        }
                    }
                );
            }
        });

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
                            complete: function (data) {
                                if (data.status) {
                                    if (status == 1) {
                                        var text = "Đã kích hoạt tài khoản thành công!";
                                    } else {
                                        var text = "Đã bỏ kích hoat tài hoản thành công!";
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
    }

    var datasource = new kendo.data.DataSource({
        type: "json",
        serverFiltering: true,
        serverPaging: true,
        transport: {
            read: function (options) {
                var params = {
                    company_name: $('#company_name').val(),
                    contact: $('#contact').val(),
                    province: $('#province').val(),
                    company_address: $('#company_address').val(),
                    status: $('#status').val(),
                    vip: $('#vip').val(),
                };

                $.post('/admin/employer/getList', {
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
        dataBound: function () {
            triggerActions();
        },
        columns: [{
            title: "",
            width: "65px",
            template: function (item) {
                return '<a href="/admin/employer/detail?id=' + item.id + '" >'
                    + '<button type="button" class="btn btn-icon-toggle"><i class="fa fa-pencil"></i></button></a>'

                    + ' <a class="change-status" data-id="' + item.id + '" '
                    + 'data-status="' + item.status + '" '
                    + 'data-url="/admin/employer/status/' + item.id + '">'
                    + '<button type="button" class="btn btn-icon-toggle">' + (item.status == 1 ? '<i class="fa fa-lock"></i>' : '<i class="fa fa-check-circle-o"></i>') + '</button></a>';
            }
        }, {
            field: "vip",
            title: "VIP",
            width: "30px",
            template: function (item) {
                return '<input type="checkbox" class="icheck set-vip" '
                    + (item.vip !== undefined && item.vip == 1 ? 'checked ' : ' ')
                    + 'data-id="' + item.id + '" data-vip="' + (item.vip || 0) + '" '
                    + 'data-url="/admin/employer/set-vip/' + item.id + '">';
            }
        }, {
            field: "expire_vip",
            title: "Hết hạn VIP",
            width: "80px"
        }, {
            field: "company_name",
            title: "Công ty",
            width: "150px"
        }, {
            field: "contact_person",
            title: "Người liên hệ",
            width: "100px"
        }, {
            field: "contact_email",
            title: "Email",
            width: "100px"
        }, {
            field: "contact_phone",
            title: "Phone",
            width: "80px"
        }, {
            field: "province",
            title: "Tỉnh thành",
            width: "100px"
        }, {
            field: "status",
            title: "Kích hoạt",
            width: "70px",
            template: function (item) {
                return item.status == 1 ? "Kích hoạt" : "Chưa"
            }
        }]
    });

    $('#btnSearch').click(function (e) {
        e.preventDefault();
        datasource.read();
    });
});