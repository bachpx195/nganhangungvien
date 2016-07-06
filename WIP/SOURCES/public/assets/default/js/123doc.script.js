var runningBecomeVip = false;
var runningOutsourcing = false;

function popupPayment_open(paymentType) {
    $('.loggedin.popup_down').hide();
    $("body").find(".boxAddMoney").remove();
    var e = ($(window).width() - 800) / 2 - 50 + "px",
        t = '<div class="bg_transparent" onclick="closeBox();"></div><div class="boxAddMoney"></div>';
    $("body").append(t), $.ajax({
        url: "/user/top-up",
        type: "POST",
        dataType: "html",
        beforeSend: function() {
            $("<div id='loading-excel'></div>").appendTo("body")
        },
        complete: function() {
            $("#loading-excel").remove()
        },
        success: function(t) {
            $(".boxAddMoney").append(t);
            if(paymentType){
                showForm_addMoney($('a[data-rel=' + paymentType + ']'));
            }
        }
    })
}

function closeBox() {
    $("body").find(".boxAddMoney").remove(), $("body").find(".bg_transparent").remove()
}

function showForm_addMoney(e) {
    var t = $(e).attr("data-rel"),
        u = $(e).parents("ul.listOpt");
    $(".boxAddMoney_content").not("#" + t).addClass("hidden"), $(".boxAddMoney_content#" + t).removeClass("hidden"), u.find("li > a").not(e).removeClass("active"), $(e).addClass("active")
}

$(document).on('click', '.listOption_bankATM li a', function (e) {
    $('.listOption_bankATM li a').find("input[type=radio]").prop('checked', false);
    $(this).find("input[type=radio]").prop('checked', true);
});

function selectOptionMobile(e) {
    var t = $(e).find("input[type=radio]").attr("checked", "checked");
    $(e).parent().find("input[type=radio]").not(t).removeAttr("checked")
}

function pay_mobilecard() {
    if (!running_paymentMobilecard) {
        var e = $('input[name="ncc"]:checked'),
            t = $("#seri_popup").val();
        t = t.replace(/ /g, "");
        var u = $("#code_popup").val();
        u = u.replace(/ /g, "");
        var a = $("#captcha_popup_mc");
        return void 0 === e.val() ? void alert("Xin vui lòng chọn nhà mạng!") : "" === u ? (alert("Xin vui lòng nhập mã số thẻ!"), void $("#code_popup").focus()) : "" === t ? (alert("Xin vui lòng nhập số seri!"), void a.focus()) : (running_paymentMobilecard = !0, t = t, u = u, $("#pay-loading-mc").show(), $.ajax({
            url: "/user/pay",
            type: "POST",
            dataType: "json",
            data: {
                card_id: e.val(),
                seri_field: t,
                pin_field: u
            },
            beforeSend: function() {
                $(".btn_submit").css({
                    "background-color": "#00a888",
                    cursor: "text"
                }), $("<span class='loading_mn' /></span>").prependTo("a.btn_submit")
            },
            complete: function() {
                $(".loading_mn").remove(), $(".btn_submit").css({
                    "background-color": "#fa0",
                    cursor: "pointer"
                })
            },
            success: function(t) {
                if (t.success) {
                    if (running_paymentMobilecard = !1, $("#pay-loading-mc").hide(), void 0 !== t["employer"]) {
                        //$("#acc_main").text(t["employer"].balance);

                        //Reset top up form
                        $("#seri_popup").val("");
                        $("#code_popup").val("");
                        $("#captcha_popup_mc").val("");

                        alert("Chúc mừng bạn đã nạp thẻ thành công! \nSố tiền trong tài khoản của bạn: " + t["employer"].balance + " VNĐ");
                    }
                } else {
                    running_paymentMobilecard = !1;
                    alert(t.error);
                }
            },
            error: function(e) {
                running_paymentMobilecard = !1;
                alert("Có lỗi xảy ra, vui lòng thanh toán lại !");
            }
        }), void 0)
    }
}

