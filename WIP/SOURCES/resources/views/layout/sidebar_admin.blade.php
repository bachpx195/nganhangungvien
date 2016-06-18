<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
	<!-- END SIDEBAR -->
	<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
	<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
	<div class="page-sidebar navbar-collapse collapse">
		<!-- BEGIN SIDEBAR MENU -->
		<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
		<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
		<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
		<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<?php $activeMenu = isset($activeMenu) ? $activeMenu : 'dashboard';?>
		<ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">

			<!-- NHÀ TUYỂN DỤNG -->
			<li class="nav-item {{($activeMenu == 'employer') ? 'active open' : ''}}">
				<a href="{{route('admin.employer.list')}}" class="nav-link nav-toggle">
					<i class="icon-briefcase"></i>
					<span class="title">QUẢN TRỊ<br/>NHÀ TUYỂN DỤNG</span>
					<span class="arrow "></span>
				</a>
				{{--<ul class="sub-menu">--}}
					{{--<li class="nav-item">--}}
						{{--<a href="{{route('admin.employer.list')}}" class="nav-link nav-toggle">--}}
							{{--<i class="icon-list"></i> DANH SÁCH NHÀ TUYỂN DỤNG--}}
							{{--<span class="arrow"></span>--}}
						{{--</a>--}}
					{{--</li>--}}
					{{--<li class="nav-item">--}}
						{{--<a href="?p=dashboard-2" target="_blank" class="nav-link">--}}
							{{--<i class="icon-plus"></i> THÊM HỒ SƠ NHÀ TUYỂN DỤNG--}}
							{{--<span class="arrow nav-toggle"></span>--}}
						{{--</a>--}}
					{{--</li>--}}
				{{--</ul>--}}
			</li>

			<!-- HỒ SƠ ỨNG VIÊN -->
			<li class="nav-item {{($activeMenu == 'candidate') ? 'active open' : ''}}">
				<a href="{{route('admin.candidate.list')}}" class="nav-link nav-toggle">
					<i class="icon-folder"></i>
					<span class="title">QUẢN TRỊ<br/>HỒ SƠ ỨNG VIÊN</span>
					<span class="arrow "></span>
				</a>
				<ul class="sub-menu">
					<li class="nav-item">
						<a href="{{route('admin.candidate.list')}}" class="nav-link nav-toggle">
							<i class="icon-list"></i> DANH SÁCH ỨNG VIÊN
							<span class="arrow"></span>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{route('admin.candidate.form')}}" target="_blank" class="nav-link">
							<i class="icon-plus"></i> THÊM HỒ SƠ ỨNG VIÊN
							<span class="arrow nav-toggle"></span>
						</a>
					</li>
				</ul>
			</li>

			<!-- TÀI KHOẢN GIAO DỊCH -->
			<li class="nav-item {{($activeMenu == 'news') ? 'active open' : ''}}">
				<a href="javascript:;" class="nav-link nav-toggle">
					<i class="icon-note"></i>
					<span class="title">QUẢN LÝ GIAO DỊCH</span>
					<span class="arrow "></span>
				</a>
			</li>

			<!-- TIN TỨC -->

			<li class="nav-item {{($activeMenu == 'news') ? 'active open' : ''}}">
				<a href="{{ route('admin.news.list') }}" class="nav-link nav-toggle">
					<i class="icon-note"></i>
					<span class="title">QUẢN TRỊ<br/>TIN TỨC</span>
					<span class="arrow "></span>
				</a>
				<ul class="sub-menu">
					<li class="nav-item">
						<a href="{{ route('admin.news.list') }}" class="nav-link nav-toggle">
							<i class="icon-list"></i> DANH SÁCH TIN TỨC
							<span class="arrow"></span>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('admin.news.form') }}" target="_blank" class="nav-link">
							<i class="icon-plus"></i> THÊM TIN TỨC
							<span class="arrow nav-toggle"></span>
						</a>
					</li>
				</ul>
			</li>

            <li class="nav-item {{($activeMenu == 'datasystem') ? 'active open' : ''}} ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-social-dribbble"></i>
                    <span class="title">DỮ LIỆU HỆ THỐNG</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{ route('admin.province.list') }}" class="nav-link nav-toggle">
                            <i class="icon-tag"></i>
                            <span class="title">TỈNH/THÀNH PHỐ</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('admin.level.list') }}" class="nav-link nav-toggle">
                            <i class="icon-tag"></i>
                            <span class="title">TRÌNH ĐỘ HỌC VẤN</span>
                            <span class="arrow"></span>
                        </a>
                        
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('admin.rank.list') }}" class="nav-link nav-toggle">
                            <i class="icon-tag"></i>
                            <span class="title">CẤP BẬC</span>
                            <span class="arrow"></span>
                        </a>
                        
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('admin.salary.list') }}" class="nav-link nav-toggle">
                            <i class="icon-tag"></i>
                            <span class="title">LƯƠNG</span>
                            <span class="arrow"></span>
                        </a>
                        
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('admin.job.list') }}" class="nav-link nav-toggle">
                            <i class="icon-tag"></i>
                            <span class="title">NGHỀ NGHIỆP</span>
                            <span class="arrow"></span>
                        </a>
                        
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('admin.exigency.list') }}" class="nav-link nav-toggle">
                            <i class="icon-tag"></i>
                            <span class="title">NHU CẦU CÔNG VIỆC</span>
                            <span class="arrow"></span>
                        </a>
                        
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('admin.companysize.list') }}" class="nav-link nav-toggle">
                            <i class="icon-tag"></i>
                            <span class="title">QUY MÔ CÔNG TY</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('admin.experienceyears.list') }}" class="nav-link nav-toggle">
                            <i class="icon-tag"></i>
                            <span class="title">KINH NGHIỆM</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('admin.employmentstatus.list') }}" class="nav-link nav-toggle">
                            <i class="icon-tag"></i>
                            <span class="title">HÌNH THỨC LÀM VIỆC</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('admin.foreignlanguage.list') }}" class="nav-link nav-toggle">
                            <i class="icon-tag"></i>
                            <span class="title">NGOẠI NGỮ</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                </ul>                                                                              
            </li>          
			<!-- VIDEO -->
			<li class="nav-item {{($activeMenu == 'video') ? 'active open' : ''}}" >
				<a href="{{ route('admin.video') }}" class="nav-link nav-toggle">
					<i class="icon-briefcase"></i>
					<span class="title">VIDEO</span>
					<span class="arrow "></span>
				</a>
			</li>

			<li class="nav-item {{($activeMenu == 'user') ? 'active open' : ''}}">
				<a href="javascript:;" class="nav-link nav-toggle">
					<i class="icon-user"></i>
					<span class="title">NGƯỜI DÙNG</span>
					<span class="arrow"></span>
				</a>
				<ul class="sub-menu">
					<li class="nav-item  ">
						<a href="#" class="nav-link ">
							<i class="icon-user"></i>
							<span class="title">DANH SÁCH</span>
						</a>
					</li>
					<li class="nav-item  ">
						<a href="#" class="nav-link ">
							<i class="icon-user-female"></i>
							<span class="title">THÊM NGƯỜI DÙNG</span>
						</a>
					</li>
					<li class="nav-item  ">
						<a href="#" class="nav-link ">
							<i class="icon-user-following"></i>
							<span class="title">QUYỀN NGƯỜI DÙNG</span>
						</a>
					</li>
					<li class="nav-item  ">
						<a href="#" class="nav-link ">
							<i class="icon-users"></i>
							<span class="title">PHÂN QUYỀN</span>
						</a>
					</li>
				</ul>
			</li>
			{{--<li class="nav-item {{($activeMenu == 'config') ? 'active open' : ''}}">--}}
				{{--<a href="{{route('admin.candidate.list')}}" class="nav-link nav-toggle">--}}
					{{--<i class="icon-settings"></i>--}}
					{{--<span class="title">CẤU HÌNH HỆ THỐNG</span>--}}
					{{--<span class="arrow "></span>--}}
				{{--</a>--}}
				{{--<ul class="sub-menu">--}}
					{{--<li class="nav-item">--}}
						{{--<a href="{{route('admin.config.list')}}" class="nav-link nav-toggle">--}}
							{{--<i class="icon-list"></i> DANH SÁCH CẤU HÌNH--}}
							{{--<span class="arrow"></span>--}}
						{{--</a>--}}
					{{--</li>--}}
					{{--<li class="nav-item">--}}
						{{--<a href="{{route('admin.config.form')}}" target="_blank" class="nav-link">--}}
							{{--<i class="icon-plus"></i> THÊM HỒ CẤU HÌNH--}}
							{{--<span class="arrow nav-toggle"></span>--}}
						{{--</a>--}}
					{{--</li>--}}
				{{--</ul>--}}

			{{--</li>--}}
		</ul>
		<!-- END SIDEBAR MENU -->
	</div>
	<!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->