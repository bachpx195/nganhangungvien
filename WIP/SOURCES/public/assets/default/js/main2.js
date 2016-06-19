jQuery.fn.exists = function(){return this.length>0;}

$.fn.scrollTo2 = function( target, options, callback ){
    if(typeof options == 'function' && arguments.length == 2){ callback = options; options = target; }
    var settings = $.extend({
        scrollTarget  : target,
        offsetTop     : 150,
        duration      : 500,
        easing        : 'swing'
    }, options);
    return this.each(function(){
        var scrollPane = $(this);
        var scrollTarget = (typeof settings.scrollTarget == "number") ? settings.scrollTarget : $(settings.scrollTarget);
        if($(settings.scrollTarget).length == 0) return false;
        var scrollY = (typeof scrollTarget == "number") ? scrollTarget : scrollTarget.offset().top + scrollPane.scrollTop() - parseInt(settings.offsetTop);
        scrollPane.animate({scrollTop : scrollY }, parseInt(settings.duration), settings.easing, function(){
            if (typeof callback == 'function') { callback.call(this); }
        });
    });
}

function doi_trang_thai_hien_thi_ttv (id_ttv, tinhtrang) {

    $.ajax({
        type: 'get',
        dataType : 'json',
        url: '/tintimviec/doi_trang_thai_hien_thi?id='+id_ttv+'&status='+tinhtrang,
        // data: {id: id_ttv, status: tinhtrang},
        processData: false,
        contentType: false,
        success: function(data, textStatus, jqXHR) {
            if (data.error == 0) { // thanh cong
                if ($('#chk_hienthi_ttv_'+id_ttv).data('show_pop') == 1) {
                    show_popup_thanh_cong(data.message,id_ttv);
                }
                return false;
            }  else {
                alert(data.message);
                return false;
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert('Đã có lỗi hệ thống. Vui lòng thử lại');
        }
    });
}


$(document).ready(function() {
    $('body').removeClass('page_on_load');
    $('.box_loading').delay(1000).fadeOut(500);

    var mac = navigator.platform.match(/(Mac|iPhone|iPod|iPad)/i) ? true : false;
    if (mac) {
        var duration_enscroll = 700;
    }else{
        var duration_enscroll = 100;
    }

    setTimeout(function() {
        $('#btn_search_time2').click(function() {
           hide();
        });
     },500);

    //calc height header and footer of popup
    var height_w = $( window ).height();
    // Show box chọn ngành nghề ở menu trái
    $(".show_s02_trang_vieclam_theo_nganh").click(function(e){
        $("#popup_tao_ho_so_tung_buoc_lan_dau, #popup_tao_ho_so_dinh_kem, #popup_xem_truoc_ho_so_dinh_kem, #popup_regis_successfull").html('');
        var page = $(this).attr('data-page');
        var url = '/common/chonnganhnghe';
        if (typeof page != 'undefined') {
            url += '/'+page;
        }
        $("#popup_ntv_register").load(url, function() {
            //load popup confirm
            var h_win_2 = height_w/2;
            $("#overlay_popup, #popup_content_register_choice").show();
            var h_pop_confirm_2 = $("#popup_content_register_choice").height()/2;
            var h_confirm = h_win_2 - h_pop_confirm_2;
            $("#pos_popup_register_choice").css('top',$(window).scrollTop() + h_confirm);
            $("#pos_popup_register_choice").css('left',0);

            $("#overlay_popup, #popup_component_register_choice").show();

            //close confirm
            $(".btn_close").click(function(){
                //hide popup dang ky
                $("#overlay_popup, #popup_component_register_choice").hide();
                $("#popup_chon_nghanh").html('');
            });

            $('.scrollbar_cus_popup').enscroll({
                showOnHover: false,
                easingDuration: duration_enscroll,
                verticalTrackClass: 'track3',
                verticalHandleClass: 'handle3'
            });
            // filter

            // Bấm đổi loại box ngành nghề
            $('div.popup_nganhnghe a.tab_nganhnghe_box').click(function () {
                var id_tab = $(this).attr('rel');
                $('.popup_nganhnghe .tab_nganhnghe_box').removeClass('text_black').removeClass('text_blue').addClass('text_black');
                $(this).removeClass('text_black').addClass('text_blue');
                $(this);
                $('.popup_nganhnghe .box_nganhnghe').removeClass('hide').addClass('hide');
                $('.popup_nganhnghe  #'+id_tab).removeClass('hide');
            });
            // Gõ tìm kiếm trong box ngành nghề => chỉ hiện thỉ ngành nghề chứa str
            $('div.popup_nganhnghe input[id="filter_nganhnghe"]').keyup(function() {
                var str = $('div.popup_nganhnghe input[id="filter_nganhnghe"]').val();
                str = bodauTiengViet(str);
                str = bodauTiengVietUnicodeToHop(str);
                $('div.popup_nganhnghe .nganhnghe_item').addClass('hide');
                $('div.popup_nganhnghe .nganhnghe_item').each(function () {
                    var a_text = $(this).attr('data-khong-dau');
                    a_text = a_text ? a_text : $(this).text();
                    if (a_text.toLowerCase().indexOf(str) >= 0) {
                        // $(this).show();
                        $(this).removeClass('hide');
                    }
                })
            });

        });
    });


    //click show_s03_trang_viec_lam_theo_tinh_thanh
    $(".show_s03_trang_viec_lam_theo_tinh_thanh").click(function(e){
        $("#popup_tao_ho_so_tung_buoc_lan_dau, #popup_tao_ho_so_dinh_kem, #popup_xem_truoc_ho_so_dinh_kem, #popup_regis_successfull").html('');
        var page = $(this).attr('data-page');
        var url = '/common/chontinhthanh';
        if (typeof page != 'undefined') {
            url += '/'+page;
        }
        $("#popup_ntv_register").load(url, function() {
            //load popup confirm
            var h_win_2 = height_w/2;

            var h_pop_confirm_2 = $("#popup_content_register_choice").height()/2;
            var h_confirm = h_win_2 - h_pop_confirm_2;
            $("#pos_popup_register_choice").css('top',$(window).scrollTop() + h_confirm);
            $("#pos_popup_register_choice").css('left',0);

            $("#overlay_popup, #popup_component_register_choice").show();


            //close confirm
            $(".btn_close").click(function(){
                //hide popup dang ky
                $("#overlay_popup, #popup_component_register_choice").hide();
                $("#popup_ntv_register").html('');
            });

            $('.scrollbar_cus_popup').enscroll({
                showOnHover: false,
                easingDuration: duration_enscroll,
                verticalTrackClass: 'track3',
                verticalHandleClass: 'handle3'
            });


            // Bấm đổi loại box ngành nghề
            $('div.popup_tinhthanh .tab_tinhthanh_box').click(function () {
                var id_tab = $(this).attr('rel');
                $('div.popup_tinhthanh .tab_tinhthanh_box').removeClass('text_black').removeClass('text_blue').addClass('text_black');
                $(this).removeClass('text_black').addClass('text_blue');
                $(this);
                $('div.popup_tinhthanh .box_tinhthanh').removeClass('hide').addClass('hide');
                $('div.popup_tinhthanh #'+id_tab).removeClass('hide');
            });

            $('div.popup_tinhthanh input[id="filter_tinhthanh"]').keyup(function() {
                var str = $(this).val();
                str = str.toLowerCase();
                $('div.popup_tinhthanh .tinh_item').addClass('hide');
                $('div.popup_tinhthanh .tinh_item').each(function () {
                    var a_text = $(this).text();
                    if (a_text.toLowerCase().indexOf(str) >= 0) {
                        // $(this).show();
                        $(this).removeClass('hide');
                    }
                })
            });


        });
    });



    // Bấm đổi loại box ngành nghề
    $('.tab_nganhnghe_box').click(function () {
        var id_tab = $(this).attr('rel');
        $('.tab_nganhnghe_box').removeClass('text_black').removeClass('text_blue').addClass('text_black');
        $(this).removeClass('text_black').addClass('text_blue');
        $(this);
        $('.box_nganhnghe').removeClass('hide').addClass('hide');
        $('#'+id_tab).removeClass('hide');
    });


    // Gõ tìm kiếm trong box ngành nghề => chỉ hiện thỉ ngành nghề chứa str
    $('input[id="filter_nganhnghe"]').keyup(function() {
        var str = $('input[id="filter_nganhnghe"]').val();
        str = bodauTiengViet(str);
        str = bodauTiengVietUnicodeToHop(str);
        $('.nganhnghe_item').addClass('hide');
        $('.nganhnghe_item').each(function () {
            var a_text = $(this).attr('data-khong-dau');
            a_text = a_text ? a_text : $(this).text();
            if (a_text.toLowerCase().indexOf(str) >= 0) {
                // $(this).show();
                $(this).removeClass('hide');
            }
        })
    });


    // Bấm đổi loại box ngành nghề
    $('.tab_tinhthanh_box').click(function () {
        var id_tab = $(this).attr('rel');
        $('.tab_tinhthanh_box').removeClass('text_black').removeClass('text_blue').addClass('text_black');
        $(this).removeClass('text_black').addClass('text_blue');
        $(this);
        $('.box_tinhthanh').removeClass('hide').addClass('hide');
        $('#'+id_tab).removeClass('hide');
    });

    $('input[id="filter_tinhthanh"]').keyup(function() {
        var str = $('input[id="filter_tinhthanh"]').val();
        str = str.toLowerCase();
        $('.tinh_item').addClass('hide');
        $('.tinh_item').each(function () {
            var a_text = $(this).text();
            if (a_text.toLowerCase().indexOf(str) >= 0) {
                // $(this).show();
                $(this).removeClass('hide');
            }
        })
    });

    //click register
    $(".member_register").click(function(e){
        $("#popup_tao_ho_so_tung_buoc_lan_dau, #popup_tao_ho_so_dinh_kem, #popup_xem_truoc_ho_so_dinh_kem, #popup_regis_successfull").html('');
        $("#popup_ntv_register").load("/taikhoan/register", function() {

            //load popup confirm
            var h_win_2 = height_w/2;
            var h_pop_confirm_2 = $("#popup_content_register_choice").height()/2;
            var h_confirm = h_win_2 - h_pop_confirm_2;

            $("#overlay_popup, #popup_component_register_choice").show();
            $("#pos_popup_register_choice").css('top',$(window).scrollTop() + h_confirm);
            $("#pos_popup_register_choice").css('left',0);

        });
    });

    // focus tab
    // $("[role='presentation']").click(function(e){
    //     var tab_id = $(this).attr('id');
    //     if (typeof tab_id != 'undefined') {
    //         createCookie('tab_focus', tab_id, 1);
    //     }
    // });
    // var tab_cookie = readCookie('tab_focus');
    // if (tab_cookie != null) {
    //     $('#'+tab_cookie+', #'+tab_cookie+'_content').siblings().removeClass('active');
    //     $('#'+tab_cookie+', #'+tab_cookie+'_content').addClass('active');
    // }

    var chk_hienthi = $('input.chk_hienthi_ttv');
    chk_hienthi.on('ifChecked ifUnchecked', function(event) {
        var ttvid = $(this).attr('data-idttv');
        if (event.type == 'ifChecked') {
            chk_hienthi.not(this).iCheck('uncheck');
            chk_hienthi.data('show_pop', 0);
            $(this).data('show_pop', 1);
            doi_trang_thai_hien_thi_ttv(ttvid, 1);
        }else if(event.type == 'ifUnchecked') {
            doi_trang_thai_hien_thi_ttv(ttvid, 0);
        }
    });
    $("#viec_nganhnghe .bt_more_ola").click(function(){
        $("#viec_nganhnghe .search_filter_ola").show();
        $("#viec_nganhnghe .more_filter_ola").show();
        $("#viec_nganhnghe .bt_more_ola").hide();
    });
    $("#viec_tinh .bt_more_ola").click(function(){
        $("#viec_tinh .search_filter_ola").show();
        $("#viec_tinh .more_filter_ola").show();
        $("#viec_tinh .bt_more_ola").hide();
    });



});

function luutin(id){
    var idtin   = $(id).attr('data-idtin');
    var idnganh = $(id).attr('data-idnganh');
    var type    = $(id).attr('type');
    if(type == null || type == 'undefined') type = 'tintuyendung';
    var url_ajax = '/'+type+'/save?id='+idtin+'&nganh='+idnganh;
    $.ajax({url:url_ajax,cache: false,success:function(result){
        if (result == 'LOGIN') {
            must_login('Lưu việc làm');
            return false;
        };
        if (result == 'DONE') {
            $("[data-idtin='"+idtin+"']").each(function (){
                $(this).toggleClass('active');
                var star = $(this).find('.icon-star-line').toggleClass('active');
            });
        };
    }});
}
function createCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name,"",-1);
}


