@if(file_exists( public_path() . '/company/images/' . $userImage ))
    <img src="{{URL::to('/') . '/company/images/' . $userImage}}" alt="">
@else
    <img src="{{ URL::asset('assets/image/default.png') }}" alt="" />
@endif