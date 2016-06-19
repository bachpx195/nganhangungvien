@extends('front/news/news_layout')
@section('content')
      <!--banner-->
         <div class="content_dangky bg_white mt16 box_shadow" >
         <div class="sub-content">
            <div class="container">
               <div class="wrapper-content">
                  <div class="left-container blogs">
                     
                        <ul>
                           @foreach($news as $new)
                           <li>
                              <a href="{{route('news.profile', ['slug' => StringHelper::uri($new->title), 'id' => $new->id])}}" title="{{ $new->title? $new->title : ''}}">
                              <img src="{{ isset($new['image']) ? URL::to('/') . '/news/images/' . $new->image : URL::asset('assets/image/default.png') }}" />
                              </a>
                              <h2>
                                 <a href="{{route('news.profile', ['slug' => StringHelper::uri($new->title), 'id' => $new->id])}}" title="{{ $new->title? $new->title : ''}}">
                                 {{ $new->title? $new->title : ''}}                               </a>
                              </h2>
                              <div class="date">{{ $new->updated_at? $new->updated_at : ''}}</div>
                              <p style="display: inline";><?php echo "$new->description"; ?><a rel="nofollow" href="{{route('news.profile', ['slug' => StringHelper::uri($new->title), 'id' => $new->id])}}" title="{{ $new->title? $new->title : ''}}">
                                 Xem chi tiết
                                 </a>
                              </p>
                              Download: <a href="{{ $new->link? $new->link : ''}}" target="_blank" rel="nofollow">{{ $new->link? $new->link : ''}}</a>&nbsp;</p>

                              Mật khẩu: <i> {{ $new->password? $new->password : ''}} </i>&nbsp;</p>
                              <div class="social" style="float: right;">
                                 <div class="fb-like" data-href="{{ URL::to('/').'/'.StringHelper::uri($new->title) }}" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                              </div>
                           </li>
                           @endforeach
                        </ul>
                         <div class="row">
                             <div class="col-lg-12 text-center">
                                 <ul class="pagination pagination-lg">
                                     {!! $news->render() !!}
                                 </ul>
                             </div><!--end .col -->
                         </div>
                  </div>
                  <!--END left-->
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
      </div>
@endsection
