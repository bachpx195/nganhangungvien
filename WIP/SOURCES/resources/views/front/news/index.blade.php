@extends('front/global')
@section('content')
      <!--banner-->
        @if (Auth::check() && Auth::user()->user_type == 'employer')
            <div style="padding-left:232px;" class="content_dangky mt16" >
        @else
            <div class="content_dangky  mt16" >
        @endif
         <div class="sub-content bg_white">
            <div class="container">
               <div class="wrapper-content">
                   <div class="row">
                       <div class="col-md-9">
                           @foreach($news as $new)

                               <div class="row" style="margin-top: 20px;">
                                   <div class="col-md-3">
                                       <a href="{{route('news.profile', ['slug' => StringHelper::uri($new->title), 'id' => $new->id])}}" title="{{ $new->title? $new->title : ''}}" target="_blank">
                                           <img src="{{ isset($new['image']) ? URL::to('/') . '/news/images/' . $new->image : URL::asset('assets/image/default.png') }}" width="100%"/>
                                       </a>
                                   </div>
                                   <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2>
                                                    <a href="{{route('news.profile', ['slug' => StringHelper::uri($new->title), 'id' => $new->id])}}" title="{{ $new->title? $new->title : ''}}" target="_blank">
                                                        {{ $new->title? $new->title : ''}}                               </a>
                                                </h2>
                                            </div>
                                        </div>
                                       <div class="row">
                                           <div class="col-md-12">
                                               <div class="date">{{ $new->updated_at? $new->updated_at : ''}}</div>
                                               <p><?php echo substr(strip_tags($new->description), 0, 295); ?>...<a rel="nofollow" target="_blank" href="{{route('news.profile', ['slug' => StringHelper::uri($new->title), 'id' => $new->id])}}" title="{{ $new->title? $new->title : ''}}">
                                                       Xem chi tiết
                                                   </a>
                                               </p>
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-md-12">
                                               @if(!empty($new->link))
                                                   <p>Download: <a href="{{ $new->link? $new->link : ''}}" target="_blank" title="{{ $new->link }}" rel="nofollow">{{ $new->link? substr($new->link, 0, 50) : ''}}...</a>&nbsp;</p>
                                               @else
                                                   <br>
                                                   <br>
                                               @endif
                                               @if(!empty($new->password))
                                                   <p>Mật khẩu: <i> {{ $new->password? $new->password : ''}} </i>&nbsp;</p>
                                               @else
                                                   <br>
                                                   <br>
                                               @endif
                                           </div>
                                       </div>
                                   </div>
                               </div>

                           @endforeach

                           <div class="row">
                               <div class="col-lg-12 text-center">
                                   <ul class="pagination pagination-lg">
                                       {!! $news->render() !!}
                                   </ul>
                               </div><!--end .col -->
                           </div>
                       </div>
                       <!--END left-->

                       <div class="col-md-3">
                           @include('front/news/news_right_sidebar')
                           <!--END right-->
                       </div>
                   </div>
               </div>
            </div>
         </div>
      </div>
@endsection