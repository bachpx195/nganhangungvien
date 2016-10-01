@include('front/account/login')
<footer>
    <section id="bottom">
        <div class="section-inner">
            <div class="container">
                <div class="row mt20">
                    <div class="col-md-6">
                        <div class="">
                            <h2 class="text_pink font24">
                                LIÊN HỆ
                            </h2>

                            <div class="mt_24 font14">
                                <a href="/">
                                    <img src="{{ URL::asset('assets/default/images/logo1_new.png') }}" alt="NGÂN HÀNG ỨNG VIÊN" title="NGÂN HÀNG ỨNG VIÊN">
                                </a>
                                <p>
                                    <br><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;Hotline: <span class="text_pink">04 6684 7421</span><br>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i> Email: <a href="mailto:nganhangungvienvn@gmail.com" class="text_pink">nganhangungvienvn@gmail.com</a><br>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;&nbsp;Địa chỉ: <span class="text_pink">Số 1/1 Hoàng Ngọc Phách, Phường Láng Hạ, Quận Đống Đa, TP. Hà Nội</span><br>
                                    <i class="fa fa-globe" aria-hidden="true"></i> &nbsp;Website: <span class="text_pink">nganhangungvienvn@gmail.com</span> - <i class="fa fa-skype" aria-hidden="true"></i> Skype: <a href="skype:live:NGANHANGUNGVIENVN?chat" class="text_pink">nganhangungvienvn</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="">
                            <h2 class="text_pink font24"> LIÊN KẾT</h2>
                            <div class="mt_24 font14">
                                {{--<p><a href="{{ route('pages.dangKyBoCongThuong') }}" style="color: #FFFFFF;" target="_blank">- Đăng ký bộ công thương</a></p>--}}
                                <p><a href="{{ route('pages.policy') }}" style="color: #FFFFFF;">- Điều khoản sử dụng</a></p>
                                <p><a href="{{ empty($linkYouTubeChanel)? '#' : $linkYouTubeChanel }}" style="color: #FFFFFF;">- Hướng dẫn đăng ký tài khoản nhà tuyển dụng</a></p>
                                <p><a href="{{route('employer.register')}}" style="color: #FFFFFF;">- Đăng ký nhà tuyển dụng</a></p>
                                <p><a href="{{route('candidate.form')}}" style="color: #FFFFFF;">- Tạo hồ sơ ứng viên</a></p>
                                <p><a href="{{ route('news.show') }}" style="color: #FFFFFF;">- Tài liệu quản trị</a></p>
                                <p><a href="{{ route('pages.regist_vip') }}" style="color: #FFFFFF;">- Đăng ký tài khoản VIP</a></p>
                                <p><a href="{{route('pages.outsourcing_package')}}" style="color: #FFFFFF;">- Dịch vụ thuê ngoài trọn gói</a></p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-3">
                        <div class=" widget-inner">
                            <div id="fb-root"></div>
                            <script>(function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
                                    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>
                            <div class="fb-page" data-href="https://www.facebook.com/CVBANKVN/" data-tabs="timeline" data-height="220" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/CVBANKVN/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CVBANKVN/">NGÂN HÀNG ỨNG VIÊN</a></blockquote></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="bottom-nav">
        <div class="container">
            <div class="row footer-content text-center">
                <a href="http://online.gov.vn/HomePage/WebsiteDisplay.aspx?DocId=27310" target="_blank"><img alt="" title="" src="http://online.gov.vn/seals/5gKPNxVa0008kOtkuQ7pjg==.jpgx" /></a>
                <div class="copyright col-md-12">© 2016 <a href="http://nganhangungvien.com" class="text_pink ">WWW.NGANHANGUNGVIEN.COM</a> - NGÂN HÀNG ỨNG VIÊN</div>
                
            </div><!--/row-->
        </div><!--/container-->
    </div>
    <br/>
</footer>