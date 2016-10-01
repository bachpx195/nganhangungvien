<div class="box_AddMoney">
    <h3>Nạp tiền vào tài khoản</h3>
    <a href="javascript:;" onclick="closeBox()">×</a>

    <ul class="listOpt">
        <li id="li-mobile"><a onclick="showForm_addMoney(this)" @if(!UserHelper::isVip($employer)) class="active" @endif data-rel="mobile" href="javascript:;"><i class="fa fa-money" aria-hidden="true"></i><span>Thẻ điện thoại</span></a></li>
        <li id="li-atm"><a onclick="showForm_addMoney(this)" @if(UserHelper::isVip($employer)) class="active" @endif data-rel="atm" href="javascript:;"><i class="fa fa-credit-card" aria-hidden="true"></i><span>Nạp tiền trực tuyến</span></a></li>
        <li id="li-online"><a data-rel="online" href="{{ route('pages.regist_vip') }}" target="_blank"><i class="fa fa-trophy" aria-hidden="true"></i><span>TÀI KHOẢN VIP</span></a></li>
    </ul>

    <div class="boxAddMoney_content @if(UserHelper::isVip($employer)) hidden @endif" id="mobile">
        <div style="margin-left: 100px; margin-top: 30px;">
            <img src="{{ URL::asset('assets/image/hd_mobile.png') }}" style="margin-right: 100px;"/>
            <div>
                <a onclick="selectOptionMobile(this)" href="javascript:;"><i class="icon mobifone"></i><input type="radio" name="ncc" value="MOBI"/></a>
                <a onclick="selectOptionMobile(this)" href="javascript:;"><i class="icon vinaphone"></i><input type="radio" name="ncc" value="VINA"/></a>
                <a onclick="selectOptionMobile(this)" href="javascript:;"><i class="icon viettel"></i><input type="radio" name="ncc" value="VIETEL"/></a>
                <p style="margin-top: 10px;"><input  name="code_popup" id="code_popup" type="text" placeholder="Mã số thẻ"/></p>
                <p><input name="seri_popup" id="seri_popup" type="text"  placeholder="Seri thẻ"name="txt_seri"/></p>
                <p><i style="color: #0aa888;font-weight: bold;">Mệnh giá tối thiểu 20.000 vnđ</i></p>
                <p>Phí nạp thẻ <a style="color: red;">20%</a> cho nhà mạng. <i style="color: #0aa888;font-weight: bold;">(Ví dụ: Nạp thẻ 20.000 sẽ được cộng 16.000 vào tài khoản)</i></p>
                <p>Nạp sai 5 lần liên tiếp, tài khoản của bạn không thể sử dụng hình thức nạp trong 24h.</p>
                <p class="appendPay"><a href="javascript:;" onclick="pay_mobilecard();" class="btn btn_submit">Nạp tiền</a></p>
            </div>

            <div>
                <div class="row pl_14 pr_14">
                    <div class="txc">
                        ------------------------------------
                        <div class="title">
                            <span class="bg-white bold text_blue">HÃY LIÊN HỆ ĐỂ ĐƯỢC TRỢ GIÚP</span>
                        </div>
                        <span class="bg-white bold font16 text_blue"><i class="fa fa-phone" aria-hidden="true"></i> Hotline: </span><span class="bg-white text_pink font16 bold">04 6684 7421</span><br />
                        <span class="bg-white bold font16 text_blue"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email  : </span><span class="bg-white text_pink font16 bold"><a href="mailto:nganhangungvienvn@gmail.com" class="text_pink">nganhangungvienvn@gmail.com</a></span><br/>
                        <span class="bg-white bold font16 text_blue"><i class="fa fa-skype" aria-hidden="true"></i> Skype  : </span><span class="bg-white text_pink font16 bold"><a href="skype:NGANHANGUNGVIENVN?chat" class="text_pink">nganhangungvien.com</a></span>
                    </div>
                    <br/>
                </div>
            </div>
        </div>
    </div>

    <div class="boxAddMoney_content @if(!UserHelper::isVip($employer)) hidden @endif" id="atm">
        <div>
            <div>
                <div class="text_input">
                    <div class="listOption listOption_bankATM">
                        <span>Lựa chọn ngân hàng (có đăng ký Internet banking hoặc DV thanh toán trực tuyến)</span>
                        <ul>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="15">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/vietcombank.png') }}" alt="Vietcombank - Ngân hàng TMCP Ngoại thương"/>
                                    <input type="radio" name="pm_atm" value="15" />
                                    <span>Vietcombank - Ngân hàng TMCP Ngoại thương</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="157">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/NCB_Bank.jpg') }}" alt="Ngân hàng Thương mại Cổ phần Quốc Dân NCB"/>
                                    <input type="radio" name="pm_atm" value="157" />
                                    <span>Ngân hàng Thương mại Cổ phần Quốc Dân NCB</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="158">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/KienLong_Bank.jpg') }}" alt="KienLongBank - Ngân hàng Kiên Long"/>
                                    <input type="radio" name="pm_atm" value="158" />
                                    <span>KienLongBank - Ngân hàng Kiên Long</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="159">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/SCB_Bank.jpg') }}" alt="Ngân hàng TMCP Sài Gòn (SCB)"/>
                                    <input type="radio" name="pm_atm" value="159" />
                                    <span>Ngân hàng TMCP Sài Gòn (SCB)</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="60">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/techcombank.png') }}" alt="Techcombank - Ngân hàng Kỹ thương Việt Nam"/>
                                    <input type="radio" name="pm_atm" value="60" />
                                    <span>Techcombank - Ngân hàng Kỹ thương Việt Nam</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="91">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/vietinbank.png') }}" alt="Vietinbank - Ngân hàng Công thương Việt Nam"/>
                                    <input type="radio" name="pm_atm" value="91" />
                                    <span>Vietinbank - Ngân hàng Công thương Việt Nam</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="131">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/bidvbank.png') }}" alt="BIDV - Ngân hàng Đầu tư và Phát triển Việt Nam"/>
                                    <input type="radio" name="pm_atm" value="131" />
                                    <span>BIDV - Ngân hàng Đầu tư và Phát triển Việt Nam</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="105">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/maritimebank.png') }}" alt="MSB - Ngân hàng Hàng Hải Việt Nam"/>
                                    <input type="radio" name="pm_atm" value="105" />
                                    <span>MSB - Ngân hàng Hàng Hải Việt Nam</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="124">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/Oceanbank.png') }}" alt="Ocean Bank - Ngân hàng Đại Dương"/>
                                    <input type="radio" name="pm_atm" value="124" />
                                    <span>Ocean Bank - Ngân hàng Đại Dương</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="113">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/vpbank.png') }}" alt="VPBank - Ngân hàng Việt Nam Thịnh Vượng"/>
                                    <input type="radio" name="pm_atm" value="113" />
                                    <span>VPBank - Ngân hàng Việt Nam Thịnh Vượng</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="101">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/dongabank.png') }}" alt="DongA Bank - Ngân hàng Đông Á"/>
                                    <input type="radio" name="pm_atm" value="101" />
                                    <span>DongA Bank - Ngân hàng Đông Á</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="64">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/acbbank.png') }}" alt="ACB - Ngân hàng Á Châu"/>
                                    <input type="radio" name="pm_atm" value="64" />
                                    <span>ACB - Ngân hàng Á Châu</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="98">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/sacombank.png') }}" alt="Sacombank - Ngân hàng Sài Gòn Thương Tín"/>
                                    <input type="radio" name="pm_atm" value="98" />
                                    <span>Sacombank - Ngân hàng Sài Gòn Thương Tín</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="61">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/mbbank.png') }}" alt="Ngân hàng Quân Đội (MB)"/>
                                    <input type="radio" name="pm_atm" value="61" />
                                    <span>Ngân hàng Quân Đội (MB)</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="112">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/agribank.png') }}" alt="Agribank - Ngân hàng Nông nghiệp và Phát triển Nông thôn Việt Nam"/>
                                    <input type="radio" name="pm_atm" value="112" />
                                    <span>Agribank - Ngân hàng Nông nghiệp và Phát triển Nông thôn Việt Nam</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="62">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/vibbank.png') }}" alt="VIB - Ngân hàng Quốc Tế"/>
                                    <input type="radio" name="pm_atm" value="62" />
                                    <span>VIB - Ngân hàng Quốc Tế</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="63">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/eximbank.png') }}" alt="Eximbank - Ngân hàng Xuất nhập khẩu"/>
                                    <input type="radio" name="pm_atm" value="63" />
                                    <span>Eximbank - Ngân hàng Xuất nhập khẩu</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="130">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/tienphongbank.png') }}" alt="TienPhongBank - Ngân hàng Tiên  Phong"/>
                                    <input type="radio" name="pm_atm" value="130" />
                                    <span>TienPhongBank - Ngân hàng Tiên  Phong</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="148">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/shbbank.png') }}" alt="SHB - Ngân hàng Sài Gòn- Hà Nội"/>
                                    <input type="radio" name="pm_atm" value="148" />
                                    <span>SHB - Ngân hàng Sài Gòn- Hà Nội</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="150">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/baovietbank.png') }}" alt="BAOVIET Bank - Ngân hàng Bảo Việt"/>
                                    <input type="radio" name="pm_atm" value="150" />
                                    <span>BAOVIET Bank - Ngân hàng Bảo Việt</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="151">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/50x34-ocb.png') }}" alt="OCB - Ngân hàng Phương Đông"/>
                                    <input type="radio" name="pm_atm" value="151" />
                                    <span>OCB - Ngân hàng Phương Đông</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="152">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/50x34-lienvietbank.png') }}" alt="LienVietBank - Ngân hàng Liên Việt"/>
                                    <input type="radio" name="pm_atm" value="152" />
                                    <span>LienVietBank - Ngân hàng Liên Việt</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="153">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/seabank.png') }}" alt="SeABank - Ngân hàng Đông Nam Á"/>
                                    <input type="radio" name="pm_atm" value="153" />
                                    <span>SeABank - Ngân hàng Đông Nam Á</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="154">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/abbank.png') }}" alt="ABBank - Ngân hàng An Bình"/>
                                    <input type="radio" name="pm_atm" value="154" />
                                    <span>ABBank - Ngân hàng An Bình</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="94">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/hdbank.png') }}" alt="HDBank - Ngân hàng Phát triển nhà TPHCM"/>
                                    <input type="radio" name="pm_atm" value="94" />
                                    <span>HDBank - Ngân hàng Phát triển nhà TPHCM</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="96">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/namabank.png') }}" alt="Nam A Bank - Ngân hàng Nam Á"/>
                                    <input type="radio" name="pm_atm" value="96" />
                                    <span>Nam A Bank - Ngân hàng Nam Á</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="114">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/vietabank.png') }}" alt="VietABank - Ngân hàng Việt Á"/>
                                    <input type="radio" name="pm_atm" value="114" />
                                    <span>VietABank - Ngân hàng Việt Á</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="115">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/gpbank.png') }}" alt="GP Bank - Ngân hàng dầu khí Toàn Cầu"/>
                                    <input type="radio" name="pm_atm" value="115" />
                                    <span>GP Bank - Ngân hàng dầu khí Toàn Cầu</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="102">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/pgbank.png') }}" alt="PG Bank - Ngân Hàng TMCP Xăng Dầu"/>
                                    <input type="radio" name="pm_atm" value="102" />
                                    <span>PG Bank - Ngân Hàng TMCP Xăng Dầu</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="129">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/bac_a.jpg') }}" alt="BACABank - Ngân hàng Bắc Á"/>
                                    <input type="radio" name="pm_atm" value="129" />
                                    <span>BACABank - Ngân hàng Bắc Á</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-value="97">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/saigonbank.png') }}" alt="Saigonbank - Ngân hàng Sài Gòn Công Thương"/>
                                    <input type="radio" name="pm_atm" value="97" />
                                    <span>Saigonbank - Ngân hàng Sài Gòn Công Thương</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true"  data-value="106">
                                <a href="javascript:;">
                                    <img height="38" width="68" src="{{ URL::asset('assets/image/bank/navibank.png') }}" alt="NaviBank - Ngân hàng Nam Việt"/>
                                    <input type="radio" name="pm_atm" value="106" />
                                    <span>NaviBank - Ngân hàng Nam Việt</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <p class="ml_40">
                    <input id="pay-money-atm" type="text" name="pay_money_atm" placeholder="Nhập vào số tiền"/>
                    <input id="phone_atm" type="text" placeholder="Số điện thoại của bạn" name="payer_phone_no"/>
                    <span class="appendPay" style="margin-top: -5px;"><a href="javascript:;" onclick="pay_atm();" class="btn btn_submit">Nạp tiền</a></span>
                </p>
                <p class="ml_40">(*) Nạp sai 3 lần liên tiếp, tài khoản của bạn không thể sử dụng hình thức nạp trong 24h.</p>

                <div>
                    <div class="row pl_14 pr_14">
                        <div class="txc">
                            ------------------------------------
                            <div class="title">
                                <span class="bg-white bold text_blue">HÃY LIÊN HỆ ĐỂ ĐƯỢC TRỢ GIÚP</span>
                            </div>
                            <span class="bg-white bold font16 text_blue"><i class="fa fa-phone" aria-hidden="true"></i> Hotline: </span><span class="bg-white text_pink font16 bold">04 6684 7421</span><br />
                            <span class="bg-white bold font16 text_blue"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email  : </span><span class="bg-white text_pink font16 bold"><a href="mailto:nganhangungvienvn@gmail.com" class="text_pink">nganhangungvienvn@gmail.com</a></span><br/>
                            <span class="bg-white bold font16 text_blue"><i class="fa fa-skype" aria-hidden="true"></i> Skype  : </span><span class="bg-white text_pink font16 bold"><a href="skype:NGANHANGUNGVIENVN?chat" class="text_pink">nganhangungvien.com</a></span>
                        </div>
                        <br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var running_paymentMobilecard = false;
    var running_paymentAtm        = false;
    var running_paymentBk         = false;
    var running_paymentVisa       = false;
    $("#pay-money-atm").number( true, 0 , ',','.' );
</script>
<script type="text/javascript" src="http://static.store123doc.com:81/static_v2/common/js/tooltip.min.js"></script>