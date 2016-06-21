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
                           <a href="{{route('news.profile', ['slug' => StringHelper::uri($new->title), 'id' => $new->id])}}" title="{{ $new->title? $new->title : ''}}" target="_blank">
                           <img src="{{ isset($new['image']) ? URL::to('/') . '/news/images/' . $new->image : URL::asset('assets/image/default.png') }}" />
                           </a>
                           <h2>
                              <a href="{{route('news.profile', ['slug' => StringHelper::uri($new->title), 'id' => $new->id])}}" title="{{ $new->title? $new->title : ''}}" target="_blank">
                              {{ $new->title? $new->title : ''}}                               </a>
                           </h2>
                           <div class="date">{{ $new->updated_at? $new->updated_at : ''}}</div>
                           <p><?php echo substr(strip_tags($new->description), 0, 295); ?>...<a rel="nofollow" target="_blank" href="{{route('news.profile', ['slug' => StringHelper::uri($new->title), 'id' => $new->id])}}" title="{{ $new->title? $new->title : ''}}">
                              Xem chi tiết
                              </a>
                           </p>

                           <p>Download: <a href="{{ $new->link? $new->link : ''}}" target="_blank" title="{{ $new->link }}" rel="nofollow">{{ $new->link? substr($new->link, 0, 50) : ''}}...</a>&nbsp;</p>
                           <p>Mật khẩu: <i> {{ $new->password? $new->password : ''}} </i>&nbsp;</p>
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
                  @include('front/news/news_right_sidebar')
                  <!--END right-->
                  <div class="clb ovh"></div>
               </div>
            </div>
         </div>
      </div>
@endsection
