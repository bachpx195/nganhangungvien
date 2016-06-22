var TableDatatablesAjax = function () {

    var initPickers = function () {
        //init date pickers
        $('.date-picker').datepicker({
            rtl: App.isRTL(),
            autoclose: true
        });
    }

    var handleRecords = function (options) {

        var grid = new Datatable();

        grid.init({
            src: $("#datatable_ajax"),
            onSuccess: function (grid, response) {
                // grid:        grid object
                // response:    json object of server side ajax response
                // execute some code after table records loaded
            },
            onError: function (grid) {
                // execute some code on network or other general error  
            },
            onDataLoad: function(grid) {
                // execute some code on ajax data load
            },
            loadingMessage: 'Loading...',
            dataTable: { // here you can define a typical datatable settings from http://datatables.net/usage/options 

                // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
                // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/scripts/datatable.js). 
                // So when dropdowns used the scrollable div should be removed. 
                //"dom": "<'row'<'col-md-8 col-sm-12'pli><'col-md-4 col-sm-12'<'table-group-actions pull-right'>>r>t<'row'<'col-md-8 col-sm-12'pli><'col-md-4 col-sm-12'>>",
                "bSort": options.sortable !== undefined ? options.sortable : true,
                "bStateSave": true, // save datatable state(pagination, sort, etc) in cookie.
                "columns": options.columns,
                "lengthMenu": [
                    [10, 20, 50, 100, 150, -1],
                    [10, 20, 50, 100, 150, "All"] // change per page values here
                ],
                "pageLength": 10, // default record count per page
                "ajax": options.ajax,
                "order": [
                    [1, "asc"]
                ],// set first column as a default sort by asc
                "language": {
                    "aria": {
                        "sortAscending": ": Sắp xếp tăng dần",
                        "sortDescending": ": Xắp xếp giảm dần"
                    },
                    "emptyTable": "Dữ liệu trống",
                    "info": "Hiển thị _START_ đến _END_ của _TOTAL_ bản ghi",
                    "infoEmpty": "Không có bản ghi nào",
                    "infoFiltered": "(filtered1 từ _MAX_ tổng số bản ghi)",
                    "lengthMenu": "Hiển thị _MENU_",
                    "search": "Tìm kiếm:",
                    "zeroRecords": "Không tìm thấy bản ghi nào",
                    "page": "Trang",
                    "paginate": {
                        "previous":"Trước",
                        "next": "Tiếp",
                        "last": "Cuối",
                        "first": "Đầu"
                    }
                },
            }
        });

        // handle group actionsubmit button click
        $('#btnSearch').click( function (e) {
            e.preventDefault();
            /*var action = $(".table-group-action-input", grid.getTableWrapper());
            if (action.val() != "" && grid.getSelectedRowsCount() > 0) {
                grid.setAjaxParam("customActionType", "group_action");
                grid.setAjaxParam("customActionName", action.val());
                grid.setAjaxParam("id", grid.getSelectedRows());
                grid.getDataTable().ajax.reload();
                grid.clearAjaxParams();
            } else if (action.val() == "") {
                App.alert({
                    type: 'danger',
                    icon: 'warning',
                    message: 'Please select an action',
                    container: grid.getTableWrapper(),
                    place: 'prepend'
                });
            } else if (grid.getSelectedRowsCount() === 0) {
                App.alert({
                    type: 'danger',
                    icon: 'warning',
                    message: 'No record selected',
                    container: grid.getTableWrapper(),
                    place: 'prepend'
                });
            }*/

            grid.getDataTable().ajax.reload();
            //grid.clearAjaxParams();
        });

        //grid.setAjaxParam("customActionType", "group_action");
        //grid.getDataTable().ajax.reload();
        //grid.clearAjaxParams();
    }

    return {

        //main function to initiate the module
        init: function (options) {

            //initPickers();
            handleRecords(options);
        }

    };

}();

// jQuery(document).ready(function() {
//     TableDatatablesAjax.init();
// });