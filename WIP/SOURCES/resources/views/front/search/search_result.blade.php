@extends('front/global') 

@section('content')
<div id="cols-right" class="bg_grey">
	<div class="content_cols-right pt_16 pl_24 pb_24">
		@include('front/search/form_search', [])
		
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
										href="https://vieclam24h.vn/nha-tuyen-dung/quan-tri-kinh-doanh/nhan-vien-van-phong-c14p0id2252351.html"
										target="_blank" class="text_grey2 "> {{ $item->cv_title }} </a>
									</span> <span
										class="title-blockjob-sub truncate-ellipsis font14 text_grey">
										<a
										href="https://vieclam24h.vn/nha-tuyen-dung/quan-tri-kinh-doanh/nhan-vien-van-phong-c14p0id2252351.html"
										class="text_grey"> {{ $item->full_name }} <i
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
										{{$item->expectAddress ? $item->expectAddress->name : ''}}
									</div>

								</div>
							</div>
						</div>
						@endforeach @else
						Chưa có hồ sơ phù hợp
						@endif
						

					</div>
				</div>

				<div class="box_pagination_footer text-center">
					{{$candidates->render()}}
				</div>
			</div>
		</div>

	</div>
	
</div>

@endsection
