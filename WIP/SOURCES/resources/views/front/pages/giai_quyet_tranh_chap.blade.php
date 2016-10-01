@extends('front/global')

<title>CƠ CHẾ GIẢI QUYẾT TRANH CHẤP</title>

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
							class="uppercase bold fs16 color_ntd_dky">CƠ CHẾ GIẢI QUYẾT TRANH CHẤP</span>
				</div>
			</div>
			<div class="regis_content_1">
				<div class="block-content">
					<div class="mb8">
						<div class="center-p12p24">
							<div style="width: 90%; margin-top: 30px; margin-left: 5%; padding-bottom: 30px; text-align: justify; min-height: 512px;">
								Ứng viên có thể gửi Gửi khiếu nại tại địa chỉ:<br/>
								o	  Công ty Cổ phần ứng viên Việt Nam<br/>
								o	Địa chỉ:  Số 1/1 Hoàng Ngọc Phách, Láng Hạ, Quận Đống Đa,Hà Nội<br/>
								o	Email:  nganhangungvienvn@gmail.com<br/>
								o	 Hotline: 04 6684 7421<br/>
								<br/>
								<p>Nganhangungvien.com tôn trọng và thực hiện nghiêm túc những quy định của pháp luật về bảo vệ quyền lợi của Ứng viên. Do vậy, các thành viên khi tham gia giao dịch cần cung cấp đầy đủ, chính xác, trung thực những thông tin liên quan đến nội dung công việc. Mọi hành vi lừa đảo, gian lận đều bị lên án và phải chịu hoàn toàn trách nhiệm trước pháp luật<br/><br/>
								Các bên bao gồm Nhà tuyển dụng, Ứng viên, Ban quản lý Nganhangungvien.com đều có trách nhiệm trong việc hỗ trợ tích cực giải quyết những tranh chấp phát sinh trong quá trình giao dịch trên Nganhangungvien.com, gây mâu thuẫn, tranh cãi giữa Nhà tuyển dụng và Ứng viên.<br/><br/>
								Với trường hợp phát sinh tranh chấp khiếu nại mà lỗi thuộc về phía Nhà tuyển dụng, Nganhangungvien.com có biện pháp cảnh cáo, khóa tài khoản hoặc chuyển cho cơ quan pháp luật có thẩm quyền xử lý (tùy theo mức độ của sự việc), đồng thời gỡ bỏ toàn bộ tin bài, nội dung của Nhà tuyển dụng đó trên Nganhangungvien.com.<br/><br/>
								Khi hai bên vẫn chưa thể thỏa thuận giải quyết được mâu thuẫn, một trong hai bên sẽ được quyền nhờ đến cơ quan pháp luật có thẩm quyền can thiệp để đảm bảo lợi ích hợp pháp của các bên.<br/>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
