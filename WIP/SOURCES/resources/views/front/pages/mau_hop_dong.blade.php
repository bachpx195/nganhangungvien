@extends('front/global')

<?php
use \App\Libs\Constants as Constants;
?>

<title>MẪU HỢP ĐỒNG THỎA THUẬN NGANHANGUNGVIEN.VN</title>

@section('content')
	@if (Auth::check() && Auth::user()->user_type == 'employer')
		<div class="content_dangky" style="padding-left:232px;">
	@else
	<div class="content_dangky">
		@endif
		<div class="bg_white mt16 box_shadow">
			<div class="block_ntv_dangky regis_header h_56" id="regis_header">

				<div class="w_50 floatLeft">
					<span class="title_ntd_dky "></span><span class="uppercase bold fs16 color_ntd_dky">MẪU HỢP ĐỒNG THỎA THUẬN NGANHANGUNGVIEN.VN</span>
				</div>
			</div>
			<div class="regis_content_1">
				<div class="block-content">
					<div class="mb8">
						<div class="center-p12p24">
							<div style="width: 90%; margin-top: 30px; margin-left: 5%; padding-bottom: 30px;">
								<iframe width="99%" height="800px" src='{{Constants::GOOGLE_DOC_PATH}}?url={{URL::to('/') . '/assets/pages/files/mau-hop-dong.doc'}}&embedded=true' frameborder='0'></iframe>
	                        </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
