@extends('front/global')

<title>ĐĂNG KÝ BỘ CÔNG THƯƠNG</title>

@section('content')
    @if (Auth::check() && Auth::user()->user_type == 'employer')
        <div class="content_dangky" style="padding-left:232px;">
            @else
                <div class="content_dangky">
                    @endif
                    <div class="bg_white mt16 box_shadow">
                        <div class="block_ntv_dangky regis_header h_56" id="regis_header">

                            <div class="w_50 floatLeft">
                                <span class="title_ntd_dky "></span><span
                                        class="uppercase bold fs16 color_ntd_dky">ĐĂNG KÝ BỘ CÔNG THƯƠNG</span>
                            </div>
                        </div>
                        <div class="regis_content_1">
                            <div class="block-content">
                                <div class="mb8">
                                    <div class="center-p12p24">
                                        <div style="width: 90%; margin-top: 30px; margin-left: 20px; padding-bottom: 30px; min-height: 512px;">
                                            <a href="{{route('pages.chinhSachBaoMat')}}" target="_blank"> CHÍNH SÁCH BẢO MẬT THÔNG TIN</a><br/><br/>
                                            <a href="{{route('pages.deAnWebsite')}}" target="_blank"> ĐỀ ÁN CUNG CẤP DỊCH VỤ THƢƠNG MẠI ĐIỆN TỬ NGANHANGUNGVIEN.VN</a><br/><br/>
                                            <a href="{{route('pages.donDangKy')}}" target="_blank"> ĐƠN ĐĂNG KÝ WEBSITE CUNG CẤP DỊCH VỤ THƯƠNG MẠI ĐIỆN TỬ</a><br/><br/>
                                            <a href="{{route('pages.giaiQuyTranhChap')}}" target="_blank"> CƠ CHẾ GIẢI QUYẾT TRANH CHẤP</a><br/><br/>
                                            <a href="{{route('pages.mauHopDong')}}" target="_blank"> MẪU HỢP ĐỒNG THỎA THUẬN NGANHANGUNGVIEN.VN</a><br/><br/>
                                            <a href="{{route('pages.quyCheWebsite')}}" target="_blank"> QUY CHẾ HOẠT ĐỘNG SÀN GIAO DỊCH THƢƠNG MẠI ĐIỆN TỬ NGANHANGUNGVIEN.COM</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
@endsection
