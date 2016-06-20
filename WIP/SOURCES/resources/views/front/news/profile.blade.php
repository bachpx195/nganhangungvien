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
               <p>---<br />Download: <a href="{{ $news->link? $news->link : ''}}" target="_blank" rel="nofollow">{{ $news->link? $news->link : ''}}</a>&nbsp;<br>Mật khẩu: <i> {{ $news->password? $news->password : ''}} </i>&nbsp;</p></p>
            </div>
         </div>
         @include('front/news/news_right_sidebar')
         <!--END right-->
         <div class="clb ovh"></div>
      </div>
   </div>
</div>
@endsection
