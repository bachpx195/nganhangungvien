<div style="padding:0px;margin:0px">
    <div style="font-family:'Roboto',sans-serif;font-size:14px;line-height:1.4;font-weight:400;margin:0px;background:#eeeeee">
        <div style="width:578px!important;padding:0px;margin-right:auto;margin-left:auto">
            <!--<div style="min-height:70px;background-color:#4a1c68">
                <div style="float:left">
                    <div style="min-width:160px;min-height:56px;float:left">
                        <div><a href="http://nganhangungvien.com" target="_blank"></a></div>
                    </div>
                </div>
                <div style="color:#47a743;margin:27px 40px 0 0;float:right;font-size:18px!important">
                    Người tốt - <span class="il">Việc</span> <span class="il">làm</span> tốt
                </div>

                <u></u>
            </div>-->
            <div style="background-color:#46a741;width:100%;min-height:7px;display:block">
            </div>

            <div style="padding:20px;background-color:#fff;font-size:14px!important">
                <p>Kính chào <span style="font-weight:bold">{{$fullname}}</span>!<br>
                    <br>
                    Ngân Hàng Ứng Viên xin Trân trọng Thông báo Quý khách đã đã đăng ký tài khoản Nhà Tuyển dụng Thành Công tại  Website:<a href="http://nganhangungvien.com" target="_blank">http://nganhangungvien.com</a> với địa chỉ e-mail <span>{{ $email }}</span>.</p>

                <p>Thông tin tài khoản của bạn như sau:<br>
                    - Tài khoản đăng nhập: <span style="font-weight:bold; text-decoration: none; color: black;">{{ $email }}</span><br>
                    - Mật khẩu : <span style="font-weight:bold">{{$password}}</span></p>

                <p>Vui lòng xác thực tài khoản để tạo hồ sơ trực tuyến và được tìm kiếm bởi các Nhà tuyển dụng hàng đầu bằng cách bấm vào link dưới đây:</p>
                <p></p>
                <br/>
                <center>
                <?php $password_crypt = Crypt::encrypt($password);?>
                <a href="{{ URL::to('kich-hoat/'.$id.'-'.$code.'-'.$password_crypt) }}" title="kích hoạt" target="_blank" style="font-size: 14px;
                              text-decoration: none;
                              box-shadow: 0px 1px 2px 0px rgba(50, 50, 50, 0.27);
                              text-transform: uppercase;
                              display: block;
                              width: 40%;    color: #313534;
                              background: #ffa726;
                              color: #FFFFFF;
                              border-color: #e5e6e6;    margin-bottom: 0;
                              font-weight: normal;
                              text-align: center;
                              vertical-align: middle;
                              touch-action: manipulation;
                              cursor: pointer;
                              background-image: none;
                              border: 1px solid transparent;
                              white-space: nowrap;
                              padding: 10px 10px;
                              font-size: 13px;
                              line-height: 1.846153846;
                              border-radius: 2px;
                              border-spacing: 0;
                              border-collapse: collapse;
                              -webkit-user-select: none;" ><strong>XÁC THỰC TÀI KHOẢN</strong></a>
                </center>
                <br/>
                <P></p>
                <p>Nếu bạn có bất kỳ thắc mắc nào, hãy liên hệ với chúng tôi để nhận được sự hỗ trợ nhanh nhất.</p>

                <p><em><strong>Mọi ý kiến thắc mắc</strong></em> <strong><em>vui lòng liên hệ:</em></strong></p>

                <p>- Hotline: 04 6684 7421</p>

                <p>- Email: <a href="mailto:hotro@nganhangungvien.com" target="_blank">hotro@nganhangungvien.com</a></p>

                <p>Website:<a href="http://nganhangungvien.com" target="_blank">http://nganhangungvien.com</a>
                </p>

                <p>Trân trọng!</p>

            </div>

            <!--<div style="padding:0px 20px 10px 20px;background-color:#fff;margin:20px 0;min-height:95px;border:2px solid #46a741">
                <div style="margin-top:21px">
                    <table border="0">
                        <tbody>
                        <tr>
                            <td>
                                <img src="https://ci6.googleusercontent.com/proxy/kQ7k9715WE1Mcv0GEjHTuV7E2EHiIfJXoJjujHYPdavfgQWi0sptBSJS9RE1lSkm3-PJpIXnJibfpeVoO5quYAKf5wJ3ci-ENSulrmBk2QU50Q=s0-d-e1-ft#https://vieclam24h.vn/asset/default/images/email_contact.png"
                                     style="vertical-align:middle;border:0" class="CToWUd"></td>
                            <td style="padding-left:20px">
                                <p style="margin:0 0 10px"><span class="il">Việc</span> <span class="il">làm</span>
                                    <span class="il">24h</span> hôm qua có <span style="color:#47a743;font-weight:bold"> 2,274 </span>
                                    hồ sơ mới và <span style="color:#47a743;font-weight:bold"> 6,518 </span> hồ sơ cập
                                    nhật mới, trong tổng số <span
                                            style="color:#47a743;font-weight:bold"> 611,137 </span> hồ sơ đang tìm <span
                                            class="il">việc</span>
                                </p>
                                <a href="http://nganhangungvien.com"
                                   style="text-decoration:underline;font-weight:bold;color:#f77f00" target="_blank">Bấm xem ngay &gt;&gt;</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>-->
            <p style="text-align:center;font-size:12px!important"><a href="http://nganhangungvien.com" target="_blank">www.nganhangungvien.com</a></p>
            <div class="yj6qo"></div>
            <div class="adL">
            </div>
        </div>
        <div class="adL">
        </div>
    </div>
    <div class="adL">
    </div>
</div>