function loadAjaxContent (container, url) {
    $.ajax({
        type: 'GET',
        url: url,
        success: function (data) {
            $('#'+container).html(data);
        }
    });
}

function print_preview(p_url,p_style){
    openWindow(p_url,'',p_style);
}

function chiase_facebook(p_url){
    openWindow('https://www.facebook.com/sharer/sharer.php?u='+p_url+'&display=popup&ref=plugin&src=share_button&app_id=603186183110488','','width=640,height=400,scrollbars=yes');
}

function openWindow( theURL, winName, features) { //v2.0
    window.open(theURL,winName,features);
}



function tocao (id) {
    $("#popup_ntv_register, .popup_ntd_register").load("/tintuyendung/tocao?id="+id, function() {
        $("#overlay_popup, #popup_component").show();
        var height_wd = $( window ).height()/2;
        var height_p  = $( "#popup_content" ).height()/2;
        var top_p     = height_wd -height_p;
        $("#pos_popup").css('top', top_p);
        $("#pos_popup").css('left', 0);

        $("#overlay_popup, #popup_component").show();
    });
}
function reload_captcha (div_id) {
    $("#"+div_id).html('<img src="/common/captcha?time=' + new Date().getTime() + '" alt="Nhap ma bao mat" title="Nhập mã bảo mật"/>');
}

