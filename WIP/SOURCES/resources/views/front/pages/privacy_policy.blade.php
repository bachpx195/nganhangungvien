@extends('front/global')

<title>CHÍNH SÁCH BẢO MẬT THÔNG TIN</title>

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
							class="uppercase bold fs16 color_ntd_dky">CHÍNH SÁCH BẢO MẬT THÔNG TIN</span>
				</div>
			</div>
			<div class="regis_content_1">
				<div class="block-content">
					<div class="mb8">
						<div class="center-p12p24">
							<div style="width: 90%; margin-top: 30px; margin-left: 5%; padding-bottom: 30px; text-align: justify;">
								<strong>a)	Mục đích và phạm vi thu thập thông tin</strong><br/>
								Khi các thành viên đồng ý sử dụng dịch vụ của Nganhangungvien.com và đăng ký tài khoản tại Nganhangungvien.com, các thành viên sẽ phải cung cấp một số thông tin như: tên đăng nhập, mật khẩu, địa chỉ, email, số điện thoại liên hệ.<br/>
								Mọi thông tin Nganhangungvien.com thu thập được nhằm mục đích đảm bảo mọi quyền lợi của các thành viên.<br/>
								Các thành viên sẽ tự chịu trách nhiệm về bảo mật và lưu giữ thông tin tài khoản đã đăng ký bao gồm tên tài khoản, mật khẩu, email.<br/>
								Trong trường hợp các thành viên phát hiện hành vi lạm dụng trái phép, vi phạm chính sách bảo mật, thông tin về tài khoản của mình thì cần báo ngay cho Nganhangungvien.com để đưa ra phương án xử lý kịp thời.<br/>
								<br/>Thông tin chi tiết thu thập được thể hiện qua form đăng ký thành viên:<br/>
								<br/>Đối với ứng viên:<br/><br/>
								<img src="{{ URL::asset('assets/pages/img/ung-vien.png') }}" alt="Đối với ứng viên"/><br/><br/>
								Đối với doanh nghiệp:<br/><br/>
								<img src="{{ URL::asset('assets/pages/img/nha-tuyen-dung.png') }}" alt="Đối với doanh nghiệp"/><br/><br/>
								<br/><strong>b)	Phạm vi sử dụng thông tin</strong><br/>
								-	Nganhangungvien.com sử dụng thông tin các thành viên cung cấp để:<br/>
								-	Gửi email thông báo dịch vụ hàng tháng<br/>
								-	Gửi thông tin trao đổi giữa ứng viên với Nhà tuyển dụng, thông tin ứng tuyển việc làm được Nhà tuyển dụng đăng tuyển<br/>
								-	Liên lạc với thành viên trong một số trường hợp đặc biệt.<br/>
								-	Không sử dụng thông tin cá nhân của các thành viên ngoài mục đích liên quan đến những giao dịch trên Sàn Thương mại điện tử Nganhangungvien.com<br/>
								-	Trong trường hợp có yêu cầu của cơ quan chức năng, pháp luật, Sàn TMĐT Nganhangungvien.com có trách nhiệm cung cấp dữ liệu thông tin của thành viên, cụ thể 1 số cơ quan Nhà nước như: Tòa án, cơ quan công an, viện kiểm soát. Ngoài ra, không ai có quyền xâm phạm vào thông tin cá nhân của thành viên.<br/>
								<br/><strong>c)	Thời gian lưu trữ thông tin:</strong><br/>
								Dữ liệu thông tin của thành viên sẽ được lưu trữ tại Nganhangungvien.com cho đến khi có yêu cầu từ phía thành viên về việc xóa bỏ.<br/>
								Ngoài ra, mọi thông tin này sẽ được lưu trữ trên hệ thống kiểm soát, máy chủ của Nganhangungvien.com<br/>
								<br/><strong>d)	Địa chỉ của đơn vị thu thập và quản lý thông tin cá nhân</strong><br/>
									•	Công ty Cổ phần ứng viên Việt Nam<br/>
									•	Địa chỉ:  Số 1/1 Hoàng Ngọc Phách, Láng Hạ, Quận Đống Đa,Hà Nội<br/>
									•	Email:  nganhangungvienvn@gmail.com<br/>
									•	Hotline: 04 6684 7421 - 0943 24 9699<br/>
								<br/><strong>e)	Phương tiện và công cụ để người dùng tiếp cận và chỉnh sửa dữ liệu cá nhân của mình</strong><br/>
								Thành viên có thể đăng nhập vào tài khoản đã đăng ký để cập nhật, chỉnh sửa, kiểm tra lại dữ liệu cá nhân của mình. Ngoài ra, trong trường hợp phát hiện hành vi tiết lộ thông tin cá nhân cho bên thứ 3, thành viên có quyền gửi đơn khiếu nại đến Ban quản lý Nganhangungvien.com để được xác nhận, xử lý và hướng dẫn thành viên khôi phục thông tin và bảo mật tài khoản.<br/>
								<br/><strong>f)	Cam kết bảo mật thông tin cá nhân khách hàng</strong><br/>
								-	Nganhangungvien.com cam kết bảo mật thông tin cá nhân các thành viên. Việc thu thập và sử dụng thông tin của mỗi thành viên chỉ được thực hiện khi được sự đồng ý của người dùng. (trừ những trường hợp pháp luật có quy định khác).<br/>
								-	Không sử dụng, chuyển giao hay tiếc lộ thông tin cá nhân của thành viên cho bên thứ 3 nào khác mà không được sự đồng ý.<br/>
								-	Trong trường hợp bất khả kháng như bị hacker tấn công, Nganhangungvien.com sẽ thông báo vụ việc đến cơ quan chức năng để điều tra và xử lý kịp thới<br/>
								-	Các cá nhân khi đăng ký thành viên yêu cầu cần khai báo đầy đủ thông tin cá nhân như Họ và tên, địa chỉ liên lạc, Email, điện thoại… và tự chịu trách nhiệm về tính pháp lý của những thông tin đã cung cấp.<br/>
								-	Trong trường hợp những thông tin kê khai ban đầu không chính xác, Ban Quản trị Nganhangungvien.com sẽ không chịu trách nhiệm cũng như giải quyết mọi khiếu nại liên quan đến quyền lợi của thành viên.<br/>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
