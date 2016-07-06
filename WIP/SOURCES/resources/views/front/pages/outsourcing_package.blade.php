@extends('front/global')

<title>Đăng ký nhà tuyển dụng</title>

@section('content')
	@if (Auth::check() && Auth::user()->user_type == 'employer')
		<div class="content_dangky" style="padding-left:232px;">
	@else
	<div class="content_dangky">
		@endif
		<div class="bg_white mt16 box_shadow">
			<div class="block_ntv_dangky regis_header h_56" id="regis_header">

				<div class="w_50 floatLeft">
					<span class="title_ntd_dky "></span><span
							class="uppercase bold fs16 color_ntd_dky">Tuyển dụng thuê ngoài trọn gói</span>
				</div>
			</div>
			<div class="regis_content_1">
				<div class="block-content">
					<div class="mb8">
						<div class="center-p12p24">
							<div class="text-center mt_10 mb_10">
								<img src="{{ URL::asset('assets/pages/img/outsourcing/outsourcing_package.jpg') }}" alt="Tuyển dụng thuê ngoài" width="624"/>
							</div>
							<span class="text_orange font18 bold ml_20">A - QUY TRÌNH TUYỂN DỤNG THUÊ NGOÀI</span>
							<div class="text-center mt_10 mb_10">
								<img src="{{ URL::asset('assets/pages/img/outsourcing/quy-trinh-tuyen-dung.png') }}" alt="Tuyển dụng thuê ngoài"/>
							</div>
							<span class="text_orange font18 bold ml_20">B - CAM KẾT THỰC HIỆN</span>
							<div class="text-center mt_10 mb_10">
								<img src="{{ URL::asset('assets/pages/img/outsourcing/cam-ket.png') }}" alt="Tuyển dụng thuê ngoài"/>
							</div>
							<span class="text_orange font18 bold ml_20">C - LỢI ÍCH KHI SỬ DỤNG DỊCH VỤ TUYỂN DỤNG THUÊ NGOÀI TRỌN GÓI TẠI NGANHANGUNGVIEN.COM</span>
							<div class="text-center mt_10 mb_10">
								<img src="{{ URL::asset('assets/pages/img/outsourcing/loi-ich.png') }}" alt="Tuyển dụng thuê ngoài"/>
							</div>

							<div class="hr_header hr_header-new">
								<div class="hr"></div>
								<div class="title">
									<span class="bg-white bold text_blue">HÃY LIÊN HỆ NGAY VỚI CHÚNG TÔI:</span>
								</div>
							</div>
							<div class="row pl_14 pr_14">
								<div class="txc">
									<span class="bg-white bold font24 text_blue"><i class="fa fa-phone" aria-hidden="true"></i> Hotline: </span><span class="bg-white text_pink font24 bold">04 6684 7421 - 0943 24 9699</span><br />
									<span class="bg-white bold font24 text_blue"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email  : </span><span class="bg-white text_pink font24 bold"><a href="mailto:nganhangungvienvn@gmail.com" class="text_pink">nganhangungvienvn@gmail.com</a></span><br/>
									<span class="bg-white bold font24 text_blue"><i class="fa fa-skype" aria-hidden="true"></i> Skype  : </span><span class="bg-white text_pink font24 bold"><a href="skype:CSKH.NGANHANGUNGVIEN.COM?chat" class="text_pink">cskh.nganhangungvien.com</a></span>
								</div>
								<br/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
