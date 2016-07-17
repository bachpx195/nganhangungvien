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
							class="uppercase bold fs16 color_ntd_dky">Điều khoản sử dụng</span>
				</div>
			</div>
			<div class="regis_content_1">
				<div class="block-content">
					<div class="mb8">
						<div class="center-p12p24">
							<div style="width: 90%; margin-top: 30px; margin-left: 5%; padding-bottom: 30px;">
								<textarea class="form-control input-lg2 color-input" style="height: 600px;" name="policy" >{{$policy}}</textarea>
	                        </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
