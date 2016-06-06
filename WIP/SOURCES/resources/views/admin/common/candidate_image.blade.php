@if(file_exists( public_path() . '/candidate/image/' . $candidateImage ))
    <img src="{{URL::to('/') . '/candidate/image/' . $candidateImage}}" alt="">
@else
    <img src="{{ URL::asset('assets/image/default.png') }}" alt="" />
@endif