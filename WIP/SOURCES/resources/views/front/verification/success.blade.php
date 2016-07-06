@extends('front/global')
@section('content')
	@if (Auth::check() && Auth::user()->user_type == 'employer')
		<div class="" style="padding-left:232px;">
	@else
		<div class="">
	@endif

	@include('front/home/ads')
	
	@include('front/home/count',['coutData' => $countData])

<div class="row mt_24">
	<div class="box_tab pl_0 pr_0">
		<div class="clearfix"></div>
		<div class="content_dangky bg_white mt16 box_shadow">
		    <div class="regis_content_1">
		        <div class="block-pop-dangky pr0" id="regis_content">
		            <div class="mess-success-title text-center txt_color_78b43d uppercase fs18 bold pt14 mb16" >XÁC THỰC TÀI KHOẢN THÀNH CÔNG</div>
		            <p>
		            Xin chào <strong>{{ $user->full_name }}</strong>
		            </p>
		            <p>
		                Tài khoản Nhà tuyển dụng của bạn đã được xác thực thành công trên Ngân hàng ứng viên.<br>
		                Bạn có thể tìm kiếm việc ứng viên phù hợp với tiêu chí của bạn.
		            </p>
		            <br>
		            <div class="pb_26"></div>
		        </div>
		    </div>
		</div>
	</div>
</div>
	<!-- Thong tin lien he -->
	@include('front/home/contact_info')
	<!-- END Thong tin lien he -->

</div>
@endsection
