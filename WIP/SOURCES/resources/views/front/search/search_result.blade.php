@extends('front/global') 

@section('content')
	@if (Auth::check() && Auth::user()->user_type == 'employer')
		<div class="" style="padding-left:232px;">
	@else
		<div class="">
	@endif

	@include('front.common.form_search', ['dropdownData' => $dropdownData, 'params' => $params])

	<br/>

	<h1 class="title_text_line mt_16 fwb mt49">
		<span class="text-tim-nhat uppercase">Kết quả tìm kiếm ({{$candidates->total()}})</span>
	</h1>


	<div class="box_tab bg_white box_shadow">
		<div class="w_100">
			<div class="list_item_two bg_white">
				<div>
					@if(count($candidates) > 0)
					@foreach($candidates as $index=>$item)
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
									href="{{route('candidate.profile', ['slug' => StringHelper::uri($item->cv_title), 'id' => $item->id])}}"
									target="_blank" class="text_grey2 "> {{ $item->cv_title }} </a>
								</span> <span
									class="title-blockjob-sub truncate-ellipsis font14 text_grey">
									<a
									href="{{route('candidate.profile', ['slug' => StringHelper::uri($item->cv_title), 'id' => $item->id])}}"
									class="text_grey"> {{ $item->full_name }} <i
										class="text_pink display_inline">(Cập nhật: {{DateTimeHelper::formatDate($item->updated_at)}})</i>
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
									{{$item->expectSalary ? $item->expectSalary->name : ''}}
								</div>
								<div
									class="note_mucluong text-center font12 text_black floatLeft"
									data-toggle="tooltip" data-placement="bottom"
									title="Kinh nghiệm">
									<i
										class="icon_select_box icon_kinh_nghiem icon_24 icon-24 pos_relative"></i><br>
									{{$item->experienceYears ? $item->experienceYears->name : ''}}
								</div>
								<div
									class="note_mucluong text-center font12 text_black floatLeft"
									data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
									<i
										class="icon_select_box icon_local_list icon_24 icon-24 pos_relative"></i><br>
									@if(count($item->expectAddresses) > 0)
									@foreach($item->expectAddresses as $index=>$address)
										{{$address->name}}@if($index < count($item->expectAddresses) - 1),
										@endif
									@endforeach
									@endif
								</div>

							</div>
						</div>
					</div>
					@endforeach @else
					Chưa có hồ sơ phù hợp
					@endif
					<div class="list-items">
					<div class="box_pagination_footer text-center">
						{!! $candidates->render() !!}
					</div>
					<div class="list-items">
				</div>
			</div>
		</div>
	<div class="form-group clearfix mb_16"></div>

</div>
	</div>
	</div>
	</div>

@endsection
