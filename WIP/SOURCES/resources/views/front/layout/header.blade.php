<div id="block_header">
	<div class="hda-overlayer hidden"></div>
	<div class="header pos_relative w_100 h56 bg_blue">
		<div class="pos_relative w_100 h56 bg_blue box_header">
			<div class="col_head1 pos_relative floatLeft">
				<div class="logo1_head pos_absolute">
					<a href="/"> <img
						src="{{ URL::asset('assets/default/images/logo1_new.png') }}"
						alt="NGÂN HÀNG ỨNG VIÊN" title="NGÂN HÀNG ỨNG VIÊN" />
					</a>
				</div>
			</div>

			{{--<div class="col_head3 pos_relative floatRight">--}}
				{{--<div class="line_head pos_absolute"></div>--}}
				{{--<div class="menu_head2 pos_absolute">--}}
					{{--<div class="icon_home">--}}
						{{--<div class="main-menu pt_8">--}}
							{{--<div class="pl_12">--}}
								{{--<ul class="nopadding nomargin">--}}
									{{--<li class="pos_relative dang_nhap"><a href="javascript:;"--}}
										{{--class="icn-main-user nounder" data-toggle="tooltip"--}}
										{{--data-placement="bottom" title="Tài khoản">&nbsp;</a>--}}
										{{--<div class="dang_nhap popup_down">--}}
											{{--<div class="header-user-info pos_absolute"></div>--}}
											{{--<div class="user-info w232 pos_absolute bg_white box_shadow">--}}
												{{--<div class="pl_16 pr_16 pt_16 pb_14 bg_white user_box">--}}
													{{--<a href="javascript:;"--}}
														{{--class="member_login btn font16 btn-blue btn-block btn-lg mb_16 pb_9">Đăng--}}
														{{--nhập</a>--}}
													{{--<a href="{{route('employer.register')}}"--}}
														{{--class="member_register btn font16 btn-pink btn-block btn-lg pb_9">Đăng--}}
														{{--ký tài khoản</a>--}}
												{{--</div>--}}
											{{--</div>--}}
										{{--</div></li>--}}
								{{--</ul>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
			<div class="menu_cong_header1 floatRight">
				<?php $activeHeaderMenu = isset($activeHeaderMenu) ? $activeHeaderMenu : 'employer'?>
				<a class="bt_head_cong floatLeft {{($activeHeaderMenu == 'employer') ? 'active' : ''}}" href="{{route('employer.register')}}"
					data-toggle="tooltip" data-placement="bottom" title="">
					<div class="icn_cong_head_ntd mt_20"></div>
					<div class="title_cong_menu w_100">NHÀ TUYỂN DỤNG</div>
				</a>
				<a class="bt_head_cong floatLeft {{($activeHeaderMenu == 'candidate') ? 'active' : ''}}"
				   	href="{{route('candidate.form')}}"
					data-toggle="tooltip" data-placement="bottom" title="">
					<div class="icn_cong_head_quanly mt_20"></div>
					<div class="title_cong_menu w_100">ỨNG VIÊN</div>
				</a> <a class="bt_head_cong floatLeft " href="#"
					data-toggle="tooltip" data-placement="bottom" title="">
					<div class="icn_cong_head_chuyenmon mt_20"></div>
					<div class="title_cong_menu w_100">TÀI LIỆU QUẢN TRỊ</div>
				</a>
				<a href="javascript:;"
				   class="floatLeft member_login btn font16 btn-pink btn-lg mt_10 ml_10">Đăng nhập
				</a>
				<a href="{{route('employer.register')}}"
				   class=" floatLeft member_register btn font16 btn-pink btn-lg mt_10 ml_10">Đăng ký tài khoản
				</a>
			</div>


		</div>
	</div>
</div>