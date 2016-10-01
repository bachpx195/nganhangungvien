@extends('front/global')

<title>Đăng ký tài khoản VIP</title>

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
							class="uppercase bold fs16 color_ntd_dky">Đăng ký tài khoản VIP</span>
				</div>
			</div>
			<div class="regis_content_1">
				<div class="block-content">
					<div class="mb8">
						<div class="center-p12p24">
							<div class="text-center mt_10 mb_10">
								<img src="{{ URL::asset('assets/pages/img/registvip/dang-ky-tai-khoan-vip.png') }}" alt="Đăng ký tài khoản VIP" width="90%"/>
							</div>
							<div class="text-center mt_10">
								<br>
								<h1 class="text_pink">PHƯƠNG THỨC THANH TOÁN</h1>
								<br>
							</div>
							<span class="text_orange font18 bold ml_20"><a href="javascript:;" rel="nofollow" @if (Auth::check()) onclick="popupPayment_open('atm', 'vip')" @endif class="text_pink">CÁCH 1 - CHUYỂN KHOẢN ONLINE</a></span>
							<div class="text-center mt_10 mb_10">
								<a href="javascript:;" rel="nofollow" @if (Auth::check()) onclick="popupPayment_open('atm', 'vip')" @endif>
									<img src="{{ URL::asset('assets/pages/img/registvip/chuyen-khoan-online.jpg') }}" alt="Chuyển khoản online"/>
								</a>
							</div>
							<br>
							<span class="text_orange font18 bold ml_20">CÁCH 2 - ĐĂNG KÝ VÀ THU PHÍ TRỰC TIẾP</span>
							<br/>
							<div class="text-center mt_20 mb_10" id="become-vip">
								<table style="width: 80%; margin-left: 80px;">
									<tr>
										<td><span>Người liên hệ: </span></td>
										<td><input type="text" placeholder="Nhập Họ và tên" name="full_name" class="form-control mt_10" /></td>
										<td style="text-align: right;">Công ty: </td>
										<td style="text-align: right;"><input type="text" placeholder="Nhập Công ty" name="company_name" class="form-control mt_10"/></td>
									</tr>
									<tr>
										<td>Email: </td>
										<td><input type="text" placeholder="Nhập Email" name="email" class="form-control mt_10"/></td>
										<td style="text-align: right;">SĐT: </td>
										<td style="text-align: right;"><input type="text" placeholder="Nhập Số điện thoại" name="phone_number" class="form-control mt_10"/></td>
									</tr>
									<tr>
										<td>Địa chỉ: </td>
										<td><input type="text" placeholder="Nhập địa chỉ liên hệ" name="address" class="form-control mt_10"/></td>
										<td style="text-align: right;"><a id="become-vip-btn" href="javascript:;" onclick="become_vip();" class="btn btn_submit btn-pink" style="margin-top: 10px;">Đăng ký ngay</a></td>
										<td></td>
									</tr>
								</table>

							</div>
							<br/>
							<div class="text-center mt_10 mb_10">
							(Lưu ý: Ngân Hàng Ứng Viên sẽ hỗ trợ tư vấn và thu phí <span class="">Miễn Phí</span> trong Nội thành Tp. Hà Nội)
							</div>

							<div class="hr_header hr_header-new">
								<div class="hr"></div>
								<div class="title">
									<span class="bg-white bold text_blue">HÃY LIÊN HỆ NGAY VỚI CHÚNG TÔI ĐỂ ĐƯỢC TRỢ GIÚP</span>
								</div>
							</div>
							<div class="row pl_14 pr_14">
								<div class="txc">
									<span class="bg-white bold font24 text_blue"><i class="fa fa-phone" aria-hidden="true"></i> Hotline: </span><span class="bg-white text_pink font24 bold">04 6684 7421</span><br />
									<span class="bg-white bold font24 text_blue"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email  : </span><span class="bg-white text_pink font24 bold"><a href="mailto:nganhangungvienvn@gmail.com" class="text_pink">nganhangungvienvn@gmail.com</a></span><br/>
									<span class="bg-white bold font24 text_blue"><i class="fa fa-skype" aria-hidden="true"></i> Skype  : </span><span class="bg-white text_pink font24 bold"><a href="skype:NGANHANGUNGVIENVN@GMAIL.COM?chat" class="text_pink">nganhangungvienvn@gmail.com</a></span>
								</div>
								<br/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
