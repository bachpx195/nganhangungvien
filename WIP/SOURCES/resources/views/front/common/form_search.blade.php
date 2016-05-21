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
						@foreach($dropdownData['occupations'] as $item)
							<option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
						@endforeach
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
						@foreach($dropdownData['provinces'] as $item)
							<option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="col-xs-3 border_r pr_6 pl_8">
				<div class="filter_box font14 style-flat w_100 box_mucluong">
					<i class="icon_select_box icon_moneybox icon_24 icon-24"></i>
					<div class="cd-dropdown-wrapper w_100 pt_12">
						<span class="drop_filter_top" data-jq-dropdown="#filter_mucluong">Tất
							cả Mức lương</span>
						<div id="filter_mucluong"
							class="jq-dropdown dropdown_box filter_mucluong">
							<ul class="box_drop_mucluong nomargin">
								<li>
									<div class="modal-drop-mucluong font14">
										@foreach($dropdownData['salaryGrades'] as $item)
										<div class="demo-list pb_6">
											<input value="{{ $item['id'] }}" tabindex="1" type="checkbox" name="salaryGrade[]" id="mul_1">
											<label for="mul_1" class="font14">{{ $item['name'] }}</label>
										</div>
										@endforeach
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
										@foreach($dropdownData['yearOfexps'] as $item)
										<div class="demo-list pb_6">
											<input value="{{ $item['id'] }}" tabindex="1" type="checkbox"
												name="hdn_kinh_nghiem[]" id="kn_8"> <label for="kn_8"
												class="font14">{{ $item['name'] }}</label>
										</div>
										@endforeach
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
						@foreach($dropdownData['degrees'] as $item)
							<option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
						@endforeach
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
						@foreach($dropdownData['languages'] as $item)
							<option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
						@endforeach
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
							<ul class="box_drop_searchad modal-drop-nangcao font14 bg_white">
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
									<div class="title_filter_searchad pos_relative mb_2 ml_16 w218">
										<i class="icon_select_box icon_capbac icon_24 icon-24"></i>Chọn
										cấp bậcc
									</div>
									<div class="modal-body-searchad ml_16">
										<div class="modal-body-searchad pt_8">
											<div class="demo-list pb_6">
												<input value="" tabindex="1" type="radio" name="hdn_cap_bac"
													checked id="mr_0"> <label for="mr_0" class="font14">Tất cả
													Cấp bậc</label>
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