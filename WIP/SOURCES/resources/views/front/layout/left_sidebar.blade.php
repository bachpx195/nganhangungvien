<div id="left-sidebar">
    <div class="show-title floatLeft w232 box_shadow_righ box_left bg_white bg_white" id="sidebar_left">
        <div id="cols-left" tabindex="0" style="width: 232px; outline: none; overflow: hidden;">
            <div id="left_sidebar" class="tab-content tab-bg-ct ">
                <div role="tabpanel" class="tab-pane active" id="tab_taikhoan_content">
                    <div class="block_1 bgWhite">
                        <div class="ml_10">
                            <div class="statistic font16 txc">
                                <span>{{ Auth::user()->employerCompanyName() }}</span>
                                <br/><i>Chủ tài khoản <br> {{Auth::user()->full_name}}</i>
                                @if(!UserHelper::isVip($currentEmployer))
                                    <p><span class="bg_tk_thuong font12 account_thuong">Tài khoản thường</span></p>
                                @else
                                    <p><img class="vip-avatar" src="{{ URL::asset('assets/image/vip-member.jpg') }}">
                                        <span class="bg_tk_vip account_vip">TÀI KHOẢN VIP</span></p>
                                @endif
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="mb8"><div class="line-break02 w232"></div></div>
                        @if(!UserHelper::isVip($currentEmployer))
                        <div class="block-content  ml12 mr14">
                            <a href="{{ route('pages.regist_vip') }}"class="btn btn-pink btn-lg btn-creat-hs font16" {{--onclick="popupPayment_open('online')"--}} target="_blank">
                                <i class="icon_24 icn_creat_hs"></i> ĐĂNG KÝ TK VIP
                            </a>
                        </div>
                        @endif
                        <div class="w232">
                            <ul class="request-line mb_8">
                                <li class="pb_6 pos_relative">
                                    <span class="icon_24 icon-24 icon-quan-ly-tai-khoan pos_absolute"></span>
                                    <a href="{{route('user.account')}}" class="txt-ghi pl12 w232 ablock_menu  ">Quản lý tài khoản</a>
                                </li>

                                <li class="pb_6 pos_relative">
                                    <span class="icon_24 icon-24 icon-vl-nganh-nghe pos_absolute"></span>
                                    <a href="{{route('user.saved.profile')}}" class="txt-ghi pl12 w232 ablock_menu ">Hồ sơ đã lưu</a>
                                </li>

                                <li class="pb_6 pos_relative">
                                    <span class="icon_24 icon-24 icon-quan-ly-tin-tuyen-dung pos_absolute"></span>
                                    <a href="javascript:;" rel="nofollow" onclick="popupPayment_open()" class="txt-ghi pl12 w232 ablock_menu">Nạp tiền tài khoản</a>
                                </li>

                                <li class="pb_6 pos_relative">
                                    <span class="icon_24 icon-24 icon-quan-ly-tin-tuyen-dung pos_absolute"></span>
                                    <a href="{{route('user.transaction')}}" class="txt-ghi pl12 w232 ablock_menu">Lịch sử giao dịch</a>
                                </li>

                                <li class="pb_6 pos_relative">
                                    <span class="icon_24 icon-24 icon-quan-ly-tin-tuyen-dung pos_absolute"></span>
                                    <a href="{{ empty($linkYouTubeChanel)? '#' : $linkYouTubeChanel }}" class="txt-ghi pl12 w232 ablock_menu " target="_blank" style="text-decoration: none; color: #363636;">HD xem thông tin ứng viên</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            <div class="mb12"><div class="line-break02 w232"></div></div>
                            <div class="ml_10">
                                <div class="statistic font16">
                                    LIÊN HỆ ĐỂ ĐƯỢC HỖ TRỢ
                                </div>
                                <div style="margin-bottom: 10px;">
                                    <span class="bg-white bold font13 text_blue"><i class="fa fa-phone" aria-hidden="true"></i> </span><span class="bg-white text_pink font13 bold">04 6684 7421 - 0943 24 9699</span><br>
                                    <span class="bg-white bold font13 text_blue"><i class="fa fa-envelope-o" aria-hidden="true"></i> </span><span class="bg-white text_pink font13 bold"><a href="mailto:nganhangungvienvn@gmail.com" class="text_pink">nganhangungvienvn@gmail.com</a></span><br>
                                    <span class="bg-white bold font13 text_blue"><i class="fa fa-skype" aria-hidden="true"></i> </span> <span class="bg-white text_pink font13 bold"><a href="skype:CSKH.NGANHANGUNGVIEN.COM?chat" class="text_pink">nganhangungvien.com</a></span>
                                    <br/>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

        </div>
        </div>
    </div>
</div>