function load_box_sua_ho_so () {
    $("#popup_tao_ho_so_tung_buoc_lan_dau").load("/tintimviec/box_suahoso_tungbuoc_landau", function() {
        //load popup confirm
        var height_w = $( window ).height();
        var h_win_2 = height_w/2;
        var h_pop_confirm_2 = $("#popup_content").height()/2;
        var h_confirm = h_win_2 - h_pop_confirm_2 - 15;

        $('#popup_ntv_register').html('');
        $("#overlay_popup, #popup_component").show();
        //$("#pos_popup").css('top',$(window).scrollTop() + h_confirm);
        $("#pos_popup").css('top', 13);
        $("#pos_popup").css('left',0);
    });
}

function load_box_taohoson_tungbuoc_landau (id_ttd_ungtuyen) {
    $(window).scrollTop(0);

    var padding_h = $('.regis_header').height();
    var padding_f = $('.regis_footer').height();
    var height_w = $( window ).height();
    var scroll_h = height_w - (padding_f + padding_h + 50);
    $("#popup_ntv_register").html('');
    if (typeof id_ttd_ungtuyen === 'undefined' || id_ttd_ungtuyen === null) {
        var url = "/tintimviec/box_taohoso_tungbuoc_landau";
    }else{
        var url = "/tintimviec/box_taohoso_tungbuoc_landau?id_ttd_ungtuyen="+id_ttd_ungtuyen;
    }

    $("#popup_tao_ho_so_tung_buoc_lan_dau").load(url, function() {

        //load popup confirm
        var h_win_2 = height_w/2;
        var h_pop_confirm_2 = $("#popup_content").height()/2;

        console.log(h_win_2);
        console.log(h_pop_confirm_2);
        var h_confirm = h_win_2 - h_pop_confirm_2;
        if(h_confirm <= 30){
            h_confirm = 31;
        }
        $("#overlay_popup, #popup_component").show();
        $("#pos_popup").css('top',$(window).scrollTop() + h_confirm);
        $("#popup_component").css('left',0);
    });
}
function load_box_thay_file_dinh_kem (file_path,id_ttd) {
    $("#popup_tao_ho_so_tung_buoc_lan_dau, #popup_tao_ho_so_dinh_kem, #popup_xem_truoc_ho_so_dinh_kem, #popup_regis_successfull, #popup_ntv_register").html('');
    if (id_ttd == 'undefined') {
        id_ttd = 0;
    }
    $("#popup_ntv_register").load("/tintuyendung/nophoso_thayfile?id_ttd="+id_ttd+"&file_path="+file_path, function() {
        //load popup confirm
        $("#overlay_popup, #popup_component_register").show();
        $("#overlay_popup, #popup_component_register_choice").show();
        var height_w = $( window ).height();
        var h_win_2 = height_w/2;
        var h_pop_confirm_2 = $("#popup_content_register_choice").height();
        var h_confirm = (height_w - h_pop_confirm_2) / 2;

        $("#pos_popup_register_choice").css('top',$(window).scrollTop() + h_confirm);
        $("#pos_popup_register_choice").css('left',0);

    });
}
function load_box_taohoso_dinhkem (file_path, id_ttd) {
    $(window).scrollTop(0);

    var padding_h = $('.regis_header').height();
    var padding_f = $('.regis_footer').height();
    var height_w = $( window ).height();
    var scroll_h = height_w - (padding_f + padding_h + 50);
    $("#popup_ntv_register").html('');
    if (typeof file_path === 'undefined' || file_path === null) {
        url = "/tintimviec/box_taohoso_dinhkem";
    }else{
        url = "/tintimviec/box_taohoso_dinhkem?file_path="+file_path+"&id_ttd_ungtuyen="+id_ttd;
    }
    $("#popup_tao_ho_so_tung_buoc_lan_dau").load(url, function() {
        //load popup confirm
        var h_win_2 = height_w/2;
        var h_pop_confirm_2 = $("#popup_content").height()/2;

        console.log(h_win_2);
        console.log(h_pop_confirm_2);
        var h_confirm = h_win_2 - h_pop_confirm_2;
        if(h_confirm <= 30){
            h_confirm = 31;
        }
        $("#overlay_popup, #popup_component").show();
        $("#pos_popup").css('top',$(window).scrollTop() + h_confirm);
        $("#popup_component").css('left',0);
    });
}