function pay_atm(e) {
    if (!running_paymentAtm) {
        var t = $('input[name="pm_atm"]:checked');
        var u = $('#pay-money-atm');
        var n = $("#phone_atm");

        return void 0 === t.val() ? void alert("Xin vui lòng chọn ngân hàng thanh toán!") : "" === u.val() ? void alert("Xin vui lòng nhập vào số tiền!") : "" === n.val() ? (alert("Xin vui lòng nhập vào số điện thoại!"),
            void n.focus()) : (running_paymentAtm = !0, $("#pay-loading-atm").show(), $.ajax({
            url: "/user/pay-atm",
            type: "POST",
            dataType: "json",
            data: {
                payer_phone_no: n.val(),
                bank_payment_method_id: t.val(),
                total_amount: u.val(),
            },
            beforeSend: function() {
                $(".btn_submit").css({
                    "background-color": "#00a888",
                    cursor: "text"
                }), $("<span class='loading_mn' /></span>").prependTo("a.btn_submit")
            },
            complete: function() {
                $(".loading_mn").remove(), $(".btn_submit").css({
                    "background-color": "#fa0",
                    cursor: "pointer"
                })
            },
            success: function(e) {
                running_paymentAtm = !1;
                if (e.success) {
                    $("#pay-loading-atm").hide();
                    window.top.location.href = e.baokimUrl
                } else {
                    alert(e.error);
                }
            },
            error: function(e) {
                running_paymentAtm = !1;
                alert("Có lỗi xảy ra, vui lòng thanh toán lại !");
            }
        }), void 0)
    }
}

function become_vip(e)
{
    if (!runningBecomeVip) {
        var fullName = $('#become-vip').find('input[name="full_name"]').val();
        var companyName = $('#become-vip').find('input[name="company_name"]').val();
        var email = $('#become-vip').find('input[name="email"]').val();
        var phoneNumber = $('#become-vip').find('input[name="phone_number"]').val();
        var address = $('#become-vip').find('input[name="address"]').val();

        return "" == fullName ? void swal("Lỗi", "Xin vui lòng nhập người liên hệ!", "error") : "" == companyName ? void swal("Lỗi", "Xin vui lòng tên công ty!", "error") : "" == email ? void swal("Lỗi", "Xin vui lòng nhập email!", "error")
            : "" == phoneNumber ? swal("Lỗi", "Xin vui lòng nhập số điện thoại!", "error") : "" == address ? (swal("Lỗi", "Xin vui lòng nhập địa chỉ!", "error"),
            void n.focus()) : (runningBecomeVip = !0, $("#pay-loading-atm").show(), $.ajax({
            url: "/user/become-vip",
            type: "POST",
            dataType: "json",
            data: {
                fullName: fullName,
                companyName: companyName,
                email: email,
                phoneNumber: phoneNumber,
                address: address
            },
            beforeSend: function() {
                $(".become-vip-btn").css({
                    "background-color": "#00a888",
                    cursor: "text"
                }), $("<span class='loading_mn' /></span>").prependTo("a.btn_submit")
            },
            success: function(e) {
                runningBecomeVip = !1;
                if (e.success) {
                    $("#pay-loading-atm").hide();
                    swal("Thành công!", "Thông tin của bạn đã được gửi tới nhà quản trị!", "success");
                } else {
                    alert(e.error);
                }
            },
            error: function(e) {
                runningBecomeVip = !1;
                swal("Lỗi", "Có lỗi xảy ra, vui lòng nhập lại thông tin!", "error")
            }
        }), void 0)
    }
}

function outsourcing(e)
{
    if (!runningOutsourcing) {
        var fullName = $('#outsourcing').find('input[name="full_name"]').val();
        var companyName = $('#outsourcing').find('input[name="company_name"]').val();
        var email = $('#outsourcing').find('input[name="email"]').val();
        var phoneNumber = $('#outsourcing').find('input[name="phone_number"]').val();
        var address = $('#outsourcing').find('input[name="address"]').val();

        return "" == fullName ? void swal("Lỗi", "Xin vui lòng nhập người liên hệ!", "error") : "" == companyName ? void swal("Lỗi", "Xin vui lòng tên công ty!", "error") : "" == email ? void swal("Lỗi", "Xin vui lòng nhập email!", "error")
            : "" == phoneNumber ? swal("Lỗi", "Xin vui lòng nhập số điện thoại!", "error") : "" == address ? (swal("Lỗi", "Xin vui lòng nhập địa chỉ!", "error"),
            void n.focus()) : (runningOutsourcing = !0, $("#pay-loading-atm").show(), $.ajax({
            url: "/user/outsourcing",
            type: "POST",
            dataType: "json",
            data: {
                fullName: fullName,
                companyName: companyName,
                email: email,
                phoneNumber: phoneNumber,
                address: address
            },
            beforeSend: function() {
                $(".become-vip-btn").css({
                    "background-color": "#00a888",
                    cursor: "text"
                }), $("<span class='loading_mn' /></span>").prependTo("a.btn_submit")
            },
            success: function(e) {
                runningOutsourcing = !1;
                if (e.success) {
                    $("#pay-loading-atm").hide();
                    swal("Thành công!", "Thông tin của bạn đã được gửi tới nhà quản trị!", "success");
                } else {
                    alert(e.error);
                }
            },
            error: function(e) {
                runningOutsourcing = !1;
                swal("Lỗi", "Có lỗi xảy ra, vui lòng nhập lại thông tin!", "error")
            }
        }), void 0)
    }
}