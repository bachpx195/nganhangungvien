<div class="top-ads clearfix mb4">
	<div class="row w_100 txc">
		<a href="{{route('employer.register') }}"><img class="mr_30" style="height: 91px; width: 469px;" src="{{ !empty($bannerLeftImageConfig['value']) ? URL::to('/') . '/banner/images/' . $bannerLeftImageConfig->value : URL::asset('assets/default/images/banner.png') }}"></a>
		<a href="{{route('candidate/form') }}"><img class="mr_30" style="height: 91px; width: 469px;" src="{{ !empty($bannerRightImageConfig['value']) ? URL::to('/') . '/banner/images/' . $bannerRightImageConfig->value : URL::asset('assets/default/images/banner.png') }}"></a>

	</div>
</div>