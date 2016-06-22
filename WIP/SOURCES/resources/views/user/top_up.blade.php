<div class="box_AddMoney">
    <h3>Nạp tiền vào tài khoản</h3>
    <a href="javascript:;" onclick="closeBox()">×</a>
    <!--
    <div class="boxAddMoney_user">
        
        <a target="_blank" href="{{route('user.account')}}">
            <img src="http://media.store123doc.com:8080/images/default/user_small.png"
                 alt="{{$employer->username}}" onerror="this.src='{{URL::to('/' . 'assets/default/images/user_small.png')}}'"/></a>
        <div>
            <p>{{$employer->username}}</p>
            <p>{{$employer->email}}</p>
            <p><a target="_blank" href="{{route('user.transaction')}}">Lịch sử giao dịch</a></p>
        </div>
        <p><span>{{$employer->balance}}.000 VNĐ</span></p>
        <p class="line_space"></p> 
    </div>
    -->
    <ul class="listOpt">
        @if($employer->vip != 1)
        <li><a onclick="showForm_addMoney(this)" class="active" data-rel="mobile" href="javascript:;"><i class="icon i_m_mb"></i><span>Thẻ điện thoại</span></a></li>
        @endif
        <li><a onclick="showForm_addMoney(this)" @if($employer->vip == 1) class="active" @endif data-rel="atm" href="javascript:;"><i class="icon i_m_atm"></i><span>Thẻ ATM online</span></a></li>
        <li><a onclick="showForm_addMoney(this)" data-rel="online" href="javascript:;"><i class="icon i_m_bk"></i><span>Tài khoản VIP</span></a></li>
    </ul>
    @if($employer->vip != 1)
    <div class="boxAddMoney_content" id="mobile">
        <h4>Thẻ điện thoại</h4>
        <div>
            <img src="http://media.store123doc.com:8080/images/web_2//hd_mobile.png"/>
            <div>
                <a onclick="selectOptionMobile(this)" href="javascript:;"><i class="icon mobifone"></i><input type="radio" name="ncc" value="MOBI"/></a>
                <a onclick="selectOptionMobile(this)" href="javascript:;"><i class="icon vinaphone"></i><input type="radio" name="ncc" value="VINA"/></a>
                <a onclick="selectOptionMobile(this)" href="javascript:;"><i class="icon viettel"></i><input type="radio" name="ncc" value="VIETEL"/></a>
                <p style="margin-top: 10px;"><input  name="code_popup" id="code_popup" type="text" placeholder="Mã số thẻ"/></p>
                <p><input name="seri_popup" id="seri_popup" type="text"  placeholder="Seri thẻ"name="txt_seri"/></p>
                <p><i style="color: #0aa888;font-weight: bold;">Mệnh giá tối thiểu 20.000 vnđ</i></p>
                <p>Phí nạp thẻ <a style="color: red;">23%</a> cho nhà mạng. <i style="color: #0aa888;font-weight: bold;">(Ví dụ: Nạp thẻ 20.000 sẽ được cộng 15.000 vào tài khoản)</i></p>
                <p>Nạp sai 5 lần liên tiếp, tài khoản của bạn không thể sử dụng hình thức nạp trong 24h.</p>
                <p>Hỗ trợ trực tuyến <a href="http://store.baokim.vn/card/multiMobileNew" rel="nofollow" target="_blank">tại đây</a></p>
                <p class="appendPay"><a href="javascript:;" onclick="pay_mobilecard();" class="btn btn_submit">Nạp tiền</a></p>
            </div>
        </div>
    </div>
    @endif
    <div class="boxAddMoney_content @if($employer->vip != 1) hidden @endif" id="atm">
        <h4>Thẻ ATM online</h4>
        <div><div>
                <div class="text_input">
                    <a href="javascript:;" onclick="show_listOption(this)" onblur="close_listOption(this)">Lựa chọn ngân hàng <i class="arrow"></i></a>
                    <div class="listOption listOption_bankATM">
                        <span>Lựa chọn ngân hàng (có đăng ký Internet banking hoặc DV thanh toán trực tuyến)</span>
                        <ul>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>Vietcombank - Ngân hàng TMCP Ngoại thương</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="15">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/vietcombank.png" alt="Vietcombank - Ngân hàng TMCP Ngoại thương"/>
                                    <input type="radio" name="pm_atm" value="15" />
                                    <span>Vietcombank - Ngân hàng TMCP Ngoại thương</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>Ngân hàng Thương mại Cổ phần Quốc Dân NCB</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="157">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/NCB_Bank.jpg" alt="Ngân hàng Thương mại Cổ phần Quốc Dân NCB"/>
                                    <input type="radio" name="pm_atm" value="157" />
                                    <span>Ngân hàng Thương mại Cổ phần Quốc Dân NCB</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>KienLongBank - Ngân hàng Kiên Long</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="158">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/KienLong_Bank.jpg" alt="KienLongBank - Ngân hàng Kiên Long"/>
                                    <input type="radio" name="pm_atm" value="158" />
                                    <span>KienLongBank - Ngân hàng Kiên Long</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>Ngân hàng TMCP Sài Gòn (SCB)</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="159">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/SCB_Bank.jpg" alt="Ngân hàng TMCP Sài Gòn (SCB)"/>
                                    <input type="radio" name="pm_atm" value="159" />
                                    <span>Ngân hàng TMCP Sài Gòn (SCB)</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>Techcombank - Ngân hàng Kỹ thương Việt Nam</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="60">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/techcombank.png" alt="Techcombank - Ngân hàng Kỹ thương Việt Nam"/>
                                    <input type="radio" name="pm_atm" value="60" />
                                    <span>Techcombank - Ngân hàng Kỹ thương Việt Nam</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>Vietinbank - Ngân hàng Công thương Việt Nam</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="91">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/vietinbank.png" alt="Vietinbank - Ngân hàng Công thương Việt Nam"/>
                                    <input type="radio" name="pm_atm" value="91" />
                                    <span>Vietinbank - Ngân hàng Công thương Việt Nam</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>BIDV - Ngân hàng Đầu tư và Phát triển Việt Nam</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="131">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/bidvbank.png" alt="BIDV - Ngân hàng Đầu tư và Phát triển Việt Nam"/>
                                    <input type="radio" name="pm_atm" value="131" />
                                    <span>BIDV - Ngân hàng Đầu tư và Phát triển Việt Nam</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>MSB - Ngân hàng Hàng Hải Việt Nam</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="105">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/maritimebank.png" alt="MSB - Ngân hàng Hàng Hải Việt Nam"/>
                                    <input type="radio" name="pm_atm" value="105" />
                                    <span>MSB - Ngân hàng Hàng Hải Việt Nam</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>Ocean Bank - Ngân hàng Đại Dương</b>.<br>Phí tiện ích thanh toán : Miễn phí . <br>Thời gian thanh toán : Ngay lập tức" data-value="124">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/Oceanbank.png" alt="Ocean Bank - Ngân hàng Đại Dương"/>
                                    <input type="radio" name="pm_atm" value="124" />
                                    <span>Ocean Bank - Ngân hàng Đại Dương</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>VPBank - Ngân hàng Việt Nam Thịnh Vượng</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="113">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/vpbank.png" alt="VPBank - Ngân hàng Việt Nam Thịnh Vượng"/>
                                    <input type="radio" name="pm_atm" value="113" />
                                    <span>VPBank - Ngân hàng Việt Nam Thịnh Vượng</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>DongA Bank - Ngân hàng Đông Á</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="101">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/dongabank.png" alt="DongA Bank - Ngân hàng Đông Á"/>
                                    <input type="radio" name="pm_atm" value="101" />
                                    <span>DongA Bank - Ngân hàng Đông Á</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>ACB - Ngân hàng Á Châu</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="64">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/acbbank.png" alt="ACB - Ngân hàng Á Châu"/>
                                    <input type="radio" name="pm_atm" value="64" />
                                    <span>ACB - Ngân hàng Á Châu</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>Sacombank - Ngân hàng Sài Gòn Thương Tín</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="98">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/sacombank.png" alt="Sacombank - Ngân hàng Sài Gòn Thương Tín"/>
                                    <input type="radio" name="pm_atm" value="98" />
                                    <span>Sacombank - Ngân hàng Sài Gòn Thương Tín</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>Ngân hàng Quân Đội (MB)</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="61">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/mbbank.png" alt="Ngân hàng Quân Đội (MB)"/>
                                    <input type="radio" name="pm_atm" value="61" />
                                    <span>Ngân hàng Quân Đội (MB)</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>Agribank - Ngân hàng Nông nghiệp và Phát triển Nông thôn Việt Nam</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="112">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/agribank.png" alt="Agribank - Ngân hàng Nông nghiệp và Phát triển Nông thôn Việt Nam"/>
                                    <input type="radio" name="pm_atm" value="112" />
                                    <span>Agribank - Ngân hàng Nông nghiệp và Phát triển Nông thôn Việt Nam</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>VIB - Ngân hàng Quốc Tế</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="62">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/vibbank.png" alt="VIB - Ngân hàng Quốc Tế"/>
                                    <input type="radio" name="pm_atm" value="62" />
                                    <span>VIB - Ngân hàng Quốc Tế</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>Eximbank - Ngân hàng Xuất nhập khẩu</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="63">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/eximbank.png" alt="Eximbank - Ngân hàng Xuất nhập khẩu"/>
                                    <input type="radio" name="pm_atm" value="63" />
                                    <span>Eximbank - Ngân hàng Xuất nhập khẩu</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>TienPhongBank - Ngân hàng Tiên  Phong</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="130">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/tienphongbank.png" alt="TienPhongBank - Ngân hàng Tiên  Phong"/>
                                    <input type="radio" name="pm_atm" value="130" />
                                    <span>TienPhongBank - Ngân hàng Tiên  Phong</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>SHB - Ngân hàng Sài Gòn- Hà Nội</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="148">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/shbbank.png" alt="SHB - Ngân hàng Sài Gòn- Hà Nội"/>
                                    <input type="radio" name="pm_atm" value="148" />
                                    <span>SHB - Ngân hàng Sài Gòn- Hà Nội</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>BAOVIET Bank - Ngân hàng Bảo Việt</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="150">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/baovietbank.png" alt="BAOVIET Bank - Ngân hàng Bảo Việt"/>
                                    <input type="radio" name="pm_atm" value="150" />
                                    <span>BAOVIET Bank - Ngân hàng Bảo Việt</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>OCB - Ngân hàng Phương Đông</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="151">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/50x34-ocb.png" alt="OCB - Ngân hàng Phương Đông"/>
                                    <input type="radio" name="pm_atm" value="151" />
                                    <span>OCB - Ngân hàng Phương Đông</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>LienVietBank - Ngân hàng Liên Việt</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="152">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/50x34-lienvietbank.png" alt="LienVietBank - Ngân hàng Liên Việt"/>
                                    <input type="radio" name="pm_atm" value="152" />
                                    <span>LienVietBank - Ngân hàng Liên Việt</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>SeABank - Ngân hàng Đông Nam Á</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="153">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/seabank.png" alt="SeABank - Ngân hàng Đông Nam Á"/>
                                    <input type="radio" name="pm_atm" value="153" />
                                    <span>SeABank - Ngân hàng Đông Nam Á</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>ABBank - Ngân hàng An Bình</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="154">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/abbank.png" alt="ABBank - Ngân hàng An Bình"/>
                                    <input type="radio" name="pm_atm" value="154" />
                                    <span>ABBank - Ngân hàng An Bình</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>HDBank - Ngân hàng Phát triển nhà TPHCM</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="94">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/hdbank.png" alt="HDBank - Ngân hàng Phát triển nhà TPHCM"/>
                                    <input type="radio" name="pm_atm" value="94" />
                                    <span>HDBank - Ngân hàng Phát triển nhà TPHCM</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>Nam A Bank - Ngân hàng Nam Á</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="96">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/namabank.png" alt="Nam A Bank - Ngân hàng Nam Á"/>
                                    <input type="radio" name="pm_atm" value="96" />
                                    <span>Nam A Bank - Ngân hàng Nam Á</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>VietABank - Ngân hàng Việt Á</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="114">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/vietabank.png" alt="VietABank - Ngân hàng Việt Á"/>
                                    <input type="radio" name="pm_atm" value="114" />
                                    <span>VietABank - Ngân hàng Việt Á</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>GP Bank - Ngân hàng dầu khí Toàn Cầu</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="115">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/gpbank.png" alt="GP Bank - Ngân hàng dầu khí Toàn Cầu"/>
                                    <input type="radio" name="pm_atm" value="115" />
                                    <span>GP Bank - Ngân hàng dầu khí Toàn Cầu</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>PG Bank - Ngân Hàng TMCP Xăng Dầu</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="102">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/pgbank.png" alt="PG Bank - Ngân Hàng TMCP Xăng Dầu"/>
                                    <input type="radio" name="pm_atm" value="102" />
                                    <span>PG Bank - Ngân Hàng TMCP Xăng Dầu</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>BACABank - Ngân hàng Bắc Á</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="129">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/bac_a.jpg" alt="BACABank - Ngân hàng Bắc Á"/>
                                    <input type="radio" name="pm_atm" value="129" />
                                    <span>BACABank - Ngân hàng Bắc Á</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>Saigonbank - Ngân hàng Sài Gòn Công Thương</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="97">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/saigonbank.png" alt="Saigonbank - Ngân hàng Sài Gòn Công Thương"/>
                                    <input type="radio" name="pm_atm" value="97" />
                                    <span>Saigonbank - Ngân hàng Sài Gòn Công Thương</span>
                                </a>
                            </li>
                            <li  data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="<b>NaviBank - Ngân hàng Nam Việt</b>.<br>Phí tiện ích thanh toán : 1.760 ₫ +1,1%. <br>Thời gian thanh toán : Ngay lập tức" data-value="106">
                                <a href="javascript:;" onclick="selectOption(this)">
                                    <img height="38" width="68" src="https://www.baokim.vn/application/uploads/banks/navibank.png" alt="NaviBank - Ngân hàng Nam Việt"/>
                                    <input type="radio" name="pm_atm" value="106" />
                                    <span>NaviBank - Ngân hàng Nam Việt</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="text_input">
                    <a href="javascript:;" onclick="show_listOption(this)" onblur="close_listOption(this)">Lựa chọn số tiền cần nạp <i class="arrow"></i></a>
                    <div class="listOption listOption_moneyATM">
                        <span>Chọn mệnh giá thẻ nạp</span>
                        <ul>
                            <li><a href="javascript:;" onclick="selectOption(this)"><input  name="pay_money_atm" value="20000" type="radio"/> <span>20,000VNĐ</span></a></li>
                            <li><a href="javascript:;" onclick="selectOption(this)"><input name="pay_money_atm" value="30000" type="radio"/> <span>30,000VNĐ</span></a></li>
                            <li><a href="javascript:;" onclick="selectOption(this)"><input name="pay_money_atm" value="40000" type="radio"/> <span>40,000VNĐ</span></a></li>
                            <li><a href="javascript:;" onclick="selectOption(this)"><input name="pay_money_atm" value="50000" type="radio"/> <span>50,000VNĐ</span></a></li>
                            <li><a href="javascript:;" onclick="selectOption(this)"><input name="pay_money_atm" value="60000" type="radio"/> <span>60,000VNĐ</span></a></li>
                            <li><a href="javascript:;" onclick="selectOption(this)"><input name="pay_money_atm" value="70000" type="radio"/> <span>70,000VNĐ</span></a></li>
                            <li><a href="javascript:;" onclick="selectOption(this)"><input name="pay_money_atm" value="80000" type="radio"/> <span>80,000VNĐ</span></a></li>
                            <li><a href="javascript:;" onclick="selectOption(this)"><input name="pay_money_atm" value="90000" type="radio"/> <span>90,000VNĐ</span></a></li>
                            <li><a href="javascript:;" onclick="selectOption(this)"><input name="pay_money_atm" value="100000" type="radio"/> <span>100,000VNĐ</span></a></li>
                            <li><a href="javascript:;" onclick="selectOption(this)"><input name="pay_money_atm" value="120000" type="radio"/> <span>120,000VNĐ</span></a></li>
                            <li><a href="javascript:;" onclick="selectOption(this)"><input name="pay_money_atm" value="150000" type="radio"/> <span>150,000VNĐ</span></a></li>
                            <li><a href="javascript:;" onclick="selectOption(this)"><input name="pay_money_atm" value="200000" type="radio"/> <span>200,000VNĐ</span></a></li>
                        </ul>
                    </div>
                </div>
                <p style="margin-top: 10px;"><input id="phone_atm" type="text" placeholder="Số điện thoại của bạn"/></p>
        <p>Nạp sai 3 lần liên tiếp, tài khoản của bạn không thể sử dụng hình thức nạp trong 24h.</p>
                <p class="appendPay"><a href="javascript:;" onclick="pay_atm();" class="btn btn_submit">Nạp tiền</a></p>
            </div></div>
    </div>
    <div class="boxAddMoney_content hidden" id="online">
        <h4>Chuyển khoản Online</h4>
        <h3><span>Thông tin tài khoản Vietcombank</span></h3>
        <p> Chủ tài khoản: NganHangUngVien.</p>
        <p> Số tài khoản: XXXXXXXXXXXXXXX</p>
        <p> Ngân hàng: Vietcombank (Ngân hàng ngoại thương Việt nam)</p>
        <p> Chi nhánh: Hà nội</p>
        <p> Sau khi thực hiện chuyển khoản vui lòng liên hệ theo email: nganhangungvienvn@gmail.com hoặc HOTLINE: 04 6684 7421 - 0943 24 9699 để được chuyển thành tài khoản VIPs</p>
    </div>
</div>
<script type="text/javascript">
    var running_paymentMobilecard = false;
    var running_paymentAtm        = false;
    var running_paymentBk         = false;
    var running_paymentVisa       = false;
</script>
<script type="text/javascript" src="http://static.store123doc.com:81/static_v2/common/js/tooltip.min.js"></script>