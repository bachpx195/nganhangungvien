$(document).ready(function () {
    var datasource = new kendo.data.DataSource({
        type: "json",
        serverFiltering: true,
        serverPaging: true,
        transport: {
            read: function (options) {
                var params = {
                    employer_info: $('#employer_info').val(),
                    candidate_info: $('#candidate_info').val()
                };

                $.post('/admin/transaction/getList', {
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
            field: "username",
            title: "Nhà tuyển dụng",
            width: "15%"
        }, {
            field: "company_name",
            title: "Tên công ty"
        }, {
            title: "Nội dung",
            width: "25%",
            template: function (item) {
                if (item.payment_type === 3) {
                    return 'Xem hồ sơ <a target="_blank" href="' + item.candidate_path + '">' + item.candidateName + '</a> (' + item.cv_title + ')';
                } else if (item.payment_type === 2) {
                    return 'Nạp tiền qua ATM';
                } else if (item.payment_type === 1) {
                    return 'Nạp tiền qua thẻ';
                } else {
                    return 'Lý do khác';
                }
            }
        }, {
            field: "created_at",
            title: "Thời gian",
            width: "15%"
        }, {
            field: "amount",
            title: "Số tiền",
            width: "10%"
        }, {
            field: "balance",
            title: "Còn lại",
            width: "10%"
        }]
    });

    $('#btnSearchTransaction').click(function (e) {
        e.preventDefault();
        datasource.read();
    });
});