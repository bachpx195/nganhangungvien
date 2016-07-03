@extends('front/global')

@section('content')
    @if (Auth::check() && Auth::user()->user_type == 'employer')
        <div class="" style="padding-left:232px;">
    @else
        <div class="">
    @endif

            @include('front/home/ads')

            @include('front/home/count',['countData' => $countData])

            <div class="row mt_24">
                <div class="box_tab pl_0 pr_0">
                    <div class="clearfix"></div>
                    <div class="content_dangky bg_white mt16 box_shadow">
                        <div class="regis_content_1">
                            <div class="block-pop-dangky pr0" id="regis_content">
                                <div class="mess-success-title text-center txt_color_78b43d uppercase fs18 bold pt14 mb16" >
                                    Chuyển khoản online thành công</div>
                                <p>
                                    Xin chào <strong>{{ $transactionData['full_name'] }}</strong>
                                </p>
                                <p>
                                    Cảm ơn bạn đã thanh toán tại:<a href="http://nganhangungvien.com" target="_blank">http://nganhangungvien.com</a> với địa chỉ e-mail {{$transactionData['email']}}.</p>

                                <p>Bạn đã chuyển khoản thành công: {{$transactionData['amount']}} VNĐ!</p>
                                <p>Số tiền trong tài khoản của bạn hiện tại là {{$transactionData['balance']}} VNĐ!!</p>

                                <br>
                                <div class="pb_26"></div>
                            </div>
                        </div>
                        <div class="block_reg_footer_common regis_footer h_96" id="regis_footer">
                            <div class="footer_login_common fs14 txt-color-363636">
                                <span class="bold fs14">Bạn gặp khó khăn khi tạo hồ sơ? Liên hệ Hotline hỗ trợ Người tìm việc:</span><br />
                                Giờ hành chính:
                                <span class="italic"> </span> <span class="txt-hong bold">(04) 6684 7421</span>,

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Thong tin lien he -->
                @include('front/home/contact_info')
            </div>
        </div>
@endsection
