<form method="get" action="{{route('candidate.search')}}"
	id="search_box_full" class="frm_search_box_full">
	<div class="box_filter_content w_100 ">
		<div class="filter_content_line1 border_bt pos_relative">
			<div class="col-xs-3 border_r pl_14 pr_2">
				<div id="sl-nganhnghe1"
					class="filter_box font14 style-flat w_100 box_nganhnghe_s">
					<i class="icon_select_box icon_listbox icon_24 icon-24"></i> <select
						name="occupation"
						class="selectpicker box_select_filter pos_relative select-style mt8"
						tabindex="-1" data-select-class="nganh_nghe">
						<option value="">Tất cả Ngành nghề</option>
						@foreach($dropdownData['occupations'] as $item)
							<option value="{{ $item['id'] }}" @if (isset($params['occupation']) && $params['occupation'] == $item['id']) selected @endif>{{ $item['name'] }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="col-xs-3 border_r pr_2">
				<div class="filter_box font14 style-flat w_100 box_tinhthanh_s">
					<i class="icon_select_box icon_locabox icon_24 icon-24"></i> <select
						name="province"
						class="selectpicker box_select_filter pos_relative select-style mt8"
						tabindex="-1">
						<option value="">Tất cả tỉnh thành</option>
						@foreach($dropdownData['provinces'] as $item)
							<option value="{{ $item['id'] }}" @if (isset($params['province']) && $params['province'] == $item['id']) selected @endif>{{ $item['name'] }}</option>
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
											<input value="{{ $item['id'] }}" tabindex="1" type="checkbox" name="salaryGrade[]" id="mul_{{$item['id']}}"
												   @if (isset($params['salaryGrade']) && in_array($item['id'], $params['salaryGrade'])) checked @endif>
											<label for="mul_{{$item['id']}}" class="font14">{{ $item['name'] }}</label>
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
												name="yearOfexp[]" id="kn_8"
												   @if (isset($params['yearOfexp']) && in_array($item['id'], $params['yearOfexp'])) checked @endif> <label for="kn_8"
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
						style="background-image: url(/assets/default/images/icon-trinh-do.png) !important; margin-top: 15px; margin-left: -3px;"
						class="icon_select_box icon_24 icon-24"></i> <select
						name="degree"
						class="selectpicker box_select_filter pos_relative select-style mt8"
						data-diss="-1" tabindex="-1" data-select-class="degree">
						<option value="">Tất cả Trình độ</option>
						@foreach($dropdownData['degrees'] as $item)
							<option value="{{ $item['id'] }}" @if (isset($params['degree']) && $params['degree'] == $item['id']) selected @endif>{{ $item['name'] }}</option>
						@endforeach
					</select>
				</div>
			</div>

			<div class="col-xs-3 border_r pr_2">
				<div class="filter_box font14 style-flat w_100 box_tinhthanh_s">
					<i
						style="background-image: url(/assets/default/images/icon-gioi-tinh.png) !important; margin-top: 10px; margin-left: -4px;"
						class="icon_select_box icon_gioi_tinh icon_24 icon-24"></i> <select
						name="sex"
						class="selectpicker box_select_filter pos_relative select-style mt8"
						tabindex="-1">
						<option class="test-select" value="" selected>Tất cả Giới tính</option>
						<option value="2" @if (isset($params['sex']) && $params['sex'] === '2') selected @endif>Nữ</option>
						<option value="1" @if (isset($params['sex']) && $params['sex'] === '1') selected @endif>Nam</option>
					</select>
				</div>
			</div>

			<div class="col-xs-3 border_r pr_6 pl_8">
				<div class="filter_box font14 style-flat w_100 box_tinhthanh_s">
					<i
						style="background-image: url(/assets/default/images/icon-ngoai-ngu-s21.png) !important; margin-top: 15px"
						class="icon_select_box icon_ngoai_ngu icon_24 icon-24"></i> <select
						style="margin-left: 5px;" name="language"
						class="selectpicker box_select_filter pos_relative select-style mt8"
						tabindex="-1" data-select-class="ngoai_ngu_ntd2">
						<option value="">Tất cả Ngoại ngữ</option>
						@foreach($dropdownData['languages'] as $item)
							<option value="{{ $item['id'] }}" @if (isset($params['language']) && $params['language'] == $item['id']) selected @endif>{{ $item['name'] }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="col-xs-3 border_r pr_8">
				<div class="filter_box font14 style-flat w_100 box_tinhthanh_s">
					<i
						style="background-image: url(/assets/default/images/icon-thoi-gian.png) !important; margin-top: 15px; margin-left: -7px;"
						class="icon_select_box icon_thoi_gian icon_24 icon-24"></i> <select
						style="margin-left: 5px;" name="timeUpdate"
						class="selectpicker box_select_filter pos_relative select-style mt8"
						data-diss="-1" tabindex="-1" data-select-class="thoi_gian_ntd2">
						<option value="">Thời gian cập nhật</option>
						<option value="1" @if (isset($params['timeUpdate']) && $params['timeUpdate'] == 1) selected @endif>Trong vòng 1 Ngày</option>
						<option value="2" @if (isset($params['timeUpdate']) && $params['timeUpdate'] == 2) selected @endif>1 Tuần gần đây</option>
						<option value="3" @if (isset($params['timeUpdate']) && $params['timeUpdate'] == 3) selected @endif>1 Tháng gần đây</option>
						<option value="4" @if (isset($params['timeUpdate']) && $params['timeUpdate'] == 4) selected @endif>2 Tháng gần đây</option>
					</select>
				</div>
			</div>
		</div>

		<div class="filter_content_line2 pos_relative">

			<div class="box_search_all pt_10 pl_5 w_100"
				style="padding: 0 !important">
				<input type="search" style="height: 50px;" name="title"
					class="inputsearchall_full input_search_all noboder pl_10 w_100 pr_10 font14"
					placeholder="Nhập tiêu đề hồ sơ. VD: Nhân viên kinh doanh" value="{{isset($params['title']) ? $params['title'] : ''}}">
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
												name="employment_status" @if (!isset($params['employment_status']) || !$params['employment_status']) checked @endif> <label
												class="font14">Tất cả hình thức</label>
										</div>
										@foreach($dropdownData['employmentStatuses'] as $item)
											<div class="demo-list pb_6">
												<input value="{{$item->id}}" tabindex="1" type="radio" name="employment_status"
													   @if (isset($params['employment_status']) && $params['employment_status'] == $item->id) checked @endif>
												<label class="font14">{{$item->name}}</label>
											</div>
										@endforeach
									</div>
								</li>
								<li class="floatLeft pt12">
									<div class="title_filter_searchad pos_relative mb_2 ml_16 w218">
										<i class="icon_select_box icon_capbac icon_24 icon-24"></i>Chọn
										cấp bậc
									</div>
									<div class="modal-body-searchad ml_16">
										<div class="modal-body-searchad pt_8">
											<div class="demo-list pb_6">
												<input value="" tabindex="1" type="radio" name="rank"
													   @if (!isset($params['rank']) || !$params['rank']) checked @endif> <label class="font14">Tất cả
													Cấp bậc</label>
											</div>
											@foreach($dropdownData['ranks'] as $item)
												<div class="demo-list pb_6">
													<input value="{{$item->id}}" tabindex="1" type="radio" name="rank"
														   @if (isset($params['rank']) && $params['rank'] == $item->id) checked @endif>
													<label class="font14">{{$item->name}}</label>
												</div>
											@endforeach
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
    }

    if( document.addEventListener ) {
        addListener(document, "DOMContentLoaded", func_searchbox);
    }else{
        addListener(window, "load", func_searchbox);
    }
</script>