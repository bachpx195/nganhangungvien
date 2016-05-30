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
		<ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
			<li class="nav-item start active open">
				<a href="javascript:;" class="nav-link nav-toggle">
					<i class="icon-home"></i>
					<span class="title">BẢNG QUẢN TRỊ</span>
					<span class="selected"></span>
					<span class="arrow open"></span>
				</a>
			</li>

			<!-- HỒ SƠ ỨNG VIÊN -->
			<li class="nav-item">
				<a href="javascript:;" class="nav-link nav-toggle">
					<i class="icon-folder"></i>
					<span class="title">HỒ SƠ ỨNG VIÊN</span>
					<span class="arrow "></span>
				</a>
				<ul class="sub-menu">
					<li class="nav-item">
						<a href="{{route('admin.candidate.list')}}" class="nav-link nav-toggle">
							<i class="icon-settings"></i> DANH SÁCH
							<span class="arrow"></span>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{route('admin.candidate.form')}}" target="_blank" class="nav-link">
							<i class="icon-globe"></i> THÊM HỒ SƠ
							<span class="arrow nav-toggle"></span>
						</a>
					</li>
				</ul>
			</li>

			<!-- NHÀ TUYỂN DỤNG -->
			<li class="nav-item">
				<a href="javascript:;" class="nav-link nav-toggle">
					<i class="icon-briefcase"></i>
					<span class="title">NHÀ TUYỂN DỤNG</span>
					<span class="arrow "></span>
				</a>
				<ul class="sub-menu">
					<li class="nav-item">
						<a href="javascript:;" class="nav-link nav-toggle">
							<i class="icon-settings"></i> DANH SÁCH
							<span class="arrow"></span>
						</a>
					</li>
					<li class="nav-item">
						<a href="?p=dashboard-2" target="_blank" class="nav-link">
							<i class="icon-globe"></i> THÊM HỒ SƠ
							<span class="arrow nav-toggle"></span>
						</a>
					</li>
				</ul>
			</li>

			<!-- TIN TỨC -->
			<li class="nav-item">
				<a href="javascript:;" class="nav-link nav-toggle">
					<i class="icon-briefcase"></i>
					<span class="title">TIN TỨC</span>
					<span class="arrow "></span>
				</a>
				<ul class="sub-menu">
					<li class="nav-item">
						<a href="javascript:;" class="nav-link nav-toggle">
							<i class="icon-settings"></i> DANH SÁCH
							<span class="arrow"></span>
						</a>
					</li>
					<li class="nav-item">
						<a href="?p=dashboard-2" target="_blank" class="nav-link">
							<i class="icon-globe"></i> THÊM TIN TỨC
							<span class="arrow nav-toggle"></span>
						</a>
					</li>
				</ul>
			</li>

			<!-- VIDEO -->
			<li class="nav-item">
				<a href="javascript:;" class="nav-link nav-toggle">
					<i class="icon-briefcase"></i>
					<span class="title">VIDEO</span>
					<span class="arrow "></span>
				</a>
			</li>

			<li class="nav-item  ">
				<a href="javascript:;" class="nav-link nav-toggle">
					<i class="icon-user"></i>
					<span class="title">NGƯỜI DÙNG</span>
					<span class="arrow"></span>
				</a>
				<ul class="sub-menu">
					<li class="nav-item  ">
						<a href="page_user_profile_1.html" class="nav-link ">
							<i class="icon-user"></i>
							<span class="title">DANH SÁCH</span>
						</a>
					</li>
					<li class="nav-item  ">
						<a href="page_user_profile_1_account.html" class="nav-link ">
							<i class="icon-user-female"></i>
							<span class="title">THÊM NGƯỜI DÙNG</span>
						</a>
					</li>
					<li class="nav-item  ">
						<a href="page_user_profile_1_help.html" class="nav-link ">
							<i class="icon-user-following"></i>
							<span class="title">QUYỀN NGƯỜI DÙNG</span>
						</a>
					</li>
					<li class="nav-item  ">
						<a href="page_user_profile_2.html" class="nav-link ">
							<i class="icon-users"></i>
							<span class="title">PHÂN QUYỀN</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item  ">
				<a href="javascript:;" class="nav-link nav-toggle">
					<i class="icon-settings"></i>
					<span class="title">CẤU HÌNH HỆ THỐNG</span>
					<span class="arrow"></span>
				</a>
			</li>
		</ul>
		<!-- END SIDEBAR MENU -->
	</div>
	<!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->