

@extends('front/global')
@section('content')
<div class="">

	@include('front/home/ads')
	
	<div class="box_alert_content w_100 font14 " id="box_alert_message">
		<div class="col_msg_left">
			<a href="#" class="btn btn-blue align-left"><span class="text_orange bold font16 pt_2">CẬP NHẬT HÔM NAY</span><span class="icon_24 icon_arrow_orange icon-24"></span></a>
	
			<span style="margin-left: 20px;">Hôm qua có <span class="text_orange font18 bold">4,431</span> hồ sơ mới và <span class="text_orange font18 bold">10,287</span> hồ sơ cập nhật mới, trong tổng số <span class="text_orange font18 bold">610,976</span> hồ sơ đang tìm việc</span>
		</div>
	</div>
	
	<div class="box_title_content w_100 font16 pos_relative mb_30 mt_16">
		<h1 class="title_title_box pl_8 pr_8 uppercase bold text_blue">Cổng dành cho nhà tuyển dụng (610,976)</h1>
	</div>
	
	@include('front/home/search', ['dropdownData' => $dropdownData])

	<!-- Phan loai ho theo -->
	<h3 class="title_text_line mt24 fwb">
		<span class="text-tim-nhat uppercase">Phân loại hồ sơ người tìm việc theo :</span>
	</h3>

	@include('front/home/classification', ['tabsData' => $tabsData])
	<!--End phan loai ho theo --->

	<!-- ho so moi nhat -->
   @include('front/home/candidate_new_view', ['candidatesData' => $candidatesData])
   <!-- END ho so moi nhat -->

	<!-- Thong tin lien he -->
	@include('front/home/contact_info')
	<!-- END Thong tin lien he -->
</div>
@endsection

