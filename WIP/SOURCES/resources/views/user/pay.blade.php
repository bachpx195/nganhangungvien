@extends('front/global')

<title>Nạp tiền qua thẻ</title>

@section('content')

    <form class="form-horizontal" role="form" method="POST" action="{{ route('user.pay') }}" enctype="multipart/form-data">
        <div class="block-content div-frm-hoso" id="frm-login-info">
            <div class="mb8">
                <div class="center-p12p24 ">

                    <div class="box-child-ths">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_init" value="1">
                        <div class="block-pop-dangky">
                            <div id="block-thong-tin-dang-nhap" class="mb_30 pt_6">
                                <div class="head-box-child-ths">
                                    <span class="uppercase bold text-tim-nhat">NẠP TIỀN QUA THẺ</span>
                                    <span class="required_l"></span>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="ln_hr_head"></div>
                                </div>

                                <div class="clearfix"></div>
                                <!-- input email -->
                                <div class="body-box-child-ths pb16 mt16">
                                    <div class="form-group clearfix mb_16">
                                        <label for="balance" class="control-label-info bold txt-color-363636 fs14 w180">
                                            Tiền trong tài khoản <span class="colorRed">*</span>
                                        </label>
                                        <div class="register_fr_input_wd583">
                                            <input type="text" class="form-control input-lg2 color-input" id="cv_title"
                                                   name="balance" value="0" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group clearfix mb_16">
                                        <label for="cv_title" class="control-label-info bold txt-color-363636 fs14 w180">
                                            Chọn nhà mạng <span class="colorRed">*</span>
                                        </label>
                                        <div class="register_fr_input_wd583">
                                            <div class="row">
                                                <label class="card-deposit col-xs-4">
                                                    <input type="radio" name="card_id" value="MOBI" checked="checked">
                                                    <img class="img-thumbnail"  src="{{ URL::asset('assets/image/mobifone.png') }}" alt="" />
                                                </label>
                                                <label class="card-deposit col-xs-4">
                                                    <input type="radio" name="card_id" value="VIETTEL">
                                                    <img class="img-thumbnail"  src="{{ URL::asset('assets/image/viettel.png') }}" alt="" />
                                                </label>
                                                <label class="card-deposit col-xs-4">
                                                    <input type="radio" name="card_id" value="VINA">
                                                    <img class="img-thumbnail"  src="{{ URL::asset('assets/image/vinaphone.png') }}" alt="" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group clearfix mb_16">
                                        <label for="seri_field" class="control-label-info bold txt-color-363636 fs14 w180">
                                            Seri <span class="colorRed">*</span>
                                        </label>
                                        <div class="register_fr_input_wd583">
                                            <input type="text" class="form-control input-lg2 color-input"
                                                   name="seri_field" placeholder="Seri thẻ nạp"
                                                   value="">
                                        </div>
                                    </div>

                                    <div class="form-group clearfix mb_16">
                                        <label for="pin_field" class="control-label-info bold txt-color-363636 fs14 w180">
                                            Mã thẻ <span class="colorRed">*</span>
                                        </label>
                                        <div class="register_fr_input_wd583">
                                            <input type="text" class="form-control input-lg2 color-input"
                                                   name="pin_field" placeholder="Mã thẻ nạp"
                                                   value="">
                                        </div>
                                    </div>

                                    <div class="form-group clearfix mb_16">
                                        <label class="control-label-info bold txt-color-363636 fs14 w180">

                                        </label>
                                        <div class="register_fr_input_wd583">
                                            <button type="submit"class="ml_15 mr_10 btn btnluu w153 fwb uppercase fs16">Nạp thẻ ngay</button>
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
@endsection