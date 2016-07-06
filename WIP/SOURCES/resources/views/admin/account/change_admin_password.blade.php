@extends('global_admin')
<title>@lang('messages.site.title')</title>
@section('content')
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-lock"></i>Đổi mật khẩu </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>
            <a href="javascript:;" class="remove"> </a>
        </div>
    </div>
    <div class="profile">
        <!-- <div id="msg_success" class="alert alert-danger display-hide" style="display: block;"></div> -->
        <div id="msg_success" class="error_reg_mess pl_0 clearfix fs14 bolder text-center display_none" style="color:red;"></div>
        <form id="changePassword" name="changePassword" action="" enctype="multipart/form-data" method="post">
        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group"><label class="control-label" for="oldPassword">Mật khẩu cũ (<span
      			class="colorRed" style="color:red;">*</span>)</label><br>
                <input type="password" value="" name="oldPassword"
                  		id="oldPassword"
                        class="form-control"
                       	data-required-msg="Vui lòng nhập mật khẩu cũ">   
                <div id="error_oldPassword" style="color:red;" class="error_reg_mess pl_0 clearfix fs14 italic invalid-msg display_none"></div>            
            </div>

            <div class="form-group">
                <label class="control-label" for="newPassword">Mật khẩu mới (<span
      			class="colorRed" style="color:red;">*</span>)</label><br>
                <input type="password" value="" name="newPassword"
                  		id="newPassword"
                        class="form-control"
                       	data-required-msg="Vui lòng nhập mật khẩu cũ">
                <div id="error_newPassword" style="color:red;" class="error_reg_mess pl_0 clearfix fs14 italic invalid-msg display_none"></div>  
            </div>
            <div class="form-group">
                <label class="control-label" for="newPasswordConfirm">Nhập lại mật khẩu mới (<span class="colorRed" style="color:red;">*</span>)</label><br>
                <input type="password" value="" name="newPasswordConfirm"
                  		id="newPasswordConfirm"
                        class="form-control"
                        data-required-msg="Vui lòng nhập mật khẩu cũ">
                <div id="error_newPasswordConfirm" style="color:red;" class="error_reg_mess err_password pl_0 clearfix fs14 italic invalid-msg display_none"></div> 
            </div>
            <div class="margin-top-10">
                    <button class="btn btn-circle green" id="btnSave" type="submit" >Lưu mật khẩu mới</button>
                <button class="btn btn-circle grey-salsa btn-outline"
                        id="btnCancel" type="button" onClick="window.location='{{ route('admin') }}'">Huỷ
                </button>
            </div>
        </form>
    </div>
</div>
<script>
$(function() {
	jQuery("body")
	.on("click", "#btn-save", function(){

		$form = $(this).closest('form');

		var validator = $form.validate({
			ignore		: "",
			errorClass	: 'help-block has-error'
		});
	    if(validator.form()) {
	    	$form.submit();
	    } else {
	    }
	});
});
$(document).ready(function() {

    $("#btnSave").click(function () {

        var isOk = true;
        var oldPassword = document.getElementById("oldPassword").value;
        var newPassword = document.getElementById("newPassword").value;
        var newPasswordConfirm = document.getElementById("newPasswordConfirm").value;

        $('.inputText').each(function () {
            if ($(this).val().trim() == '') {
                isOk = false;
                $(this).parent().next('div.invalid-msg').removeClass('display_none');
                $(this).parent().next('div.invalid-msg').html("Vui lòng nhập vào các trường yêu cầu!");
            } else {
                $(this).parent().next('div.invalid-msg').addClass('display_none');
                $(this).parent().next('div.invalid-msg').html('');
            }
        });

        if (oldPassword == '') {
            $("#error_oldPassword").html("Vui lòng nhập vào mật khẩu cũ!");
            $("#error_oldPassword").removeClass('display_none');
            isOk = false;
        } else if (newPassword == '') {
            $("#error_newPassword").html("Vui lòng nhập vào mật khẩu mới!");
            $("#error_newPassword").removeClass('display_none');
            isOk = false;
        } else if (newPasswordConfirm == '') {
            $("#error_newPasswordConfirm").html("Vui lòng nhập vào xác nhận mật khẩu mới!");
            $("#error_newPasswordConfirm").removeClass('display_none');
            isOk = false;
        } else if ((newPassword != newPasswordConfirm) && (newPassword != '' && newPasswordConfirm != '')) {
            $(".err_password").html("Mật khẩu xác nhận không trùng khớp");
            $(".err_password").removeClass('display_none');
            isOk = false;
        } else {
            $(".err_password").html("");
            $(".err_password").addClass('display_none');
        }
        if (isOk == false) {
            return false;
        } else {
            var dataPost = new FormData($("#changePassword")[0]);
            var rs = false;
            console.log('post');
            $.ajax({
                type: 'post',
                dataType: 'json',
                async: false,
                url: "{{ route('user.account.changepassword') }}",
                data: dataPost,
                mimeType: "multipart/form-data",
                processData: false,
                contentType: false,
                success: function (data, textStatus, jqXHR) {
                    if (data.status == true) { // thanh cong
                        //hide popup dang ky
                        $('#msg_success').text(data.message);
                        $("#msg_success").removeClass('display_none');

                    } else {
                        $('[id^="error_"]').text('');
                        $('#msg_success').text(data.message);
                        $("#msg_success").removeClass('display_none');
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Đã có lỗi hệ thống. Vui lòng thử lại');
                    rs = false;
                }
            });
            return rs;
        }
    });
});
</script>

@endsection