@extends('front/global') 

@section('content')
<div id="cols-right" class="bg_grey">
	<div class="content_cols-right pt_16 pl_24 pb_24">

		<form method="get" action="/tim-kiem-ung-vien-nhanh/"
			id="search_box_full" class="frm_search_box_full">
			<div class="box_filter_content w_100 ">
				<div class="filter_content_line1 border_bt pos_relative">
					<div class="col-xs-3 border_r pl_14 pr_2">
						<div id="sl-nganhnghe1"
							class="filter_box font14 style-flat w_100 box_nganhnghe_s">
							<i class="icon_select_box icon_listbox icon_24 icon-24"></i> <select
								name="hdn_nganh_nghe_cap1"
								class="selectpicker box_select_filter pos_relative select-style"
								tabindex="-1" data-select-class="nganh_nghe">
								<option value="">Tất cả Ngành nghề</option>
								<option value="30">Kế toán-Kiểm toán</option>
								<option value="38">Hành chính-Văn phòng</option>
								<option value="63">Bán hàng</option>
								<option value="41">Xây dựng</option>
								<option value="8">Điện-Điện tử</option>
								<option value="4">Cơ khí-Chế tạo</option>
								<option value="48">Làm bán thời gian</option>
								<option value="43">Y tế-Dược</option>
								<option value="26">Lao động phổ thông</option>
								<option value="49">Báo chí-Truyền hình</option>
								<option value="1">Bảo hiểm</option>
								<option value="94">Bảo vệ</option>
								<option value="79">Biên-Phiên dịch</option>
								<option value="2">Bưu chính</option>
								<option value="101">Chứng khoán- Vàng</option>
								<option value="88">Công nghệ cao</option>
								<option value="90">Công nghiệp</option>
								<option value="6">Dầu khí-Hóa chất</option>
								<option value="80">Đầu tư</option>
								<option value="50">Dệt may - Da giày</option>
								<option value="7">Dịch vụ</option>
								<option value="54">Điện tử viễn thông</option>
								<option value="9">Du lịch</option>
								<option value="76">Game</option>
								<option value="10">Giáo dục-Đào tạo</option>
								<option value="85">Hàng gia dụng</option>
								<option value="57">Hàng hải</option>
								<option value="55">Hàng không</option>
								<option value="87">Hoá học-Sinh học</option>
								<option value="93">Hoạch định-Dự án</option>
								<option value="12">In ấn-Xuất bản</option>
								<option value="5">IT phần cứng/mạng</option>
								<option value="74">IT phần mềm</option>
								<option value="81">KD bất động sản</option>
								<option value="84">Khách sạn-Nhà hàng</option>
								<option value="15">Kiến trúc-TK nội thất</option>
								<option value="16">Kỹ thuật</option>
								<option value="61">Kỹ thuật ứng dụng</option>
								<option value="53">Marketing-PR</option>
								<option value="20">Mỹ phẩm-Trang sức</option>
								<option value="22">Ngân hàng</option>
								<option value="44">Ngành nghề khác</option>
								<option value="62">Nghệ thuật - Điện ảnh</option>
								<option value="78">Người giúp việc</option>
								<option value="59">Nhân sự</option>
								<option value="96">Nhân viên kinh doanh</option>
								<option value="17">Nông-Lâm-Ngư nghiệp</option>
								<option value="65">NV trông quán Internet</option>
								<option value="89">Ô tô - Xe máy</option>
								<option value="18">Pháp lý</option>
								<option value="92">Promotion Girl &#40;PG&#41;</option>
								<option value="28">Quan hệ đối ngoại</option>
								<option value="14">Quản trị kinh doanh</option>
								<option value="46">Sinh viên làm thêm</option>
								<option value="34">Thực phẩm-Đồ uống</option>
								<option value="75">Thiết kế đồ hoạ web</option>
								<option value="32">Thiết kế-Mỹ thuật</option>
								<option value="86">Thời trang</option>
								<option value="33">Thủ công mỹ nghệ</option>
								<option value="91">Thư ký-Trợ lý</option>
								<option value="52">Thực tập</option>
								<option value="77">Thương mại điện tử</option>
								<option value="36">Tiếp thị-Quảng cáo</option>
								<option value="83">Tổ chức sự kiện-Quà tặng</option>
								<option value="37">Tư vấn</option>
								<option value="39">Vận tải</option>
								<option value="40">Vật tư-Thiết bị</option>
								<option value="42">Xuất, nhập khẩu</option>
							</select>
						</div>
					</div>
					<div class="col-xs-3 border_r pr_2">
						<div class="filter_box font14 style-flat w_100 box_tinhthanh_s">
							<i class="icon_select_box icon_locabox icon_24 icon-24"></i> <select
								name="hdn_dia_diem"
								class="selectpicker box_select_filter pos_relative select-style"
								tabindex="-1">
								<option value="">Tất cả tỉnh thành</option>
								<option value="1">TP. HCM</option>
								<option value="2">Hà Nội</option>
								<option value="9">Bình Dương</option>
								<option value="19">Đồng Nai</option>
								<option value="32">Bắc Ninh</option>
								<option value="23">Đà Nẵng</option>
								<option value="53">Bà Rịa - Vũng Tàu</option>
								<option value="26">Hưng Yên</option>
								<option value="27">Hải Dương</option>
								<option value="52">An Giang</option>
								<option value="91">Bắc Giang</option>
								<option value="92">Bắc Kạn</option>
								<option value="93">Bạc Liêu</option>
								<option value="90">Bến Tre</option>
								<option value="89">Bình Định</option>
								<option value="88">Bình Phước</option>
								<option value="87">Bình Thuận</option>
								<option value="86">Cà Mau</option>
								<option value="21">Cần Thơ</option>
								<option value="85">Cao Bằng</option>
								<option value="84">Cửu Long</option>
								<option value="83">Đắc Lắc</option>
								<option value="82">Đắc Nông</option>
								<option value="81">Điện Biên</option>
								<option value="80">Đồng Tháp</option>
								<option value="79">Gia Lai</option>
								<option value="78">Hà Giang</option>
								<option value="77">Hà Nam</option>
								<option value="76">Hà Tĩnh</option>
								<option value="22">Hải Phòng</option>
								<option value="75">Hậu Giang</option>
								<option value="74">Hòa Bình</option>
								<option value="73">Khánh Hòa</option>
								<option value="72">Kiên Giang</option>
								<option value="71">Kon Tum</option>
								<option value="70">Lai Châu</option>
								<option value="67">Lâm Đồng</option>
								<option value="69">Lạng Sơn</option>
								<option value="68">Lào Cai</option>
								<option value="66">Long An</option>
								<option value="96">Miền Bắc</option>
								<option value="98">Miền Nam</option>
								<option value="97">Miền Trung</option>
								<option value="65">Nam Định</option>
								<option value="64">Nghệ An</option>
								<option value="63">Ninh Bình</option>
								<option value="62">Ninh Thuận</option>
								<option value="99">Nước ngoài</option>
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
								<option value="94">Thừa Thiên Huế</option>
								<option value="47">Tiền Giang</option>
								<option value="95">Toàn quốc</option>
								<option value="46">Trà Vinh</option>
								<option value="45">Tuyên Quang</option>
								<option value="44">Vĩnh Long</option>
								<option value="43">Vĩnh Phúc</option>
								<option value="42">Yên Bái</option>
							</select>
						</div>
					</div>
					<div class="col-xs-3 border_r pr_6 pl_8">
						<div class="filter_box font14 style-flat w_100 box_mucluong">
							<i class="icon_select_box icon_moneybox icon_24 icon-24"></i>
							<div class="cd-dropdown-wrapper w_100 pt_12">
								<span class="drop_filter_top"
									data-jq-dropdown="#filter_mucluong">Tất cả Mức lương</span>
								<div id="filter_mucluong"
									class="jq-dropdown dropdown_box filter_mucluong">
									<ul class="box_drop_mucluong nomargin">
										<li>
											<div class="modal-drop-mucluong font14">
												<div class="demo-list pb_6">
													<input value="1" tabindex="1" type="checkbox"
														name="hdn_muc_luong[]" id="mul_1"> <label for="mul_1">Thỏa
														thuận</label>
												</div>
												<div class="demo-list pb_6">
													<input value="2" tabindex="1" type="checkbox"
														name="hdn_muc_luong[]" id="mul_2"> <label for="mul_2">1 -
														3 triệu</label>
												</div>
												<div class="demo-list pb_6">
													<input value="3" tabindex="1" type="checkbox"
														name="hdn_muc_luong[]" id="mul_3"> <label for="mul_3">3 -
														5 triệu</label>
												</div>
												<div class="demo-list pb_6">
													<input value="4" tabindex="1" type="checkbox"
														name="hdn_muc_luong[]" id="mul_4"> <label for="mul_4">5 -
														7 triệu</label>
												</div>
												<div class="demo-list pb_6">
													<input value="5" tabindex="1" type="checkbox"
														name="hdn_muc_luong[]" id="mul_5"> <label for="mul_5">7 –
														10 triệu</label>
												</div>
												<div class="demo-list pb_6">
													<input value="6" tabindex="1" type="checkbox"
														name="hdn_muc_luong[]" id="mul_6"> <label for="mul_6">10 –
														15 triệu</label>
												</div>
												<div class="demo-list pb_6">
													<input value="7" tabindex="1" type="checkbox"
														name="hdn_muc_luong[]" id="mul_7"> <label for="mul_7">15 –
														20 triệu</label>
												</div>
												<div class="demo-list pb_6">
													<input value="8" tabindex="1" type="checkbox"
														name="hdn_muc_luong[]" id="mul_8"> <label for="mul_8">20 –
														30 triệu</label>
												</div>
												<div class="demo-list pb_6">
													<input value="9" tabindex="1" type="checkbox"
														name="hdn_muc_luong[]" id="mul_9"> <label for="mul_9">Trên
														30 triệu</label>
												</div>
											</div>
										</li>
										<li>
											<div class="modal-footer-filter" style="text-align: center">
												<input type="button"
													class="btn btn-blue btn-lg w136 btn_search_time"
													id="btn_search_time" value="CHỌN" />
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-3 pr_8">
						<div class="filter_box font14 style-flat w_100 box_kinhnghiem">
							<i class="icon_select_box icon_capbox icon_24 icon-24"></i>
							<div class="cd-dropdown-wrapper w_100 pt_12">
								<span class="drop_filter_top"
									data-jq-dropdown="#filter_kinhnghiem">Tất cả Kinh nghiệm</span>
								<div id="filter_kinhnghiem"
									class="jq-dropdown dropdown_box filter_kinhnghiem">
									<ul class="box_drop_kinhnghiem nomargin">
										<li>
											<div class="modal-drop-mucluong font14">
												<div class="demo-list pb_6">
													<input value="8" tabindex="1" type="checkbox"
														name="hdn_kinh_nghiem[]" id="kn_8"> <label for="kn_8"
														class="font14">Chưa có kinh nghiệm</label>
												</div>
												<div class="demo-list pb_6">
													<input value="1" tabindex="1" type="checkbox"
														name="hdn_kinh_nghiem[]" id="kn_1"> <label for="kn_1"
														class="font14">Dưới 1 năm</label>
												</div>
												<div class="demo-list pb_6">
													<input value="2" tabindex="1" type="checkbox"
														name="hdn_kinh_nghiem[]" id="kn_2"> <label for="kn_2"
														class="font14">1 năm</label>
												</div>
												<div class="demo-list pb_6">
													<input value="3" tabindex="1" type="checkbox"
														name="hdn_kinh_nghiem[]" id="kn_3"> <label for="kn_3"
														class="font14">2 năm</label>
												</div>
												<div class="demo-list pb_6">
													<input value="4" tabindex="1" type="checkbox"
														name="hdn_kinh_nghiem[]" id="kn_4"> <label for="kn_4"
														class="font14">3 năm</label>
												</div>
												<div class="demo-list pb_6">
													<input value="5" tabindex="1" type="checkbox"
														name="hdn_kinh_nghiem[]" id="kn_5"> <label for="kn_5"
														class="font14">4 năm</label>
												</div>
												<div class="demo-list pb_6">
													<input value="6" tabindex="1" type="checkbox"
														name="hdn_kinh_nghiem[]" id="kn_6"> <label for="kn_6"
														class="font14">5 năm</label>
												</div>
												<div class="demo-list pb_6">
													<input value="7" tabindex="1" type="checkbox"
														name="hdn_kinh_nghiem[]" id="kn_7"> <label for="kn_7"
														class="font14">Hơn 5 năm</label>
												</div>
											</div>
										</li>
										<li>
											<div class="modal-footer-filter" style="text-align: center">
												<input type="button"
													class="btn btn-blue btn-lg w136 btn_search_time3"
													id="btn_search_time3" value="CHỌN" />
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="filter_content_line1 border_bt pos_relative">
					<div class="col-xs-3 border_r pl_14 pr_2">
						<div class="filter_box font14 style-flat w_100 box_tinhthanh_s">
							<i
								style="background-image: url(asset/default/images/icon-trinh-do.png) !important; margin-top: 15px; margin-left: -3px;"
								class="icon_select_box icon_24 icon-24"></i> <select
								name="trinh_do_ntd"
								class="selectpicker box_select_filter pos_relative select-style"
								data-diss="-1" tabindex="-1" data-select-class="trinh_do_ntd2">
								<option value="">Tất cả Trình độ</option>
								<option value="1">Trên đại học</option>
								<option value="2">Đại học</option>
								<option value="3">Cao đẳng</option>
								<option value="4">Trung cấp</option>
								<option value="7">Chứng chỉ nghề</option>
								<option value="5">Trung học</option>
								<option value="6">Không yêu cầu bằng cấp</option>
							</select>
						</div>
					</div>

					<div class="col-xs-3 border_r pr_2">
						<div class="filter_box font14 style-flat w_100 box_tinhthanh_s">
							<i
								style="background-image: url(asset/default/images/icon-gioi-tinh.png) !important; margin-top: 10px; margin-left: -4px;"
								class="icon_select_box icon_gioi_tinh icon_24 icon-24"></i> <select
								name="gioi_tinh_ntd"
								class="selectpicker box_select_filter pos_relative select-style"
								tabindex="-1">
								<option class="test-select" value="" selected>Tất cả Giới tính</option>
								<option value="0">Nữ</option>
								<option value="1">Nam</option>
							</select>
						</div>
					</div>

					<div class="col-xs-3 border_r pr_6 pl_8">
						<div class="filter_box font14 style-flat w_100 box_tinhthanh_s">
							<i
								style="background-image: url(asset/default/images/icon-ngoai-ngu-s21.png) !important; margin-top: 15px"
								class="icon_select_box icon_ngoai_ngu icon_24 icon-24"></i> <select
								style="margin-left: 5px;" name="ngoai_ngu_ntd"
								class="selectpicker box_select_filter pos_relative select-style"
								tabindex="-1" data-select-class="ngoai_ngu_ntd2">
								<option value="">Tất cả Ngoại ngữ</option>
								<option value="EN-DE">Tiếng Anh – Tiếng Đức</option>
								<option value="EN-RU">Tiếng Anh - Tiếng Nga</option>
								<option value="EN-IT">Tiếng Anh – Tiếng Ý</option>
								<option value="EN-ES">Tiếng Anh – Tiếng Tây Ban Nha</option>
								<option value="EN">English - Tiếng Anh</option>
								<option value="FR">French - Tiếng Pháp</option>
								<option value="US">United States - Tiếng Anh Mỹ</option>
								<option value="RU">Russian - Tiếng Nga</option>
								<option value="CN">Chinese - Tiếng Trung</option>
								<option value="KR">Korean - Tiếng Hàn</option>
								<option value="JP">Japanese - Tiếng Nhật</option>
								<option value="DE">German - Tiếng Đức</option>
								<option value="SA">Arabic - Tiếng Ả Rập</option>
								<option value="BJ">Bengalic - Tiếng Bengal</option>
								<option value="BG">Bulgarian - Tiếng Bungary</option>
								<option value="BF">Burmese - Tiếng Miến điện</option>
								<option value="KH">Cambodian - Tiếng Campuchia</option>
								<option value="CZ">Czech - Tiếng Séc</option>
								<option value="DA">Danmark - Tiếng Đan mạch</option>
								<option value="SX">Dutch - Tiếng Hà Lan</option>
								<option value="FI">Finnish - Tiếng phần Lan</option>
								<option value="GR">Greek - Tiếng Hy Lạp</option>
								<option value="IN">Hindi - Tiếng Hinđi</option>
								<option value="HU">Hungarian - Tiếng Hungary</option>
								<option value="ID">Indonesian - Tiếng Inđônesia</option>
								<option value="IT">Italian - Tiếng Ý</option>
								<option value="LA">Laotian - Tiếng Lào</option>
								<option value="MY">Malay - Tiếng Mã Lai</option>
								<option value="NO">Norwegian - Tiếng Nauy</option>
								<option value="PL">Polish - Tiếng Ba Lan</option>
								<option value="PT">Portuguese - Tiếng Bồ Đào Nha</option>
								<option value="RO">Romanian - Tiếng Ru ma ni</option>
								<option value="ES">Spanish - Tiếng Tây Ban Nha</option>
								<option value="TW">Taiwanese - Tiếng Đài Loan</option>
								<option value="TR">Turkish - Tiếng Thổ Nhĩ Kỳ</option>
								<option value="TH">Thai - Tiếng Thái</option>
								<option value="UA">Ukrainian - Tiếng Ucraina</option>
							</select>
						</div>
					</div>
					<div class="col-xs-3 border_r pr_8">
						<div class="filter_box font14 style-flat w_100 box_tinhthanh_s">
							<i
								style="background-image: url(asset/default/images/icon-thoi-gian.png) !important; margin-top: 15px; margin-left: -7px;"
								class="icon_select_box icon_thoi_gian icon_24 icon-24"></i> <select
								style="margin-left: 5px;" name="thoi_gian_ntd"
								class="selectpicker box_select_filter pos_relative select-style"
								data-diss="-1" tabindex="-1" data-select-class="thoi_gian_ntd2">
								<option value="" selected>Thời gian cập nhật</option>
								<option value="1">Trong vòng 1 Ngày</option>
								<option value="2">1 Tuần gần đây</option>
								<option value="3">1 Tháng gần đây</option>
								<option value="4">2 Tháng gần đây</option>
							</select>
						</div>
					</div>
				</div>

				<div class="filter_content_line2 pos_relative">

					<div class="box_search_all pt_10 pl_5 w_100"
						style="padding: 0 !important">
						<input type="search" style="height: 50px;" name="hdn_tu_khoa"
							class="inputsearchall_full input_search_all noboder pl_10 w_100 pr_10 font14"
							placeholder="Nhập tiêu đề hồ sơ. VD: Nhân viên kinh doanh">
					</div>
					<div class="box_search_all_r w322 pos_absolute">
						<div class="search_advance floatLeft mr_6 mt_12 border_l w110">
							<!-- start block search advance -->
							<div
								class="cd-dropdown-wrapper pl_24 w_100 nopadding font12 txl box_searchad"
								style="height: 24px;">
								<span class="drop_filter pl_8 txt_search_advance"
									data-jq-dropdown="#filter_searchad">Tìm nâng cao</span>
								<div id="filter_searchad" class="dropdown_box jq-dropdown">
									<ul
										class="box_drop_searchad modal-drop-nangcao font14 bg_white">
										<li class="floatLeft border_r pr4 pt12">
											<div class="title_filter_searchad pos_relative mb_2 w230">
												<i class="icon_select_box icon_hinhthuc icon_24 icon-24"></i>Chọn
												hình thức làm việc
											</div>
											<div class="modal-body-searchad pt_8">
												<div class="demo-list pb_6">
													<input value="" tabindex="1" type="radio"
														name="hdn_hinh_thuc" checked id="ml_0"> <label for="ml_0"
														class="font14">Tất cả hình thức</label>
												</div>
												<div class="demo-list pb_6">
													<input value="1" tabindex="1" type="radio"
														name="hdn_hinh_thuc" id="ml_1"> <label for="ml_1"
														class="font14">Toàn thời gian cố định</label>
												</div>
												<div class="demo-list pb_6">
													<input value="2" tabindex="1" type="radio"
														name="hdn_hinh_thuc" id="ml_2"> <label for="ml_2"
														class="font14">Toàn thời gian tạm thời</label>
												</div>
												<div class="demo-list pb_6">
													<input value="3" tabindex="1" type="radio"
														name="hdn_hinh_thuc" id="ml_3"> <label for="ml_3"
														class="font14">Bán thời gian cố định</label>
												</div>
												<div class="demo-list pb_6">
													<input value="4" tabindex="1" type="radio"
														name="hdn_hinh_thuc" id="ml_4"> <label for="ml_4"
														class="font14">Bán thời gian tạm thời</label>
												</div>
												<div class="demo-list pb_6">
													<input value="5" tabindex="1" type="radio"
														name="hdn_hinh_thuc" id="ml_5"> <label for="ml_5"
														class="font14">Theo hợp đồng tư vấn</label>
												</div>
												<div class="demo-list pb_6">
													<input value="6" tabindex="1" type="radio"
														name="hdn_hinh_thuc" id="ml_6"> <label for="ml_6"
														class="font14">Thực tập</label>
												</div>
												<div class="demo-list pb_6">
													<input value="7" tabindex="1" type="radio"
														name="hdn_hinh_thuc" id="ml_7"> <label for="ml_7"
														class="font14">Khác</label>
												</div>
											</div>
										</li>
										<li class="floatLeft pt12">
											<div
												class="title_filter_searchad pos_relative mb_2 ml_16 w218">
												<i class="icon_select_box icon_capbac icon_24 icon-24"></i>Chọn
												cấp bậcc
											</div>
											<div class="modal-body-searchad ml_16">
												<div class="modal-body-searchad pt_8">
													<div class="demo-list pb_6">
														<input value="" tabindex="1" type="radio"
															name="hdn_cap_bac" checked id="mr_0"> <label for="mr_0"
															class="font14">Tất cả Cấp bậc</label>
													</div>
													<div class="demo-list pb_6">
														<input value="3" tabindex="1" type="radio"
															name="hdn_cap_bac" id="mr_3"> <label for="mr_3"
															class="font14">Quản lý cấp cao</label>
													</div>
													<div class="demo-list pb_6">
														<input value="4" tabindex="1" type="radio"
															name="hdn_cap_bac" id="mr_4"> <label for="mr_4"
															class="font14">Quản lý cấp trung</label>
													</div>
													<div class="demo-list pb_6">
														<input value="9" tabindex="1" type="radio"
															name="hdn_cap_bac" id="mr_9"> <label for="mr_9"
															class="font14">Quản lý nhóm - giám sát</label>
													</div>
													<div class="demo-list pb_6">
														<input value="6" tabindex="1" type="radio"
															name="hdn_cap_bac" id="mr_6"> <label for="mr_6"
															class="font14">Chuyên gia</label>
													</div>
													<div class="demo-list pb_6">
														<input value="7" tabindex="1" type="radio"
															name="hdn_cap_bac" id="mr_7"> <label for="mr_7"
															class="font14">Chuyên viên - Nhân viên</label>
													</div>
													<div class="demo-list pb_6">
														<input value="13" tabindex="1" type="radio"
															name="hdn_cap_bac" id="mr_13"> <label for="mr_13"
															class="font14">Cộng tác viên</label>
													</div>
												</div>
											</div>
										</li>

									</ul>
									<div class="modal-footer-filter" style="text-align: center">
										<input type="button" class="btn btn-blue btn-lg w136"
											id="btn_search_time2" value="CHỌN" />
									</div>
								</div>
							</div>
						</div>
						<div>
							<a href="javascript:void(0);" style="margin: 0"
								class="btn btn-pink btn-lg w186 btn_s_search pl_16 btn_timkiem_all pt_0"
								onclick="javascript:$('#search_box_full').submit();"> <i
								class="icon_search icon_24 icon-24"></i> Tìm kiếm ứng viên
							</a>
						</div>

					</div>
				</div>
			</div>
		</form>
		<script type="text/javascript">
    var func_searchbox = function() {
        $('.inputsearchall_full').on('keypress', function (event) {
             if(event.which === 13){
                $(this).closest('form.frm_search_box_full').submit();
             }
        });
        setTimeout(function() {
            $('.btn_search_time').click();
            $('.filter_mucluong').hide();
            $('.btn_search_time3').click();
            $('.filter_kinhnghiem').hide();
            }, 1000
        );
    }

    if( document.addEventListener ) {
        addListener(document, "DOMContentLoaded", func_searchbox);
    }else{
        addListener(window, "load", func_searchbox);
    }
