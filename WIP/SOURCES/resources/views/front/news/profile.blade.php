@extends('front/news/news_layout')
@section('content')
<div class="content_dangky bg_white mt16 box_shadow" >
   <div class="sub-content">
      <div class="container">
         <div class="left-container">
            <h1 class="title">{{ $news->title? $news->title : ''}}</h1>
            <br>
            <div class="content-write">
               <strong><?php echo "$news->description" ?></strong>
               <?php echo "$news->content" ?>
               <p>---<br />  
                  @if(!empty($new->link))
                     <p>Download: <a href="{{ $new->link? $new->link : ''}}" target="_blank" title="{{ $new->link }}" rel="nofollow">{{ $new->link? substr($new->link, 0, 50) : ''}}...</a>&nbsp;</p>
                  @endif
                  @if(!empty($new->password))
                     <p>Mật khẩu: <i> {{ $new->password? $new->password : ''}} </i>&nbsp;</p>
                  @endif
            </div>
            <p>&nbsp;</p>
                  <h3 class="title-right"><span>Bài viết liên quan</span></h3>
                  <div class="blog-other">
                     @foreach($otherNews as $index => $new)
                        <div class="wrapper-qt-right">
                           <a href="{{route('news.profile', ['slug' => StringHelper::uri($new->title), 'id' => $new->id])}}" title="{{ $new->title? $new->title : ''}}" target="_blank"><img width="58" height="58" alt="{{ $new->title? $new->title : ''}}" src="{{ isset($new['image']) ? URL::to('/') . '/news/images/' . $new->image : URL::asset('assets/image/default.png') }}" class="avatar" /></a>
                           <div class="wr-name">
                              <h4><a href="{{route('news.profile', ['slug' => StringHelper::uri($new->title), 'id' => $new->id])}}" title="{{ $new->title? $new->title : ''}}" target="_blank">{{ $new->title? $new->title : ''}}</a></h4>
                           </div>
                        </div>
                     @endforeach
                  </div>
         </div>

         @include('front/news/news_right_sidebar')
         <!--END right-->
         <div class="clb ovh"></div>
      </div>
   </div>
</div>
@endsection
