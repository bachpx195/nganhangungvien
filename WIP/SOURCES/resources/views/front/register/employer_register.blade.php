@extends('front/global') @section('content')

<div class="content_dangky w800 bg_white mt16 box_shadow">
	<div class="block_ntv_dangky regis_header h_56" id="regis_header">
		<div class="w_50 floatLeft">
			<span class="title_ntd_dky "></span><span
				class="uppercase bold fs16 color_ntd_dky">Nhà Tuyển dụng Đăng ký</span>
		</div>
		<div class="w_50 floatLeft block-right-ntv txr">
			<span class="text-co-tai-khoan">Bạn đã có tài khoản? <a
				href="javascript:void(0)" class="text-dang-nhap underline">Đăng nhập</a></span>
		</div>
	</div>
	<div class="regis_content_1 w800">
		<div class="block-pop-dangky  pr0" id="regis_content">

			<div class="block-content" id="frm-login-info">
				<div class="mb8">
					<div class="center-p12p24 ">
						<form id="form_register" class="form-horizontal"
							enctype="multipart/form-data" method="POST">

							<input type="hidden" name="token-key" id="token-key"
								value="005f8c7788463f772945d56d8a00612b"> <input type="hidden"
								name="token-value" id="token-value"
								value="ed2ea114ead1dcd26b784c04df683cbb">
							<div id="block-thong-tin-dang-nhap" class="mb_30 pt_6">
								<div class="clear mb_14">
									<span class="title_info_login_ntd "></span><span
										class="fwb txt-color-363636 fs20">Thông tin đăng nhập</span>
								</div>
								<div class="require_info clearfix mb_10 italic">
									(<span class="colorRed">*</span>) Thông tin bắt buộc nhập
								</div>
								<!-- input email -->
								<div class="form-group clearfix mb_14">
									<label for="txt_email"
										class="control-label-info bold txt-color-363636 fs14 w180">
										Email <span class="colorRed">*</span>
									</label>
									<div class="register_fr_input_wd583">
										<input type="text" class="form-control input-lg2 color-input"
											id="txt_email" name="txt_email"
											placeholder="Ví dụ: abc@gmail.com; abc@yahoo.com">
									</div>
									<div class="mess_notice_fullname clearfix italic error_email"
										id="error_txt_email"></div>
								</div>

								<!-- input password -->
								<div class="form-group mb_14">
									<label for="txt_password"
										class="control-label-info bold txt-color-363636 fs14 w180">Mật
										khẩu <span class="colorRed">*</span>
									</label>
									<div class="fr-input-wd333">
										<input type="password"
											class="form-control input-lg2 color-input" id="txt_password"
											name="txt_password"
											onchange="kiem_tra_do_manh_mat_khau(this)" />
									</div>
									<div class="control-label-info bold fs14 italic"
										id="warning_pass"></div>
									<div class="error_reg_mess clearfix err_password display_none"
										id="error_txt_password"></div>
								</div>
								<!-- input repassword -->
								<div class="form-group mb_14">
									<label for="retype_password"
										class="control-label-info bold txt-color-363636 fs14 w180">Xác
										nhận lại mật khẩu <span class="colorRed">*</span>
									</label>
									<div class="fr-input-wd333">
										<input type="password"
											class="form-control input-lg2 color-input"
											id="retype_password" name="retype_password" />
									</div>
									<div
										class="error_reg_mess clearfix err_retype_password display_none"
										id="error_retype_password"></div>
								</div>
							</div>
							<div id="block-thong-tin-ca-nhan" class="mb_22">
								<div class="clear mb_18">
									<span class="title_info_login_ntd "></span><span
										class="fwb txt-ghi fs20">Thông tin công ty</span>
								</div>
								<!-- input Tên công ty  * -->
								<div class="form-group clearfix mb_12">
									<label for="company_name"
										class="control-label-info bold txt-color-363636 fs14 w180">
										Tên công ty <span class="colorRed">*</span>
									</label>
									<div class="register_fr_input_wd583">
										<input type="text" class="form-control input-lg2 color-input"
											id="company_name" name="company_name"
											placeholder="Ví dụ: Công ty cổ phần nguồn nhân lực Siêu Việt">
									</div>
									<div
										class="mess_notice_fullname clearfix require_req_fullname err_fullname">Ghi
										tên công ty đầy đủ và rõ ràng theo Giấy phép đăng ký kinh
										doanh</div>
									<div
										class="clearfix error_reg_mess clearfix fs14 italic invalid-msg-company_name display_none"
										id="error_company_name"></div>
								</div>

								<!-- input Quy mô công ty -->
								<div class="form-group mb_14">
									<label for="company_size"
										class="control-label-info bold txt-color-363636 fs14 w180">
										Quy mô công ty <span class="colorRed">*</span>
									</label>
									<div class="fr-input-wd333 select_style31 city_select">
										<div
											class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
											<select id="company_size" name="company_size"
												class="tinh_thanh_reg selectpicker box_select_filter_reg pos_relative select-style"
												data-disS="1">
												<option value="0">Chọn Quy mô công ty</option>
												<option value="1">Ít hơn 10 nhân viên</option>
												<option value="6">Từ 10 - 24 nhân viên</option>
												<option value="2">Từ 25 - 99 nhân viên</option>
												<option value="3">Từ 100 - 499 nhân viên</option>
												<option value="4">Từ 500 - 999 nhân viên</option>
												<option value="5">Trên 1000 nhân viên</option>
											</select>
										</div>
									</div>
									<div
										class="clearfix error_reg_mess clearfix fs14 italic error_qmcty display_none"
										id="error_company_size"></div>
								</div>

								<!-- input tel_co_dinh -->
								<div class="form-group mb_8">
									<label for="tel_co_dinh"
										class="control-label-info bold txt-color-363636 fs14 w180">Điện
										thoại cố định <span class="colorRed">*</span>
									</label>
									<div class="fr-input-wd333">
										<input type="text" class="form-control input-lg2 color-input"
											id="tel_co_dinh" name="tel_co_dinh" />
									</div>
									<div
										class="clearfix error_reg_mess clearfix fs14 italic invalid-msg-tel_co_dinh display_none"
										id="error_tel_co_dinh"></div>
								</div>

								<!-- input company_info -->
								<div class="form-group mb_16">
									<label for="company_info"
										class="control-label-info bold txt-color-363636 fs14 w180">Giới
										thiệu về công ty <span class="colorRed">*</span>
									</label>
									<div class="register_fr_input_wd583">
										<textarea
											class="form-control p14 inputTextArea txt-color-757575"
											id="company_info" name="company_info"
											placeholder="Hãy cung cấp những thông tin cơ bản như: năm thành lập, ngành nghề hoạt động chính, thành tựu đã đạt được, đính hướng phát triển tương lai..."
											rows="4"></textarea>
									</div>
									<div
										class="clearfix error_reg_mess clearfix fs14 italic invalid-about_company display_none"
										id="error_company_info"></div>
								</div>

								<!-- input company_address -->
								<div class="form-group">
									<label for="company_address"
										class="control-label-info bold txt-color-363636 fs14 w180">Địa
										chỉ công ty <span class="colorRed">*</span>
									</label>
									<div class="register_fr_input_wd583">
										<input type="text" class="form-control input-lg2 color-input"
											id="company_address" name="company_address"
											placeholder="Ví dụ: Số nhà 98A, phố Ngụy Như Kon Tum, phường Nhân Chính , quận Thanh Xuân" />
									</div>
									<div class="notice_address_detail clearfix err_address">Vui
										lòng nhập chi tiết địa chỉ của bạn bằng tiếng Việt có dấu.</div>
									<div
										class="clearfix error_reg_mess clearfix fs14 italic invalid-msg-address display_none"
										id="error_company_address"></div>
								</div>
								<!-- input Tỉnh/thành phố * -->
								<div class="form-group mb_16">
									<label for="city_id"
										class="control-label-info bold txt-ghi fs14 w180">Tỉnh/thành
										phố <span class="colorRed">*</span>
									</label>
									<div class="fr-input-wd333 select_style31 city_select">
										<div
											class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
											<select id="city_id" name="tinh_thanh_reg"
												class="tinh_thanh_reg selectpicker box_select_filter_reg pos_relative select-style"
												tabindex="-1">
												<option value="0">Chọn Tỉnh thành</option>
												<option value="2">Hà Nội</option>
												<option value="1">TP. HCM</option>
												<option value="99">Nước ngoài</option>
												<option value="23">Đà Nẵng</option>
												<option value="9">Bình Dương</option>
												<option value="21">Cần Thơ</option>
												<option value="22">Hải Phòng</option>
												<option value="53">Bà Rịa - Vũng Tàu</option>
												<option value="92">Bắc Kạn</option>
												<option value="94">Thừa Thiên Huế</option>
												<option value="91">Bắc Giang</option>
												<option value="32">Bắc Ninh</option>
												<option value="93">Bạc Liêu</option>
												<option value="90">Bến Tre</option>
												<option value="89">Bình Định</option>
												<option value="88">Bình Phước</option>
												<option value="87">Bình Thuận</option>
												<option value="86">Cà Mau</option>
												<option value="85">Cao Bằng</option>
												<option value="84">Cửu Long</option>
												<option value="83">Đắc Lắc</option>
												<option value="82">Đắc Nông</option>
												<option value="52">An Giang</option>
												<option value="81">Điện Biên</option>
												<option value="19">Đồng Nai</option>
												<option value="80">Đồng Tháp</option>
												<option value="79">Gia Lai</option>
												<option value="78">Hà Giang</option>
												<option value="77">Hà Nam</option>
												<option value="76">Hà Tĩnh</option>
												<option value="27">Hải Dương</option>
												<option value="75">Hậu Giang</option>
												<option value="74">Hòa Bình</option>
												<option value="26">Hưng Yên</option>
												<option value="73">Khánh Hòa</option>
												<option value="72">Kiên Giang</option>
												<option value="71">Kon Tum</option>
												<option value="70">Lai Châu</option>
												<option value="69">Lạng Sơn</option>
												<option value="68">Lào Cai</option>
												<option value="67">Lâm Đồng</option>
												<option value="66">Long An</option>
												<option value="65">Nam Định</option>
												<option value="64">Nghệ An</option>
												<option value="63">Ninh Bình</option>
												<option value="62">Ninh Thuận</option>
												<option value="61">Phú Thọ</option>
												<option value="60">Phú Yên</option>
												<option value="59">Quảng Bình</option>
												<option value="58">Quảng Nam</option>
												<option value="30">Quảng Ngãi</option>
												<option value="57">Quảng Ninh</option>
												<option value="56">Quảng Trị</option>
												<option value="55">Sóc Trăng</option>
												<option value="54">Sơn La</option>
												<option value="51">Tây Ninh</option>
												<option value="50">Thái Bình</option>
												<option value="49">Thái Nguyên</option>
												<option value="48">Thanh Hóa</option>
												<option value="47">Tiền Giang</option>
												<option value="46">Trà Vinh</option>
												<option value="45">Tuyên Quang</option>
												<option value="44">Vĩnh Long</option>
												<option value="43">Vĩnh Phúc</option>
												<option value="42">Yên Bái</option>
												<option value="95">Toàn quốc</option>
												<option value="96">Miền Bắc</option>
												<option value="98">Miền Nam</option>
												<option value="97">Miền Trung</option>
											</select>
										</div>
									</div>
									<div class="error_reg_mess clearfix err_city display_none"
										id="error_tinh_thanh_reg"></div>
								</div>

								<!-- input website -->
								<div class="form-group mb1 input-phone">
									<label for="website"
										class="control-label-info bold txt-ghi fs14 w180">Website </label>
									<div class="fr-input-wd333">
										<input type="text" class="form-control input-lg2 color-input"
											id="website" name="website" />
									</div>
									<div
										class="clearfix error_reg_mess clearfix fs14 italic invalid-msg-website display_none"
										id="error_website"></div>
								</div>


							</div>

							<div id="block-thong-tin-quan-tam" class="mb_16 pt_6">
								<div class="clear mb_20">
									<span class="title_info_login_ntd "></span><span
										class="fwb txt-color-363636 fs20">Thông tin chủ tài khoản</span>
								</div>

								<!-- input Tên người liên hệ -->
								<div class="form-group mb1 input-phone mb_10">
									<label for="contact_name"
										class="control-label-info bold txt-ghi fs14 w180">Tên người
										liên hệ <span class="colorRed">*</span>
									</label>
									<div class="register_fr_input_wd583">
										<input type="text" name="contact_name"
											class="form-control input-lg2 color-input" id="contact_name" />
									</div>
									<div
										class="clearfix error_reg_mess clearfix fs14 italic invalid-msg-name-contact display_none"
										id="error_contact_name"></div>
								</div>
								<!-- input phone -->
								<div class="dien-thoai-lien-he form-group mb1 input-phone mb_6">
									<label for="phone"
										class="control-label-info bold txt-ghi fs14 w180">Số điện
										thoại liên hệ <span class="colorRed">*</span>
									</label>
									<div class="fr-input-wd333">
										<input type="text" class="form-control input-lg2 color-input"
											id="phone" name="phone[]" />
									</div>
									<div
										class="clearfix error_reg_mess clearfix fs14 italic invalid-msg-tel display_none"
										id="error_phone"></div>
								</div>
								<div class="form-group mb_10" id="add_tel_contact">
									<label class="control-label-checkbox w180"></label>
									<div class="fr-input-wd333">
										<span class="color_add_tel fs14 cursor_pointer" id="addPhone">
											<span class="add_tel_692095"></span>Thêm Số điện thoại
										</span>
									</div>
								</div>

								<!-- input Email liên hệ -->
								<div class="form-group mb_10">
									<label for="contact_email"
										class="control-label-info bold txt-ghi fs14 w180"> Email liên
										hệ <span class="colorRed">*</span>
									</label>
									<div class="fr-input-wd333">
										<input type="text" class="form-control input-lg2 color-input"
											id="contact_email" name="contact_email" />
									</div>
									<div
										class="clearfix error_reg_mess clearfix fs14 italic invalid-msg-email_contact display_none"
										id="error_contact_email"></div>
								</div>
								<div class="mb_16">
									<div class="line-break02"></div>
								</div>
								<!-- input Nhập mã bảo mật * -->
								<div class="form-group mb_20">
									<label for="captcha"
										class="control-label-info bold txt-ghi fs14 w185">Nhập mã bảo
										mật <span class="colorRed">*</span>
									</label>
									<div class="register_fr_input_wd583 w390 pl_10">
										<div class="img_security_code floatLeft">
											<img src="/common/captcha?time=1464279410"
												alt="Nhap ma bao mat" title="Nhập mã bảo mật" />
										</div>
										<!--<div class="img_security_code floatLeft"></div>-->
										<div class="fr-input-wd333 w263 ">
											<input type="text" class="form-control input-lg2 color-input"
												id="captcha" name="captcha" />
										</div>
									</div>
									<div class="error_reg_mess clearfix err_scode display_none"
										id="error_captcha"></div>
								</div>

								<div class="form-group mb_12">
									<label class="control-label-info w185"></label>
									<div class="fr-input-wd333 floatLeft pl_10">
										<button type="button" id="btnRegister"
											class="btn bold btnRegisterNTD w153 fwb uppercase fs16">Đăng
											Ký</button>
									</div>
								</div>
							</div>

							<input type="hidden" name="So0mDSzUKXNXpZwQ"
								value="5fdd65539273ba3e54f0be751732b23b">
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>


@endsection
