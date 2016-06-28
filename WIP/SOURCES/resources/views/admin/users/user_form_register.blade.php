@extends('global_admin')

@section('content')
    <link href="{{ asset('/assets/default/css/main_ntd.css') }}" rel="stylesheet" property='stylesheet'
          type='text/css' media='all'>
    <link href="{{ asset('/assets/default/css/main2.css') }}" rel="stylesheet" property='stylesheet'
          type='text/css' media='all'>

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
            @if (!empty($errors->all()))
                <div class="block-note-ths">
                    @foreach ($errors->all() as $error)
                        <div class="pos-dang-ky-hotline">
                            {{ $error }}
                        </div>
                    @endforeach
                </div>
            @endif
            <div class="content_dangky">
                <div class="clearfix"></div>
                <div class="mt8"></div>
                <form id="candidate-form" class="form-horizontal" role="form" method="POST"
                      onsubmit="return checkFormUser()" action="{{ @$action }}" name="user_form"
                      enctype="multipart/form-data">
                    <div class="block-content div-frm-hoso">
                        <div class="mb8">
                            <div class="center-p12p24">
                                <div class="box-child-ths">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="_userId" value="{{ @$user->id }}">
                                    <div class="block-pop-dangky">
                                        <div id="block-thong-tin-dang-nhap" class="mb_30 pt_6">
                                            <div class="body-box-child-ths pb16 mt16">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <!-- Tên đăng nhập -->
                                                        <div class="clearfix"></div>
                                                        <div class="form-group">
                                                            <label for="cv_title" class="col-sm-2 control-label">
                                                                Tên đăng nhập <span class="has-error">*</span>
                                                            </label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control uInput"
                                                                       id="username"
                                                                       @if(isset($user->id) && $user->id) disabled
                                                                       @endif
                                                                       name="username" placeholder="Ví dụ: annv"
                                                                       required
                                                                       data-required-msg="Vui lòng nhập tên đăng nhập"
                                                                       value="{{@$user['username']}}">
                                                            </div>
                                                        </div>
                                                        <!-- Họ và Tên -->
                                                        <div class="clearfix"></div>
                                                        <div class="form-group">
                                                            <label for="full_name" class="col-sm-2 control-label">
                                                                Họ và tên <span class="has-error">*</span>
                                                            </label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control uInput"
                                                                       id="full_name"
                                                                       name="full_name"
                                                                       placeholder="Ví dụ: Nguyễn Văn An."
                                                                       required
                                                                       data-required-msg="Vui lòng nhập đầy đủ thông tin họ và tên của bạn bằng tiếng Việt có dấu."
                                                                       value="{{ @$user['full_name'] }}">
                                                            </div>
                                                        </div>
                                                        <!-- Email -->
                                                        <div class="clearfix"></div>
                                                        <div class="form-group">
                                                            <label for="email" class="col-sm-2 control-label">
                                                                Email <span class="has-error">*</span>
                                                            </label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control uInput"
                                                                       id="email"
                                                                       @if(isset($user->id) && $user->id) disabled
                                                                       @endif
                                                                       name="email"
                                                                       placeholder="Ví dụ: abc@gmail.com; abc@yahoo.com"
                                                                       required
                                                                       data-required-msg="Vui lòng nhập địa chỉ email"
                                                                       value="{{@$user['email']}}">
                                                            </div>
                                                        </div>
                                                        <!-- Quyền -->
                                                        @if($user->user_type == \App\Libs\Constants::USER_TYPE_ADMIN)
                                                        <div class="clearfix"></div>
                                                        <div class="form-group">
                                                            <label for="role" class="col-sm-2 control-label">
                                                                Quyền <span class="has-error">*</span>
                                                            </label>
                                                            <div class="col-sm-10">
                                                                <select name="role" class="form-control cSelect" id="role">
                                                                    <option value="">Chọn quyền</option>
                                                                    @foreach($roles as $role)
                                                                        @if ($role->id == $user['role_id'])
                                                                            <option value="{{ $role->id }}"
                                                                                    selected="selected">{{ $role->name }}</option>
                                                                        @else
                                                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                                        @endif
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="clearfix error_reg_mess_cus fs14 invalid-msg-role display_none"></div>
                                                        </div>
                                                        @endif
                                                        <!-- Số điện thoại -->
                                                        <div class="clearfix"></div>
                                                        <div class="form-group">
                                                            <label for="phone_number" class="col-sm-2 control-label">Số
                                                                điện thoại</label>
                                                            <div class="fr-input-wd333">
                                                                <input type="text" class="form-control"
                                                                       id="phone"
                                                                       name="phone_number"
                                                                       placeholder="Ví dụ: 0942465168"
                                                                       value="{{ @$user['phone_number'] }}">
                                                            </div>
                                                        </div>
                                                        <!-- Mật khẩu -->
                                                        @if (!(isset($user->id) && $user->id))
                                                            <div class="clearfix"></div>
                                                            <div class="form-group">
                                                                <label for="password" class="col-sm-2 control-label">Mật
                                                                    khẩu <span class="has-error">*</span></label>
                                                                <div class="fr-input-wd333">
                                                                    <input type="password" class="form-control pInput"
                                                                           id="password" name="password">
                                                                </div>
                                                                <div class="clearfix error_reg_mess_cus fs14 invalid-msg display_none"></div>
                                                            </div>
                                                            <!-- Xác nhận mật khẩu -->
                                                            <div class="clearfix"></div>
                                                            <div class="form-group">
                                                                <label for="confirm_password"
                                                                       class="col-sm-2 control-label">Xác nhận mật khẩu
                                                                    <span class="has-error">*</span></label>
                                                                <div class="fr-input-wd333">
                                                                    <input type="password" class="form-control pInput"
                                                                           id="confirm_password"
                                                                           name="confirm_password">
                                                                </div>
                                                                <div class="clearfix error_reg_mess_cus error_reg_mess_conf fs14 invalid-msg display_none"></div>
                                                            </div>
                                                    @endif
                                                    <!-- input logo company -->
                                                        <div class="form-group">
                                                            <label for="logo" class="col-sm-2 control-label">Ảnh đại
                                                                diện </label>
                                                            <div class="register_fr_input_wd583">
                                                                <div class="display_block btn-big pos_relactive w170 floatLeft">
                                                                    <input type="file"
                                                                           class="w182 bt_input pos_absolute" id="logo"
                                                                           name="logo" onchange="fileOnchange(this)">
                                                                    <span class="icon_upload_file"></span>Chọn file đính
                                                                    kèm
                                                                </div>
                                                                <span class="select_file_note floatLeft txt-color-363636 fs12"
                                                                      id="note_select_file_logo">(File đang chọn: )</span>
                                                                <div class="note_size_photo clearfix font12 italic"
                                                                     id="error_logo">(Dạng file ảnh .jpg, .gif, .png,
                                                                    dung lượng &lt;=300KB)
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Đăng ký -->
                                                        <div class="form-group">
                                                            <div class="col-sm-2 control-label"></div>
                                                            <div class="register_fr_input_wd583">
                                                                <div style="text-align: left;">
                                                                    <button type="submit"
                                                                            class="btn ink-reaction btn-raised btn-primary btn-lg"
                                                                            id="register-candidate-btn"
                                                                            style="background-color: #337ab7">@if(!(isset($user->id) && $user->id))
                                                                            Tạo người dùng @else Cập nhật @endif
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @include('admin.users.user_form_register_js')
    </div>
    <!-- END EXAMPLE TABLE PORTLET-->
@endsection