$(document).ready(function() {
    $(window).scrollTop(0);
    var height_w = $( window ).height();
    //click Tạo hồ sơ
    $(".show_s11_2_tao_ho_so").click(function(e){
        $("#popup_tao_ho_so_tung_buoc_lan_dau, #popup_xem_truoc_ho_so_dinh_kem, #popup_regis_successfull").html('');
        $("#popup_ntv_register").load("/common/box_taohoso", function() {
            //load popup confirm
            var h_win_2 = height_w/2;
            var h_pop_confirm_2 = $("#popup_content_successfull").height()/2;
            var h_confirm = h_win_2 - h_pop_confirm_2;

            $("#overlay_popup, #popup_component_successfull").show();
            $("#pos_popup_successfull").css('top',$(window).scrollTop() + h_confirm);
            $("#pos_popup_successfull").css('left',0);

            $("#overlay_popup, #popup_component_successfull").show();
        });
    });
    $(".show_s11_2_chua_co_hoso").click(function(e){
        $("#popup_tao_ho_so_tung_buoc_lan_dau, #popup_xem_truoc_ho_so_dinh_kem, #popup_regis_successfull").html('');
        $("#popup_ntv_register").load("/common/box_taohoso?chuacohoso=1", function() {
            //load popup confirm
            var h_win_2 = height_w/2;
            var h_pop_confirm_2 = $("#popup_content_successfull").height()/2;
            var h_confirm = h_win_2 - h_pop_confirm_2;

            $("#overlay_popup, #popup_component_successfull").show();
            $("#pos_popup_successfull").css('top',$(window).scrollTop() + h_confirm);
            $("#pos_popup_successfull").css('left',0);

            $("#overlay_popup, #popup_component_successfull").show();
        });
    });
});

 $(".show_s11_2_co_nhieu_hoso").click(function(e){
    $("#popup_tao_ho_so_tung_buoc_lan_dau, #popup_xem_truoc_ho_so_dinh_kem, #popup_regis_successfull").html('');
    $("#popup_ntv_register").load("/tintimviec/chon1hoso", function() {
         //load popup confirm
        $("#overlay_popup, #popup_component").show();
        var height_wd = $( window ).height()/2;
        var height_p  = $( "#popup_content" ).height()/2;
       $("#overlay_popup, #popup_component").show();
        $("#pos_popup").css('top',$(window).scrollTop() + 13);
        $("#pos_popup").css('left',0);
        $(".regis_content").css('width', 599);
    });
});

function kiem_tra_do_manh_mat_khau(obj){
    var mat_khau = obj.value;
    var do_dai_mat_khau = mat_khau.length;
    var thong_bao = '';
    /*if (do_dai_mat_khau == 0) {
        thong_bao = '<span class="color-mk-y">Mật khẩu yếu</span>';
    }*/
    if (do_dai_mat_khau > 0 && do_dai_mat_khau < 6) {
        thong_bao = '<span class="color-mk-y">Mật khẩu yếu</span>';
    }
    if (do_dai_mat_khau >= 6 && do_dai_mat_khau < 10) {
        thong_bao = '<span class="color-mk-tb">Mật khẩu trung bình</span>';
    }
    if (do_dai_mat_khau >= 10) {
        thong_bao = '<span class="color-mk-m">Mật khẩu mạnh</span>';
    }
    if (mat_khau == '123456') {
        thong_bao = '<span class="color-mk-y">Mật khẩu quá đơn giản</span>';
    }
    $("#warning_pass").html(thong_bao);
}


function show_bangcap_edit (id) {
    if (!$("#bangcap-edit-form-"+id).exists()) {
        //class="listnews new-bangcap"
        $('#bangcap-view-'+id).append('<div id="div-bangcap-edit-'+id+'" ></div>');
        $("#div-bangcap-edit-"+id).hide().load("/tintimviec/bangcap?edit_form="+id, function() {
            $(this).fadeIn();
        });
    };
}
function delete_bangcap (id) {
    if (confirm('Bạn có chắc muốn xóa mục này không?')) {
        $.ajax({
            type: 'get',
            dataType : 'json',
            url: '/tintimviec/bangcap?delete='+id,
            mimeType:"multipart/form-data",
            processData: false,
            contentType: false,
            success: function(data, textStatus, jqXHR) {
                if (data.error == 0) { // thanh cong
                    $("#bangcap-view-"+id).fadeOut().remove();
                    $("#quantri-bangcap-view-"+id).fadeOut().remove();
                } else {
                    alert('Xóa không thành công!');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Đã có lỗi hệ thống. Vui lòng thử lại');
            }
        });
    };
}


function show_ngoaingu_edit (id) {
    if (!$("#ngoaingu-edit-form-"+id).exists()) {
        //class="listnews new-ngoaingu"
        $('#ngoaingu-view-'+id).append('<div id="div-ngoaingu-edit-'+id+'" ></div>');
        $("#div-ngoaingu-edit-"+id).hide().load("/tintimviec/ngoaingu?edit_form="+id, function() {
            $(this).fadeIn();
        });
    };
}
function delete_ngoaingu (id) {
    if (confirm('Bạn có chắc muốn xóa mục này không?')) {
        $.ajax({
            type: 'get',
            dataType : 'json',
            url: '/tintimviec/ngoaingu?delete='+id,
            mimeType:"multipart/form-data",
            processData: false,
            contentType: false,
            success: function(data, textStatus, jqXHR) {
                if (data.error == 0) { // thanh cong
                    $("#ngoaingu-view-"+id).fadeOut().remove();
                    $("#quantri-ngoaingu-view-"+id).fadeOut().remove();
                } else {
                    alert('Xóa không thành công!');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Đã có lỗi hệ thống. Vui lòng thử lại');
            }
        });
    };
}
function show_tinhoc_edit (id) {
    if (!$("#tinhoc-edit-form-"+id).exists()) {
        //class="listnews new-tinhoc"
        $('#tinhoc-view-'+id).append('<div id="div-tinhoc-edit-'+id+'" ></div>');
        $("#div-tinhoc-edit-"+id).hide().load("/tintimviec/tinhoc?edit_form="+id, function() {
            $(this).fadeIn();
        });
    };
}
function delete_tinhoc (id) {
    if (confirm('Bạn có chắc muốn xóa mục này không?')) {
        $.ajax({
            type: 'get',
            dataType : 'json',
            url: '/tintimviec/tinhoc?delete='+id,
            mimeType:"multipart/form-data",
            processData: false,
            contentType: false,
            success: function(data, textStatus, jqXHR) {
                if (data.error == 0) { // thanh cong
                    $("#tinhoc-view-"+id).fadeOut().remove();
                    $("#quantri-tinhoc-view-"+id).fadeOut().remove();
                    $('#div-frm-tinhoc').removeClass("display_none").fadeIn();
                    $('#div-frm-tinhoc div.iradio_square-blue').removeClass('checked');
                    $('#div-frm-tinhoc div.iradio_square-green').removeClass('checked');
                    $('.input_capdo_tinhoc').each(function(index, el) {
                        var v = $(this).attr('relval');
                        $(this).val(v);
                    });
                    show_button_add_tinhoc();
                } else {
                    alert('Xóa không thành công!');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Đã có lỗi hệ thống. Vui lòng thử lại');
            }
        });
    };
}


function show_kinhnghiem_edit (id) {
    if (!$("#kinhnghiem-edit-form-"+id).exists()) {
        //class="listnews new-kinhnghiem"
        $('#kinhnghiem-view-'+id).append('<div id="div-kinhnghiem-edit-'+id+'" ></div>');
        $("#div-kinhnghiem-edit-"+id).hide().load("/tintimviec/kinhnghiem?edit_form="+id, function() {
            $(this).fadeIn();
        });
    };
}
function delete_kinhnghiem (id) {
    if (confirm('Bạn có chắc muốn xóa mục này không?')) {
        $.ajax({
            type: 'get',
            dataType : 'json',
            url: '/tintimviec/kinhnghiem?delete='+id,
            mimeType:"multipart/form-data",
            processData: false,
            contentType: false,
            success: function(data, textStatus, jqXHR) {
                if (data.error == 0) { // thanh cong
                    $("#kinhnghiem-view-"+id).fadeOut().remove();
                    $("#quantri-kinhnghiem-view-"+id).fadeOut().remove();
                } else {
                    alert('Xóa không thành công!');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Đã có lỗi hệ thống. Vui lòng thử lại');
            }
        });
    };
}


function show_kynang_edit (id) {
    if (!$("#kynang-edit-form-"+id).exists()) {
        //class="listnews new-kynang"
        $('#kynang-view-'+id).append('<div id="div-kynang-edit-'+id+'" ></div>');
        $("#div-kynang-edit-"+id).hide().load("/tintimviec/kynang?edit_form="+id, function() {
            $(this).fadeIn();
        });
    };
}
function delete_kynang (id) {
    if (confirm('Bạn có chắc muốn xóa mục này không?')) {
        $.ajax({
            type: 'get',
            dataType : 'json',
            url: '/tintimviec/kynang?delete='+id,
            mimeType:"multipart/form-data",
            processData: false,
            contentType: false,
            success: function(data, textStatus, jqXHR) {
                if (data.error == 0) { // thanh cong
                    $("#kynang-view-"+id).fadeOut().remove();
                    $("#quantri-kynang-view-"+id).fadeOut().remove();
                } else {
                    alert('Xóa không thành công!');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Đã có lỗi hệ thống. Vui lòng thử lại');
            }
        });
    };
}





function show_thamkhao_edit (id) {
    if (!$("#thamkhao-edit-form-"+id).exists()) {
        //class="listnews new-thamkhao"
        $('#thamkhao-view-'+id).append('<div id="div-thamkhao-edit-'+id+'" ></div>');
        $("#div-thamkhao-edit-"+id).hide().load("/tintimviec/thamkhao?edit_form="+id, function() {
            $(this).fadeIn();
        });
    };
}
function delete_thamkhao (id) {
    if (confirm('Bạn có chắc muốn xóa mục này không?')) {
        $.ajax({
            type: 'get',
            dataType : 'json',
            url: '/tintimviec/thamkhao?delete='+id,
            mimeType:"multipart/form-data",
            processData: false,
            contentType: false,
            success: function(data, textStatus, jqXHR) {
                if (data.error == 0) { // thanh cong
                    $("#thamkhao-view-"+id).fadeOut().remove();
                    $("#quantri-thamkhao-view-"+id).fadeOut().remove();
                } else {
                    alert('Xóa không thành công!');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Đã có lỗi hệ thống. Vui lòng thử lại');
            }
        });
    };
}



$(document).ready(function() {
    // load_box_taohoson_tungbuoc_landau();


    registerSocialComplete = function() {
        $("#popup_tao_ho_so_tung_buoc_lan_dau, #popup_tao_ho_so_dinh_kem, #popup_xem_truoc_ho_so_dinh_kem, #popup_regis_successfull").html('');
        $("#popup_ntv_register").load("/taikhoan/register_social_complete", function() {
            $("#overlay_popup, #popup_component").show();
            $("#pos_popup").css('top',$(window).scrollTop() + 13);
            $("#pos_popup").css('left',0);
            $(".regis_content").css('height', scroll_h);

            $("#overlay_popup, #popup_component").show();
        });
    } ;
});




function checkValidHoSo () {
    var isCheck = true;
    var focus = false;
    var id_form = 'div-frm-hoso';

    $('.inputTextTop, .inputTxtAreaTop').each(function (){
        if($(this).val().trim() == '') {
            isCheck = false;
            $(this).parent().next('div.invalid-msg').removeClass('display_none');
            $(this).parent().next('div.invalid-msg').html("<span class='error_reg_mess_icon'></span>Vui lòng nhập vào các trường yêu cầu!");
            if(!focus) {
                $('#cols-right').scrollTo2("."+id_form+" #"+ $(this).attr('id'));
                focus = true;
            }
        }else{
            $(this).parent().next('div.invalid-msg').addClass('display_none');
            $(this).parent().next('div.invalid-msg').html('');
        }
    });

    $('.reqCheckBoxTopKn').each(function (){
        if ($(this).find('option:selected').val() == 0) {
            isCheck = 0;
            $(this).parent().parent().next('div.invalid-msg').removeClass('display_none');
            $(this).parent().parent().next('div.invalid-msg').html("<span class='error_reg_mess_icon'></span>Vui lòng nhập vào các trường yêu cầu!");
            if(!focus) {
                $('#cols-right').scrollTo2("."+id_form+" #"+ $(this).attr('id'));
                focus = true;
            }
        }else{
            $(this).parent().parent().next('div.invalid-msg').addClass('display_none');
            $(this).parent().parent().next('div.invalid-msg').html('');
        }
    });

    if (!isCheck){
        return false;
    }else{
        return true;
    }
}



function show_button_add_tinhoc () {
    if ($('.tinhoc-view-div').length > 0 ) {
        $('#div-add-tinhoc').addClass('display_none');
    }else{
        $('#div-add-tinhoc').removeClass('display_none');
    }
}


function lam_moi_ttv (id) {
    var datapost = new FormData();
    datapost.append( 'id', id );
    $.ajax({
        type: 'post',
        dataType : 'json',
        url: '/tintimviec/lammoi',
        data: datapost,
        mimeType:"multipart/form-data",
        processData: false,
        contentType: false,
        success: function(data, textStatus, jqXHR) {
            if (data.error == 0) { // thanh cong
                alert('Làm mới hồ sơ thành công');
            } else {
                alert(data.message);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert('Đã có lỗi hệ thống. Vui lòng thử lại');
        }
    });
}

function reload_action () {

    // dong mo item
    $('.thu_gon_box').unbind("click");
    $('.thu_gon_box').bind("click",function() {
        $(this).parent().parent().parent().find('.box-large').slideToggle( "fast" );
        $(this).parent().parent().parent().find('.box-mini').slideToggle( "fast" );
        $('.box_trinhdo').removeClass('hasBoxOpened');
        box_open = 0;
    });
    $('.box-mini .info').unbind("click");
    $('.box-mini .info').bind("click",function() {
        $('.box_trinhdo').removeClass('hasBoxOpened');
        $('.box-large').slideUp( "fast" );
        $('.box-mini').slideDown( "fast" );
        $(this).parent().parent().parent().find('.box-mini').slideUp( "fast" );
        $(this).parent().parent().parent().find('.box-large').slideDown( "fast" );
        $(this).parent().parent().parent().parent().parent().addClass('hasBoxOpened');
        setTimeout(function(){
          box_open = 1;
        }, 100);
    });
}

function open_popup_tintuyendung(id,id_goc) {
    var height_w = $( window ).height();
    if ( $("#popup_tao_ho_so_sua_tin_tuyen_dung" ).length ) {
        $div_insert_html = $("#popup_tao_ho_so_sua_tin_tuyen_dung");
    } else if ( $(".popup_tao_ho_so_sua_tin_tuyen_dung" ).length ) {
        $div_insert_html = $(".popup_tao_ho_so_sua_tin_tuyen_dung");
    } else if ( $("#popup_ntv_register" ).length ) {
        $div_insert_html = $("#popup_ntv_register");
    }
    if (id_goc == undefined)
        id_goc = 0;
    $div_insert_html.load("/tintuyendung/edit?id="+id+"&id_goc="+id_goc, function() {
        //load popup confirm
        var h_win_2 = height_w/2;
        var h_pop_confirm_2 = $("#popup_content").height()/2;
        var h_confirm = h_win_2 - h_pop_confirm_2;

        $("#overlay_popup, #popup_component").show();
        $("#pos_popup").css('top',$(window).scrollTop() + h_confirm);
        $("#popup_component").css('left', 0);
    });
}


function open_popup_guiphanhoi(list_id) {
    if (list_id && list_id != "") {
        $("#popup_ntv_register").load("/nhatuyendung/guiphanhoi?list_id_display="+list_id, function() {
            $("#overlay_popup, #popup_component").show();
            var height_wd = $( window ).height()/2;
            var height_p  = $( "#popup_content" ).height()/2;
            var top_p     = height_wd -height_p;
            $("#pos_popup").css('top', top_p);
            $("#pos_popup").css('left', 0);

            $("#overlay_popup, #popup_component").show();
        });
    } else {
        alert("Bạn phải chọn tin ứng tuyển");
        return false;
    }
}
function open_popup_thongbao_taikhoan_free(msg) {
    var padding_h = $('.regis_header').height();
    var padding_f = $('.regis_footer').height();
    var height_w = $( window ).height();
    var scroll_h = height_w - (padding_f + padding_h + 50);
    $("#popup_ntv_register").load("/common/thongbao_taikhoan_free?msg="+msg, function() {
        //load popup confirm
        var h_win_2 = height_w/2;
        var h_pop_confirm_2 = $("#popup_content").height()/2;
        var h_confirm = h_win_2 - h_pop_confirm_2;

        $("#pos_popup").css('top',$(window).scrollTop() + h_confirm/2);
        $("#pos_popup").css('left',0);

        $("#overlay_popup, #popup_component").show();

        //close confirm
        $(".btn_close").click(function(){
            //hide popup dang ky
            $("#overlay_popup, #popup_component").hide();
            $("#popup_ntv_register").html('');
        });
    });
}
function validateTel(value_tel){
    var filter = /^[0-9+\ \.\,\\\/-]+$/;
    if (filter.test(value_tel)) {
        return true;
    }
    else {
        return false;
    }
}

function popup_hotline()
{
    $("#popup_ntv_register, .popup_ntd_register").load("/common/hotline", function() {
        $("#overlay_popup, #popup_component").show();
        var height_wd = $( window ).height()/2;
        var height_p  = $( "#popup_content" ).height()/2;
        var top_p     = height_wd -height_p;
        $("#overlay_popup, #popup_component").show();
        $("#pos_popup").css('top', top_p);
        $("#pos_popup").css('left', 0);
    });
}

$(document).ready(function() {
    $(".btn_ntd_dang_ky_tu_van, .show_s09b_ntd_register").click(function(e){
        $("#popup_ntv_register").load("/common/ntd_dang_ky_tu_van", function() {
            $("#overlay_popup, #popup_component").show();
            var height_wd = $( window ).height()/2;
            var height_p  = $( "#popup_content" ).height()/2;
            var top_p     = height_wd -height_p;
            $("#pos_popup").css('top', top_p);
            $("#pos_popup").css('left', 0);

            $("#overlay_popup, #popup_component").show();
        });
    });

    $(".btn_ntv_dang_ky_tu_van, .show_s09_ntv_register").click(function(e){
        $("#popup_ntv_register").load("/common/ntv_dang_ky_tu_van", function() {
            $("#overlay_popup, #popup_component").show();
            var height_wd = $( window ).height()/2;
            var height_p  = $( "#popup_content" ).height()/2;
            var top_p     = height_wd -height_p;
            $("#pos_popup").css('top', top_p);
            $("#pos_popup").css('left', 0);

            $("#overlay_popup, #popup_component").show();
        });
    });
});

function bodauTiengViet(str) {
    str= str.toLowerCase();
    str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
    str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
    str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
    str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
    str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
    str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
    str= str.replace(/đ/g,"d");
    return str;
}

function bodauTiengVietUnicodeToHop(str) {
    str= str.toLowerCase();
    str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
    str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
    str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
    str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
    str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
    str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
    str= str.replace(/đ/g,"d");
    return str;
}

function reload_selectbox() {

$("select.select-style").size() > 0 && $("select.select-style").each(function() {
    var e = $(this).attr("data-maximum"),
        o = $(this).attr("data-disS");
        c = $(this).attr("data-select-class");
    void 0 != e ? $(this).select2({
        maximumSelectionSize: e,
        allowClear: !0,
        dropdownCssClass: $(this).attr("name"),
        formatResult: t,
        formatSelection: t,
        escapeMarkup: function (t) {
            return t
        }
    }) : void 0 != o ? $(this).select2({
        maximumSelectionSize: e,
        allowClear: !0,
        dropdownCssClass: $(this).attr("name"),
        formatResult: t,
        formatSelection: t,
        minimumResultsForSearch: -1
    }) : void 0 != c ? $(this).select2({
        allowClear: !0,
        dropdownCssClass: c,
        formatResult: t,
        formatSelection: t,
        escapeMarkup: function (t) {
            return t
        }
    }) : $(this).select2({
        allowClear: !0,
        dropdownCssClass: $(this).attr("name"),
        formatResult: t,
        formatSelection: t,
        escapeMarkup: function (t) {
            return t
        }
    });
});
}
function show_popup_thanh_cong(msg,id_ttv) {
    $("#popup_tao_ho_so_thanh_cong, .popup_tao_ho_so_thanh_cong").load("/tintimviec/danghosothanhcong?msg="+msg+"&id_ttv="+id_ttv, function () {

        //load popup confirm
        var height_w = $( window ).height();
        var h_win_2 = height_w / 2;
        var h_pop_confirm_2 = $("#popup_content_successfull").height() / 2;

        var h_confirm = h_win_2 - h_pop_confirm_2;

        $("#overlay_popup, #popup_component_successfull").show();
        $("#popup_content_successfull").css('top', ($(window).scrollTop() + h_confirm) - 5);
        $("#popup_content_successfull").css('left', 0);

        //close confirm
        $(".btn_close").click(function () {
            //hide popup dang ky
            $("#overlay_popup, #popup_component_successfull").hide();
        });
    });
}
function xem_ho_so_mau() {
    $("#popup_ntv_register, .popup_ntd_register").load("/tintimviec/hosomau", function() {
        $("#overlay_popup, #popup_component").show();
        var height_wd = $( window ).height()/2;
        var height_p  = $( "#popup_content" ).height()/2;
        var top_p     = height_wd -height_p;
        $("#pos_popup").css('top', 13);
        $("#popup_content").css('top', '20px');
        $("#pos_popup").css('left', 0);
        $("#overlay_popup, #popup_component").show();
    });
}



function fn_setTimeout_daluu() {
    setTimeout(function() {
    var trang_thai = $('input.trang_thai_tuyen_dung');


     $(".btn_excel_daluu").click(function(e){
        window.location = '/nhatuyendung/taoFileExcel?da_luu=1';
    });

    trang_thai.on('ifChecked ifUnchecked', function(event) {
        if (event.type == 'ifChecked') {
            var status = $(this).val();
            var ttd_uv = $(this).attr("data-ttduv");
            $.ajax({
                type: 'post',
                dataType : 'json',
                url: '/nhatuyendung/changeStatusResume?status='+status+'&ttd_uv='+ttd_uv,
                data: {status: status,ttd_uv:ttd_uv},
                mimeType:"multipart/form-data",
                processData: false,
                contentType: false,
                success: function(data, textStatus, jqXHR) {
                    if (data.error == 'DA_CAP_NHAT_UNG_VIEN') { // thanh cong
                        //alert('Đã cập nhật trạng thái thành công!');
                        //location.reload();
                    } else {
                        alert(data.message);
                        //location.reload();
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Đã có lỗi hệ thống. Vui lòng thử lại');
                }
            });
        }
    })
    },500);
}


function kiem_tra_form_co_thongtin (id_form) {
    var has_value = false;
    if($('#'+id_form).length == 0) return false;
    $('#'+id_form+' input').each(function () {
        type = $(this).attr('type');
        if (type == 'radio' || type == 'checkbox') {
            if ($(this).prop("checked")) {
                has_value = true;
            }
        }else if(type != 'hidden'){
            if ($(this).val() != '') {
                has_value = true;
            };
        }
    });
    $('#'+id_form+' textarea').each(function () {
        if ($(this).val() != '') {
            has_value = true;
        };
    });
    $('#'+id_form+' select').each(function () {
        if ($(this).val() != '' && $(this).val() != '0') {
            has_value = true;
        };
    });
    return has_value;
}
function bao_loi_element (id_element) {
    if($('#'+id_element).length == 0) return false;
    $('#'+id_element).closest('div.form-group').find('.error_reg_mess').html('<span class="error_reg_mess_icon"></span> Vui lòng điền đầy đủ thông tin').removeClass('display_none');
}
function xoa_loi_element (id_element) {
    if($('#'+id_element).length == 0) return false;
    $('#'+id_element).closest('div.form-group').find('.error_reg_mess').html('').addClass('display_none');
}
function xoa_loi_trong_form (id_form) {
    if($('#'+id_form).length == 0) return false;
    $('#'+id_form+' .main_message').html('').addClass('display_none');
    $('#'+id_form+ ' .error_reg_mess').html('').addClass('display_none');
}
function bao_loi_trong_form (id_form) {
    if($('#'+id_form).length == 0) return false;
    $('#'+id_form+' input.required').each(function () {
        if ($(this).val() == '') {
            bao_loi_element($(this).attr('id'));
        }else{
            xoa_loi_element($(this).attr('id'));
        }
    });
    $('#'+id_form+' textarea.required').each(function () {
        if ($(this).val() == '') {
            bao_loi_element($(this).attr('id'));
        }else{
            xoa_loi_element($(this).attr('id'));
        }
    });
    $('#'+id_form+' select.required').each(function () {
        var this_id = $(this).attr('id');
        if ($('#chk_c_cong_viec_hien_tai').prop("checked") && (this_id == 's2id_end_month' || this_id == 's2id_end_year' || this_id == 'end_month' || this_id == 'end_year')) {
            return true;
        };
        if ($(this).val() == '' || $(this).val() == '0') {
            bao_loi_element($(this).attr('id'));
        }else{
            xoa_loi_element($(this).attr('id'));
        }
    });
}

function yeu_cau_dien_form (id_form) {
    if($('#'+id_form).length == 0) return false;
    var main_message = $('#'+id_form+' .main_message').first();
    var form_id = main_message.closest('form').attr('id');
    $('#cols-right').scrollTo2('#'+form_id);
    main_message.removeClass('display_none').html('<span class="error_reg_mess_icon"></span> Vui lòng nhập đầy đủ các trường yêu cầu hoặc bấm Hủy').fadeIn();
    bao_loi_trong_form(id_form);
}


function getImageSize(img, callback){
    img = $(img);

    var wait = setInterval(function(){
        var w = img.width(),
            h = img.height();

        if(w && h){
            done(w, h);
        }
    }, 0);

    var onLoad;
    img.on('load', onLoad = function(){
        done(img.width(), img.height());
    });


    var isDone = false;
    function done(){
        if(isDone){
            return;
        }
        isDone = true;

        clearInterval(wait);
        img.off('load', onLoad);

        callback.apply(this, arguments);
    }
}

function show_popup_nop_hoso_act(id_ttd) {

    var height_w = $( window ).height();
    $("#popup_tao_ho_so_tung_buoc_lan_dau, #popup_tao_ho_so_dinh_kem, #popup_xem_truoc_ho_so_dinh_kem, #popup_regis_successfull").html('');
    $("#popup_ntv_register").load("/tintuyendung/nophoso_popup?id_ttd="+id_ttd, function() {
        //load popup confirm
        $("#overlay_popup, #popup_component_register_choice").show();
        var h_win_2 = height_w/2;
        var h_pop_confirm_2 = $("#popup_content_register_choice").height()/2;
        var h_confirm = h_win_2 - h_pop_confirm_2;

        //$("#overlay_popup, #popup_component_register").show();
        $("#pos_popup_register_choice").css('top',$(window).scrollTop() + h_confirm);
        $("#pos_popup_register_choice").css('left',0);
    });
}