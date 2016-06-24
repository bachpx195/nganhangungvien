function popupPayment_open() {
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
            $(".boxAddMoney").css("left", e).append(t)
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

                        alert("Chúc mừng bạn đã nạp thẻ thành công! \nSố tiền trong tài khoản của bạn: " + t["employer"].balance + ".000 VNĐ");
                    }
                } else {
                    running_paymentMobilecard = !1;
                    alert("Có lỗi xảy ra, vui lòng thanh toán lại !");
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
        if (void 0 !== e) return void alert("Báº¡n khÃ´ng thá»ƒ sá»­ dá»¥ng hÃ¬nh thá»©c nÃ y!");
        var t = $('input[name="pm_atm"]:checked'),
            u = $('input[name="pay_money_atm"]:checked'),
            a = $("#captcha_popup_atm"),
            o = $("#emal_atm"),
            n = $("#phone_atm");
        return void 0 === u.val() ? void alert("Xin vui lÃ²ng chá»n gÃ³i náº¡p tiá»n!") : void 0 === t.val() ? void alert("Xin vui lÃ²ng chá»n ngÃ¢n hÃ ng thanh toÃ¡n!") : "" === n.val() ? (alert("Xin vui lÃ²ng nháº­p sá»‘ Ä‘iá»‡n thoáº¡i!"), void n.focus()) : "" === a.val() ? (alert("Xin vui lÃ²ng nháº­p mÃ£ xÃ¡c nháº­n!"), void a.focus()) : (running_paymentAtm = !0, $("#pay-loading-atm").show(), $.ajax({
            url: "/users/ajax/aja_payment_atm.php",
            type: "POST",
            dataType: "json",
            data: {
                phone: n.val(),
                email: o.val(),
                bank: t.val(),
                money: u.val(),
                capcha: a.val()
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
                running_paymentAtm = !1, $("#pay-loading-atm").hide(), "" !== e.error && (alert(e.error), changeSecurity(), a.val("")), "" != e.url && (window.top.location.href = e.url)
            }
        }), void 0)
    }
}

function pay_bk(e) {
    if (!running_paymentBk) {
        if (void 0 !== e) return void alert("Báº¡n khÃ´ng thá»ƒ sá»­ dá»¥ng hÃ¬nh thá»©c nÃ y!");
        var t = $("#captcha_popup_bk"),
            u = $('input[name="pay_money_bk"]:checked');
        return void 0 === u.val() ? void alert("Xin vui lÃ²ng chá»n gÃ³i thuÃª bao!") : "" === t.val() ? (alert("Xin vui lÃ²ng nháº­p mÃ£ xÃ¡c nháº­n!"), void t.focus()) : (running_paymentBk = !0, $("#pay-loading-bk").show(), $.ajax({
            url: "/users/ajax/aja_payment_baokim.php",
            type: "POST",
            dataType: "json",
            data: {
                money: u.val(),
                capcha: t.val()
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
                running_paymentBk = !1, $("#pay-loading-bk").hide(), "" !== e.error && (alert(e.error), changeSecurity(), t.val("")), "" !== e.url && (window.top.location.href = e.url)
            }
        }), void 0)
    }
}

function pay_visa(e) {
    if (!running_paymentVisa) {
        if (void 0 !== e) return void alert("Báº¡n khÃ´ng thá»ƒ sá»­ dá»¥ng hÃ¬nh thá»©c nÃ y!");
        var t = $('input[name="pm_visa"]:checked'),
            u = $('input[name="pay_money_visa"]:checked'),
            a = $("#captcha_popup_visa"),
            o = $("#phone_visa"),
            n = $("#visa_fn"),
            r = $("#visa_ln");
        return void 0 === u.val() ? void alert("Xin vui lÃ²ng chá»n gÃ³i náº¡p tiá»n!") : void 0 === t.val() ? void alert("Xin vui lÃ²ng chá»n ngÃ¢n hÃ ng thanh toÃ¡n!") : "" === r.val() ? (alert("Xin vui lÃ²ng nháº­p há», tÃªn Ä‘á»‡m cá»§a báº¡n!"), void r.focus()) : "" === n.val() ? (alert("Xin vui lÃ²ng nháº­p tÃªn cá»§a báº¡n!"), void n.focus()) : "" === o.val() ? (alert("Xin vui lÃ²ng nháº­p sá»‘ Ä‘iá»‡n thoáº¡i!"), void o.focus()) : "" === a.val() ? (alert("Xin vui lÃ²ng nháº­p mÃ£ xÃ¡c nháº­n!"), void a.focus()) : (running_paymentVisa = !0, $("#pay-loading-visa").show(), $.ajax({
            url: "/users/ajax/aja_payment_visa.php",
            type: "POST",
            dataType: "json",
            data: {
                phone: o.val(),
                bank: t.val(),
                money: u.val(),
                capcha: a.val(),
                visa_fn: n.val(),
                visa_ln: r.val()
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
                running_paymentVisa = !1, $(".pu_error").html(e.error).show(), $("#pay-loading-visa").hide(), "" != e.error && (alert(e.error), changeSecurity(), a.val("")), "" !== e.url && (window.top.location.href = e.url)
            }
        }), void 0)
    }
}

function changeSecurity() {
    $(".security-code").attr("src", "/common/ajax/securitycode.php?securitycode=" + Math.random())
}

function downloadNotLogin(e) {
    colorbox(2, "/documents/popup/pop_download_not_login.php?docId=" + e, "Táº£i tÃ i liá»‡u", 725, 490, void 0, void 0)
}