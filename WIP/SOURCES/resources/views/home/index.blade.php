@extends('global')

@section('content')
<div class="">
	<div class="top-ads clearfix mb10">
		<div class="row w_100">
			<script type="text/javascript" src="http://admicro1.vcmedia.vn/ads_codes/ads_box_221.ads"></script>
			<script type="text/javascript" src="//admicro1.vcmedia.vn/core/admicro_core_nld.js?id=1"></script>
			<div style="height:0px; width:0px; overflow:hidden;">
				<object style="visibility:hidden;" type="application/x-shockwave-flash" height="0" width="0"
						classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="_admFlck" bgcolor="#ffffff">
					<param value="//adi.vcmedia.vn/adt/flck.swf?id=1" name="movie">
					<param value="true" name="allowFullScreen">
					<param value="opaque" name="wmode">
					<param value="always" name="allowscriptaccess">
					<embed width="0" height="0" allowfullscreen="true" allowscriptaccess="always" quality="high"
						   name="_admFlck" id="_admFlck" src="//adi.vcmedia.vn/adt/flck.swf?id=1"
						   type="application/x-shockwave-flash" wmode="opaque">
				</object>
				<object type="application/x-shockwave-flash" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
						width="1px" height="1px" id="shareObject" name="shareObject">
					<param value="//adi.vcmedia.vn/adt/cpc/tvcads/2012/demoTVC/Temperature/share_object.swf"
						   name="movie">
					<param value="high" name="quality">
					<param value="transparent" name="wmode">
					<param value="11.0.0.0" name="swfversion">
					<param value="false" name="allowFullScreen">
					<param value="always" name="allowScriptAccess">
					<embed src="//adi.vcmedia.vn/adt/cpc/tvcads/2012/demoTVC/Temperature/share_object.swf"
						   pluginspage="http://www.macromedia.com/go/getflashplayer"
						   type="application/x-shockwave-flash" allowscriptaccess="always" wmode="transparent"
						   quality="high" name="shareObject" width="1px" height="1px" id="shareObject">
				</object>
			</div>
		</div>
	</div>

	<div class="box_alert_content box_alert_content_dangkytuvan w_100 font14 " id="box_alert_message">
		<div class="col_msg_left">
			Hôm qua có <span class="text_orange font18 bold">4,431</span> hồ sơ mới và <span
					class="text_orange font18 bold">10,287</span> hồ sơ cập nhật mới, trong tổng số <span class="text_orange font18 bold">610,976</span> hồ sơ đang tìm việc
		</div>
		<div class="col_msg_right">
			<a href="https://vieclam24h.vn/ho-so-cap-nhat-trong-ngay.html" class="btn btn-blue"><span class="icon_24 icon_arrow_orange icon-24"></span><span
						class="text_orange bold font16 pt_2">BẤM XEM NGAY!</span></a>
		</div>
	</div>
	<div class="box_title_content w_100 font16 pos_relative mb_30 mt_16">
		<h1 class="title_title_box pl_8 pr_8 uppercase bold text_blue">Cổng dành cho nhà tuyển dụng (610,976)</h1>
	</div>
	<div class="box_filter_content w_100 mt_16" id="box_search_ntd">

		<form method="get" action="/tim-kiem-ung-vien-nhanh/" id="search_box_hosoungvien">
			<div class="box_filter_search">
				<div class="filter_content_line1 pos_relative">
					<div class="col-xs-12 pr_2 border_bt">
						<input type="search" class="input_search_all noboder pl_10 w_100 pr_10 font14" id="inputsearchall_ntd" name="hdn_tu_khoa" placeholder="Nhập từ khóa">
					</div>
					<div class="col-xs-12 pr_2 border_bt">
						<div id="sl-nganhnghe4" class="filter_box font14 style-flat w_100 box_nganhnghe_s">
							<i class="icon_select_box icon_listbox icon_24 icon-24"></i>
							<select name="hdn_nganh_nghe_cap1" class="selectpicker box_select_filter pos_relative select-style font14" tabindex="-1">
								<option value="">Tất cả Ngành nghề</option>
								<option value="30">Kế toán-Kiểm toán</option>
								<option value="38">Hành chính-Văn phòng</option>
								<option value="63">Bán hàng </option>
								<option value="41">Xây dựng</option>
								<option value="8">Điện-Điện tử</option>
								<option value="4">Cơ khí-Chế tạo</option>
								<option value="43">Y tế-Dược</option>
								<option value="26">Lao động phổ thông</option>
								<option value="96">Nhân viên kinh doanh</option>
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
								<option value="48">Làm bán thời gian</option>
								<option value="53">Marketing-PR</option>
								<option value="20">Mỹ phẩm-Trang sức</option>
								<option value="22">Ngân hàng</option>
								<option value="44">Ngành nghề khác</option>
								<option value="62">Nghệ thuật - Điện ảnh</option>
								<option value="78">Người giúp việc</option>
								<option value="59">Nhân sự</option>
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
					<div class="col-xs-12 pr_2 border_bt">
						<div class="filter_box font14 style-flat w_100 box_tinhthanh_s">
							<i class="icon_select_box icon_locabox icon_24 icon-24"></i>
							<select name="hdn_dia_diem" class="selectpicker box_select_filter pos_relative select-style" tabindex="-1" data-select-class="tinh_thanh_ntd">
								<option value="">Tất cả Tỉnh thành</option>
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
					<div class="col-xs-12 pr_2 border_bt">
						<div class="filter_box font14 style-flat w_100 box_mucluong">
							<i class="icon_select_box icon_moneybox icon_24 icon-24"></i>
							<div class="cd-dropdown-wrapper w_100 pt_12">
								<span class="drop_filter_top" data-jq-dropdown="#filter_mucluong2">Tất cả Mức lương</span>
								<div id="filter_mucluong2" class="jq-dropdown dropdown_box">
									<ul class="box_drop_mucluong_ntd nomargin">
										<li>
											<div class="modal-drop-mucluong font14">
												<div class="demo-list pb_6">
													<input value="1" tabindex="1" type="checkbox" name="hdn_muc_luong[]" id="mul_1">
													<label for="mul_1" class="font14">Thỏa thuận</label>
												</div>
												<div class="demo-list pb_6">
													<input value="2" tabindex="1" type="checkbox" name="hdn_muc_luong[]" id="mul_2">
													<label for="mul_2" class="font14">1 - 3 triệu</label>
												</div>
												<div class="demo-list pb_6">
													<input value="3" tabindex="1" type="checkbox" name="hdn_muc_luong[]" id="mul_3">
													<label for="mul_3" class="font14">3 - 5 triệu</label>
												</div>
												<div class="demo-list pb_6">
													<input value="4" tabindex="1" type="checkbox" name="hdn_muc_luong[]" id="mul_4">
													<label for="mul_4" class="font14">5 - 7 triệu</label>
												</div>
												<div class="demo-list pb_6">
													<input value="5" tabindex="1" type="checkbox" name="hdn_muc_luong[]" id="mul_5">
													<label for="mul_5" class="font14">7 – 10 triệu</label>
												</div>
												<div class="demo-list pb_6">
													<input value="6" tabindex="1" type="checkbox" name="hdn_muc_luong[]" id="mul_6">
													<label for="mul_6" class="font14">10 – 15 triệu</label>
												</div>
												<div class="demo-list pb_6">
													<input value="7" tabindex="1" type="checkbox" name="hdn_muc_luong[]" id="mul_7">
													<label for="mul_7" class="font14">15 – 20 triệu</label>
												</div>
												<div class="demo-list pb_6">
													<input value="8" tabindex="1" type="checkbox" name="hdn_muc_luong[]" id="mul_8">
													<label for="mul_8" class="font14">20 – 30 triệu</label>
												</div>
												<div class="demo-list pb_6">
													<input value="9" tabindex="1" type="checkbox" name="hdn_muc_luong[]" id="mul_9">
													<label for="mul_9" class="font14">Trên 30 triệu</label>
												</div>
											</div>
										</li>
										<li>
											<div class="modal-footer-filter" style="text-align: center">
												<button type="button" class="btn btn-blue btn-lg w136 btn_search_time" id="btn_search_time">
													CHỌN
												</button>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 pr_2 border_bt">
						<div class="filter_box font14 style-flat w_100 box_tinhthanh_s">
							<i class="icon_select_box icon_trinh_do icon_24 icon-24"></i>
							<select name="trinh_do_ntd" class="selectpicker box_select_filter pos_relative select-style" data-diss="-1" tabindex="-1">
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

					<div class="col-xs-12 pr_2 border_bt">
						<div class="filter_box font14 style-flat w_100 box_tinhthanh_s">
							<i class="icon_select_box icon_kinh_nghiem icon_24 icon-24"></i>
							<select name="hdn_kinh_nghiem" class="selectpicker box_select_filter pos_relative select-style" data-diss="-1" tabindex="-1" data-select-class="kinh_nghiem_ntd">
								<option value="">Tất cả Kinh nghiệm</option>
								<option value="8">Chưa có kinh nghiệm</option>
								<option value="1">Dưới 1 năm</option>
								<option value="2">1 năm</option>
								<option value="3">2 năm</option>
								<option value="4">3 năm</option>
								<option value="5">4 năm</option>
								<option value="6">5 năm</option>
								<option value="7">Hơn 5 năm</option>
							</select>
						</div>
					</div>
					<div class="col-xs-12 pr_2 border_bt">
						<div class="filter_box font14 style-flat w_100 box_tinhthanh_s">
							<i class="icon_select_box icon_gioi_tinh icon_24 icon-24"></i>
							<select name="gioi_tinh_ntd" class="selectpicker box_select_filter pos_relative select-style" data-diss="-1" tabindex="-1">
								<option value="">Tất cả Giới tính</option>
								<option value="0">Nữ</option>
								<option value="1">Nam</option>
							</select>
						</div>
					</div>
					<div class="col-xs-12 pr_2 border_bt">
						<div class="filter_box font14 style-flat w_100 box_tinhthanh_s">
							<i class="icon_select_box icon_ngoai_ngu icon_24 icon-24"></i>
							<select name="ngoai_ngu_ntd" class="selectpicker box_select_filter pos_relative select-style" tabindex="-1">
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
								<option value="CZ">Czech  - Tiếng Séc</option>
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
								<option value="RO">Romanian  - Tiếng Ru ma ni</option>
								<option value="ES">Spanish - Tiếng Tây Ban Nha</option>
								<option value="TW">Taiwanese - Tiếng Đài Loan</option>
								<option value="TR">Turkish - Tiếng Thổ Nhĩ Kỳ</option>
								<option value="TH">Thai - Tiếng Thái</option>
								<option value="UA">Ukrainian - Tiếng Ucraina</option>
							</select>
						</div>
					</div>
					<div class="col-xs-12 pr_2 border_bt">
						<div class="filter_box font14 style-flat w_100 box_tinhthanh_s">
							<i class="icon_select_box icon_thoi_gian icon_24 icon-24"></i>
							<select name="thoi_gian_ntd" class="selectpicker box_select_filter pos_relative select-style" data-diss="-1" tabindex="-1">
								<option value="">Thời gian cập nhật</option>
								<option value="1">Trong vòng 1 Ngày</option>
								<option value="2">1 Tuần gần đây</option>
								<option value="3">1 Tháng gần đây</option>
								<option value="4">2 Tháng gần đây</option>
							</select>
						</div>
					</div>
					<div class="col-xs-12">
						<a href="javascript:void(0);" class="btn btn-pink btn-lg w176 btn_s_search pl_16 btn_timkiem_all" onclick="javascript:$('#search_box_hosoungvien').submit();">
							<i class="icon_search icon_24 icon-24"></i>
							Tìm kiếm Hồ sơ
						</a>
					</div>
				</div>
			</div>
		</form>
		<script type="text/javascript">
			var fun_hoso_keypress = function() {
				$('#inputsearchall_ntd').on('keypress', function (event) {
					if(event.which === 13){
						$('#search_box_hosoungvien').submit();
					}
				});
			}
			if( document.addEventListener ) {
				addListener(document, "DOMContentLoaded", fun_hoso_keypress);
			}else{
				addListener(window, "load", fun_hoso_keypress);
			}
		</script>
		<div class="box_filter_map text-center">
			<div class="statistic font16">
				Cả nước tổng cộng có <br /><span class="text_orange font28 bold">610,976</span> hồ sơ người đang tìm việc
			</div>

			<div class="map-ntd">
				<div class="col-xs-4 offset10">
					<div class="fix-box map">
						<h3 id="nuoc-ngoai1" class="area nuoc-ngoai">
							<span class="fs12 txt_color_63248a fwb nuoc-ngoai1">Nước Ngoài </span><span class="fs12 txt-color-757575 fwb nuoc-ngoai2"></span>
							<img src="{{ URL::asset('assets/default/images/nn.png') }}" alt="Viec lam 24h" title="Việc làm 24h">
						</h3>
						<h3 id="dong-bac-bo " class="area dong-bac-bo">
							<span class="fs12 txt_color_63248a fwb dong-bac-bo1">Đông Bắc Bộ </span><span class="fs12 txt-color-757575 fwb dong-bac-bo2"></span>
							<img src="{{ URL::asset('assets/default/images/dong-bac.png') }}" alt="Viec lam 24h" title="Việc làm 24h">
						</h3>
						<h3 id="tay-bac-bo" class="area tay-bac-bo">
							<span class="fs12 txt_color_63248a fwb tay-bac-bo1">Tây Bắc bộ </span><span class="fs12 txt-color-757575 fwb tay-bac-bo2"></span>
							<img src="{{ URL::asset('assets/default/images/tay-bac.png') }}" alt="Viec lam 24h" title="Việc làm 24h">
						</h3>
						<h3 id="bac-trung-bo" class="area bac-trung-bo">
							<span class="fs12 txt_color_63248a fwb bac-trung-bo1">Bắc Trung Bộ </span><span class="fs12 txt-color-757575 fwb bac-trung-bo2"></span>
							<img src="{{ URL::asset('assets/default/images/trung-bac.png') }}" alt="Viec lam 24h" title="Việc làm 24h">
						</h3>
						<h3 id="nam-trung-bo" class="area nam-trung-bo">
							<span class="fs12 txt_color_63248a fwb nam-trung-bo1">Nam Trung Bộ </span><span class="fs12 txt-color-757575 fwb nam-trung-bo2"></span>
							<img src="{{ URL::asset('assets/default/images/nam-bo.png') }}" alt="Viec lam 24h" title="Việc làm 24h">
						</h3>
						<h3 id="tay-nguyen" class="area tay-nguyen">
							<span class="fs12 txt_color_63248a fwb tay-nguyen1">Tây Nguyên </span><span class="fs12 txt-color-757575 fwb tay-nguyen2"></span>
							<img src="{{ URL::asset('assets/default/images/tay-nguyen.png') }}" alt="Viec lam 24h" title="Việc làm 24h">
						</h3>
						<h3 id="tay-nam-bo" class="area tay-nam-bo">
							<span class="fs12 txt_color_63248a fwb tay-nam-bo1">Tây Nam Bộ </span><span class="fs12 txt-color-757575 fwb tay-nam-bo2"></span>
							<img src="{{ URL::asset('assets/default/images/tay-nam.png') }}" alt="Viec lam 24h" title="Việc làm 24h">
						</h3>
						<h3 id="dong-nam-bo" class="area dong-nam-bo">
							<span class="fs12 txt_color_63248a fwb dong-nam-bo1">Đông Nam Bộ </span><span class="fs12 txt-color-757575 fwb dong-nam-bo2"></span>
							<img src="{{ URL::asset('assets/default/images/dong-nam.png') }}" alt="Viec lam 24h" title="Việc làm 24h">
						</h3>
					</div>
				</div>

				<div class="option-checkbox active" style="display: none">
					<div class="group-option active">
						<div class="icheckbox_minimal-aero active checked" style="position: relative;">
							<input type="checkbox" value="66" id="nuoc-ngoai" name="tinh_thanh[]" class="style-checkbox khu-vuc" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
							<input type="checkbox" class="style-checkbox khu-vuc" name="" id="tay-bac-bo" value="tay-bac-bo" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
							<input type="checkbox" class="style-checkbox khu-vuc" name="" id="dong-bac-bo" value="dong-bac-bo" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
							<input type="checkbox" class="style-checkbox khu-vuc" name="" id="bac-trung-bo" value="bac-trung-bo" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
							<input type="checkbox" class="style-checkbox khu-vuc" name="" id="tay-nguyen" value="tay-nguyen" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
							<input type="checkbox" class="style-checkbox khu-vuc" name="" id="nam-trung-bo" value="nam-trung-bo" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
							<input type="checkbox" class="style-checkbox khu-vuc" name="" id="dong-nam-bo" value="dong-nam-bo" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
							<input type="checkbox" class="style-checkbox khu-vuc" name="" id="tay-nam-bo" value="tay-nam-bo" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Phan loai ho theo -->
	<h3 class="title_text_line mt24 fwb">
		<span class="text-tim-nhat uppercase">Phân loại hồ sơ người tìm việc theo :</span>
	</h3>
	<div class="box_tab">
		<div role="tabpanel">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs w_100" role="tablist">
				<li role="presentation" class="active ml1"><span class="left_tab"></span><a href="#viec_nganhnghe" aria-controls="viec_nganhnghe" role="tab" data-toggle="tab" class="bold font16 uppercase m0">Ngành nghề</a><span class="right_tab"></span></li>
				<li role="presentation" class="ml_20 kinhnghiem_hocvan_mucluong"><span class="left_tab"></span><a href="#viec_kinhnghiem_hocvan_mucluong" aria-controls="viec_kinhnghiem_hocvan_mucluong" role="tab" data-toggle="tab" class="bold font16 uppercase m0">Kinh nghiệm - Học vấn - Mức lương</a><span class="right_tab"></span></li>
				<li role="presentation" class="ml_20"><span class="left_tab"></span><a href="#viec_tinh" aria-controls="viec_tinh" role="tab" data-toggle="tab" class="bold font16 uppercase m0">Tỉnh thành</a><span class="right_tab"></span></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content w_100">
				<div role="tabpanel" class="tab-pane active" id="viec_nganhnghe">
					<div class="search_nghanhnghe list_item_one bg_white">
						<div class="search_filter_ola">
							<div class="floatLeft pos_relative"><i class="icon_input_search icon_24 icon-24 pos_absolute"></i><input type="text" placeholder="Tìm nhanh" id="filter_nganhnghe" class="form-control pl_30 input-lg w346 input_search"></div>
							<span class="floatRight mt_6 text_grey pr_16">Sắp xếp theo: <a rel="gate_nganhnghe_hot" href="javascript:void();" class="text_blue tab_nganhnghe_box">Ngành hot</a> | <a rel="gate_nganhnghe_abc" href="javascript:void();" class="text_black tab_nganhnghe_box">ABC</a></span>
						</div>
						<div class="clearfix"></div>
						<div id="gate_nganhnghe_hot" class="box_nganhnghe list_nganhnghe_all mt_10 ">
							<div class="content_box_ola">

								<div class="w_33 floatLeft bold nganhnghe_item " data-khong-dau="Ke toan-Kiem toan"><a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan-c30.html" class="text_black">Kế toán-Kiểm toán <span class="text_pink">(23,725)</span></a></div>
								<div class="w_33 floatLeft bold nganhnghe_item " data-khong-dau="Hanh chinh-Van phong"><a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong-c38.html" class="text_black">Hành chính-Văn phòng <span class="text_pink">(14,377)</span></a></div>
								<div class="w_33 floatLeft bold nganhnghe_item " data-khong-dau="Ban hang "><a href="https://vieclam24h.vn/nha-tuyen-dung/ban-hang-c63.html" class="text_black">Bán hàng  <span class="text_pink">(12,031)</span></a></div>
								<div class="w_33 floatLeft bold nganhnghe_item " data-khong-dau="Xay dung"><a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung-c41.html" class="text_black">Xây dựng <span class="text_pink">(8,312)</span></a></div>
								<div class="w_33 floatLeft bold nganhnghe_item " data-khong-dau="dien-dien tu"><a href="https://vieclam24h.vn/nha-tuyen-dung/dien-dien-tu-c8.html" class="text_black">Điện-Điện tử <span class="text_pink">(7,053)</span></a></div>
								<div class="w_33 floatLeft bold nganhnghe_item " data-khong-dau="Co khi-Che tao"><a href="https://vieclam24h.vn/nha-tuyen-dung/co-khi-che-tao-c4.html" class="text_black">Cơ khí-Chế tạo <span class="text_pink">(5,033)</span></a></div>
								<div class="w_33 floatLeft bold nganhnghe_item " data-khong-dau="Y te-Duoc"><a href="https://vieclam24h.vn/nha-tuyen-dung/y-te-duoc-c43.html" class="text_black">Y tế-Dược <span class="text_pink">(4,894)</span></a></div>
								<div class="w_33 floatLeft bold nganhnghe_item " data-khong-dau="Lao dong pho thong"><a href="https://vieclam24h.vn/nha-tuyen-dung/lao-dong-pho-thong-c26.html" class="text_black">Lao động phổ thông <span class="text_pink">(4,572)</span></a></div>
								<div class="w_33 floatLeft bold nganhnghe_item " data-khong-dau="Nhan vien kinh doanh"><a href="https://vieclam24h.vn/nha-tuyen-dung/nhan-vien-kinh-doanh-c96.html" class="text_black">Nhân viên kinh doanh <span class="text_pink">(4,342)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Lam ban thoi gian"><a href="https://vieclam24h.vn/nha-tuyen-dung/lam-ban-thoi-gian-c48.html" class="text_black">Làm bán thời gian <span class="text_pink">(4,279)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Van tai"><a href="https://vieclam24h.vn/nha-tuyen-dung/van-tai-lai-xe-c39.html" class="text_black">Vận tải <span class="text_pink">(4,162)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Ky thuat"><a href="https://vieclam24h.vn/nha-tuyen-dung/ky-thuat-c16.html" class="text_black">Kỹ thuật <span class="text_pink">(3,633)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Nhan su"><a href="https://vieclam24h.vn/nha-tuyen-dung/nhan-su-c59.html" class="text_black">Nhân sự <span class="text_pink">(3,243)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Quan tri kinh doanh"><a href="https://vieclam24h.vn/nha-tuyen-dung/quan-tri-kinh-doanh-c14.html" class="text_black">Quản trị kinh doanh <span class="text_pink">(3,009)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="IT phan cung/mang"><a href="https://vieclam24h.vn/nha-tuyen-dung/it-phan-cung-mang-c5.html" class="text_black">IT phần cứng/mạng <span class="text_pink">(2,890)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Giao duc-dao tao"><a href="https://vieclam24h.vn/nha-tuyen-dung/giao-duc-dao-tao-c10.html" class="text_black">Giáo dục-Đào tạo <span class="text_pink">(2,817)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Xuat, nhap khau"><a href="https://vieclam24h.vn/nha-tuyen-dung/xuat-nhap-khau-c42.html" class="text_black">Xuất, nhập khẩu <span class="text_pink">(2,771)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Thuc pham-do uong"><a href="https://vieclam24h.vn/nha-tuyen-dung/thuc-pham-do-uong-c34.html" class="text_black">Thực phẩm-Đồ uống <span class="text_pink">(2,718)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Khach san-Nha hang"><a href="https://vieclam24h.vn/nha-tuyen-dung/khach-san-nha-hang-c84.html" class="text_black">Khách sạn-Nhà hàng <span class="text_pink">(2,655)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="IT phan mem"><a href="https://vieclam24h.vn/nha-tuyen-dung/it-phan-mem-c74.html" class="text_black">IT phần mềm <span class="text_pink">(2,139)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Sinh vien lam them"><a href="https://vieclam24h.vn/nha-tuyen-dung/sinh-vien-lam-them-c46.html" class="text_black">Sinh viên làm thêm <span class="text_pink">(2,138)</span></a></div>
							</div>
							<div class="txc w_100 clearfix bt_more_ola">
								<h3 class="btn pt_0 text_blue mt_6  font16 ">
									<i class="icon_load_more icon_24 icon-24"></i>
									Xem tất cả ngành nghề
								</h3>
							</div>
							<div class="more_filter_ola">
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Det may - Da giay"><a href="https://vieclam24h.vn/nha-tuyen-dung/det-may-da-giay-c50.html" class="text_black">Dệt may - Da giày <span class="text_pink">(2,038)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Dich vu"><a href="https://vieclam24h.vn/nha-tuyen-dung/dich-vu-c7.html" class="text_black">Dịch vụ <span class="text_pink">(2,025)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Hoa hoc-Sinh hoc"><a href="https://vieclam24h.vn/nha-tuyen-dung/hoa-hoc-sinh-hoc-c87.html" class="text_black">Hoá học-Sinh học <span class="text_pink">(1,744)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Ngan hang"><a href="https://vieclam24h.vn/nha-tuyen-dung/ngan-hang-c22.html" class="text_black">Ngân hàng <span class="text_pink">(1,719)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Marketing-PR"><a href="https://vieclam24h.vn/nha-tuyen-dung/marketing-pr-c53.html" class="text_black">Marketing-PR <span class="text_pink">(1,681)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Kien truc-TK noi that"><a href="https://vieclam24h.vn/nha-tuyen-dung/kien-truc-tk-noi-that-c15.html" class="text_black">Kiến trúc-TK nội thất <span class="text_pink">(1,498)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Tu van"><a href="https://vieclam24h.vn/nha-tuyen-dung/tu-van-c37.html" class="text_black">Tư vấn <span class="text_pink">(1,441)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Bien-Phien dich"><a href="https://vieclam24h.vn/nha-tuyen-dung/bien-phien-dich-c79.html" class="text_black">Biên-Phiên dịch <span class="text_pink">(1,328)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Thiet ke-My thuat"><a href="https://vieclam24h.vn/nha-tuyen-dung/thiet-ke-my-thuat-c32.html" class="text_black">Thiết kế-Mỹ thuật <span class="text_pink">(1,263)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="o to - Xe may"><a href="https://vieclam24h.vn/nha-tuyen-dung/o-to-xe-may-c89.html" class="text_black">Ô tô - Xe máy <span class="text_pink">(1,172)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="dien tu vien thong"><a href="https://vieclam24h.vn/nha-tuyen-dung/dien-tu-vien-thong-c54.html" class="text_black">Điện tử viễn thông <span class="text_pink">(1,114)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Bao ve"><a href="https://vieclam24h.vn/nha-tuyen-dung/bao-ve-c94.html" class="text_black">Bảo vệ <span class="text_pink">(1,091)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Vat tu-Thiet bi"><a href="https://vieclam24h.vn/nha-tuyen-dung/vat-tu-thiet-bi-c40.html" class="text_black">Vật tư-Thiết bị <span class="text_pink">(1,090)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Thu ky-Tro ly"><a href="https://vieclam24h.vn/nha-tuyen-dung/thu-ky-tro-ly-c91.html" class="text_black">Thư ký-Trợ lý <span class="text_pink">(1,082)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Nong-Lam-Ngu nghiep"><a href="https://vieclam24h.vn/nha-tuyen-dung/nong-lam-ngu-nghiep-c17.html" class="text_black">Nông-Lâm-Ngư nghiệp <span class="text_pink">(1,045)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Dau khi-Hoa chat"><a href="https://vieclam24h.vn/nha-tuyen-dung/dau-khi-hoa-chat-c6.html" class="text_black">Dầu khí-Hóa chất <span class="text_pink">(992)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Du lich"><a href="https://vieclam24h.vn/nha-tuyen-dung/du-lich-c9.html" class="text_black">Du lịch <span class="text_pink">(964)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Phap ly"><a href="https://vieclam24h.vn/nha-tuyen-dung/phap-ly-c18.html" class="text_black">Pháp lý <span class="text_pink">(961)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Bao chi-Truyen hinh"><a href="https://vieclam24h.vn/nha-tuyen-dung/bao-chi-truyen-hinh-c49.html" class="text_black">Báo chí-Truyền hình <span class="text_pink">(859)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Cong nghiep"><a href="https://vieclam24h.vn/nha-tuyen-dung/cong-nghiep-c90.html" class="text_black">Công nghiệp <span class="text_pink">(806)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Nganh nghe khac"><a href="https://vieclam24h.vn/nha-tuyen-dung/nganh-nghe-khac-c44.html" class="text_black">Ngành nghề khác <span class="text_pink">(800)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Ky thuat ung dung"><a href="https://vieclam24h.vn/nha-tuyen-dung/ky-thuat-ung-dung-c61.html" class="text_black">Kỹ thuật ứng dụng <span class="text_pink">(562)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Tiep thi-Quang cao"><a href="https://vieclam24h.vn/nha-tuyen-dung/tiep-thi-quang-cao-c36.html" class="text_black">Tiếp thị-Quảng cáo <span class="text_pink">(500)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="My pham-Trang suc"><a href="https://vieclam24h.vn/nha-tuyen-dung/my-pham-trang-suc-c20.html" class="text_black">Mỹ phẩm-Trang sức <span class="text_pink">(447)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Buu chinh"><a href="https://vieclam24h.vn/nha-tuyen-dung/buu-chinh-c2.html" class="text_black">Bưu chính <span class="text_pink">(445)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="KD bat dong san"><a href="https://vieclam24h.vn/nha-tuyen-dung/kd-bat-dong-san-c81.html" class="text_black">KD bất động sản <span class="text_pink">(432)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="To chuc su kien-Qua tang"><a href="https://vieclam24h.vn/nha-tuyen-dung/to-chuc-su-kien-qua-tang-c83.html" class="text_black">Tổ chức sự kiện-Quà tặng <span class="text_pink">(341)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Thoi trang"><a href="https://vieclam24h.vn/nha-tuyen-dung/thoi-trang-c86.html" class="text_black">Thời trang <span class="text_pink">(318)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="In an-Xuat ban"><a href="https://vieclam24h.vn/nha-tuyen-dung/in-an-xuat-ban-c12.html" class="text_black">In ấn-Xuất bản <span class="text_pink">(304)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Thuc tap"><a href="https://vieclam24h.vn/nha-tuyen-dung/thuc-tap-c52.html" class="text_black">Thực tập <span class="text_pink">(286)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Thuong mai dien tu"><a href="https://vieclam24h.vn/nha-tuyen-dung/thuong-mai-dien-tu-c77.html" class="text_black">Thương mại điện tử <span class="text_pink">(283)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Thiet ke do hoa web"><a href="https://vieclam24h.vn/nha-tuyen-dung/thiet-ke-do-hoa-web-c75.html" class="text_black">Thiết kế đồ hoạ web <span class="text_pink">(279)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Bao hiem"><a href="https://vieclam24h.vn/nha-tuyen-dung/bao-hiem-c1.html" class="text_black">Bảo hiểm <span class="text_pink">(272)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Game"><a href="https://vieclam24h.vn/nha-tuyen-dung/game-c76.html" class="text_black">Game <span class="text_pink">(267)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Nghe thuat - dien anh"><a href="https://vieclam24h.vn/nha-tuyen-dung/nghe-thuat-dien-anh-c62.html" class="text_black">Nghệ thuật - Điện ảnh <span class="text_pink">(261)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Quan he doi ngoai"><a href="https://vieclam24h.vn/nha-tuyen-dung/quan-he-doi-ngoai-c28.html" class="text_black">Quan hệ đối ngoại <span class="text_pink">(210)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Hoach dinh-Du an"><a href="https://vieclam24h.vn/nha-tuyen-dung/hoach-dinh-du-an-c93.html" class="text_black">Hoạch định-Dự án <span class="text_pink">(183)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="NV trong quan Internet"><a href="https://vieclam24h.vn/nha-tuyen-dung/nv-trong-quan-internet-c65.html" class="text_black">NV trông quán Internet <span class="text_pink">(168)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Cong nghe cao"><a href="https://vieclam24h.vn/nha-tuyen-dung/cong-nghe-cao-c88.html" class="text_black">Công nghệ cao <span class="text_pink">(159)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Hang hai"><a href="https://vieclam24h.vn/nha-tuyen-dung/hang-hai-c57.html" class="text_black">Hàng hải <span class="text_pink">(151)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Hang gia dung"><a href="https://vieclam24h.vn/nha-tuyen-dung/hang-gia-dung-c85.html" class="text_black">Hàng gia dụng <span class="text_pink">(125)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Promotion Girl &#40;PG&#41;"><a href="https://vieclam24h.vn/nha-tuyen-dung/promotion-girl-40pg41-c92.html" class="text_black">Promotion Girl &#40;PG&#41; <span class="text_pink">(115)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Nguoi giup viec"><a href="https://vieclam24h.vn/nha-tuyen-dung/nguoi-giup-viec-c78.html" class="text_black">Người giúp việc <span class="text_pink">(100)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Hang khong"><a href="https://vieclam24h.vn/nha-tuyen-dung/hang-khong-c55.html" class="text_black">Hàng không <span class="text_pink">(97)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="dau tu"><a href="https://vieclam24h.vn/nha-tuyen-dung/dau-tu-c80.html" class="text_black">Đầu tư <span class="text_pink">(94)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Thu cong my nghe"><a href="https://vieclam24h.vn/nha-tuyen-dung/thu-cong-my-nghe-c33.html" class="text_black">Thủ công mỹ nghệ <span class="text_pink">(39)</span></a></div>
								<div class="w_33 floatLeft  nganhnghe_item " data-khong-dau="Chung khoan- Vang"><a href="https://vieclam24h.vn/nha-tuyen-dung/chung-khoan-vang-c101.html" class="text_black">Chứng khoán- Vàng <span class="text_pink">(33)</span></a></div>
							</div>
						</div>

						<div id="gate_nganhnghe_abc" class="box_nganhnghe list_nganhnghe_all mt_10 scrollbar_cus hide">
							<div class="w_33 floatLeft bold  nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan-c30.html" class="text_black">Kế toán-Kiểm toán <span class="text_pink">(23,725)</span></a></div>
							<div class="w_33 floatLeft bold  nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong-c38.html" class="text_black">Hành chính-Văn phòng <span class="text_pink">(14,377)</span></a></div>
							<div class="w_33 floatLeft bold  nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/ban-hang-c63.html" class="text_black">Bán hàng  <span class="text_pink">(12,031)</span></a></div>
							<div class="w_33 floatLeft bold  nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung-c41.html" class="text_black">Xây dựng <span class="text_pink">(8,312)</span></a></div>
							<div class="w_33 floatLeft bold  nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/dien-dien-tu-c8.html" class="text_black">Điện-Điện tử <span class="text_pink">(7,053)</span></a></div>
							<div class="w_33 floatLeft bold  nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/co-khi-che-tao-c4.html" class="text_black">Cơ khí-Chế tạo <span class="text_pink">(5,033)</span></a></div>
							<div class="w_33 floatLeft bold  nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/y-te-duoc-c43.html" class="text_black">Y tế-Dược <span class="text_pink">(4,894)</span></a></div>
							<div class="w_33 floatLeft bold  nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/lao-dong-pho-thong-c26.html" class="text_black">Lao động phổ thông <span class="text_pink">(4,572)</span></a></div>
							<div class="w_33 floatLeft bold  nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/nhan-vien-kinh-doanh-c96.html" class="text_black">Nhân viên kinh doanh <span class="text_pink">(4,342)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/bao-chi-truyen-hinh-c49.html" class="text_black">Báo chí-Truyền hình <span class="text_pink">(859)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/bao-hiem-c1.html" class="text_black">Bảo hiểm <span class="text_pink">(272)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/bao-ve-c94.html" class="text_black">Bảo vệ <span class="text_pink">(1,091)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/bien-phien-dich-c79.html" class="text_black">Biên-Phiên dịch <span class="text_pink">(1,328)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/buu-chinh-c2.html" class="text_black">Bưu chính <span class="text_pink">(445)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/chung-khoan-vang-c101.html" class="text_black">Chứng khoán- Vàng <span class="text_pink">(33)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/cong-nghe-cao-c88.html" class="text_black">Công nghệ cao <span class="text_pink">(159)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/cong-nghiep-c90.html" class="text_black">Công nghiệp <span class="text_pink">(806)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/dau-khi-hoa-chat-c6.html" class="text_black">Dầu khí-Hóa chất <span class="text_pink">(992)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/dau-tu-c80.html" class="text_black">Đầu tư <span class="text_pink">(94)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/det-may-da-giay-c50.html" class="text_black">Dệt may - Da giày <span class="text_pink">(2,038)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/dich-vu-c7.html" class="text_black">Dịch vụ <span class="text_pink">(2,025)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/dien-tu-vien-thong-c54.html" class="text_black">Điện tử viễn thông <span class="text_pink">(1,114)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/du-lich-c9.html" class="text_black">Du lịch <span class="text_pink">(964)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/game-c76.html" class="text_black">Game <span class="text_pink">(267)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/giao-duc-dao-tao-c10.html" class="text_black">Giáo dục-Đào tạo <span class="text_pink">(2,817)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/hang-gia-dung-c85.html" class="text_black">Hàng gia dụng <span class="text_pink">(125)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/hang-hai-c57.html" class="text_black">Hàng hải <span class="text_pink">(151)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/hang-khong-c55.html" class="text_black">Hàng không <span class="text_pink">(97)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/hoa-hoc-sinh-hoc-c87.html" class="text_black">Hoá học-Sinh học <span class="text_pink">(1,744)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/hoach-dinh-du-an-c93.html" class="text_black">Hoạch định-Dự án <span class="text_pink">(183)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/in-an-xuat-ban-c12.html" class="text_black">In ấn-Xuất bản <span class="text_pink">(304)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/it-phan-cung-mang-c5.html" class="text_black">IT phần cứng/mạng <span class="text_pink">(2,890)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/it-phan-mem-c74.html" class="text_black">IT phần mềm <span class="text_pink">(2,139)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/kd-bat-dong-san-c81.html" class="text_black">KD bất động sản <span class="text_pink">(432)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/khach-san-nha-hang-c84.html" class="text_black">Khách sạn-Nhà hàng <span class="text_pink">(2,655)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/kien-truc-tk-noi-that-c15.html" class="text_black">Kiến trúc-TK nội thất <span class="text_pink">(1,498)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/ky-thuat-c16.html" class="text_black">Kỹ thuật <span class="text_pink">(3,633)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/ky-thuat-ung-dung-c61.html" class="text_black">Kỹ thuật ứng dụng <span class="text_pink">(562)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/lam-ban-thoi-gian-c48.html" class="text_black">Làm bán thời gian <span class="text_pink">(4,279)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/marketing-pr-c53.html" class="text_black">Marketing-PR <span class="text_pink">(1,681)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/my-pham-trang-suc-c20.html" class="text_black">Mỹ phẩm-Trang sức <span class="text_pink">(447)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/ngan-hang-c22.html" class="text_black">Ngân hàng <span class="text_pink">(1,719)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/nganh-nghe-khac-c44.html" class="text_black">Ngành nghề khác <span class="text_pink">(800)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/nghe-thuat-dien-anh-c62.html" class="text_black">Nghệ thuật - Điện ảnh <span class="text_pink">(261)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/nguoi-giup-viec-c78.html" class="text_black">Người giúp việc <span class="text_pink">(100)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/nhan-su-c59.html" class="text_black">Nhân sự <span class="text_pink">(3,243)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/nong-lam-ngu-nghiep-c17.html" class="text_black">Nông-Lâm-Ngư nghiệp <span class="text_pink">(1,045)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/nv-trong-quan-internet-c65.html" class="text_black">NV trông quán Internet <span class="text_pink">(168)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/o-to-xe-may-c89.html" class="text_black">Ô tô - Xe máy <span class="text_pink">(1,172)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/phap-ly-c18.html" class="text_black">Pháp lý <span class="text_pink">(961)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/promotion-girl-40pg41-c92.html" class="text_black">Promotion Girl &#40;PG&#41; <span class="text_pink">(115)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/quan-he-doi-ngoai-c28.html" class="text_black">Quan hệ đối ngoại <span class="text_pink">(210)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/quan-tri-kinh-doanh-c14.html" class="text_black">Quản trị kinh doanh <span class="text_pink">(3,009)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/sinh-vien-lam-them-c46.html" class="text_black">Sinh viên làm thêm <span class="text_pink">(2,138)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/thuc-pham-do-uong-c34.html" class="text_black">Thực phẩm-Đồ uống <span class="text_pink">(2,718)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/thiet-ke-do-hoa-web-c75.html" class="text_black">Thiết kế đồ hoạ web <span class="text_pink">(279)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/thiet-ke-my-thuat-c32.html" class="text_black">Thiết kế-Mỹ thuật <span class="text_pink">(1,263)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/thoi-trang-c86.html" class="text_black">Thời trang <span class="text_pink">(318)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/thu-cong-my-nghe-c33.html" class="text_black">Thủ công mỹ nghệ <span class="text_pink">(39)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/thu-ky-tro-ly-c91.html" class="text_black">Thư ký-Trợ lý <span class="text_pink">(1,082)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/thuc-tap-c52.html" class="text_black">Thực tập <span class="text_pink">(286)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/thuong-mai-dien-tu-c77.html" class="text_black">Thương mại điện tử <span class="text_pink">(283)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/tiep-thi-quang-cao-c36.html" class="text_black">Tiếp thị-Quảng cáo <span class="text_pink">(500)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/to-chuc-su-kien-qua-tang-c83.html" class="text_black">Tổ chức sự kiện-Quà tặng <span class="text_pink">(341)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/tu-van-c37.html" class="text_black">Tư vấn <span class="text_pink">(1,441)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/van-tai-lai-xe-c39.html" class="text_black">Vận tải <span class="text_pink">(4,162)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/vat-tu-thiet-bi-c40.html" class="text_black">Vật tư-Thiết bị <span class="text_pink">(1,090)</span></a></div>
							<div class="w_33 floatLeft   nganhnghe_item"><a href="https://vieclam24h.vn/nha-tuyen-dung/xuat-nhap-khau-c42.html" class="text_black">Xuất, nhập khẩu <span class="text_pink">(2,771)</span></a></div>
						</div>
					</div>                </div>
				<div role="tabpanel" class="tab-pane" id="viec_kinhnghiem_hocvan_mucluong">
					<div class="list_item_two bg_white">
						<div>
							<div class="list-items listkinhnghiem">
								<div class="detail-link pos_relative">
									<div class="w_100 mb10">
										<span class="title-blockjob-main truncate-ellipsis font14 text_violet bold">Chọn kinh nghiệm :</span>
									</div>
									<div class="clear"></div>
									<div class="list_note_kinhnghiem">
										<div class="listkn"><a href="/tim-kiem-ung-vien-nhanh/?hdn_kinh_nghiem[]=8" class="nounder"><b>- Chưa có kinh nghiệm :</b> 19,076</a></div>
										<div class="listkn"><a href="/tim-kiem-ung-vien-nhanh/?hdn_kinh_nghiem[]=1" class="nounder"><b>- Dưới 1 năm :</b> 24,669</a></div>
										<div class="listkn"><a href="/tim-kiem-ung-vien-nhanh/?hdn_kinh_nghiem[]=2" class="nounder"><b>- 1 năm :</b> 18,639</a></div>
										<div class="listkn"><a href="/tim-kiem-ung-vien-nhanh/?hdn_kinh_nghiem[]=3" class="nounder"><b>- 2 năm :</b> 17,240</a></div>
										<div class="listkn"><a href="/tim-kiem-ung-vien-nhanh/?hdn_kinh_nghiem[]=4" class="nounder"><b>- 3 năm :</b> 12,126</a></div>
										<div class="listkn"><a href="/tim-kiem-ung-vien-nhanh/?hdn_kinh_nghiem[]=5" class="nounder"><b>- 4 năm :</b> 7,382</a></div>
										<div class="listkn"><a href="/tim-kiem-ung-vien-nhanh/?hdn_kinh_nghiem[]=6" class="nounder"><b>- 5 năm :</b> 5,741</a></div>
										<div class="listkn"><a href="/tim-kiem-ung-vien-nhanh/?hdn_kinh_nghiem[]=7" class="nounder"><b>- Hơn 5 năm :</b> 13,335</a></div>
									</div>
									<div class="clear"></div>
									<div class="mb10"></div>
									<div class="line_list"></div>
								</div>
							</div>
							<div class="list-items listkinhnghiem">
								<div class="detail-link pos_relative">
									<div class="w_100 mb10">
										<span class="title-blockjob-main truncate-ellipsis font14 text_violet bold">Chọn học vấn :</span>
									</div>
									<div class="clear"></div>
									<div class="list_note_kinhnghiem">
										<div class="listkn"><a href="/tim-kiem-ung-vien-nhanh/?trinh_do_ntd=1" class="nounder"><b>- Trên đại học :</b> 1,100</a></div>
										<div class="listkn"><a href="/tim-kiem-ung-vien-nhanh/?trinh_do_ntd=2" class="nounder"><b>- Đại học :</b> 64,357</a></div>
										<div class="listkn"><a href="/tim-kiem-ung-vien-nhanh/?trinh_do_ntd=3" class="nounder"><b>- Cao đẳng :</b> 32,206</a></div>
										<div class="listkn"><a href="/tim-kiem-ung-vien-nhanh/?trinh_do_ntd=4" class="nounder"><b>- Trung cấp :</b> 11,846</a></div>
										<div class="listkn"><a href="/tim-kiem-ung-vien-nhanh/?trinh_do_ntd=5" class="nounder"><b>- Trung học :</b> 6,334</a></div>
									</div>
									<div class="clear"></div>
									<div class="mb10"></div>
									<div class="line_list"></div>
								</div>
							</div>
							<div class="list-items listkinhnghiem">
								<div class="detail-link pos_relative">
									<div class="w_100 mb10">
										<span class="title-blockjob-main truncate-ellipsis font14 text_violet bold">Chọn mức lương :</span>
									</div>
									<div class="clear"></div>
									<div class="list_note_kinhnghiem">
										<div class="listkn"><a href="/tim-kiem-ung-vien-nhanh/?hdn_muc_luong[]=1" class="nounder"><b>- Thỏa thuận :</b> 35,981</a></div>
										<div class="listkn"><a href="/tim-kiem-ung-vien-nhanh/?hdn_muc_luong[]=2" class="nounder"><b>- 1 - 3 triệu :</b> 3,102</a></div>
										<div class="listkn"><a href="/tim-kiem-ung-vien-nhanh/?hdn_muc_luong[]=3" class="nounder"><b>- 3 - 5 triệu :</b> 30,087</a></div>
										<div class="listkn"><a href="/tim-kiem-ung-vien-nhanh/?hdn_muc_luong[]=4" class="nounder"><b>- 5 - 7 triệu :</b> 33,142</a></div>
										<div class="listkn"><a href="/tim-kiem-ung-vien-nhanh/?hdn_muc_luong[]=5" class="nounder"><b>- 7 – 10 triệu :</b> 11,357</a></div>
										<div class="listkn"><a href="/tim-kiem-ung-vien-nhanh/?hdn_muc_luong[]=6" class="nounder"><b>- 10 – 15 triệu :</b> 3,348</a></div>
										<div class="listkn"><a href="/tim-kiem-ung-vien-nhanh/?hdn_muc_luong[]=7" class="nounder"><b>- 15 – 20 triệu :</b> 798</a></div>
										<div class="listkn"><a href="/tim-kiem-ung-vien-nhanh/?hdn_muc_luong[]=8" class="nounder"><b>- 20 – 30 triệu :</b> 270</a></div>
										<div class="listkn"><a href="/tim-kiem-ung-vien-nhanh/?hdn_muc_luong[]=9" class="nounder"><b>- Trên 30 triệu :</b> 123</a></div>
									</div>
									<div class="clear"></div>
								</div>
								<div class="mb10"></div>
							</div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="viec_tinh">
					<div class="search_nghanhnghe list_item_one bg_white">
						<div class="search_filter_ola">
							<div class="floatLeft pos_relative"><i class="icon_input_search icon_24 icon-24 pos_absolute"></i><input type="text" id="filter_tinhthanh" placeholder="Tìm nhanh" class="form-control input-lg w346 input_search"></div>
							<span class="floatRight mt_6 text_grey pr_16">Sắp xếp theo: <a href="javascript:void();" rel="gate_tinhthanh_sl" class="text_blue tab_tinhthanh_box">Tỉnh thành hot</a> | <a rel="gate_tinhthanh_abc"  href="javascript:void();" class="text_black tab_tinhthanh_box">ABC</a></span>
						</div>
						<div class="clearfix"></div>
						<div  id="gate_tinhthanh_sl"class="box_tinhthanh list_nganhnghe_all mt_10">
							<div class="content_box_ola">
								<div class="w_33 floatLeft tinh_item bold "><a href="https://vieclam24h.vn/nha-tuyen-dung/tp-hcm-p1.html" class="text_black">TP. HCM <span class="text_pink">(54,750)</span></a></div>
								<div class="w_33 floatLeft tinh_item bold "><a href="https://vieclam24h.vn/nha-tuyen-dung/ha-noi-p2.html" class="text_black">Hà Nội <span class="text_pink">(35,578)</span></a></div>
								<div class="w_33 floatLeft tinh_item bold "><a href="https://vieclam24h.vn/nha-tuyen-dung/binh-duong-p9.html" class="text_black">Bình Dương <span class="text_pink">(15,153)</span></a></div>
								<div class="w_33 floatLeft tinh_item bold "><a href="https://vieclam24h.vn/nha-tuyen-dung/dong-nai-p19.html" class="text_black">Đồng Nai <span class="text_pink">(7,266)</span></a></div>
								<div class="w_33 floatLeft tinh_item bold "><a href="https://vieclam24h.vn/nha-tuyen-dung/bac-ninh-p32.html" class="text_black">Bắc Ninh <span class="text_pink">(5,157)</span></a></div>
								<div class="w_33 floatLeft tinh_item bold "><a href="https://vieclam24h.vn/nha-tuyen-dung/da-nang-p23.html" class="text_black">Đà Nẵng <span class="text_pink">(4,923)</span></a></div>
								<div class="w_33 floatLeft tinh_item bold "><a href="https://vieclam24h.vn/nha-tuyen-dung/ba-ria-vung-tau-p53.html" class="text_black">Bà Rịa - Vũng Tàu <span class="text_pink">(3,235)</span></a></div>
								<div class="w_33 floatLeft tinh_item bold "><a href="https://vieclam24h.vn/nha-tuyen-dung/hung-yen-p26.html" class="text_black">Hưng Yên <span class="text_pink">(3,165)</span></a></div>
								<div class="w_33 floatLeft tinh_item bold "><a href="https://vieclam24h.vn/nha-tuyen-dung/hai-duong-p27.html" class="text_black">Hải Dương <span class="text_pink">(2,910)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/hai-phong-p22.html" class="text_black">Hải Phòng <span class="text_pink">(2,323)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/bac-giang-p91.html" class="text_black">Bắc Giang <span class="text_pink">(2,127)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/long-an-p66.html" class="text_black">Long An <span class="text_pink">(2,028)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/thai-nguyen-p49.html" class="text_black">Thái Nguyên <span class="text_pink">(1,887)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/thanh-hoa-p48.html" class="text_black">Thanh Hóa <span class="text_pink">(1,831)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/mien-bac-p96.html" class="text_black">Miền Bắc <span class="text_pink">(1,824)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/can-tho-p21.html" class="text_black">Cần Thơ <span class="text_pink">(1,769)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/mien-nam-p98.html" class="text_black">Miền Nam <span class="text_pink">(1,612)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/ha-nam-p77.html" class="text_black">Hà Nam <span class="text_pink">(1,584)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/nam-dinh-p65.html" class="text_black">Nam Định <span class="text_pink">(1,556)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/nghe-an-p64.html" class="text_black">Nghệ An <span class="text_pink">(1,514)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/vinh-phuc-p43.html" class="text_black">Vĩnh Phúc <span class="text_pink">(1,455)</span></a></div>
							</div>
							<div class="txc w_100">
								<h3 class="btn pt_0 text_blue mt_6 bt_more_ola font16">
									<i class="icon_load_more icon_24 icon-24"></i>
									Xem tất cả tỉnh thành
								</h3>
							</div>
							<div class="more_filter_ola">
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/thai-binh-p50.html" class="text_black">Thái Bình <span class="text_pink">(1,399)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/toan-quoc-p95.html" class="text_black">Toàn quốc <span class="text_pink">(1,080)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/binh-dinh-p89.html" class="text_black">Bình Định <span class="text_pink">(1,079)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/mien-trung-p97.html" class="text_black">Miền Trung <span class="text_pink">(1,061)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/ninh-binh-p63.html" class="text_black">Ninh Bình <span class="text_pink">(1,051)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/quang-ngai-p30.html" class="text_black">Quảng Ngãi <span class="text_pink">(1,044)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/ha-tinh-p76.html" class="text_black">Hà Tĩnh <span class="text_pink">(973)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/dac-lac-p83.html" class="text_black">Đắc Lắc <span class="text_pink">(960)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/khanh-hoa-p73.html" class="text_black">Khánh Hòa <span class="text_pink">(921)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/tien-giang-p47.html" class="text_black">Tiền Giang <span class="text_pink">(888)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/quang-nam-p58.html" class="text_black">Quảng Nam <span class="text_pink">(879)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/binh-phuoc-p88.html" class="text_black">Bình Phước <span class="text_pink">(850)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/thua-thien-hue-p94.html" class="text_black">Thừa Thiên Huế <span class="text_pink">(829)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/quang-ninh-p57.html" class="text_black">Quảng Ninh <span class="text_pink">(771)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/ben-tre-p90.html" class="text_black">Bến Tre <span class="text_pink">(730)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/phu-tho-p61.html" class="text_black">Phú Thọ <span class="text_pink">(727)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lam-dong-p67.html" class="text_black">Lâm Đồng <span class="text_pink">(709)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/tay-ninh-p51.html" class="text_black">Tây Ninh <span class="text_pink">(610)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/dong-thap-p80.html" class="text_black">Đồng Tháp <span class="text_pink">(594)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/binh-thuan-p87.html" class="text_black">Bình Thuận <span class="text_pink">(587)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/gia-lai-p79.html" class="text_black">Gia Lai <span class="text_pink">(583)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/an-giang-p52.html" class="text_black">An Giang <span class="text_pink">(529)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/vinh-long-p44.html" class="text_black">Vĩnh Long <span class="text_pink">(522)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/phu-yen-p60.html" class="text_black">Phú Yên <span class="text_pink">(480)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/kien-giang-p72.html" class="text_black">Kiên Giang <span class="text_pink">(390)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/hoa-binh-p74.html" class="text_black">Hòa Bình <span class="text_pink">(376)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/nuoc-ngoai-p99.html" class="text_black">Nước ngoài <span class="text_pink">(375)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/ca-mau-p86.html" class="text_black">Cà Mau <span class="text_pink">(347)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/dac-nong-p82.html" class="text_black">Đắc Nông <span class="text_pink">(318)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/ninh-thuan-p62.html" class="text_black">Ninh Thuận <span class="text_pink">(311)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/bac-lieu-p93.html" class="text_black">Bạc Liêu <span class="text_pink">(277)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/quang-binh-p59.html" class="text_black">Quảng Bình <span class="text_pink">(257)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/quang-tri-p56.html" class="text_black">Quảng Trị <span class="text_pink">(247)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/tra-vinh-p46.html" class="text_black">Trà Vinh <span class="text_pink">(222)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/kon-tum-p71.html" class="text_black">Kon Tum <span class="text_pink">(219)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/soc-trang-p55.html" class="text_black">Sóc Trăng <span class="text_pink">(191)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lao-cai-p68.html" class="text_black">Lào Cai <span class="text_pink">(191)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/tuyen-quang-p45.html" class="text_black">Tuyên Quang <span class="text_pink">(189)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lang-son-p69.html" class="text_black">Lạng Sơn <span class="text_pink">(184)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/hau-giang-p75.html" class="text_black">Hậu Giang <span class="text_pink">(175)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/yen-bai-p42.html" class="text_black">Yên Bái <span class="text_pink">(173)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/bac-kan-p92.html" class="text_black">Bắc Kạn <span class="text_pink">(136)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/son-la-p54.html" class="text_black">Sơn La <span class="text_pink">(121)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/cuu-long-p84.html" class="text_black">Cửu Long <span class="text_pink">(104)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/ha-giang-p78.html" class="text_black">Hà Giang <span class="text_pink">(97)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/dien-bien-p81.html" class="text_black">Điện Biên <span class="text_pink">(83)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/cao-bang-p85.html" class="text_black">Cao Bằng <span class="text_pink">(82)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Lai Châu <span class="text_pink">(80)</span></a></div>
							</div>
						</div>
						<div id="gate_tinhthanh_abc" class="box_tinhthanh list_nganhnghe_all mt_10 hide">
							<div class="content_box_ola">
								<div class="w_33 floatLeft tinh_item bold "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">TP. HCM <span class="text_pink">(54,750)</span></a></div>
								<div class="w_33 floatLeft tinh_item bold "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Hà Nội <span class="text_pink">(35,578)</span></a></div>
								<div class="w_33 floatLeft tinh_item bold "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Bình Dương <span class="text_pink">(15,153)</span></a></div>
								<div class="w_33 floatLeft tinh_item bold "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Đồng Nai <span class="text_pink">(7,266)</span></a></div>
								<div class="w_33 floatLeft tinh_item bold "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Bắc Ninh <span class="text_pink">(5,157)</span></a></div>
								<div class="w_33 floatLeft tinh_item bold "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Đà Nẵng <span class="text_pink">(4,923)</span></a></div>
								<div class="w_33 floatLeft tinh_item bold "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Bà Rịa - Vũng Tàu <span class="text_pink">(3,235)</span></a></div>
								<div class="w_33 floatLeft tinh_item bold "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Hưng Yên <span class="text_pink">(3,165)</span></a></div>
								<div class="w_33 floatLeft tinh_item bold "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Hải Dương <span class="text_pink">(2,910)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">An Giang <span class="text_pink">(529)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Bắc Giang <span class="text_pink">(2,127)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Bắc Kạn <span class="text_pink">(136)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Bạc Liêu <span class="text_pink">(277)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Bến Tre <span class="text_pink">(730)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Bình Định <span class="text_pink">(1,079)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Bình Phước <span class="text_pink">(850)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Bình Thuận <span class="text_pink">(587)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Cà Mau <span class="text_pink">(347)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Cần Thơ <span class="text_pink">(1,769)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Cao Bằng <span class="text_pink">(82)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Cửu Long <span class="text_pink">(104)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Đắc Lắc <span class="text_pink">(960)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Đắc Nông <span class="text_pink">(318)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Điện Biên <span class="text_pink">(83)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Đồng Tháp <span class="text_pink">(594)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Gia Lai <span class="text_pink">(583)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Hà Giang <span class="text_pink">(97)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Hà Nam <span class="text_pink">(1,584)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Hà Tĩnh <span class="text_pink">(973)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Hải Phòng <span class="text_pink">(2,323)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Hậu Giang <span class="text_pink">(175)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Hòa Bình <span class="text_pink">(376)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Khánh Hòa <span class="text_pink">(921)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Kiên Giang <span class="text_pink">(390)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Kon Tum <span class="text_pink">(219)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Lai Châu <span class="text_pink">(80)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Lâm Đồng <span class="text_pink">(709)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Lạng Sơn <span class="text_pink">(184)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Lào Cai <span class="text_pink">(191)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Long An <span class="text_pink">(2,028)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Miền Bắc <span class="text_pink">(1,824)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Miền Nam <span class="text_pink">(1,612)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Miền Trung <span class="text_pink">(1,061)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Nam Định <span class="text_pink">(1,556)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Nghệ An <span class="text_pink">(1,514)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Ninh Bình <span class="text_pink">(1,051)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Ninh Thuận <span class="text_pink">(311)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Nước ngoài <span class="text_pink">(375)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Phú Thọ <span class="text_pink">(727)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Phú Yên <span class="text_pink">(480)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Quảng Bình <span class="text_pink">(257)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Quảng Nam <span class="text_pink">(879)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Quảng Ngãi <span class="text_pink">(1,044)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Quảng Ninh <span class="text_pink">(771)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Quảng Trị <span class="text_pink">(247)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Sóc Trăng <span class="text_pink">(191)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Sơn La <span class="text_pink">(121)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Tây Ninh <span class="text_pink">(610)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Thái Bình <span class="text_pink">(1,399)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Thái Nguyên <span class="text_pink">(1,887)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Thanh Hóa <span class="text_pink">(1,831)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Thừa Thiên Huế <span class="text_pink">(829)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Tiền Giang <span class="text_pink">(888)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Toàn quốc <span class="text_pink">(1,080)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Trà Vinh <span class="text_pink">(222)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Tuyên Quang <span class="text_pink">(189)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Vĩnh Long <span class="text_pink">(522)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Vĩnh Phúc <span class="text_pink">(1,455)</span></a></div>
								<div class="w_33 floatLeft tinh_item  "><a href="https://vieclam24h.vn/nha-tuyen-dung/lai-chau-p70.html" class="text_black">Yên Bái <span class="text_pink">(173)</span></a></div>
							</div>
						</div>
					</div>               </div>
			</div>
		</div>
	</div>
	<!--End phan loai ho theo --->

	<!-- ho so moi nhat -->
	<div class="box_tab pt_22">
		<div role="tabpanel">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs w_100" role="tablist">
				<li role="presentation" class="active ml1"><span class="left_tab"></span><a href="#viecmoi" aria-controls="viecmoi" role="tab" data-toggle="tab" class="bold font16 uppercase m0">Hồ sơ tìm việc mới nhất</a><span class="right_tab"></span></li>
				<li role="presentation" class="ml_20"><span class="left_tab"></span><a href="#viecmoi2" aria-controls="viecmoi2" role="tab" data-toggle="tab" class="bold font16 uppercase m0">Hồ sơ tìm việc nhiều người xem nhất</a><span class="right_tab"></span></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content w_100">
				<div role="tabpanel" class="tab-pane active bg_grey" id="viecmoi">
					<div class="list_item_two bg_white">
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/sinh-vien-lam-them/nhan-vien-phuc-vu-c46p0id3399541.html" class="link_box_panel1 text_grey2 ">
					Nhân viên phục vụ                     </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/sinh-vien-lam-them/nhan-vien-phuc-vu-c46p0id3399541.html" class="link_box_panel2 text_grey">
					Liêu Anh Khoa                         <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Chưa có kinh nghiệm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-c30p0id3390966.html" class="link_box_panel1 text_grey2 ">
					Nhân viên kế toán                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-c30p0id3390966.html" class="link_box_panel2 text_grey">
					Trịnh Thị Bích Hạnh                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											5 - 7 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											2 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/dien-dien-tu/nhan-vien-ky-thuat-dien-c8p0id3378168.html" class="link_box_panel1 text_grey2 ">
					Nhân viên kỹ thuật điện                     </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/dien-dien-tu/nhan-vien-ky-thuat-dien-c8p0id3378168.html" class="link_box_panel2 text_grey">
					Nguyễn Hữu Chiến                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											5 - 7 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											1 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-hanh-chinh-van-phong-c38p0id3387934.html" class="link_box_panel1 text_grey2 ">
					Nhân viên hành chính văn phòng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-hanh-chinh-van-phong-c38p0id3387934.html" class="link_box_panel2 text_grey">
					Ngô Tấn Bình                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											7 – 10 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											2 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM,  Bình Dương,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/vat-tu-thiet-bi/nhan-vien-thu-kho-c40p0id2901419.html" class="link_box_panel1 text_grey2 ">
					Nhân viên thủ kho                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/vat-tu-thiet-bi/nhan-vien-thu-kho-c40p0id2901419.html" class="link_box_panel2 text_grey">
					Dương Tiến Dũng                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											5 - 7 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											2 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nam,  Hà Nội,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/co-khi-che-tao/quan-ly-san-xuat-c4p0id3399409.html" class="link_box_panel1 text_grey2 ">
					Quản lý sản xuất                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/co-khi-che-tao/quan-ly-san-xuat-c4p0id3399409.html" class="link_box_panel2 text_grey">
					Nguyễn Văn Thắng                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hải Dương                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/det-may-da-giay/merchandiser-c50p0id3321414.html" class="link_box_panel1 text_grey2 ">
					Merchandiser                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/det-may-da-giay/merchandiser-c50p0id3321414.html" class="link_box_panel2 text_grey">
					Đào Thị Thúy                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											10 – 15 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											4 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM,  Bình Dương,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/co-khi-che-tao/ki-su-co-khi-c4p0id3399435.html" class="link_box_panel1 text_grey2 ">
					<span class="icon_dinh_kem"></span>Kĩ sư cơ khí                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/co-khi-che-tao/ki-su-co-khi-c4p0id3399435.html" class="link_box_panel2 text_grey">
					Trần Bá Vương                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											5 - 7 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Dưới 1 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Nam Định,  Thái Nguyên,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/giao-duc-dao-tao/tro-giang-tieng-anh-c10p0id3396533.html" class="link_box_panel1 text_grey2 ">
					Trợ giảng tiếng anh                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/giao-duc-dao-tao/tro-giang-tieng-anh-c10p0id3396533.html" class="link_box_panel2 text_grey">
					Ngô Thị Ánh Hồng                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											3 - 5 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Chưa có kinh nghiệm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-van-phong-hanh-chinh-nhan-su-c38p0id3399466.html" class="link_box_panel1 text_grey2 ">
					<span class="icon_dinh_kem"></span>Nhân viên văn phòng-hành chính-nhân sự                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-van-phong-hanh-chinh-nhan-su-c38p0id3399466.html" class="link_box_panel2 text_grey">
					Vũ Thị Thùy Trang                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											5 - 7 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											2 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Bắc Ninh,  Hưng Yên,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/in-an-xuat-ban/nhan-vien-ky-thuat-pha-mau-c12p0id2901592.html" class="link_box_panel1 text_grey2 ">
					Nhân viên kỹ thuật pha màu                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/in-an-xuat-ban/nhan-vien-ky-thuat-pha-mau-c12p0id2901592.html" class="link_box_panel2 text_grey">
					Vương Nhất Toàn                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Bình Dương                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-c30p0id3399510.html" class="link_box_panel1 text_grey2 ">
					<span class="icon_dinh_kem"></span>Nhân viên kế toán                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-c30p0id3399510.html" class="link_box_panel2 text_grey">
					Nguyễn Thị Thanh Tuyền                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											3 - 5 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											3 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nội,  Bắc Giang,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-tong-hop-c30p0id3393834.html" class="link_box_panel1 text_grey2 ">
					<span class="icon_dinh_kem"></span>Nhân viên kế toán tổng hợp                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-tong-hop-c30p0id3393834.html" class="link_box_panel2 text_grey">
					Võ Yến Nhi                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											7 – 10 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											2 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/ky-su-xay-dung-cong-trinh-giao-thong-c41p0id3399506.html" class="link_box_panel1 text_grey2 ">
					<span class="icon_dinh_kem"></span>Kỹ sư xây dựng công trình giao thông                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/ky-su-xay-dung-cong-trinh-giao-thong-c41p0id3399506.html" class="link_box_panel2 text_grey">
					Trần Văn Đạt                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											5 - 7 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Dưới 1 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nội                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-c30p0id3391145.html" class="link_box_panel1 text_grey2 ">
					<span class="icon_dinh_kem"></span>Nhân viên kế toán                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-c30p0id3391145.html" class="link_box_panel2 text_grey">
					Nguyễn Thị Hồng Hạnh                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Chưa có kinh nghiệm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nội                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/quan-tri-kinh-doanh/tro-ly-giam-doc-c14p0id3372442.html" class="link_box_panel1 text_grey2 ">
					Trợ lý giám đốc                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/quan-tri-kinh-doanh/tro-ly-giam-doc-c14p0id3372442.html" class="link_box_panel2 text_grey">
					Lưu Tiến Tuấn                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											3 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nội                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/dich-vu/nhan-vien-cham-soc-khach-hang-c7p0id3390638.html" class="link_box_panel1 text_grey2 ">
					Nhân viên chăm sóc khách hàng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/dich-vu/nhan-vien-cham-soc-khach-hang-c7p0id3390638.html" class="link_box_panel2 text_grey">
					Huỳnh Thanh Hiếu                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM,  Long An,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/ky-su-xay-dung-c41p0id3238939.html" class="link_box_panel1 text_grey2 ">
					Kỹ sư  xây dựng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/ky-su-xay-dung-c41p0id3238939.html" class="link_box_panel2 text_grey">
					Hồ Văn Ba                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Dưới 1 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM,  Đà Nẵng,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hoa-hoc-sinh-hoc/nhan-vien-kiem-nghiem-qa-qc-c87p0id3398907.html" class="link_box_panel1 text_grey2 ">
					Nhân viên kiểm nghiệm, QA/QC                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hoa-hoc-sinh-hoc/nhan-vien-kiem-nghiem-qa-qc-c87p0id3398907.html" class="link_box_panel2 text_grey">
					Trần Nguyễn Quỳnh Như                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											5 - 7 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Dưới 1 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class=""></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-hanh-chinh-van-phong-c38p0id3394423.html" class="link_box_panel1 text_grey2 ">
					Nhân viên hành chính văn phòng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-hanh-chinh-van-phong-c38p0id3394423.html" class="link_box_panel2 text_grey">
					Phạm Thị Nguyên Ngọc                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											3 - 5 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Dưới 1 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nội                        </div>
									</div>
								</div>
								<div class=""></div>
							</div>
						</div>

						<div class="clear"></div>
					</div>
					<a href="https://vieclam24h.vn/ho-so-ung-vien-moi-nhat.html">
						<h3 class="btn btn-lg w_100 btn-nobg btn_more_list">
							<i class="icon_load_more icon_24 icon-24"></i>
							Xem thêm Hồ sơ mới nhất        </h3>
					</a>
				</div>
				<div role="tabpanel" class="tab-pane bg_grey" id="viecmoi2">
					<div class="list_item_two bg_white">
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/nhan-vien-kinh-doanh-nhan-vien-ban-hang-c41p0id830748.html" class="link_box_panel1 text_grey2 ">
					Nhân viên kinh doanh,  nhân viên bán hàng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/nhan-vien-kinh-doanh-nhan-vien-ban-hang-c41p0id830748.html" class="link_box_panel2 text_grey">
					Ngô Việt Dũng                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											3 - 5 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											3 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nội                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-hoach-toan-thue-ban-thoi-gian-c30p0id1968284.html" class="link_box_panel1 text_grey2 ">
					Nhân viên hoạch toán thuế bán thời gian                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-hoach-toan-thue-ban-thoi-gian-c30p0id1968284.html" class="link_box_panel2 text_grey">
					Nguyễn Thị Trầm                        <span class="text_pink display_inline">(Cập nhật: 09/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/ke-toan-truong-c30p0id2446313.html" class="link_box_panel1 text_grey2 ">
					Kế toán trưởng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/ke-toan-truong-c30p0id2446313.html" class="link_box_panel2 text_grey">
					Nguyễn Hồng Hải                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM,  Long An,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/vat-tu-thiet-bi/nhan-vien-kinh-doanh-nhan-vien-ban-hang-c40p0id2945463.html" class="link_box_panel1 text_grey2 ">
					Nhân viên kinh doanh, Nhân viên bán hàng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/vat-tu-thiet-bi/nhan-vien-kinh-doanh-nhan-vien-ban-hang-c40p0id2945463.html" class="link_box_panel2 text_grey">
					Ngô Việt Dũng                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											3 - 5 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nội                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/bien-phien-dich/phien-dich-tieng-han-quoc-c79p0id2342944.html" class="link_box_panel1 text_grey2 ">
					Phiên dịch tiếng Hàn Quốc                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/bien-phien-dich/phien-dich-tieng-han-quoc-c79p0id2342944.html" class="link_box_panel2 text_grey">
					Bùi Việt Hùng                         <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Toàn quốc                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/dien-dien-tu/ky-su-dien-tu-dong-hoa-c8p0id1311015.html" class="link_box_panel1 text_grey2 ">
					Kỹ sư điện -  tự động hóa                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/dien-dien-tu/ky-su-dien-tu-dong-hoa-c8p0id1311015.html" class="link_box_panel2 text_grey">
					Dương Hải Toàn                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Bắc Ninh,  Thái Nguyên,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/co-khi-che-tao/quan-doc-xuong-co-khi-giam-doc-san-xuat-c4p0id3134558.html" class="link_box_panel1 text_grey2 ">
					Quản đốc xưởng cơ khí, Giám đốc sản xuất                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/co-khi-che-tao/quan-doc-xuong-co-khi-giam-doc-san-xuat-c4p0id3134558.html" class="link_box_panel2 text_grey">
					Trần Công Sang                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											15 – 20 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/nong-lam-ngu-nghiep/nhan-vien-kinh-doanh-nong-san-xuat-khau-c17p0id2007407.html" class="link_box_panel1 text_grey2 ">
					Nhân viên kinh doanh nông sản xuất khẩu                     </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/nong-lam-ngu-nghiep/nhan-vien-kinh-doanh-nong-san-xuat-khau-c17p0id2007407.html" class="link_box_panel2 text_grey">
					Ngô Trung Khải                        <span class="text_pink display_inline">(Cập nhật: 10/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											4 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM,  Bình Dương,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/ke-toan-tong-hop-ke-toan-truong-c30p0id714044.html" class="link_box_panel1 text_grey2 ">
					Kế toán tổng hợp, kế toán trưởng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/ke-toan-tong-hop-ke-toan-truong-c30p0id714044.html" class="link_box_panel2 text_grey">
					Vũ Văn Quý                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nội                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/ke-toan-truong-nhan-vien-ke-toan-tong-hop-c30p0id2346856.html" class="link_box_panel1 text_grey2 ">
					Kế toán trưởng, nhân viên kế toán tổng hợp                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/ke-toan-truong-nhan-vien-ke-toan-tong-hop-c30p0id2346856.html" class="link_box_panel2 text_grey">
					Nguyễn Thị Thanh Thảo                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-van-phong-c38p0id1826311.html" class="link_box_panel1 text_grey2 ">
					Nhân viên văn phòng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-van-phong-c38p0id1826311.html" class="link_box_panel2 text_grey">
					Nguyễn Thị Thùy Linh                        <span class="text_pink display_inline">(Cập nhật: 09/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											5 - 7 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											3 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/dien-dien-tu/nhan-vien-ky-thuat-ky-su-dien-tu-vien-thong-c8p0id1467830.html" class="link_box_panel1 text_grey2 ">
					Nhân viên kỹ thuật, kỹ sư điện tử viễn thông.                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/dien-dien-tu/nhan-vien-ky-thuat-ky-su-dien-tu-vien-thong-c8p0id1467830.html" class="link_box_panel2 text_grey">
					Vũ Hùng Cường                        <span class="text_pink display_inline">(Cập nhật: 10/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/quan-tri-kinh-doanh/truong-nhom-kinh-doanh-nhan-vien-kinh-doanh-c14p0id2776694.html" class="link_box_panel1 text_grey2 ">
					Trưởng nhóm kinh doanh, Nhân viên kinh doanh                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/quan-tri-kinh-doanh/truong-nhom-kinh-doanh-nhan-vien-kinh-doanh-c14p0id2776694.html" class="link_box_panel2 text_grey">
					Lê Đoàn Trung Sơn                        <span class="text_pink display_inline">(Cập nhật: 09/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/nhan-vien-lai-may-xuc-lat-xuc-dao-xe-nang-c41p0id2636278.html" class="link_box_panel1 text_grey2 ">
					Nhân viên lái máy xúc lật, xúc đào, xe nâng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/nhan-vien-lai-may-xuc-lat-xuc-dao-xe-nang-c41p0id2636278.html" class="link_box_panel2 text_grey">
					Bạch Đình Dần                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											7 – 10 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nội,  Hưng Yên,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/quan-tri-kinh-doanh/nhan-vien-kinh-doanh-nhan-vien-ban-hang-c14p0id2702894.html" class="link_box_panel1 text_grey2 ">
					Nhân viên kinh doanh, nhân viên bán hàng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/quan-tri-kinh-doanh/nhan-vien-kinh-doanh-nhan-vien-ban-hang-c14p0id2702894.html" class="link_box_panel2 text_grey">
					Nguyễn Sơn Trà                        <span class="text_pink display_inline">(Cập nhật: 10/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											7 – 10 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											2 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nội,  Hưng Yên,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-hanh-chinh-van-phong-thu-ky-tro-ly-thu-mua-biet-tieng-trung-c38p0id1460870.html" class="link_box_panel1 text_grey2 ">
					<span class="icon_dinh_kem"></span>Nhân viên hành chính văn phòng, thư ký, trợ lý, thu mua biết tiếng trung                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-hanh-chinh-van-phong-thu-ky-tro-ly-thu-mua-biet-tieng-trung-c38p0id1460870.html" class="link_box_panel2 text_grey">
					Hoàng Thị Dung                         <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/giam-sat-xay-dung-c41p0id1291778.html" class="link_box_panel1 text_grey2 ">
					<span class="icon_dinh_kem"></span>Giám sát xây dựng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/giam-sat-xay-dung-c41p0id1291778.html" class="link_box_panel2 text_grey">
					Chu Quang Hoà                        <span class="text_pink display_inline">(Cập nhật: 10/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											10 – 15 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nội                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/nhan-vien-kinh-doanh/nhan-vien-kinh-doanh-nhan-vien-ban-hang-c96p0id2639870.html" class="link_box_panel1 text_grey2 ">
					Nhân viên kinh doanh, nhân viên bán hàng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/nhan-vien-kinh-doanh/nhan-vien-kinh-doanh-nhan-vien-ban-hang-c96p0id2639870.html" class="link_box_panel2 text_grey">
					Nguyễn Khắc Hiếu                        <span class="text_pink display_inline">(Cập nhật: 09/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nội                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/giam-doc-ban-quan-ly-du-an-dau-tu-xay-dung-c41p0id3133388.html" class="link_box_panel1 text_grey2 ">
					Giám đốc ban quản lý dự án đầu tư xây dựng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/giam-doc-ban-quan-ly-du-an-dau-tu-xay-dung-c41p0id3133388.html" class="link_box_panel2 text_grey">
					Phan Tuấn Tú                        <span class="text_pink display_inline">(Cập nhật: 09/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											20 – 30 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM,  Hà Nội,...                        </div>
									</div>
								</div>
								<div class=""></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-hanh-chinh-van-phong-c38p0id1950969.html" class="link_box_panel1 text_grey2 ">
					Nhân viên hành chính văn phòng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-hanh-chinh-van-phong-c38p0id1950969.html" class="link_box_panel2 text_grey">
					Nguyễn Minh Tồn                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											2 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM,  Long An,...                        </div>
									</div>
								</div>
								<div class=""></div>
							</div>
						</div>

						<div class="clear"></div>
					</div>
					<a href="https://vieclam24h.vn/danh-sach-ung-vien-nhieu-nguoi-xem.html">
						<h3 class="btn btn-lg w_100 btn-nobg btn_more_list">
							<i class="icon_load_more icon_24 icon-24"></i>
							Xem thêm Hồ sơ được xem nhiều nhất        </h3>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- END ho so moi nhat -->

	<div class="row mt_24">
		<div class="box_tab pl_0 pr_0">
			<div class="panel lemon no-border box_tab panel-nguoi-timviec-bt">
				<div class="panel-heading title_box_panel bg_blue">
					<div class="panel-title fwb">
						<i class="icon_24 icon-call icon-24"></i> DÀNH CHO NHÀ TUYỂN DỤNG
					</div>
					<div class="tools">
						<a href="#" class="ico"></a>
					</div>
				</div>
				<div class="panel-body panel-body-new font16">
					<div class="hr_header hr_header-new">
						<div class="hr"></div>
						<div class="title">
							<span class="bg-white bold text_blue">THÔNG TIN LIÊN HỆ</span>
						</div>
					</div>
					<div class="row  pl_14 pr_14">
						<div>
							Hotline: 04 6684 7421 - 0943 24 9699<br />
							Email   : <a href="mailto:nganhangungvienvn@gmail.com" class="text_pink">nganhangungvienvn@gmail.com</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="box_alert_content_dangkytuvan w_100 mt_24 font16">
		<div class="pt_10 txt-ghi">
			Để tuyển dụng hoặc tìm việc hiệu quả, vui lòng chọn <span class="bold">DỊCH VỤ THUÊ NGOÀI TRỌN GÓI</span> để được hỗ trợ ngay
		</div>
		<div class=" pb_14 pr_14 pl_14">
			<div>
				<a class="show_s09_ntv_register btn btn-ntv-dky-tuvan btn-lg w340 fs18 pl_8">
					DỊCH VỤ THUÊ NGOÀI TRỌN GÓI
				</a>
			</div>
		</div>
	</div>
</div>

@endsection