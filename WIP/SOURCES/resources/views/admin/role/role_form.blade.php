@extends('global_admin')
<title>@lang('messages.site.title')</title>
@section('content')
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption font-dark">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject bold uppercase"> {{$pageTitle}}</span>
            </div>
            <div class="actions">
                <div class="btn-group">
                    <span class="required_r">(<label>*</label>)Thông tin bắt buộc nhập</span>
                </div>
            </div>
        </div>
        <div class="portlet-body">
            <div class="content_dangky">
                <div class="clearfix"></div>
                <div class="mt8"></div>
                <form id="candidate-form" class="form-horizontal" role="form" method="POST"
                      action="{{ route('admin.role.update') }}" name="user_form"
                      enctype="multipart/form-data">
                    <div class="block-content div-frm-hoso">
                        <div class="mb8">
                            <div class="center-p12p24">
                                <div class="box-child-ths">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="id" value="{{ $role->id }}">
                                    <div class="block-pop-dangky">
                                        <div id="block-thong-tin-dang-nhap" class="mb_30 pt_6">
                                            <div class="body-box-child-ths pb16 mt16">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <!-- Tên quyền -->
                                                        <div class="clearfix"></div>
                                                        <div class="form-group">
                                                            <label for="cv_title" class="col-sm-2 control-label">
                                                                Tên quyền <span class="has-error">*</span>
                                                            </label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control uInput"
                                                                       id="name"
                                                                       name="name" placeholder="Ví dụ: admin"
                                                                       required
                                                                       data-required-msg="Vui lòng nhập tên quyền"
                                                                       value="{{ $role->name }}">
                                                            </div>
                                                        </div>
                                                        <!-- Đăng ký -->
                                                        <div class="form-group">
                                                            <div class="col-sm-2 control-label"></div>
                                                            <div class="register_fr_input_wd583">
                                                                <div style="text-align: left;">
                                                                    <button type="submit"
                                                                            class="btn ink-reaction btn-raised btn-primary btn-lg"
                                                                            id="register-role-btn"
                                                                            style="background-color: #337ab7">Cập nhật
                                                                    </button>
                                                                    <button type="button"
                                                                            onClick="window.location='{{ route('admin.role.list') }}'"
                                                                            class="btn grey-salsa btn-outline btn-lg"
                                                                            id="cancel-role-btn">Hủy
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection