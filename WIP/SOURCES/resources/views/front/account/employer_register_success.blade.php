@extends('front/global')

@section('content')

    <div class="box_tab bg_white box_shadow pt_16 pl_14 pr_14 pb_16">
        <div class="w_100">
            <div class="box_info">
                <div class="list-items mb_4">
                <span class="text_pink font16">ĐĂNG KÝ TÀI KHOẢN NHÀ TUYỂN DỤNG THÀNH CÔNG</span>
                </div>
                <div class="list-items mb_4">
                    Thông tin tài khoản sẽ được gửi qua hòm thư đăng ký: <b>{{$user->email}}</b>
                    <br>
                    Xin vui lòng kiểm tra email để kích hoạt tài khoản nhà tuyển dụng
                </div>
            </div>
        </div>
    </div>
    <div class="form-group clearfix mb_16"></div>

@endsection