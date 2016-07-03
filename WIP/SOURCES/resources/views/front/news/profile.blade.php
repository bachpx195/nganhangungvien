@extends('front/global')
@section('content')
    <div class="content_dangky bg_white mt16 box_shadow">
        <div class="sub-content">
            <div class="container">

                <div class="wrapper-content">
                    <div class="row">
                        <div class="col-md-9">
                            <h1 class="title mt_10">{{ $news->title? $news->title : ''}}</h1>
                            <br>
                            <div class="content-write">
                                <strong><?php echo "$news->description" ?></strong>
                                <?php echo "$news->content" ?>
                                <p>---<br/>
                                @if(!empty($new->link))
                                    <p>Download: <a href="{{ $new->link? $new->link : ''}}" target="_blank"
                                                    title="{{ $new->link }}"
                                                    rel="nofollow">{{ $new->link? substr($new->link, 0, 50) : ''}}
                                            ...</a>&nbsp;</p>
                                @endif
                                @if(!empty($new->password))
                                    <p>Mật khẩu: <i> {{ $new->password? $new->password : ''}} </i>&nbsp;</p>
                                @endif
                            </div>
                            <h3 class="title-right"><span>Bài viết liên quan</span></h3>

                            @foreach($otherNews as $index => $new)
                                    @if ($index%2 == 0)
                                        <div class="row mt_10">
                                        <div class="col-md-6">
                                            <a class="mr_10" href="{{route('news.profile', ['slug' => StringHelper::uri($new->title), 'id' => $new->id])}}"
                                               title="{{ $new->title? $new->title : ''}}" target="_blank">
                                                <img width="58" height="58" alt="{{ $new->title? $new->title : ''}}"
                                                     src="{{ isset($new['image']) ? URL::to('/') . '/news/images/' . $new->image : URL::asset('assets/image/default.png') }}"
                                                     class="avatar"/>
                                            </a>
                                            <a href="{{route('news.profile', ['slug' => StringHelper::uri($new->title), 'id' => $new->id])}}"
                                               title="{{ $new->title? $new->title : ''}}"
                                               target="_blank">{{ $new->title? $new->title : ''}}</a>
                                        </div>

                                         @if (count($otherNews)-1 == $index)
                                             </div>
                                         @endif
                                    @else
                                        <div class="col-md-6">
                                            <a class="mr_10" href="{{route('news.profile', ['slug' => StringHelper::uri($new->title), 'id' => $new->id])}}"
                                               title="{{ $new->title? $new->title : ''}}" target="_blank">
                                                <img width="58" height="58" alt="{{ $new->title? $new->title : ''}}"
                                                     src="{{ isset($new['image']) ? URL::to('/') . '/news/images/' . $new->image : URL::asset('assets/image/default.png') }}"
                                                     class="avatar"/>
                                            </a>
                                            <a href="{{route('news.profile', ['slug' => StringHelper::uri($new->title), 'id' => $new->id])}}"
                                               title="{{ $new->title? $new->title : ''}}"
                                               target="_blank">{{ $new->title? $new->title : ''}}</a>
                                        </div>

                                        </div>
                                    @endif
                            @endforeach
                        </div>
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
