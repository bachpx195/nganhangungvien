@extends('front/global')

@section('content')
<div class="">
	<div class="top-ads clearfix mb10">
		<div class="row w_100">
			<script type="text/javascript" src="http://admicro1.vcmedia.vn/ads_codes/ads_box_221.ads"></script>
			<script type="text/javascript" src="//admicro1.vcmedia.vn/core/admicro_core_nld.js?id=1"></script>
			<div style="height:0px; width:0px; overflow:hidden;">
				<object style="visibility:hidden;" type="application/x-shockwave-flash" height="0" width="0"
						classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="_admFlck" bgcolor="#ffffff">
					<param value="//adi.vcmedia.vn/adt/flck.swf?id=1" name="movie">
					<param value="true" name="allowFullScreen">
					<param value="opaque" name="wmode">
					<param value="always" name="allowscriptaccess">
					<embed width="0" height="0" allowfullscreen="true" allowscriptaccess="always" quality="high"
						   name="_admFlck" id="_admFlck" src="//adi.vcmedia.vn/adt/flck.swf?id=1"
						   type="application/x-shockwave-flash" wmode="opaque">
				</object>
				<object type="application/x-shockwave-flash" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
						width="1px" height="1px" id="shareObject" name="shareObject">
					<param value="//adi.vcmedia.vn/adt/cpc/tvcads/2012/demoTVC/Temperature/share_object.swf"
						   name="movie">
					<param value="high" name="quality">
					<param value="transparent" name="wmode">
					<param value="11.0.0.0" name="swfversion">
					<param value="false" name="allowFullScreen">
					<param value="always" name="allowScriptAccess">
					<embed src="//adi.vcmedia.vn/adt/cpc/tvcads/2012/demoTVC/Temperature/share_object.swf"
						   pluginspage="http://www.macromedia.com/go/getflashplayer"
						   type="application/x-shockwave-flash" allowscriptaccess="always" wmode="transparent"
						   quality="high" name="shareObject" width="1px" height="1px" id="shareObject">
				</object>
			</div>
		</div>
	</div>
	
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
	<div class="box_tab pt_22">
		<div role="tabpanel">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs w_100" role="tablist">
				<li role="presentation" class="active ml1"><span class="left_tab"></span><a href="#viecmoi" aria-controls="viecmoi" role="tab" data-toggle="tab" class="bold font16 uppercase m0">Hồ sơ tìm việc mới nhất</a><span class="right_tab"></span></li>
				<li role="presentation" class="ml_20"><span class="left_tab"></span><a href="#viecmoi2" aria-controls="viecmoi2" role="tab" data-toggle="tab" class="bold font16 uppercase m0">Hồ sơ tìm việc nhiều người xem nhất</a><span class="right_tab"></span></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content w_100">
				<div role="tabpanel" class="tab-pane active bg_grey" id="viecmoi">
					<div class="list_item_two bg_white">
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/sinh-vien-lam-them/nhan-vien-phuc-vu-c46p0id3399541.html" class="link_box_panel1 text_grey2 ">
					Nhân viên phục vụ                     </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/sinh-vien-lam-them/nhan-vien-phuc-vu-c46p0id3399541.html" class="link_box_panel2 text_grey">
					Liêu Anh Khoa                         <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Chưa có kinh nghiệm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-c30p0id3390966.html" class="link_box_panel1 text_grey2 ">
					Nhân viên kế toán                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-c30p0id3390966.html" class="link_box_panel2 text_grey">
					Trịnh Thị Bích Hạnh                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											5 - 7 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											2 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/dien-dien-tu/nhan-vien-ky-thuat-dien-c8p0id3378168.html" class="link_box_panel1 text_grey2 ">
					Nhân viên kỹ thuật điện                     </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/dien-dien-tu/nhan-vien-ky-thuat-dien-c8p0id3378168.html" class="link_box_panel2 text_grey">
					Nguyễn Hữu Chiến                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											5 - 7 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											1 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-hanh-chinh-van-phong-c38p0id3387934.html" class="link_box_panel1 text_grey2 ">
					Nhân viên hành chính văn phòng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-hanh-chinh-van-phong-c38p0id3387934.html" class="link_box_panel2 text_grey">
					Ngô Tấn Bình                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											7 – 10 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											2 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM,  Bình Dương,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/vat-tu-thiet-bi/nhan-vien-thu-kho-c40p0id2901419.html" class="link_box_panel1 text_grey2 ">
					Nhân viên thủ kho                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/vat-tu-thiet-bi/nhan-vien-thu-kho-c40p0id2901419.html" class="link_box_panel2 text_grey">
					Dương Tiến Dũng                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											5 - 7 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											2 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nam,  Hà Nội,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/co-khi-che-tao/quan-ly-san-xuat-c4p0id3399409.html" class="link_box_panel1 text_grey2 ">
					Quản lý sản xuất                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/co-khi-che-tao/quan-ly-san-xuat-c4p0id3399409.html" class="link_box_panel2 text_grey">
					Nguyễn Văn Thắng                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hải Dương                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/det-may-da-giay/merchandiser-c50p0id3321414.html" class="link_box_panel1 text_grey2 ">
					Merchandiser                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/det-may-da-giay/merchandiser-c50p0id3321414.html" class="link_box_panel2 text_grey">
					Đào Thị Thúy                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											10 – 15 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											4 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM,  Bình Dương,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/co-khi-che-tao/ki-su-co-khi-c4p0id3399435.html" class="link_box_panel1 text_grey2 ">
					<span class="icon_dinh_kem"></span>Kĩ sư cơ khí                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/co-khi-che-tao/ki-su-co-khi-c4p0id3399435.html" class="link_box_panel2 text_grey">
					Trần Bá Vương                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											5 - 7 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Dưới 1 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Nam Định,  Thái Nguyên,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/giao-duc-dao-tao/tro-giang-tieng-anh-c10p0id3396533.html" class="link_box_panel1 text_grey2 ">
					Trợ giảng tiếng anh                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/giao-duc-dao-tao/tro-giang-tieng-anh-c10p0id3396533.html" class="link_box_panel2 text_grey">
					Ngô Thị Ánh Hồng                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											3 - 5 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Chưa có kinh nghiệm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-van-phong-hanh-chinh-nhan-su-c38p0id3399466.html" class="link_box_panel1 text_grey2 ">
					<span class="icon_dinh_kem"></span>Nhân viên văn phòng-hành chính-nhân sự                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-van-phong-hanh-chinh-nhan-su-c38p0id3399466.html" class="link_box_panel2 text_grey">
					Vũ Thị Thùy Trang                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											5 - 7 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											2 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Bắc Ninh,  Hưng Yên,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/in-an-xuat-ban/nhan-vien-ky-thuat-pha-mau-c12p0id2901592.html" class="link_box_panel1 text_grey2 ">
					Nhân viên kỹ thuật pha màu                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/in-an-xuat-ban/nhan-vien-ky-thuat-pha-mau-c12p0id2901592.html" class="link_box_panel2 text_grey">
					Vương Nhất Toàn                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Bình Dương                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-c30p0id3399510.html" class="link_box_panel1 text_grey2 ">
					<span class="icon_dinh_kem"></span>Nhân viên kế toán                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-c30p0id3399510.html" class="link_box_panel2 text_grey">
					Nguyễn Thị Thanh Tuyền                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											3 - 5 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											3 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nội,  Bắc Giang,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-tong-hop-c30p0id3393834.html" class="link_box_panel1 text_grey2 ">
					<span class="icon_dinh_kem"></span>Nhân viên kế toán tổng hợp                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-tong-hop-c30p0id3393834.html" class="link_box_panel2 text_grey">
					Võ Yến Nhi                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											7 – 10 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											2 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/ky-su-xay-dung-cong-trinh-giao-thong-c41p0id3399506.html" class="link_box_panel1 text_grey2 ">
					<span class="icon_dinh_kem"></span>Kỹ sư xây dựng công trình giao thông                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/ky-su-xay-dung-cong-trinh-giao-thong-c41p0id3399506.html" class="link_box_panel2 text_grey">
					Trần Văn Đạt                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											5 - 7 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Dưới 1 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nội                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-c30p0id3391145.html" class="link_box_panel1 text_grey2 ">
					<span class="icon_dinh_kem"></span>Nhân viên kế toán                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-ke-toan-c30p0id3391145.html" class="link_box_panel2 text_grey">
					Nguyễn Thị Hồng Hạnh                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Chưa có kinh nghiệm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nội                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/quan-tri-kinh-doanh/tro-ly-giam-doc-c14p0id3372442.html" class="link_box_panel1 text_grey2 ">
					Trợ lý giám đốc                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/quan-tri-kinh-doanh/tro-ly-giam-doc-c14p0id3372442.html" class="link_box_panel2 text_grey">
					Lưu Tiến Tuấn                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											3 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nội                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/dich-vu/nhan-vien-cham-soc-khach-hang-c7p0id3390638.html" class="link_box_panel1 text_grey2 ">
					Nhân viên chăm sóc khách hàng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/dich-vu/nhan-vien-cham-soc-khach-hang-c7p0id3390638.html" class="link_box_panel2 text_grey">
					Huỳnh Thanh Hiếu                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM,  Long An,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/ky-su-xay-dung-c41p0id3238939.html" class="link_box_panel1 text_grey2 ">
					Kỹ sư  xây dựng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/ky-su-xay-dung-c41p0id3238939.html" class="link_box_panel2 text_grey">
					Hồ Văn Ba                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Dưới 1 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM,  Đà Nẵng,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hoa-hoc-sinh-hoc/nhan-vien-kiem-nghiem-qa-qc-c87p0id3398907.html" class="link_box_panel1 text_grey2 ">
					Nhân viên kiểm nghiệm, QA/QC                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hoa-hoc-sinh-hoc/nhan-vien-kiem-nghiem-qa-qc-c87p0id3398907.html" class="link_box_panel2 text_grey">
					Trần Nguyễn Quỳnh Như                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											5 - 7 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Dưới 1 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class=""></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-hanh-chinh-van-phong-c38p0id3394423.html" class="link_box_panel1 text_grey2 ">
					Nhân viên hành chính văn phòng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-hanh-chinh-van-phong-c38p0id3394423.html" class="link_box_panel2 text_grey">
					Phạm Thị Nguyên Ngọc                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											3 - 5 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Dưới 1 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nội                        </div>
									</div>
								</div>
								<div class=""></div>
							</div>
						</div>

						<div class="clear"></div>
					</div>
					<a href="https://vieclam24h.vn/ho-so-ung-vien-moi-nhat.html">
						<h3 class="btn btn-lg w_100 btn-nobg btn_more_list">
							<i class="icon_load_more icon_24 icon-24"></i>
							Xem thêm Hồ sơ mới nhất        </h3>
					</a>
				</div>
				<div role="tabpanel" class="tab-pane bg_grey" id="viecmoi2">
					<div class="list_item_two bg_white">
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/nhan-vien-kinh-doanh-nhan-vien-ban-hang-c41p0id830748.html" class="link_box_panel1 text_grey2 ">
					Nhân viên kinh doanh,  nhân viên bán hàng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/nhan-vien-kinh-doanh-nhan-vien-ban-hang-c41p0id830748.html" class="link_box_panel2 text_grey">
					Ngô Việt Dũng                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											3 - 5 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											3 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nội                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-hoach-toan-thue-ban-thoi-gian-c30p0id1968284.html" class="link_box_panel1 text_grey2 ">
					Nhân viên hoạch toán thuế bán thời gian                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/nhan-vien-hoach-toan-thue-ban-thoi-gian-c30p0id1968284.html" class="link_box_panel2 text_grey">
					Nguyễn Thị Trầm                        <span class="text_pink display_inline">(Cập nhật: 09/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/ke-toan-truong-c30p0id2446313.html" class="link_box_panel1 text_grey2 ">
					Kế toán trưởng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/ke-toan-truong-c30p0id2446313.html" class="link_box_panel2 text_grey">
					Nguyễn Hồng Hải                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM,  Long An,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/vat-tu-thiet-bi/nhan-vien-kinh-doanh-nhan-vien-ban-hang-c40p0id2945463.html" class="link_box_panel1 text_grey2 ">
					Nhân viên kinh doanh, Nhân viên bán hàng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/vat-tu-thiet-bi/nhan-vien-kinh-doanh-nhan-vien-ban-hang-c40p0id2945463.html" class="link_box_panel2 text_grey">
					Ngô Việt Dũng                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											3 - 5 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nội                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/bien-phien-dich/phien-dich-tieng-han-quoc-c79p0id2342944.html" class="link_box_panel1 text_grey2 ">
					Phiên dịch tiếng Hàn Quốc                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/bien-phien-dich/phien-dich-tieng-han-quoc-c79p0id2342944.html" class="link_box_panel2 text_grey">
					Bùi Việt Hùng                         <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Toàn quốc                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/dien-dien-tu/ky-su-dien-tu-dong-hoa-c8p0id1311015.html" class="link_box_panel1 text_grey2 ">
					Kỹ sư điện -  tự động hóa                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/dien-dien-tu/ky-su-dien-tu-dong-hoa-c8p0id1311015.html" class="link_box_panel2 text_grey">
					Dương Hải Toàn                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Bắc Ninh,  Thái Nguyên,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/co-khi-che-tao/quan-doc-xuong-co-khi-giam-doc-san-xuat-c4p0id3134558.html" class="link_box_panel1 text_grey2 ">
					Quản đốc xưởng cơ khí, Giám đốc sản xuất                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/co-khi-che-tao/quan-doc-xuong-co-khi-giam-doc-san-xuat-c4p0id3134558.html" class="link_box_panel2 text_grey">
					Trần Công Sang                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											15 – 20 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/nong-lam-ngu-nghiep/nhan-vien-kinh-doanh-nong-san-xuat-khau-c17p0id2007407.html" class="link_box_panel1 text_grey2 ">
					Nhân viên kinh doanh nông sản xuất khẩu                     </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/nong-lam-ngu-nghiep/nhan-vien-kinh-doanh-nong-san-xuat-khau-c17p0id2007407.html" class="link_box_panel2 text_grey">
					Ngô Trung Khải                        <span class="text_pink display_inline">(Cập nhật: 10/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											4 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM,  Bình Dương,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/ke-toan-tong-hop-ke-toan-truong-c30p0id714044.html" class="link_box_panel1 text_grey2 ">
					Kế toán tổng hợp, kế toán trưởng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/ke-toan-tong-hop-ke-toan-truong-c30p0id714044.html" class="link_box_panel2 text_grey">
					Vũ Văn Quý                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nội                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/ke-toan-truong-nhan-vien-ke-toan-tong-hop-c30p0id2346856.html" class="link_box_panel1 text_grey2 ">
					Kế toán trưởng, nhân viên kế toán tổng hợp                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/ke-toan-kiem-toan/ke-toan-truong-nhan-vien-ke-toan-tong-hop-c30p0id2346856.html" class="link_box_panel2 text_grey">
					Nguyễn Thị Thanh Thảo                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-van-phong-c38p0id1826311.html" class="link_box_panel1 text_grey2 ">
					Nhân viên văn phòng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-van-phong-c38p0id1826311.html" class="link_box_panel2 text_grey">
					Nguyễn Thị Thùy Linh                        <span class="text_pink display_inline">(Cập nhật: 09/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											5 - 7 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											3 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/dien-dien-tu/nhan-vien-ky-thuat-ky-su-dien-tu-vien-thong-c8p0id1467830.html" class="link_box_panel1 text_grey2 ">
					Nhân viên kỹ thuật, kỹ sư điện tử viễn thông.                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/dien-dien-tu/nhan-vien-ky-thuat-ky-su-dien-tu-vien-thong-c8p0id1467830.html" class="link_box_panel2 text_grey">
					Vũ Hùng Cường                        <span class="text_pink display_inline">(Cập nhật: 10/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/quan-tri-kinh-doanh/truong-nhom-kinh-doanh-nhan-vien-kinh-doanh-c14p0id2776694.html" class="link_box_panel1 text_grey2 ">
					Trưởng nhóm kinh doanh, Nhân viên kinh doanh                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/quan-tri-kinh-doanh/truong-nhom-kinh-doanh-nhan-vien-kinh-doanh-c14p0id2776694.html" class="link_box_panel2 text_grey">
					Lê Đoàn Trung Sơn                        <span class="text_pink display_inline">(Cập nhật: 09/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/nhan-vien-lai-may-xuc-lat-xuc-dao-xe-nang-c41p0id2636278.html" class="link_box_panel1 text_grey2 ">
					Nhân viên lái máy xúc lật, xúc đào, xe nâng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/nhan-vien-lai-may-xuc-lat-xuc-dao-xe-nang-c41p0id2636278.html" class="link_box_panel2 text_grey">
					Bạch Đình Dần                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											7 – 10 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nội,  Hưng Yên,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/quan-tri-kinh-doanh/nhan-vien-kinh-doanh-nhan-vien-ban-hang-c14p0id2702894.html" class="link_box_panel1 text_grey2 ">
					Nhân viên kinh doanh, nhân viên bán hàng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/quan-tri-kinh-doanh/nhan-vien-kinh-doanh-nhan-vien-ban-hang-c14p0id2702894.html" class="link_box_panel2 text_grey">
					Nguyễn Sơn Trà                        <span class="text_pink display_inline">(Cập nhật: 10/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											7 – 10 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											2 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nội,  Hưng Yên,...                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-hanh-chinh-van-phong-thu-ky-tro-ly-thu-mua-biet-tieng-trung-c38p0id1460870.html" class="link_box_panel1 text_grey2 ">
					<span class="icon_dinh_kem"></span>Nhân viên hành chính văn phòng, thư ký, trợ lý, thu mua biết tiếng trung                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-hanh-chinh-van-phong-thu-ky-tro-ly-thu-mua-biet-tieng-trung-c38p0id1460870.html" class="link_box_panel2 text_grey">
					Hoàng Thị Dung                         <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/giam-sat-xay-dung-c41p0id1291778.html" class="link_box_panel1 text_grey2 ">
					<span class="icon_dinh_kem"></span>Giám sát xây dựng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/giam-sat-xay-dung-c41p0id1291778.html" class="link_box_panel2 text_grey">
					Chu Quang Hoà                        <span class="text_pink display_inline">(Cập nhật: 10/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											10 – 15 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nội                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/nhan-vien-kinh-doanh/nhan-vien-kinh-doanh-nhan-vien-ban-hang-c96p0id2639870.html" class="link_box_panel1 text_grey2 ">
					Nhân viên kinh doanh, nhân viên bán hàng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/nhan-vien-kinh-doanh/nhan-vien-kinh-doanh-nhan-vien-ban-hang-c96p0id2639870.html" class="link_box_panel2 text_grey">
					Nguyễn Khắc Hiếu                        <span class="text_pink display_inline">(Cập nhật: 09/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											Hà Nội                        </div>
									</div>
								</div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="col_list_left floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/giam-doc-ban-quan-ly-du-an-dau-tu-xay-dung-c41p0id3133388.html" class="link_box_panel1 text_grey2 ">
					Giám đốc ban quản lý dự án đầu tư xây dựng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/xay-dung/giam-doc-ban-quan-ly-du-an-dau-tu-xay-dung-c41p0id3133388.html" class="link_box_panel2 text_grey">
					Phan Tuấn Tú                        <span class="text_pink display_inline">(Cập nhật: 09/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											20 – 30 triệu                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											Hơn 5 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM,  Hà Nội,...                        </div>
									</div>
								</div>
								<div class=""></div>
							</div>
						</div>
						<div class="col_list_right floatLeft floatLeft">
							<div class="list-items item_link">
			<span class="title-blockjob-main truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-hanh-chinh-van-phong-c38p0id1950969.html" class="link_box_panel1 text_grey2 ">
					Nhân viên hành chính văn phòng                    </a>
			</span>
			<span class="title-blockjob-sub truncate-ellipsis font14">
				<a href="https://vieclam24h.vn/nha-tuyen-dung/hanh-chinh-van-phong/nhan-vien-hanh-chinh-van-phong-c38p0id1950969.html" class="link_box_panel2 text_grey">
					Nguyễn Minh Tồn                        <span class="text_pink display_inline">(Cập nhật: 11/05/2016)</span>
				</a>
			</span>
								<div class="s22_list_note_icon">
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
											<i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
											Thỏa thuận                        </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
											<i class="icon_select_box icon_time_list icon_24 icon-24"></i>
											2 năm                            </div>
									</div>
									<div class="w_33 floatLeft">
										<div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
											<i class="icon_select_box icon_local_list icon_24 icon-24"></i>
											TP. HCM,  Long An,...                        </div>
									</div>
								</div>
								<div class=""></div>
							</div>
						</div>

						<div class="clear"></div>
					</div>
					<a href="https://vieclam24h.vn/danh-sach-ung-vien-nhieu-nguoi-xem.html">
						<h3 class="btn btn-lg w_100 btn-nobg btn_more_list">
							<i class="icon_load_more icon_24 icon-24"></i>
							Xem thêm Hồ sơ được xem nhiều nhất        </h3>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- END ho so moi nhat -->

	<!-- Thong tin lien he -->
	@include('front/home/contact_info')
	<!-- END Thong tin lien he -->
</div>

@endsection