@if(file_exists( public_path() . $userImage ))
    <img src="{{URL::to('/') . $userImage}}" alt="">
@else
    <img src="{{ URL::asset('assets/image/default.png') }}" alt="" />
@endif