@if(file_exists( public_path() . '/news/images/' . $newsImage ))
    <img src="{{URL::to('/') . '/news/images/' . $newsImage}}" alt="">
@else
    <img src="{{ URL::asset('assets/image/default.png') }}" alt="" />
@endif