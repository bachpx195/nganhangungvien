

@extends('front/global')
@section('content')
<div class="">

	@include('front/home/ads')
	
	@include('front/home/count',['coutData' => $countData])
	
	@include('front/home/search', ['dropdownData' => $dropdownData, 'countData' => $countData, 'linkYouTube' => $linkYouTube])

	<!-- Phan loai ho theo -->
	<h3 class="title_text_line mt24 fwb">
		<span class="text-tim-nhat uppercase">Phân loại hồ sơ người tìm việc theo :</span>
	</h3>

	@include('front/home/classification', ['tabsData' => $tabsData])
	<!--End phan loai ho theo --->

	<!-- ho so moi nhat -->
   @include('front/home/candidate_new_view', ['candidatesData' => $candidatesData])
   <!-- END ho so moi nhat -->

	<!-- Thong tin lien he -->
	@include('front/home/contact_info')
	<!-- END Thong tin lien he -->

</div>
@endsection

