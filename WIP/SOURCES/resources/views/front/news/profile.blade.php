@extends('front/news/news_layout')
@section('content')
<div class="content_dangky bg_white mt16 box_shadow" >
   <div class="sub-content">
      <div class="container">
         <div class="left-container">
            <h1 class="title">{{ $news->title? $news->title : ''}}</h1>
            <br>
            <div class="content-write">
               <?php echo "$news->content" ?>
               <p>---<br />Download: <a href="{{ $news->link? $news->link : ''}}" target="_blank" rel="nofollow">{{ $news->link? $news->link : ''}}</a>&nbsp;<br>Mật khẩu: <i> {{ $news->password? $news->password : ''}} </i>&nbsp;</p></p>
            </div>
         </div>
         <div class="right-container">
            <!-- <div class="500k"><a href="http://www.kiotviet.com/gioithieukhachhang/" target="_blank"><img src="https://www.kiotviet.vn/wp-content/themes/kiotviet/images/500k.png" alt="500k" title="Khách hàng nhận thưởng" style="max-width:100%; margin-bottom:20px; vertical-align:top" /></a></div> -->
            <div class="box-two box-add">
               <a href="https://www.kiotviet.vn/gioithieukhachhang/" target="_blank">
               <img src="https://www.kiotviet.vn/wp-content/themes/kiotviet/images/blog-340x200.jpg">
               </a>
            </div>
            <div class="box-two blog-facebook" style="border: 1px solid #aaa;">
               <h3 class="title-right"><span>Facebook</span></h3>
               <div class="wrapper-qt-right" style="padding-top: 0px;">
                  <div class="fb-like-box" data-href="https://www.facebook.com/PhanmembanhangKiotViet" data-width="285px" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
               </div>
               <div class="clb ovh">&nbsp;</div>
            </div>
         </div>
         <!--END right-->
         <div class="clb ovh"></div>
      </div>
   </div>
</div>
@endsection
