<div class="box_filter_content w_100 mt_16" id="box_search_ntd">

	<form method="get" action="{{route('candidate.search')}}" id="search_box_hosoungvien">
		<div class="box_filter_search">
			<div class="filter_content_line1 pos_relative">
				<div class="col-xs-12 pr_2 border_bt">
					<input type="search" class="input_search_all noboder pl_10 w_100 pr_10" id="inputsearchall_ntd" name="title" placeholder="Nhập từ khóa">
				</div>
				<div class="col-xs-12 pr_2 border_bt">
					<div id="sl-nganhnghe4" class="filter_box style-flat w_100">
						<i class="icon_select_box icon_listbox icon_24 icon-24"></i>
						<select name="occupation" class="selectpicker box_select_filter pos_relative select-style font14 mt5" tabindex="-1">
							<option value="">Tất cả Ngành nghề</option>
							@foreach($dropdownData['occupations'] as $item)
								<option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-xs-12 pr_2 border_bt">
					<div class="filter_box style-flat w_100">
						<i class="icon_select_box icon_locabox icon_24 icon-24"></i>
						<select name="province" class="selectpicker box_select_filter pos_relative select-style mt5" tabindex="-1" data-select-class="tinh_thanh_ntd">
							<option value="">Tất cả Tỉnh thành</option>
							@foreach($dropdownData['provinces'] as $item)
								<option value="{{ $item->id }}">{{ $item->name }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-xs-12 pr_2 border_bt">
					<div class="filter_box style-flat w_100 box_mucluong">
						<i class="icon_select_box icon_moneybox icon_24 icon-24"></i>
						<div class="cd-dropdown-wrapper w_100 pt_12">
							<span class="drop_filter_top mt2" data-jq-dropdown="#filter_mucluong">Tất cả Mức lương</span>
							<div id="filter_mucluong" class="jq-dropdown dropdown_box filter_mucluong">
								<ul class="box_drop_mucluong_ntd nomargin">
									<li>
										<div class="modal-drop-mucluong font14">
											@foreach($dropdownData['salaryGrades'] as $item)
											<div class="demo-list pb_6">
												<input value="{{ $item['id'] }}" tabindex="1" type="checkbox" name="salaryGrade[]" id="mul_{{ $item['id'] }}">
												<label for="mul_{{ $item['id'] }}" class="font14">{{ $item['name'] }}</label>
											</div>
											@endforeach
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
						<select name="degree" class="selectpicker box_select_filter pos_relative select-style mt5" data-diss="-1" tabindex="-1">
							<option value="">Tất cả Trình độ</option>
							@foreach($dropdownData['degrees'] as $item)
								<option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
							@endforeach
						</select>
					</div>
				</div>

				<div class="col-xs-12 pr_2 border_bt">
					<div class="filter_box font14 style-flat w_100 box_tinhthanh_s">
						<i class="icon_select_box icon_kinh_nghiem icon_24 icon-24"></i>
						<select name="yearOfexp[]" class="selectpicker box_select_filter pos_relative select-style mt5" data-diss="-1" tabindex="-1" data-select-class="kinh_nghiem_ntd">
							<option value="">Tất cả Kinh nghiệm</option>
							@foreach($dropdownData['yearOfexps'] as $item)
								<option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-xs-12 pr_2 border_bt">
					<div class="filter_box font14 style-flat w_100 box_tinhthanh_s">
						<i class="icon_select_box icon_gioi_tinh icon_24 icon-24"></i>
						<select name="sex" class="selectpicker box_select_filter pos_relative select-style mt5" data-diss="-1" tabindex="-1">
							<option value="">Tất cả Giới tính</option>
							<option value="2">Nữ</option>
							<option value="1">Nam</option>
						</select>
					</div>
				</div>
				<div class="col-xs-12 pr_2 border_bt">
					<div class="filter_box font14 style-flat w_100 box_tinhthanh_s">
						<i class="icon_select_box icon_ngoai_ngu icon_24 icon-24"></i>
						<select name="language" class="selectpicker box_select_filter pos_relative select-style mt5" tabindex="-1">
							<option value="">Tất cả Ngoại ngữ</option>
							@foreach($dropdownData['languages'] as $item)
								<option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-xs-12 pr_2 border_bt">
					<div class="filter_box font14 style-flat w_100 box_tinhthanh_s">
						<i class="icon_select_box icon_thoi_gian icon_24 icon-24"></i>
						<select name="timeUpdate" class="selectpicker box_select_filter pos_relative select-style mt5" data-diss="-1" tabindex="-1">
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

	@if (Auth::check() && Auth::user()->user_type == 'employer')
		<div class="box_filter_map text-center" style="width: 450px;">
			<div class="statistic font20">
				Cả nước tổng cộng có <br /><span class="text_orange font30 bold">{{ $countData['all'] }}</span> hồ sơ người đang tìm việc
			</div>

			<div class="map-ntd">
				<div class="col-xs-4 offset10">
					<div class="fix-box map" style="width: 450px;">
						<h3 id="nuoc-ngoai1" class="area nuoc-ngoai" style="    top: 11px;left: 277px;">
							<span class="fs12 txt_color_63248a fwb nuoc-ngoai1">Nước Ngoài </span><span class="fs12 txt-color-757575 fwb nuoc-ngoai2"></span>
							<img src="{{ URL::asset('assets/default/images/nn.png') }}" alt="Viec lam 24h" title="Việc làm 24h">
						</h3>
						<h3 id="dong-bac-bo " class="area dong-bac-bo" style="top: 78px; left: 226px;">
							<span class="fs12 txt_color_63248a fwb dong-bac-bo1">Đông Bắc Bộ </span><span class="fs12 txt-color-757575 fwb dong-bac-bo2"></span>
							<img src="{{ URL::asset('assets/default/images/dong-bac.png') }}" alt="Viec lam 24h" title="Việc làm 24h">
						</h3>
						<h3 id="tay-bac-bo" class="area tay-bac-bo" style="top: 69px; left: 8px; padding: 0 6px;">
							<span class="fs12 txt_color_63248a fwb tay-bac-bo1">Tây Bắc bộ </span><span class="fs12 txt-color-757575 fwb tay-bac-bo2"></span>
							<img src="{{ URL::asset('assets/default/images/tay-bac.png') }}" alt="Viec lam 24h" title="Việc làm 24h">
						</h3>
						<h3 id="bac-trung-bo" class="area bac-trung-bo" style="top: 120px; left: 22px;">
							<span class="fs12 txt_color_63248a fwb bac-trung-bo1">Bắc Trung Bộ </span><span class="fs12 txt-color-757575 fwb bac-trung-bo2"></span>
							<img src="{{ URL::asset('assets/default/images/trung-bac.png') }}" alt="Viec lam 24h" title="Việc làm 24h">
						</h3>
						<h3 id="nam-trung-bo" class="area nam-trung-bo" style="    top: 167px;left: 272px;">
							<span class="fs12 txt_color_63248a fwb nam-trung-bo1">Nam Trung Bộ </span><span class="fs12 txt-color-757575 fwb nam-trung-bo2"></span>
							<img src="{{ URL::asset('assets/default/images/nam-bo.png') }}" alt="Viec lam 24h" title="Việc làm 24h">
						</h3>
						<h3 id="tay-nguyen" class="area tay-nguyen" style="top: 175px;left: 25px;">
							<span class="fs12 txt_color_63248a fwb tay-nguyen1">Tây Nguyên </span><span class="fs12 txt-color-757575 fwb tay-nguyen2"></span>
							<img src="{{ URL::asset('assets/default/images/tay-nguyen.png') }}" alt="Viec lam 24h" title="Việc làm 24h">
						</h3>
						<h3 id="tay-nam-bo" class="area tay-nam-bo" style="top: 225px;left: 17px;">
							<span class="fs12 txt_color_63248a fwb tay-nam-bo1">Tây Nam Bộ </span><span class="fs12 txt-color-757575 fwb tay-nam-bo2"></span>
							<img src="{{ URL::asset('assets/default/images/tay-nam.png') }}" alt="Viec lam 24h" title="Việc làm 24h">
						</h3>
						<h3 id="dong-nam-bo" class="area dong-nam-bo" style="    top: 209px;left: 273px;">
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
	@else
		<div class="box_filter_map text-center" style="width: 680px;">
			<div class="statistic font20">
				Cả nước tổng cộng có <br /><span class="text_orange font30 bold">{{ $countData['all'] }}</span> hồ sơ người đang tìm việc
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
	@endif


	@if (Auth::check() && Auth::user()->user_type == 'employer')
		<div class="box_filter_map text-left" id="youtube-video">
	@else
		<div class="box_filter_map text-left" id="youtube-video">
	@endif


		@if ($linkYouTube)
		<div class="font16 mb_8 text-center">
			HƯỚNG DẪN ĐĂNG KÝ<br/>TÀI KHOẢN NHÀ TUYỂN DỤNG
		</div>
		<iframe id="youtube-video-frame" src="{{$linkYouTube}}" frameborder="0" allowfullscreen=""></iframe>
		<br/>
		@endif
		<div>
			<div class="row">
				<div class="font16">
					<br/>
					LIÊN HỆ ĐỂ ĐƯỢC HỖ TRỢ
				</div>
				<div>
					<span class="bg-white bold font14 text_blue"><i class="fa fa-phone" aria-hidden="true"></i> Hotline: </span><span class="bg-white text_pink font14 bold">04 6684 7421 - 0943 24 9699</span><br>
					<span class="bg-white bold font14 text_blue"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email: </span><span class="bg-white text_pink font14 bold"><a href="mailto:nganhangungvienvn@gmail.com" class="text_pink">nganhangungvienvn@gmail.com</a></span><br>
					<span class="bg-white bold font14 text_blue"><i class="fa fa-skype" aria-hidden="true"></i> Skype: </span><span class="bg-white text_pink font14 bold"><a href="skype:CSKH.NGANHANGUNGVIEN.COM?chat" class="text_pink">cskh.nganhangungvien.com</a></span>
				</div>
			</div>
		</div>
		<br/>
		<div>
			<div class="row">
				<div class="font16">
					HOẶC SỬ DỤNG DỊCH VỤ
				</div>
				<div>
					<a class="btn btn-pink btn-lg w260 pl_16 btn_timkiem_all" href="{{ route('pages.regist_vip') }}" target="_blank">
						<i class="icon_arrow_orange icon_24 icon-24"></i>
						TÀI KHOẢN VIP
					</a>
				</div>
			</div>
		</div>
	</div>
</div>