</script>
		<br/>

		<h1 class="title_text_line mt_16 fwb mt49">
			<span class="text-tim-nhat uppercase">Kết quả tìm kiếm (178,616)</span>
		</h1>
		

		<div class="box_tab bg_white box_shadow">
			<div class="w_100">
				<div class="list_item_two bg_white">
					<div>

						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="line_list"></div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="pos_absolute w30">
									<a href="javascript:;" onclick="luuhoso(this)"
										data-idtin="2252351" data-idnganh="14" data-idntv="2008036"
										data-type="tintimviec" data-toggle="tooltip"
										data-placement="bottom" title="Lưu việc làm"><i
										class="icon-star-line icon-24 icon_24 "></i></a>
								</div>
								<div class="content_list_item_line w_100">
									<span
										class="title-blockjob-main truncate-ellipsis font14 text_grey2">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/quan-tri-kinh-doanh/nhan-vien-van-phong-c14p0id2252351.html"
										target="_blank" class="text_grey2 "> Nhân viên văn phòng </a>
									</span> <span
										class="title-blockjob-sub truncate-ellipsis font14 text_grey">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/quan-tri-kinh-doanh/nhan-vien-van-phong-c14p0id2252351.html"
										class="text_grey"> Nguyễn Thị Nhung <i
											class="text_pink display_inline">(Cập nhật: 19/05/2016)</i>
									</a>
									</span>
								</div>
								<div class="pos_absolute list_note_icon">
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Mức lương">
										<i
											class="icon_select_box icon_moneybox2 icon_24 icon-24 pos_relative"></i><br>
										5 - 7 triệu
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Kinh nghiệm">
										<i
											class="icon_select_box icon_kinh_nghiem icon_24 icon-24 pos_relative"></i><br>
										3 năm
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
										<i
											class="icon_select_box icon_local_list icon_24 icon-24 pos_relative"></i><br>
										Hà Nội
									</div>

								</div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="line_list"></div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="pos_absolute w30">
									<a href="javascript:;" onclick="luuhoso(this)"
										data-idtin="3416280" data-idnganh="14" data-idntv="2584574"
										data-type="tintimviec" data-toggle="tooltip"
										data-placement="bottom" title="Lưu việc làm"><i
										class="icon-star-line icon-24 icon_24 "></i></a>
								</div>
								<div class="content_list_item_line w_100">
									<span
										class="title-blockjob-main truncate-ellipsis font14 text_grey2">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/quan-tri-kinh-doanh/nhan-vien-kinh-doanh-c14p0id3416280.html"
										target="_blank" class="text_grey2 "> Nhân viên kinh doanh </a>
									</span> <span
										class="title-blockjob-sub truncate-ellipsis font14 text_grey">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/quan-tri-kinh-doanh/nhan-vien-kinh-doanh-c14p0id3416280.html"
										class="text_grey"> Đinh Văn Trọng <i
											class="text_pink display_inline">(Cập nhật: 19/05/2016)</i>
									</a>
									</span>
								</div>
								<div class="pos_absolute list_note_icon">
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Mức lương">
										<i
											class="icon_select_box icon_moneybox2 icon_24 icon-24 pos_relative"></i><br>
										Thỏa thuận
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Kinh nghiệm">
										<i
											class="icon_select_box icon_kinh_nghiem icon_24 icon-24 pos_relative"></i><br>
										1 năm
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
										<i
											class="icon_select_box icon_local_list icon_24 icon-24 pos_relative"></i><br>
										TP. HCM, Bình...
									</div>

								</div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="line_list"></div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="pos_absolute w30">
									<a href="javascript:;" onclick="luuhoso(this)"
										data-idtin="3390415" data-idnganh="30" data-idntv="3450783"
										data-type="tintimviec" data-toggle="tooltip"
										data-placement="bottom" title="Lưu việc làm"><i
										class="icon-star-line icon-24 icon_24 "></i></a>
								</div>
								<div class="content_list_item_line w_100">
									<span
										class="title-blockjob-main truncate-ellipsis font14 text_grey2">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-c30p0id3390415.html"
										target="_blank" class="text_grey2 "> Nhân viên kế toán </a>
									</span> <span
										class="title-blockjob-sub truncate-ellipsis font14 text_grey">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-c30p0id3390415.html"
										class="text_grey"> Trần Thị Lan Hoa <i
											class="text_pink display_inline">(Cập nhật: 19/05/2016)</i>
									</a>
									</span>
								</div>
								<div class="pos_absolute list_note_icon">
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Mức lương">
										<i
											class="icon_select_box icon_moneybox2 icon_24 icon-24 pos_relative"></i><br>
										3 - 5 triệu
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Kinh nghiệm">
										<i
											class="icon_select_box icon_kinh_nghiem icon_24 icon-24 pos_relative"></i><br>
										Dưới 1 năm
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
										<i
											class="icon_select_box icon_local_list icon_24 icon-24 pos_relative"></i><br>
										Bình Dương
									</div>

								</div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="line_list"></div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="pos_absolute w30">
									<a href="javascript:;" onclick="luuhoso(this)"
										data-idtin="3362505" data-idnganh="38" data-idntv="3423282"
										data-type="tintimviec" data-toggle="tooltip"
										data-placement="bottom" title="Lưu việc làm"><i
										class="icon-star-line icon-24 icon_24 "></i></a>
								</div>
								<div class="content_list_item_line w_100">
									<span
										class="title-blockjob-main truncate-ellipsis font14 text_grey2">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-van-phong-c38p0id3362505.html"
										target="_blank" class="text_grey2 "> <span
											class="icon_dinh_kem"></span>Nhân viên văn phòng
									</a>
									</span> <span
										class="title-blockjob-sub truncate-ellipsis font14 text_grey">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-van-phong-c38p0id3362505.html"
										class="text_grey"> Phương Loan <i
											class="text_pink display_inline">(Cập nhật: 19/05/2016)</i>
									</a>
									</span>
								</div>
								<div class="pos_absolute list_note_icon">
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Mức lương">
										<i
											class="icon_select_box icon_moneybox2 icon_24 icon-24 pos_relative"></i><br>
										7 – 10 triệu
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Kinh nghiệm">
										<i
											class="icon_select_box icon_kinh_nghiem icon_24 icon-24 pos_relative"></i><br>
										2 năm
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
										<i
											class="icon_select_box icon_local_list icon_24 icon-24 pos_relative"></i><br>
										TP. HCM
									</div>

								</div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="line_list"></div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="pos_absolute w30">
									<a href="javascript:;" onclick="luuhoso(this)"
										data-idtin="3418959" data-idnganh="30" data-idntv="3474751"
										data-type="tintimviec" data-toggle="tooltip"
										data-placement="bottom" title="Lưu việc làm"><i
										class="icon-star-line icon-24 icon_24 "></i></a>
								</div>
								<div class="content_list_item_line w_100">
									<span
										class="title-blockjob-main truncate-ellipsis font14 text_grey2">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/ke-toan-vien-c30p0id3418959.html"
										target="_blank" class="text_grey2 "> Kế toán viên </a>
									</span> <span
										class="title-blockjob-sub truncate-ellipsis font14 text_grey">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/ke-toan-vien-c30p0id3418959.html"
										class="text_grey"> Hoàng Thị Nhung <i
											class="text_pink display_inline">(Cập nhật: 19/05/2016)</i>
									</a>
									</span>
								</div>
								<div class="pos_absolute list_note_icon">
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Mức lương">
										<i
											class="icon_select_box icon_moneybox2 icon_24 icon-24 pos_relative"></i><br>
										Thỏa thuận
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Kinh nghiệm">
										<i
											class="icon_select_box icon_kinh_nghiem icon_24 icon-24 pos_relative"></i><br>
										Chưa có kinh nghiệm
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
										<i
											class="icon_select_box icon_local_list icon_24 icon-24 pos_relative"></i><br>
										Nghệ An
									</div>

								</div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="line_list"></div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="pos_absolute w30">
									<a href="javascript:;" onclick="luuhoso(this)"
										data-idtin="3416324" data-idnganh="38" data-idntv="3472599"
										data-type="tintimviec" data-toggle="tooltip"
										data-placement="bottom" title="Lưu việc làm"><i
										class="icon-star-line icon-24 icon_24 "></i></a>
								</div>
								<div class="content_list_item_line w_100">
									<span
										class="title-blockjob-main truncate-ellipsis font14 text_grey2">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-ke-toan-c38p0id3416324.html"
										target="_blank" class="text_grey2 "> Nhân viên kế toán </a>
									</span> <span
										class="title-blockjob-sub truncate-ellipsis font14 text_grey">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-ke-toan-c38p0id3416324.html"
										class="text_grey"> Nguyễn Thị Ngọc Diệp <i
											class="text_pink display_inline">(Cập nhật: 19/05/2016)</i>
									</a>
									</span>
								</div>
								<div class="pos_absolute list_note_icon">
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Mức lương">
										<i
											class="icon_select_box icon_moneybox2 icon_24 icon-24 pos_relative"></i><br>
										Thỏa thuận
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Kinh nghiệm">
										<i
											class="icon_select_box icon_kinh_nghiem icon_24 icon-24 pos_relative"></i><br>
										Hơn 5 năm
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
										<i
											class="icon_select_box icon_local_list icon_24 icon-24 pos_relative"></i><br>
										TP. HCM
									</div>

								</div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="line_list"></div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="pos_absolute w30">
									<a href="javascript:;" onclick="luuhoso(this)"
										data-idtin="3418950" data-idnganh="63" data-idntv="3474769"
										data-type="tintimviec" data-toggle="tooltip"
										data-placement="bottom" title="Lưu việc làm"><i
										class="icon-star-line icon-24 icon_24 "></i></a>
								</div>
								<div class="content_list_item_line w_100">
									<span
										class="title-blockjob-main truncate-ellipsis font14 text_grey2">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/ban-hang/nhan-vien-ban-hang-c63p0id3418950.html"
										target="_blank" class="text_grey2 "> Nhân viên bán hàng </a>
									</span> <span
										class="title-blockjob-sub truncate-ellipsis font14 text_grey">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/ban-hang/nhan-vien-ban-hang-c63p0id3418950.html"
										class="text_grey"> Nguyễn Thị Thanh Thuỷ <i
											class="text_pink display_inline">(Cập nhật: 19/05/2016)</i>
									</a>
									</span>
								</div>
								<div class="pos_absolute list_note_icon">
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Mức lương">
										<i
											class="icon_select_box icon_moneybox2 icon_24 icon-24 pos_relative"></i><br>
										Thỏa thuận
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Kinh nghiệm">
										<i
											class="icon_select_box icon_kinh_nghiem icon_24 icon-24 pos_relative"></i><br>
										Chưa có kinh nghiệm
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
										<i
											class="icon_select_box icon_local_list icon_24 icon-24 pos_relative"></i><br>
										TP. HCM
									</div>

								</div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="line_list"></div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="pos_absolute w30">
									<a href="javascript:;" onclick="luuhoso(this)"
										data-idtin="3274723" data-idnganh="15" data-idntv="2673639"
										data-type="tintimviec" data-toggle="tooltip"
										data-placement="bottom" title="Lưu việc làm"><i
										class="icon-star-line icon-24 icon_24 "></i></a>
								</div>
								<div class="content_list_item_line w_100">
									<span
										class="title-blockjob-main truncate-ellipsis font14 text_grey2">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/kien-truc-tk-noi-that/nhan-vien-thiet-ke-c15p0id3274723.html"
										target="_blank" class="text_grey2 "> Nhân viên thiết kế </a>
									</span> <span
										class="title-blockjob-sub truncate-ellipsis font14 text_grey">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/kien-truc-tk-noi-that/nhan-vien-thiet-ke-c15p0id3274723.html"
										class="text_grey"> Nguyễn Hùng Vũ <i
											class="text_pink display_inline">(Cập nhật: 19/05/2016)</i>
									</a>
									</span>
								</div>
								<div class="pos_absolute list_note_icon">
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Mức lương">
										<i
											class="icon_select_box icon_moneybox2 icon_24 icon-24 pos_relative"></i><br>
										5 - 7 triệu
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Kinh nghiệm">
										<i
											class="icon_select_box icon_kinh_nghiem icon_24 icon-24 pos_relative"></i><br>
										Chưa có kinh nghiệm
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
										<i
											class="icon_select_box icon_local_list icon_24 icon-24 pos_relative"></i><br>
										TP. HCM
									</div>

								</div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="line_list"></div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="pos_absolute w30">
									<a href="javascript:;" onclick="luuhoso(this)"
										data-idtin="3417208" data-idnganh="22" data-idntv="3473379"
										data-type="tintimviec" data-toggle="tooltip"
										data-placement="bottom" title="Lưu việc làm"><i
										class="icon-star-line icon-24 icon_24 "></i></a>
								</div>
								<div class="content_list_item_line w_100">
									<span
										class="title-blockjob-main truncate-ellipsis font14 text_grey2">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/ngan-hang/nhan-vien-van-phong-c22p0id3417208.html"
										target="_blank" class="text_grey2 "> Nhân viên văn phòng </a>
									</span> <span
										class="title-blockjob-sub truncate-ellipsis font14 text_grey">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/ngan-hang/nhan-vien-van-phong-c22p0id3417208.html"
										class="text_grey"> Nguyễn Thị Phương Hiền <i
											class="text_pink display_inline">(Cập nhật: 19/05/2016)</i>
									</a>
									</span>
								</div>
								<div class="pos_absolute list_note_icon">
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Mức lương">
										<i
											class="icon_select_box icon_moneybox2 icon_24 icon-24 pos_relative"></i><br>
										5 - 7 triệu
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Kinh nghiệm">
										<i
											class="icon_select_box icon_kinh_nghiem icon_24 icon-24 pos_relative"></i><br>
										Chưa có kinh nghiệm
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
										<i
											class="icon_select_box icon_local_list icon_24 icon-24 pos_relative"></i><br>
										TP. HCM
									</div>

								</div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="line_list"></div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="pos_absolute w30">
									<a href="javascript:;" onclick="luuhoso(this)"
										data-idtin="3410754" data-idnganh="41" data-idntv="3467871"
										data-type="tintimviec" data-toggle="tooltip"
										data-placement="bottom" title="Lưu việc làm"><i
										class="icon-star-line icon-24 icon_24 "></i></a>
								</div>
								<div class="content_list_item_line w_100">
									<span
										class="title-blockjob-main truncate-ellipsis font14 text_grey2">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/ki-su-xay-dung-c41p0id3410754.html"
										target="_blank" class="text_grey2 "> Kĩ sư xây dựng </a>
									</span> <span
										class="title-blockjob-sub truncate-ellipsis font14 text_grey">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/ki-su-xay-dung-c41p0id3410754.html"
										class="text_grey"> Văn Khắc Huy <i
											class="text_pink display_inline">(Cập nhật: 19/05/2016)</i>
									</a>
									</span>
								</div>
								<div class="pos_absolute list_note_icon">
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Mức lương">
										<i
											class="icon_select_box icon_moneybox2 icon_24 icon-24 pos_relative"></i><br>
										5 - 7 triệu
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Kinh nghiệm">
										<i
											class="icon_select_box icon_kinh_nghiem icon_24 icon-24 pos_relative"></i><br>
										Dưới 1 năm
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
										<i
											class="icon_select_box icon_local_list icon_24 icon-24 pos_relative"></i><br>
										Hà Nội
									</div>

								</div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="line_list"></div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="pos_absolute w30">
									<a href="javascript:;" onclick="luuhoso(this)"
										data-idtin="3222875" data-idnganh="41" data-idntv="3293152"
										data-type="tintimviec" data-toggle="tooltip"
										data-placement="bottom" title="Lưu việc làm"><i
										class="icon-star-line icon-24 icon_24 "></i></a>
								</div>
								<div class="content_list_item_line w_100">
									<span
										class="title-blockjob-main truncate-ellipsis font14 text_grey2">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/ky-su-xay-dung-c41p0id3222875.html"
										target="_blank" class="text_grey2 "> Kỹ sư xây dựng </a>
									</span> <span
										class="title-blockjob-sub truncate-ellipsis font14 text_grey">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/ky-su-xay-dung-c41p0id3222875.html"
										class="text_grey"> Phạm Quốc Cường <i
											class="text_pink display_inline">(Cập nhật: 19/05/2016)</i>
									</a>
									</span>
								</div>
								<div class="pos_absolute list_note_icon">
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Mức lương">
										<i
											class="icon_select_box icon_moneybox2 icon_24 icon-24 pos_relative"></i><br>
										Thỏa thuận
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Kinh nghiệm">
										<i
											class="icon_select_box icon_kinh_nghiem icon_24 icon-24 pos_relative"></i><br>
										2 năm
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
										<i
											class="icon_select_box icon_local_list icon_24 icon-24 pos_relative"></i><br>
										TP. HCM
									</div>

								</div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="line_list"></div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="pos_absolute w30">
									<a href="javascript:;" onclick="luuhoso(this)"
										data-idtin="3407328" data-idnganh="38" data-idntv="3464963"
										data-type="tintimviec" data-toggle="tooltip"
										data-placement="bottom" title="Lưu việc làm"><i
										class="icon-star-line icon-24 icon_24 "></i></a>
								</div>
								<div class="content_list_item_line w_100">
									<span
										class="title-blockjob-main truncate-ellipsis font14 text_grey2">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-van-phong-ke-toan-c38p0id3407328.html"
										target="_blank" class="text_grey2 "> Nhân viên văn phòng, kế
											toán </a>
									</span> <span
										class="title-blockjob-sub truncate-ellipsis font14 text_grey">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-van-phong-ke-toan-c38p0id3407328.html"
										class="text_grey"> Ngô Thị Thủy Tiên <i
											class="text_pink display_inline">(Cập nhật: 19/05/2016)</i>
									</a>
									</span>
								</div>
								<div class="pos_absolute list_note_icon">
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Mức lương">
										<i
											class="icon_select_box icon_moneybox2 icon_24 icon-24 pos_relative"></i><br>
										Thỏa thuận
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Kinh nghiệm">
										<i
											class="icon_select_box icon_kinh_nghiem icon_24 icon-24 pos_relative"></i><br>
										Hơn 5 năm
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
										<i
											class="icon_select_box icon_local_list icon_24 icon-24 pos_relative"></i><br>
										TP. HCM, Bình...
									</div>

								</div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="line_list"></div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="pos_absolute w30">
									<a href="javascript:;" onclick="luuhoso(this)"
										data-idtin="2725576" data-idnganh="53" data-idntv="2729217"
										data-type="tintimviec" data-toggle="tooltip"
										data-placement="bottom" title="Lưu việc làm"><i
										class="icon-star-line icon-24 icon_24 "></i></a>
								</div>
								<div class="content_list_item_line w_100">
									<span
										class="title-blockjob-main truncate-ellipsis font14 text_grey2">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/marketing-pr/nhan-vien-quan-tri-wedsite-seo-c53p0id2725576.html"
										target="_blank" class="text_grey2 "> Nhân viên Quản trị
											Wedsite - Seo </a>
									</span> <span
										class="title-blockjob-sub truncate-ellipsis font14 text_grey">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/marketing-pr/nhan-vien-quan-tri-wedsite-seo-c53p0id2725576.html"
										class="text_grey"> Đỗ Thị Thà <i
											class="text_pink display_inline">(Cập nhật: 19/05/2016)</i>
									</a>
									</span>
								</div>
								<div class="pos_absolute list_note_icon">
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Mức lương">
										<i
											class="icon_select_box icon_moneybox2 icon_24 icon-24 pos_relative"></i><br>
										5 - 7 triệu
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Kinh nghiệm">
										<i
											class="icon_select_box icon_kinh_nghiem icon_24 icon-24 pos_relative"></i><br>
										1 năm
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
										<i
											class="icon_select_box icon_local_list icon_24 icon-24 pos_relative"></i><br>
										Hà Nội
									</div>

								</div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="line_list"></div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="pos_absolute w30">
									<a href="javascript:;" onclick="luuhoso(this)"
										data-idtin="3418982" data-idnganh="43" data-idntv="3100664"
										data-type="tintimviec" data-toggle="tooltip"
										data-placement="bottom" title="Lưu việc làm"><i
										class="icon-star-line icon-24 icon_24 "></i></a>
								</div>
								<div class="content_list_item_line w_100">
									<span
										class="title-blockjob-main truncate-ellipsis font14 text_grey2">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/y-te-duoc/nhan-vien-y-te-c43p0id3418982.html"
										target="_blank" class="text_grey2 "> Nhân viên y tế </a>
									</span> <span
										class="title-blockjob-sub truncate-ellipsis font14 text_grey">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/y-te-duoc/nhan-vien-y-te-c43p0id3418982.html"
										class="text_grey"> Trần Thị Hằng <i
											class="text_pink display_inline">(Cập nhật: 19/05/2016)</i>
									</a>
									</span>
								</div>
								<div class="pos_absolute list_note_icon">
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Mức lương">
										<i
											class="icon_select_box icon_moneybox2 icon_24 icon-24 pos_relative"></i><br>
										Thỏa thuận
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Kinh nghiệm">
										<i
											class="icon_select_box icon_kinh_nghiem icon_24 icon-24 pos_relative"></i><br>
										Dưới 1 năm
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
										<i
											class="icon_select_box icon_local_list icon_24 icon-24 pos_relative"></i><br>
										Hà Nội
									</div>

								</div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="line_list"></div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="pos_absolute w30">
									<a href="javascript:;" onclick="luuhoso(this)"
										data-idtin="2583111" data-idnganh="30" data-idntv="2483636"
										data-type="tintimviec" data-toggle="tooltip"
										data-placement="bottom" title="Lưu việc làm"><i
										class="icon-star-line icon-24 icon_24 "></i></a>
								</div>
								<div class="content_list_item_line w_100">
									<span
										class="title-blockjob-main truncate-ellipsis font14 text_grey2">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/ke-toan-truong-ke-toan-tong-hop-c30p0id2583111.html"
										target="_blank" class="text_grey2 "> Kế toán trưởng- kế toán
											tổng hợp </a>
									</span> <span
										class="title-blockjob-sub truncate-ellipsis font14 text_grey">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/ke-toan-truong-ke-toan-tong-hop-c30p0id2583111.html"
										class="text_grey"> Đới Hồng Tâm <i
											class="text_pink display_inline">(Cập nhật: 19/05/2016)</i>
									</a>
									</span>
								</div>
								<div class="pos_absolute list_note_icon">
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Mức lương">
										<i
											class="icon_select_box icon_moneybox2 icon_24 icon-24 pos_relative"></i><br>
										10 – 15 triệu
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Kinh nghiệm">
										<i
											class="icon_select_box icon_kinh_nghiem icon_24 icon-24 pos_relative"></i><br>
										Hơn 5 năm
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
										<i
											class="icon_select_box icon_local_list icon_24 icon-24 pos_relative"></i><br>
										TP. HCM
									</div>

								</div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="line_list"></div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="pos_absolute w30">
									<a href="javascript:;" onclick="luuhoso(this)"
										data-idtin="3418997" data-idnganh="74" data-idntv="2935151"
										data-type="tintimviec" data-toggle="tooltip"
										data-placement="bottom" title="Lưu việc làm"><i
										class="icon-star-line icon-24 icon_24 "></i></a>
								</div>
								<div class="content_list_item_line w_100">
									<span
										class="title-blockjob-main truncate-ellipsis font14 text_grey2">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/it-phan-mem/nhan-vien-tester-c74p0id3418997.html"
										target="_blank" class="text_grey2 "> Nhân viên tester </a>
									</span> <span
										class="title-blockjob-sub truncate-ellipsis font14 text_grey">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/it-phan-mem/nhan-vien-tester-c74p0id3418997.html"
										class="text_grey"> Lưu Thị Ngân <i
											class="text_pink display_inline">(Cập nhật: 19/05/2016)</i>
									</a>
									</span>
								</div>
								<div class="pos_absolute list_note_icon">
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Mức lương">
										<i
											class="icon_select_box icon_moneybox2 icon_24 icon-24 pos_relative"></i><br>
										Thỏa thuận
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Kinh nghiệm">
										<i
											class="icon_select_box icon_kinh_nghiem icon_24 icon-24 pos_relative"></i><br>
										Chưa có kinh nghiệm
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
										<i
											class="icon_select_box icon_local_list icon_24 icon-24 pos_relative"></i><br>
										Hà Nội
									</div>

								</div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="line_list"></div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="pos_absolute w30">
									<a href="javascript:;" onclick="luuhoso(this)"
										data-idtin="2884709" data-idnganh="4" data-idntv="2615351"
										data-type="tintimviec" data-toggle="tooltip"
										data-placement="bottom" title="Lưu việc làm"><i
										class="icon-star-line icon-24 icon_24 "></i></a>
								</div>
								<div class="content_list_item_line w_100">
									<span
										class="title-blockjob-main truncate-ellipsis font14 text_grey2">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/co-khi-che-tao/nhan-vien-lai-xe-tai-c4p0id2884709.html"
										target="_blank" class="text_grey2 "> Nhân viên lái xe tải </a>
									</span> <span
										class="title-blockjob-sub truncate-ellipsis font14 text_grey">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/co-khi-che-tao/nhan-vien-lai-xe-tai-c4p0id2884709.html"
										class="text_grey"> Võ Nhân <i class="text_pink display_inline">(Cập
												nhật: 19/05/2016)</i>
									</a>
									</span>
								</div>
								<div class="pos_absolute list_note_icon">
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Mức lương">
										<i
											class="icon_select_box icon_moneybox2 icon_24 icon-24 pos_relative"></i><br>
										7 – 10 triệu
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Kinh nghiệm">
										<i
											class="icon_select_box icon_kinh_nghiem icon_24 icon-24 pos_relative"></i><br>
										Hơn 5 năm
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
										<i
											class="icon_select_box icon_local_list icon_24 icon-24 pos_relative"></i><br>
										TP. HCM, Bình...
									</div>

								</div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="line_list"></div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="pos_absolute w30">
									<a href="javascript:;" onclick="luuhoso(this)"
										data-idtin="3418655" data-idnganh="46" data-idntv="3474507"
										data-type="tintimviec" data-toggle="tooltip"
										data-placement="bottom" title="Lưu việc làm"><i
										class="icon-star-line icon-24 icon_24 "></i></a>
								</div>
								<div class="content_list_item_line w_100">
									<span
										class="title-blockjob-main truncate-ellipsis font14 text_grey2">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/sinh-vien-lam-them/sinh-vien-lam-them-c46p0id3418655.html"
										target="_blank" class="text_grey2 "> Sinh viên làm thêm </a>
									</span> <span
										class="title-blockjob-sub truncate-ellipsis font14 text_grey">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/sinh-vien-lam-them/sinh-vien-lam-them-c46p0id3418655.html"
										class="text_grey"> Nguyễn Tùng Dương <i
											class="text_pink display_inline">(Cập nhật: 19/05/2016)</i>
									</a>
									</span>
								</div>
								<div class="pos_absolute list_note_icon">
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Mức lương">
										<i
											class="icon_select_box icon_moneybox2 icon_24 icon-24 pos_relative"></i><br>
										3 - 5 triệu
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Kinh nghiệm">
										<i
											class="icon_select_box icon_kinh_nghiem icon_24 icon-24 pos_relative"></i><br>
										Chưa có kinh nghiệm
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
										<i
											class="icon_select_box icon_local_list icon_24 icon-24 pos_relative"></i><br>
										Hà Nội
									</div>

								</div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="line_list"></div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="pos_absolute w30">
									<a href="javascript:;" onclick="luuhoso(this)"
										data-idtin="3418680" data-idnganh="26" data-idntv="3474522"
										data-type="tintimviec" data-toggle="tooltip"
										data-placement="bottom" title="Lưu việc làm"><i
										class="icon-star-line icon-24 icon_24 "></i></a>
								</div>
								<div class="content_list_item_line w_100">
									<span
										class="title-blockjob-main truncate-ellipsis font14 text_grey2">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/lao-dong-pho-thong/lao-dong-pho-thong-c26p0id3418680.html"
										target="_blank" class="text_grey2 "> Lao động phổ thông </a>
									</span> <span
										class="title-blockjob-sub truncate-ellipsis font14 text_grey">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/lao-dong-pho-thong/lao-dong-pho-thong-c26p0id3418680.html"
										class="text_grey"> Trần Trung Hiếu <i
											class="text_pink display_inline">(Cập nhật: 19/05/2016)</i>
									</a>
									</span>
								</div>
								<div class="pos_absolute list_note_icon">
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Mức lương">
										<i
											class="icon_select_box icon_moneybox2 icon_24 icon-24 pos_relative"></i><br>
										7 – 10 triệu
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Kinh nghiệm">
										<i
											class="icon_select_box icon_kinh_nghiem icon_24 icon-24 pos_relative"></i><br>
										Chưa có kinh nghiệm
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
										<i
											class="icon_select_box icon_local_list icon_24 icon-24 pos_relative"></i><br>
										TP. HCM
									</div>

								</div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="line_list"></div>
							</div>
						</div>
						<div class="list-items">
							<div class="detail-link pos_relative">
								<div class="pos_absolute w30">
									<a href="javascript:;" onclick="luuhoso(this)"
										data-idtin="3418723" data-idnganh="38" data-idntv="2648907"
										data-type="tintimviec" data-toggle="tooltip"
										data-placement="bottom" title="Lưu việc làm"><i
										class="icon-star-line icon-24 icon_24 "></i></a>
								</div>
								<div class="content_list_item_line w_100">
									<span
										class="title-blockjob-main truncate-ellipsis font14 text_grey2">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-ke-toan-kiem-toan-hanh-chinh-van-phong-c38p0id3418723.html"
										target="_blank" class="text_grey2 "> Nhân viên kế toán -kiểm
											toán, hành chính văn phòng </a>
									</span> <span
										class="title-blockjob-sub truncate-ellipsis font14 text_grey">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-ke-toan-kiem-toan-hanh-chinh-van-phong-c38p0id3418723.html"
										class="text_grey"> Trần Thị Trâm <i
											class="text_pink display_inline">(Cập nhật: 19/05/2016)</i>
									</a>
									</span>
								</div>
								<div class="pos_absolute list_note_icon">
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Mức lương">
										<i
											class="icon_select_box icon_moneybox2 icon_24 icon-24 pos_relative"></i><br>
										Thỏa thuận
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom"
										title="Kinh nghiệm">
										<i
											class="icon_select_box icon_kinh_nghiem icon_24 icon-24 pos_relative"></i><br>
										1 năm
									</div>
									<div
										class="note_mucluong text-center font12 text_black floatLeft"
										data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
										<i
											class="icon_select_box icon_local_list icon_24 icon-24 pos_relative"></i><br>
										Hải Phòng
									</div>

								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="box_pagination_footer text-center">
					<ul class="pagination">
						<li class="active"><a
							href="/tim-kiem-ung-vien-nhanh/?hdn_tu_khoa=&hdn_nganh_nghe_cap1=&hdn_dia_diem=&trinh_do_ntd=&hdn_kinh_nghiem=&gioi_tinh_ntd=&ngoai_ngu_ntd=&thoi_gian_ntd=&page=1">1</a>
						</li>
						<li><a
							href="/tim-kiem-ung-vien-nhanh/?hdn_tu_khoa=&hdn_nganh_nghe_cap1=&hdn_dia_diem=&trinh_do_ntd=&hdn_kinh_nghiem=&gioi_tinh_ntd=&ngoai_ngu_ntd=&thoi_gian_ntd=&page=2">2</a></li>
						<li><a
							href="/tim-kiem-ung-vien-nhanh/?hdn_tu_khoa=&hdn_nganh_nghe_cap1=&hdn_dia_diem=&trinh_do_ntd=&hdn_kinh_nghiem=&gioi_tinh_ntd=&ngoai_ngu_ntd=&thoi_gian_ntd=&page=3">3</a></li>
						<li><a
							href="/tim-kiem-ung-vien-nhanh/?hdn_tu_khoa=&hdn_nganh_nghe_cap1=&hdn_dia_diem=&trinh_do_ntd=&hdn_kinh_nghiem=&gioi_tinh_ntd=&ngoai_ngu_ntd=&thoi_gian_ntd=&page=4">4</a></li>
						<li class="next"><a
							href="/tim-kiem-ung-vien-nhanh/?hdn_tu_khoa=&hdn_nganh_nghe_cap1=&hdn_dia_diem=&trinh_do_ntd=&hdn_kinh_nghiem=&gioi_tinh_ntd=&ngoai_ngu_ntd=&thoi_gian_ntd=&page=2"
							aria-label="Next"> <i class="arrow-next icon_24 icon-24"></i>
						</a></li>
					</ul>
				</div>
			</div>
		</div>

	</div>
	
</div>

@endsection
