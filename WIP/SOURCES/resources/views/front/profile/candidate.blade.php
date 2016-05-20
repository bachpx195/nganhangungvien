@extends('front/global') 

@section('content')
<div id="cols-right" class="bg_grey">
	<div class="content_cols-right pt_16 pl_24 pb_24">
		@include('front.common.form_search', ['dropdownData' => $dropdownData])

		<div class="spacer-50"></div>
		<h1 class="title_text_line mt6 ml_12 mr_12">
			<span class="text-tim-nhat uppercase">Chi tiết hồ sơ Nhân viên trade
				marketing</span>
		</h1>

		<div
			class="box_tab bg_white box_shadow pt_12 pl_14 pr_14 pb_16 ml_12 mr_12 mt_16">
			<div class="w_100 mb10">
				<div class="box_info">
					<div class="pull-left w120 mr_14">
						<div class="list-items">
							<div class="change_avatar pos_relative w120">
								<img src="asset/default/images/small-avatar.png"
									class="pos_absolute img_responsive" alt="" width="120">
							</div>
						</div>
					</div>
					<div class="pull-left info_user">

						<div class="list-items mb_0">
							<span class="name font24 lh_12 bold">Nguyễn Văn Tùng</span>
						</div>
						<div class="list-items mb_0">
							<span class="bold">Giới tính:</span> <span>Nam</span> | <span
								class="bold">Ngày sinh:</span> 11-02-1988
						</div>
						<div class="list-items mb_0">
							<div class="box_login_hotline">
								<div class="clearfix">
									Chỉ tài khoản Nhà tuyển dụng đã xác thực mới Xem được thông tin
									liên hệ của ứng viên Nguyễn Văn Tùng . Nếu chưa xác thực, Quý
									khách vui lòng liên hệ <a href="javascript:void(0)"
										onclick="popup_hotline()" class="text_blue font14 fwb">HOTLINE
										(Bấm vào đây để xem)</a> hoặc <a href="javascript:void(0)"
										class="show_s09b_ntd_register text_blue font14 fwb">Đăng ký tư
										vấn</a> để được bộ phận CSKH liên hệ hỗ trợ ngay trong 30
									phút.
								</div>
								<!--<div class="clearfix"><a href="#" class="text_blue font14 fwb">Bấm đây để tìm hiểu chi tiết dịch vụ</a></div>-->
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>

		<div class="box_button_action mt_16 row mrg button_s22">
			<button class="btn btn-white mr_8 pull-left btn-save-job no-shadow "
				onclick="javascript:luuhoso(this)" data-idtin="3193240"
				data-idnganh="36" data-type="tintimviec" data-idntv="3264433">
				<span class="line-icon"> <i class="icon-star icon_free_style"></i> <span
					class="pl_28 fwb">Lưu Hồ sơ</span>
				</span>
			</button>
			<button class="btn btn-white mr_8 pull-left no-shadow"
				onclick="javascript: print_preview('https://vieclam24h.vn/trang-in-ho-so/nhan-vien-trade-marketing-id3193240.html','width=900,height=900,scrollbars=yes');">
				<span class="line-icon"> <i class="icon-print icon_free_style"></i>
					<span class="pl_28 fwb">In Hồ sơ</span>
				</span>
			</button>
			<button class="btn btn-white mr_8 pull-left no-shadow"
				onclick="must_login('Gửi phản hồi')";>
				<span class="line-icon"> <i class="icon-to-cao icon-16 icon_16"></i>
					<span class="pl_22 fwb">Gửi phản hồi</span>
				</span>
			</button>
			<span class="text_grey2 font12 mt8 mb12"> <span><span class="fwb">Lượt
						xem:</span> 253</span> | <span> <span class="fwb">Mã:</span>
					NTV3193240
			</span> | <span><span class="fwb">Ngày làm mới:</span> 11/05/2016</span>
			</span>
		</div>

		<div
			class="job_detail box_tab bg_white box_shadow pt_16 pl_14 pr_14 pb_16 text_grey2 ml_12 mr_12 mt_16">
			<div class="box-ho-so pb_12">
				<div class="row">
					<div class="col-xs-12 pl_0 pr_0">
						<div class="font16 bolder">
							Tiêu đề hồ sơ:
							<h2 class="text_pink font16 display_inline">Nhân viên trade
								marketing</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 pl_0 pr_0">
						<div class="profile_item">
							<p class="line-icon mb_4">
								<i class="icon-position-job icon-24 icon_24"></i> <span
									class="bold">Cấp bậc hiện tại:</span> <span class="job_value">Chuyên
									viên - Nhân viên</span>
							</p>
							<p class="line-icon mb_4">
								<i class="icon-expensive icon-24 icon_24"></i> <span
									class="bold">Kinh nghiệm:</span> <span class="job_value">4 năm</span>
							</p>
							<p class="line-icon mb_4">
								<i class="icon-level icon-24 icon_24"></i> <span class="bold">Trình
									độ cao nhất:</span> <span class="job_value">Đại học</span>
							</p>
							<p class="line-icon mb_4 ">
								<i class="icon-language icon-24 icon_24"></i> <span class="bold">
									Ngoại ngữ:</span> <span class="job_value"> Tiếng Anh </span>
							</p>
							<p class="line-icon mb_4">
								<i class="icon-gender-24 icon-24 icon_24"></i> <span
									class="bold">Giới tính:</span> <span class="job_value">Nam</span>
							</p>
							<p class="line-icon mb_4">
								<i class="icon-relationship icon-24 icon_24"></i> <span
									class="bold"> Hôn nhân:</span> <span class="job_value">Độc thân</span>
							</p>
						</div>
						<div class="profile_item">
							<p class="line-icon mb_4">
								<i class="icon-position-24 icon-24 icon_24"></i> <span
									class="bold">Cấp bậc mong muốn:</span> <span class="job_value">Chuyên
									viên - Nhân viên</span>
							</p>
							<p class="line-icon mb_4">
								<i class="icon-address-blue icon-24 icon_24"></i> <span
									class="bold">Địa điểm mong muốn:</span> <a
									href="https://vieclam24h.vn/nha-tuyen-dung/ha-noi-p2.html"
									class="job_value text_pink">Hà Nội</a>
							</p>
							<p class="line-icon mb_4">
								<i class="icon-job-want icon-24 icon_24"></i> <span class="bold">Ngành
									nghề mong muốn:</span> <a
									href="https://vieclam24h.vn/nha-tuyen-dung/tiep-thi-quang-cao-c36.html"
									class="job_value text_pink">Tiếp thị-Quảng cáo</a><span
									class="text_pink">, </span><a
									href="https://vieclam24h.vn/nha-tuyen-dung/marketing-pr-c53.html"
									class="job_value text_pink">Marketing-PR</a><span
									class="text_pink">, </span><a
									href="https://vieclam24h.vn/nha-tuyen-dung/ban-hang-c63.html"
									class="job_value text_pink">Bán hàng </a>
							</p>
							<p class="line-icon mb_4">
								<i class="icon-price icon-24 icon_24"></i> <span class="bold">Mức
									lương mong muốn:</span> <span class="job_value">Thỏa thuận</span>
							</p>
							<p class="line-icon mb_4">
								<i class="icon-job-time icon-24 icon_24"></i> <span class="bold">Hình
									thức làm việc:</span> <span class="job_value">Toàn thời gian cố
									định</span>
							</p>
						</div>
					</div>
				</div>
			</div>
			<p class="font16 mt_10 mb_4 bold text_blue">Mục tiêu nghề nghiệp</p>
			<div class="list-items mb_8 font14">
				- Mong muốn có được cơ hội phát huy trong công việc, tìm kiếm cơ hội
				thăng tiến, thành công trong công việc.<br />- Góp phần xây dựng
				công ty ngày càng phát triển đồng thời nâng cao nghề nghiệp của bản
				thân.<br />- Mong muốn có điều kiện để vận dụng tối đa các kiến thức
				và kinh nghiệm đã có trong công việc đảm nhận.
			</div>

		</div>
		<div class="box_trinhdo text_grey2 mt_16  ">
			<div class="">
				<div class="box-heading bg_white item pt_16 pb_6 pl_16 pr_16">
					<p class="text_blue bold">Bằng cấp - Chứng chỉ</p>
				</div>
				<div class="collapse-box bg_white pl_14 pr_14">
					<div class="bg_white item pos_relative pt_16 pb_6">
						<p class="font18 bold">Cử nhân Kinh tế</p>
						<p class="mb_4">
						
						
						<li class="ml_16"><span class="bold">Đơn vị đào tạo:</span> <span>Đại
								học Công Nghiệp Hà Nội</span></li>
						</p>
						<p class="mb_4">
						
						
						<li class="ml_16"><span class="bold">Thời gian:</span> <span>Từ
								tháng 09/2007 đến 09/2011</span></li>
						</p>
						<p class="mb_4">
						
						
						<li class="ml_16"><span class="bold">Chuyên ngành:</span> <span>Kinh
								tế</span></li>
						</p>
						<p class="mb_4">
						
						
						<li class="ml_16"><span class="bold">Loại tốt nghiệp:</span> <span>Khá</span></li>
						</p>
					</div>
				</div>
			</div>
		</div>



		<div class="box_trinhdo text_grey2 mt_16 ">
			<div class="">
				<div class="box-heading bg_white item pt_16 pb_6 pl_16 pr_16">
					<p class="text_blue bold">Ngoại ngữ</p>
				</div>
				<div class="collapse-box bg_white pl_14 pr_14">
					<div class="bg_white item pos_relative pt_16 pb_16">
						<p class="font16 lh_12 mt_6 bold">
							Tiếng Anh</span> <span class="text_grey3">
						
						</p>
						<p class="mb_4 font14">
							<span class="pr_46 "><span class="fwb">-Nghe:</span> Trung Bình</span>
							<span class="pr_46 "><span class="fwb">-Nói:</span> Trung Bình</span>
							<span class="pr_46 "><span class="fwb">-Đọc:</span> Trung Bình</span>
							<span class="pr_46 "><span class="fwb">-Viết:</span> Trung Bình</span>
						</p>
					</div>
				</div>
			</div>
		</div>


		<div class="box_trinhdo text_grey2 mt_16 ">
			<div class="">
				<div class="box-heading bg_white item pt_16 pb_4 pl_16 pr_16">
					<p class="text_blue bold">Trình độ tin học</p>
				</div>
				<div class="collapse-box bg_white pl_14 pr_14">
					<div class="bg_white item pos_relative pt_16 pb_16">

						<p class="font16 lh_12 mt_6 bold">Tin học văn phòng</p>
						<p class="mb_4 font14">
							<span class="pr_46 "><span class="fwb">-MS Word:</span> Trung
								Bình</span> <span class="pr_46 "><span class="fwb">-MS Excel:</span>
								Trung Bình</span> <span class="pr_46 "><span class="fwb">-MS
									Power Point:</span> Trung Bình</span> <span class="pr_46 hide"><span
								class="fwb">-MS Outlook:</span> </span>
						</p>

					</div>
				</div>
				<div class="collapse-box bg_white pl_14 pr_14 hide">
					<div class="bg_white item pos_relative pt_16 pb_16">
						<p class="font16 lh_12 mt_6 bold">Phần mềm khác</p>
						<p class="mb_4 font14"></p>

					</div>
				</div>
			</div>
		</div>

		<div class="box_trinhdo text_grey2 mt_16  ">
			<div class="">
				<div class="box-heading bg_white item pt_16 pb_4 pl_16 pr_16">
					<p class="text_blue bold">Kinh nghiệm làm việc</p>
				</div>
				<div class="collapse-box bg_white pl_14 pr_14">
					<div class="bg_white item pos_relative pt_16 pb_16">
						<p class="text_blue font14">Từ tháng 10/2011 đến tháng 10/2013</p>
						<p class="font16 lh_12 mt_6 bold">Nhân viên Sales</p>
						<p class="mb_4">
						
						
						<li class="ml_16"><span class="bold">Công ty:</span> <span>Công ty
								Xuất Nhập Khẩu Hà Nội</span></li>
						</p>
						<p class="mb_4">
						
						
						<li class="ml_16"><span class="bold">Thời gian:</span> <span>Từ
								tháng 10/2011 đến tháng 10/2013 </span></li>
						</p>
						<p class="mb_4">
						
						
						<li class="ml_16"><span class="bold">Mô tả công việc:</span></li>
						</p>
						<p class="ml_24">
							- Thực hiện tìm kiếm, thương lượng và bán hàng. Chăm sóc khách
							hàng sau bán hàng<br /> - Xây dựng kế hoạch kinh doanh, chiến
							lược bán hàng nhằm đạt được mục tiêu bán hàng và kế hoạch doanh
							số chung của công ty<br /> - Theo dõi chăm sóc các điểm bán hàng
							hiện có, phát triển điểm bán hàng mới.<br /> - Theo dõi, lập báo
							cáo tình hình tiêu thụ sản phẩm tại thị trường.<br /> - Hoàn
							thành chỉ tiêu doanh số kinh doanh được giao
						</p>
					</div>
				</div>
				<div class="collapse-box bg_white pl_14 pr_14">
					<div class="bg_white item pos_relative pt_16 pb_16">
						<p class="text_blue font14">Từ tháng 11/2013 đến tháng 12/2015</p>
						<p class="font16 lh_12 mt_6 bold">Trade marketing merchandising</p>
						<p class="mb_4">
						
						
						<li class="ml_16"><span class="bold">Công ty:</span> <span>Công ty
								TNHH Nước ngọt Nhật Bản</span></li>
						</p>
						<p class="mb_4">
						
						
						<li class="ml_16"><span class="bold">Thời gian:</span> <span>Từ
								tháng 11/2013 đến tháng 12/2015 </span></li>
						</p>
						<p class="mb_4">
						
						
						<li class="ml_16"><span class="bold">Mô tả công việc:</span></li>
						</p>
						<p class="ml_24">
							- Khảo sát nhu cầu thị trường về sản phẩm nước ngọt <br /> - Thưc
							hiện chỉ tiêu quảng cáo, trưng bày trong khu vực được phân công
							và theo quy định của công ty.<br /> - Đảm bảo độ bao phủ sản phẩm
							hiệu quả trong khu vực phụ trách phù hợp với chiến lược kinh
							doanh và bao phủ thị trường của Công ty.<br /> - Tích cực duy trì
							và phát triển mối quan hệ làm việc chuyên nghiệp với khách hàng
							của Công ty.<br /> - Cập nhập cơ sở dữ liệu với thông tin chi
							tiết và chính xác về hệ thống cửa hàng và hồ sơ khách hàng, các
							báo cáo chuyên môn và thông tin của thị trường.<br /> - Thực hiện
							các công việc khác theo sự phân công của phòng Marketing.<br />
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="box_trinhdo text_grey2 mt_16  hide">
			<div class="">
				<div class="box-heading bg_white item pt_16 pb_4 pl_16 pr_16">
					<p class="text_blue bold">Kỹ năng và sở trường</p>
				</div>

				<div class="collapse-box">
					<div class="bg_white item pos_relative pt_16 pl_14 pr_14 pb_16">
						<p class="font14 mt_12">
						
						
						<li class="ml_16"><span class="bold">Kỹ năng khác:</span> Giải
							quyết vấn đề, Đàm phán thuyết phục, Quản lý bản thân, Làm việc
							nhóm, Học và tự học, Lắng nghe</li>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

@endsection
