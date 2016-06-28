@extends('front/global') 

@section('content')
	@if (Auth::check() && Auth::user()->user_type == 'employer')
		<div class="" style="padding-left:232px;">
	@else
		<div class="">
	@endif

	@include('front.common.form_search', ['dropdownData' => $dropdownData])

	<div class="spacer-50"></div>
	<h1 class="title_text_line mt6 ml_12 mr_12">
		<span class="text-tim-nhat uppercase">Chi tiết hồ sơ {{$candidate->cv_title}}</span>
	</h1>

	<div
		class="box_tab bg_white box_shadow pt_12 pl_14 pr_14 pb_16 ml_12 mr_12 mt_16">
		<div class="w_100 mb10">
			<div class="box_info">
				<div class="pull-left w120 mr_14">
					<div class="list-items">
						<div class="change_avatar pos_relative w120">
							<img src="/assets/default/images/small-avatar.png"
								class="pos_absolute img_responsive" alt="" width="120">
						</div>
					</div>
				</div>
				<div class="pull-left info_user">

					<div class="list-items mb_0">
						<span class="name font24 lh_12 bold">{{$candidate->full_name}}</span>
					</div>
					<div class="list-items mb_0">
						<span class="bold">Giới tính:</span> <span>{{$candidate->sex ? 'Nam' : 'Nữ'}}</span> | <span
							class="bold">Ngày sinh:</span> {{DateTimeHelper::formatDate($candidate->birthday)}}
					</div>
					<div class="list-items mb_10">
						<div class="box_login_hotline">
							@if ($showContact)
								<span><strong>Số địa thoại :</strong></span> {{$candidate->phone_number}}
								<br/><span><strong>Địa chỉ :</strong></span> {{$candidate->address}}
								<br/><span><strong>Email :</strong></span> <a>{{$candidate->email}}</a>
							@elseif (Auth::check())
								<div class="clearfix" id="candidateContact">
									Nhà tuyển dụng chưa đăng ký gói tài khoản VIP để xem trực tiếp thông tin ứng viên {{$candidate->full_name}}.
									<br>Quý khách có thể
									<a href="javascript:void(0)" onclick="popup_hotline()" class="text_blue font14 fwb">đăng ký VIP (Bấm vào đây để đăng ký)</a>
									<br>hoặc <a href="javascript:void(0)" class="show_s09b_ntd_register text_blue font14 fwb">Xem thông tin</a> ứng viên {{$candidate->full_name}}
									(phí: 10.000đ)</div>
							@else
								<span> Đăng nhập để xem được thông tin liên hệ của ứng viên</span>
								<a href="javascript:;"
								   class="member_login btn font16 btn-pink btn-lg ml_10">Đăng nhập
								</a>
								<a href="{{route('employer.register')}}"
								   class="member_register btn font16 btn-pink btn-lg ml_10">Đăng ký tài khoản
								</a>
							@endif
							<!--<div class="clearfix"><a href="#" class="text_blue font14 fwb">Bấm đây để tìm hiểu chi tiết dịch vụ</a></div>-->
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<div class="box_button_action mt_16 row mrg button_s22">
		@if($sameData['savedCv'] > 0)
			<button class="btn btn-white mr_8 pull-left btn-save-job no-shadow active"
				onclick="javascript:luuhoso(this)" data-candidateId="{{ $candidate->id }}"
				data-toggle="tooltip" data-placement="top" title="Hồ sơ này đã được lưu. Nhấp chuột để hủy lưu">
				<span class="line-icon"> <i class="icon-star icon_free_style"></i> <span
					class="pl_28 fwb">Lưu Hồ sơ</span>
				</span>
			</button>
		@else
			<button class="btn btn-white mr_8 pull-left btn-save-job no-shadow"
					onclick="javascript:luuhoso(this)" data-candidateId="{{ $candidate->id }}"
					data-toggle="tooltip" data-placement="top" title="Hồ sơ chưa lưu. Nhấp chuột để lưu lại">
			<span class="line-icon"> <i class="icon-star icon_free_style"></i> <span
						class="pl_28 fwb">Lưu Hồ sơ</span>
			</span>
			</button>
		@endif
		<button class="btn btn-white mr_8 pull-left no-shadow"
			onclick="">
			<span class="line-icon"> <i class="icon-print icon_free_style"></i>
				<span class="pl_28 fwb">In Hồ sơ</span>
			</span>
		</button>
		<span class="text_grey2 font12 mt8 mb12"> <span><span class="fwb">Lượt
					xem:</span> {{$candidate->view_total}}</span> | <span> <span class="fwb">Mã:</span>
				{{$candidate->candidate_code}}
		</span> | <span><span class="fwb">Ngày làm mới:</span> {{DateTimeHelper::formatDate($candidate->updated_at)}}</span>
		</span>
	</div>

	<div
		class="job_detail box_tab bg_white box_shadow pt_16 pl_14 pr_14 pb_16 text_grey2 ml_12 mr_12 mt_16">
		<div class="box-ho-so pb_12">
			<div class="row">
				<div class="col-xs-12 pl_0 pr_0">
					<div class="font16 bolder">
						Tiêu đề hồ sơ:
						<h2 class="text_pink font16 display_inline">{{$candidate->cv_title}}</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 pl_0 pr_0">
					<div class="profile_item">
						<p class="line-icon mb_4">
							<i class="icon-position-job icon-24 icon_24"></i> <span
								class="bold">Cấp bậc hiện tại:</span> <span class="job_value">{{$candidate->currentRank ? $candidate->currentRank->name : ''}}</span>
						</p>
						<p class="line-icon mb_4">
							<i class="icon-expensive icon-24 icon_24"></i> <span
								class="bold">Kinh nghiệm:</span> <span class="job_value">{{$candidate->experienceYears ? $candidate->experienceYears->name : ''}}</span>
						</p>
						<p class="line-icon mb_4">
							<i class="icon-level icon-24 icon_24"></i> <span class="bold">Trình
								độ cao nhất:</span> <span class="job_value">{{$candidate->maxLevel ? $candidate->maxLevel->name : ''}}</span>
						</p>
						<p class="line-icon mb_4 ">
							<i class="icon-language icon-24 icon_24"></i> <span class="bold">
								Ngoại ngữ:</span>
								<span class="job_value">
									@if(count($candidate->foreignLanguages) > 0)
									@foreach($candidate->foreignLanguages->slice(0, 1) as $index=>$item)
										{{$item->language->name}}
									@endforeach
									@endif
								</span>
						</p>
						<p class="line-icon mb_4">
							<i class="icon-gender-24 icon-24 icon_24"></i> <span
								class="bold">Giới tính:</span> <span class="job_value">{{$candidate->sex ? 'Nam' : 'Nữ'}}</span>
						</p>
						<p class="line-icon mb_4">
							<i class="icon-relationship icon-24 icon_24"></i> <span
								class="bold"> Hôn nhân:</span> <span class="job_value">{{$candidate->is_married ? 'Kết hôn' : 'Độc thân'}}</span>
						</p>
					</div>
					<div class="profile_item">
						<p class="line-icon mb_4">
							<i class="icon-position-24 icon-24 icon_24"></i> <span
								class="bold">Cấp bậc mong muốn:</span> <span class="job_value">{{$candidate->expectRank ? $candidate->expectRank->name : ''}}</span>
						</p>
						<p class="line-icon mb_4">
							<i class="icon-address-blue icon-24 icon_24"></i>
							<span class="bold">Địa điểm mong muốn:</span>
							@if(count($candidate->expectAddresses) > 0)
							@foreach($candidate->expectAddresses as $index=>$item)
								<a
								href="#"
								class="job_value text_pink">{{$item->name}}</a><span
								class="text_pink">@if($index < count($candidate->expectAddresses) - 1),
								@endif
							@endforeach
							@endif
						</p>
						<p class="line-icon mb_4">
							<i class="icon-job-want icon-24 icon_24"></i>
							<span class="bold">Ngành nghề mong muốn:</span>
							@if(count($candidate->expectJobs) > 0)
							@foreach($candidate->expectJobs as $index=>$item)
								<a
								href="#"
								class="job_value text_pink">{{$item->name}}</a><span
								class="text_pink">@if($index < count($candidate->expectJobs) - 1),
								@endif
							@endforeach
							@endif
						</p>
						<p class="line-icon mb_4">
							<i class="icon-price icon-24 icon_24"></i> <span class="bold">Mức
								lương mong muốn:</span> <span class="job_value">{{$candidate->expectSalary ? $candidate->expectSalary->name : ''}}</span>
						</p>
						<p class="line-icon mb_4">
							<i class="icon-job-time icon-24 icon_24"></i> <span class="bold">Hình
								thức làm việc:</span> <span class="job_value">{{$candidate->employmentStatus ? $candidate->employmentStatus->name : 'Chưa rõ'}}</span>
						</p>
					</div>
				</div>
			</div>
		</div>
		<p class="font16 mt_10 mb_4 bold text_blue">Mục tiêu nghề nghiệp</p>
		<div class="list-items mb_8 font14">
			{{$candidate->job_goal}}
		</div>

	</div>

	@if(count($candidate->certificates) > 0)
	<div class="box_trinhdo text_grey2 mt_16  ">
		<div class="">
			<div class="box-heading bg_white item pt_16 pb_6 pl_16 pr_16">
				<p class="text_blue bold">Bằng cấp - Chứng chỉ</p>
			</div>
			<div class="collapse-box bg_white pl_14 pr_14">
			@foreach($candidate->certificates as $index=>$item)
				<div class="bg_white item pos_relative pt_16 pb_6">
					<p class="font18 bold">{{$item->certificate_name}}</p>
					<p class="mb_4">


					<li class="ml_16"><span class="bold">Đơn vị đào tạo:</span> <span>{{$item->training_unit}}</span></li>
					</p>
					<p class="mb_4">


					<li class="ml_16"><span class="bold">Thời gian:</span> <span>Từ
							tháng {{DateTimeHelper::formatDate($item->started_at, 'm/Y')}} đến {{DateTimeHelper::formatDate($item->ended_at, 'm/Y')}}</span></li>
					</p>
					<p class="mb_4">


					<li class="ml_16"><span class="bold">Chuyên ngành:</span> <span>{{$item->specialize}}</span></li>
					</p>
					<p class="mb_4">


					<li class="ml_16"><span class="bold">Loại tốt nghiệp:</span> <span>{{$item->graduation_type}}</span></li>
					</p>
				</div>
			@endforeach
			</div>
		</div>
	</div>
	@endif

	@if(count($candidate->foreignLanguages) > 0)
	<div class="box_trinhdo text_grey2 mt_16 ">
		<div class="">
			<div class="box-heading bg_white item pt_16 pb_6 pl_16 pr_16">
				<p class="text_blue bold">Ngoại ngữ</p>
			</div>
			<div class="collapse-box bg_white pl_14 pr_14">
			@foreach($candidate->foreignLanguages as $index=>$item)
				<div class="bg_white item pos_relative pt_16 pb_16">
					<p class="font16 lh_12 mt_6 bold">
						{{$item->language->name}}</span> <span class="text_grey3">

					</p>
					<p class="mb_4 font14">
						<span class="pr_46 "><span class="fwb">- Nghe:</span> {{CandidateHelper::language($item->listen)}}</span>
						<span class="pr_46 "><span class="fwb">- Nói:</span> {{CandidateHelper::language($item->speak)}}</span>
						<span class="pr_46 "><span class="fwb">- Đọc:</span> {{CandidateHelper::language($item->read)}}</span>
						<span class="pr_46 "><span class="fwb">- Viết:</span> {{CandidateHelper::language($item->write)}}</span>
					</p>
				</div>
			@endforeach
			</div>
		</div>
	</div>
	@endif


	@if(count($candidate->itLevels) > 0)
	<div class="box_trinhdo text_grey2 mt_16 ">
		<div class="">
			<div class="box-heading bg_white item pt_16 pb_4 pl_16 pr_16">
				<p class="text_blue bold">Trình độ tin học</p>
			</div>
			<div class="collapse-box bg_white pl_14 pr_14">
				@foreach($candidate->itLevels as $index=>$item)
				<div class="bg_white item pos_relative pt_16 pb_16">

					<p class="font16 lh_12 mt_6 bold">Tin học văn phòng</p>
					<p class="mb_4 font14">
						<span class="pr_46 "><span class="fwb">- MS Word:</span> {{CandidateHelper::office($item->word)}}</span>
						<span class="pr_46 "><span class="fwb">- MS Excel:</span> {{CandidateHelper::office($item->excel)}}</span>
						<span class="pr_46 "><span class="fwb">- MS Power Point:</span> {{CandidateHelper::office($item->power_point)}}</span>
						<span class="pr_46 "><span class="fwb">- MS Outlook:</span> {{CandidateHelper::office($item->out_look)}}</span>
					</p>

				</div>
				@endforeach
			</div>
			<div class="collapse-box bg_white pl_14 pr_14 hide">
				<div class="bg_white item pos_relative pt_16 pb_16">
					<p class="font16 lh_12 mt_6 bold">Phần mềm khác</p>
					<p class="mb_4 font14"></p>

				</div>
			</div>
		</div>
	</div>
	@endif

	@if(count($candidate->experiences) > 0)
	<div class="box_trinhdo text_grey2 mt_16  ">
		<div class="">
			<div class="box-heading bg_white item pt_16 pb_4 pl_16 pr_16">
				<p class="text_blue bold">Kinh nghiệm làm việc</p>
			</div>
			@foreach($candidate->experiences as $index=>$item)
			<div class="collapse-box bg_white pl_14 pr_14">
				<div class="bg_white item pos_relative pt_16 pb_16">
					<p class="text_blue font14">Từ tháng {{DateTimeHelper::formatDate($item->day_in, 'm/Y')}} đến tháng {{DateTimeHelper::formatDate($item->day_out, 'm/Y')}}</p>
					<p class="font16 lh_12 mt_6 bold">{{$item->office}}</p>
					<p class="mb_4">


					<li class="ml_16"><span class="bold">Công ty:</span> <span>{{$item->company_name}}</span></li>
					</p>
					<p class="mb_4">


					<li class="ml_16"><span class="bold">Thời gian:</span> <span>Từ tháng {{DateTimeHelper::formatDate($item->day_in, 'm/Y')}} đến tháng {{DateTimeHelper::formatDate($item->day_out, 'm/Y')}} </span></li>
					</p>
					<p class="mb_4">


					<li class="ml_16"><span class="bold">Mô tả công việc:</span></li>
					</p>
					<p class="ml_24">
						{{$item->description}}
					</p>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	@endif

	<div class="box_trinhdo text_grey2 mt_16  hide">
		<div class="">
			<div class="box-heading bg_white item pt_16 pb_4 pl_16 pr_16">
				<p class="text_blue bold">Kỹ năng và sở trường</p>
			</div>

			<div class="collapse-box">
				<div class="bg_white item pos_relative pt_16 pl_14 pr_14 pb_16">
					<p class="font14 mt_12">


					<li class="ml_16"><span class="bold">Kỹ năng khác:</span> Giải
						quyết vấn đề, Đàm phán thuyết phục, Quản lý bản thân, Làm việc
						nhóm, Học và tự học, Lắng nghe</li>
					</p>
				</div>
			</div>
		</div>
	</div>

	@if (Auth::user())
		@include('front.common.display_attach_cv', array('candidateAttachCv' => isset($candidate['attach_cv']) ? $candidate['attach_cv'] : ''))
	@endif

	@include('front/home/candidate_new_view', ['candidatesData' => $candidatesData])

	@if((count($sameData['exp']) > 0) && (count($sameData['lvl']) > 0) && $candidate->experienceYears )
	<div class="box_tab pt_22">
	   <div role="tabpanel">
		  <!-- Nav tabs -->
		  <ul class="nav nav-tabs w_100" role="tablist">
			 <li role="presentation" class="active ml1"><span class="left_tab"></span><a href="#hosocungkinhnghiem" aria-controls="hosocungkinhnghiem" role="tab" data-toggle="tab" class="bold font16 uppercase m0">Hồ sơ cùng 1-2 năm kinh nghiệm</a><span class="right_tab"></span></li>
			 <li role="presentation" class="ml_20"><span class="left_tab"></span><a href="#hosocungcapbac" aria-controls="hosocungcapbac" role="tab" data-toggle="tab" class="bold font16 uppercase m0">Hồ sơ cùng cấp bậc</a><span class="right_tab"></span></li>
		  </ul>
		  <!-- Tab panes -->
		  <div class="tab-content w_100">
			 <div role="tabpanel" class="tab-pane active" id="hosocungkinhnghiem">
			<div class="list_item_two bg_white">
					@foreach($sameData['exp'] as $index => $key)
					<div class="{{ $index % 2 == 0 ? 'col_list_left':'col_list_right'}} floatLeft floatLeft">
						<div class="list-items item_link">
							<span class="title-blockjob-main truncate-ellipsis font14">
							<a href="{{route('candidate.profile', ['slug' => StringHelper::uri($key->cv_title), 'id' => $key->id])}}" class="link_box_panel1 text_grey2 ">
							{{ $key->cv_title }}                     </a>
							</span>
							<span class="title-blockjob-sub truncate-ellipsis font14">
							<a href="{{route('candidate.profile', ['slug' => StringHelper::uri($key->cv_title), 'id' => $key->id])}}" class="link_box_panel2 text_grey">
							{{ $key->full_name}}                         <span class="text_pink display_inline">(Cập nhật: {{ $key->updated_at? DateTimeHelper::formatDate($key->updated_at) : ""}})</span>
							</a>
							</span>
							<div class="s22_list_note_icon">
								<div class="w_33 floatLeft">
									<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
									<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
									{{ $key->expectSalary ? $key->expectSalary->name : '&nbsp;' }}
								</div>
								</div>
								<div class="w_33 floatLeft">
									<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
									<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
									{{ $key->experienceYears ? $key->experienceYears->name: '&nbsp;' }}
									</div>
								</div>
								<div class="w_33 floatLeft">
									<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
									<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
									@if(count($key->expectAddresses) > 0)
									@foreach($key->expectAddresses as $index=>$item)
										{{$item->name}}<span
										class="text_pink">@if($index < count($key->expectAddresses) - 1),
										@endif
									@endforeach
									@endif
								</div>
							</div>
							</div>
							<div class="line_list"></div>
							</div>
						</div>
				  @endforeach
			   </div>
				<a href="#">
				   <h3 class="btn btn-lg w_100 btn-nobg btn_more_list">
					  <i class="icon_load_more icon_24 icon-24"></i>
					  Xem thêm Hồ sơ tìm việc cùng kinh nghiệm {{$candidate->experienceYears ? $candidate->experienceYears->name : ''}}
				   </h3>
				</a>
			 </div>
			 <div role="tabpanel" class="tab-pane" id="hosocungcapbac">
				<div class="list_item_two bg_white">
					@foreach($sameData['lvl'] as $index => $key)
					<div class="{{ $index % 2 == 0 ? 'col_list_left':'col_list_right'}} floatLeft floatLeft">
						<div class="list-items item_link">
							<span class="title-blockjob-main truncate-ellipsis font14">
							<a href="{{route('candidate.profile', ['slug' => StringHelper::uri($key->cv_title), 'id' => $key->id])}}" class="link_box_panel1 text_grey2 ">
							{{ $key->cv_title }}                     </a>
							</span>
							<span class="title-blockjob-sub truncate-ellipsis font14">
							<a href="{{route('candidate.profile', ['slug' => StringHelper::uri($key->cv_title), 'id' => $key->id])}}" class="link_box_panel2 text_grey">
							{{ $key->full_name}}                         <span class="text_pink display_inline">(Cập nhật: {{ $key->updated_at ? DateTimeHelper::formatDate($key->updated_at) :""}})</span>
							</a>
							</span>
							<div class="s22_list_note_icon">
								<div class="w_33 floatLeft">
									<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
									<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
									{{ $key->expectSalary ? $key->expectSalary->name : '&nbsp;' }}
								</div>
								</div>
								<div class="w_33 floatLeft">
									<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
									<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
									{{ $key->experienceYears ? $key->experienceYears->name:'&nbsp;'}}
									</div>
								</div>
								<div class="w_33 floatLeft">
									<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
									<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
									@if(count($key->expectAddresses) > 0)
									@foreach($key->expectAddresses as $index=>$item)
										{{$item->name}}<span
										class="text_pink">@if($index < count($key->expectAddresses) - 1),
										@endif
									@endforeach
									@endif
								</div>
							</div>
							</div>
							<div class="line_list"></div>
							</div>
						</div>
				  @endforeach
			   </div>
				<a href="#">
				   <h3 class="btn btn-lg w_100 btn-nobg btn_more_list">
					  <i class="icon_load_more icon_24 icon-24"></i>
					  Xem thêm Hồ sơ tìm việc cùng cấp bậc
				   </h3>
				</a>
			 </div>
		  </div>
	   </div>
	</div>
	@endif

	@include('front.profile.candidate_js')
	</div>

@endsection
