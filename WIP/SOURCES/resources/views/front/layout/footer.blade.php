@include('front/account/login')
<footer>
    <section id="bottom">
        <div class="section-inner">
            <div class="container">
                <div class="row mt20">
                    <div class="col-md-5">
                        <div class=""><h2 class="">__ LIÊN HỆ __</h2>
                            <div class="mt_24 font16">
                                <a href="/">
                                    <img src="{{ URL::asset('assets/default/images/logo1_new.png') }}" alt="NGÂN HÀNG ỨNG VIÊN" title="NGÂN HÀNG ỨNG VIÊN">
                                </a>
                                <br/>
                                <br/>
                                <p>NGÂN HÀNG ỨNG VIÊN - <a href="http://nganhangungvien.com" class="text_pink ">WWW.NGANHANGUNGVIEN.COM</a></p><br/>
                                <p>Hotline: 04 6684 7421 - 0943 24 9699<br>
                                    Email: nganhangungvienvn@gmail.com<br>
                                    Địa chỉ: Tổ 10, Phường Yên Nghĩa, Quận Hà Đông, TP Hà Nội</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mt_24 font16">
                            <h2 class="">__ LIÊN KẾT __</h2>
                            <div class="">
                                <br/>
                                <p><a href="{{route('employer.register')}}" style="color: #FFFFFF;">- ĐĂNG KÝ NHÀ TUYỂN DỤNG</a></p>
                                <p><a href="{{route('candidate.form')}}" style="color: #FFFFFF;">- TẠO HỒ SƠ ỨNG VIÊN</a></p>
                                <p><a href="{{ route('news.show') }}" style="color: #FFFFFF;">- TÀI LIỆU QUẢN TRỊ</a></p>
                                <p><a href="{{ route('pages.regist_vip') }}" style="color: #FFFFFF;">- ĐĂNG KÝ TÀI KHOẢN VIP</a></p>
                                <p><a href="{{route('pages.outsourcing_package')}}" style="color: #FFFFFF;">- DỊCH VỤ THUÊ NGOÀI TRỌN GÓI</a></p>
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
                            <div class="fb-page" data-href="https://www.facebook.com/CVBANKVN/" data-tabs="timeline" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/CVBANKVN/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CVBANKVN/">NGÂN HÀNG ỨNG VIÊN</a></blockquote></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="bottom-nav">
        <div class="container">
            <div class="row footer-content">
                <div class="copyright col-md-6">© 2016 <a href="http://nganhangungvien.com" class="text_pink ">WWW.NGANHANGUNGVIEN.COM</a> - NGÂN HÀNG ỨNG VIÊN - Thiết kế bởi <a href="http://bloomgoo.vn" class="text_pink ">BLOOMGOO.VN</a></div>
                
            </div><!--/row-->
        </div><!--/container-->
    </div>
    <br/>
</footer>