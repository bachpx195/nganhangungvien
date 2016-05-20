<div class="box_tab">
	<div role="tabpanel">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs w_100" role="tablist">
			<li role="presentation" class="active ml1"><span class="left_tab"></span><a href="#viec_nganhnghe" aria-controls="viec_nganhnghe" role="tab" data-toggle="tab" class="bold font16 uppercase m0">Ngành nghề</a><span class="right_tab"></span></li>
			<li role="presentation" class="ml_20"><span class="left_tab"></span><a href="#viec_kinhnghiem_hocvan_mucluong" aria-controls="viec_kinhnghiem_hocvan_mucluong" role="tab" data-toggle="tab" class="bold font16 uppercase m0">Kinh nghiệm - Học vấn - Mức lương</a><span class="right_tab"></span></li>
			<li role="presentation" class="ml_20"><span class="left_tab"></span><a href="#viec_tinh" aria-controls="viec_tinh" role="tab" data-toggle="tab" class="bold font16 uppercase m0">Tỉnh thành</a><span class="right_tab"></span></li>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content w_100">
			<div role="tabpanel" class="tab-pane active" id="viec_nganhnghe">
				<div class="search_nghanhnghe list_item_one bg_white">
					<div class="clearfix"></div>
					<div id="gate_nganhnghe_hot" class="box_nganhnghe list_nganhnghe_all mt_10 ">
						<div class="content_box_ola">
							@foreach($tabsData['careers'] as $index =>  $item)
								<div class="w_33 floatLeft {{ ( $index < 9 ? 'bold' : '') }} nganhnghe_item " data-khong-dau="Ke toan-Kiem toan"><a href="#{{ $item->id }}" class="text_black">{{ $item->name }} <span class="text_pink">({{ $item->num_candidates }})</span></a></div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="viec_kinhnghiem_hocvan_mucluong">
				<div class="list_item_two bg_white">
					<div>
						<div class="list-items listkinhnghiem">
							<div class="detail-link pos_relative">
								<div class="w_100 mb10">
									<span class="title-blockjob-main truncate-ellipsis font14 text_violet bold">Chọn kinh nghiệm :</span>
								</div>
								<div class="clear"></div>
								<div class="list_note_kinhnghiem">
									@foreach($tabsData['experienceYears'] as $index =>  $item)
										<div class="listkn"><a href="{{ $item->id }}#" class="nounder"><b>- {{ $item->name }} :</b> {{ $item->num_candidates }}</a></div>
									@endforeach
								</div>
								<div class="clear"></div>
								<div class="mb10"></div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="list-items listkinhnghiem">
							<div class="detail-link pos_relative">
								<div class="w_100 mb10">
									<span class="title-blockjob-main truncate-ellipsis font14 text_violet bold">Chọn học vấn :</span>
								</div>
								<div class="clear"></div>
								<div class="list_note_kinhnghiem">
									@foreach($tabsData['levels'] as $index =>  $item)
										<div class="listkn"><a href="{{ $item->id }}#" class="nounder"><b>- {{ $item->name }} :</b> {{ $item->num_candidates }}</a></div>
									@endforeach
								</div>
								<div class="clear"></div>
								<div class="mb10"></div>
								<div class="line_list"></div>
							</div>
						</div>
						<div class="list-items listkinhnghiem">
							<div class="detail-link pos_relative">
								<div class="w_100 mb10">
									<span class="title-blockjob-main truncate-ellipsis font14 text_violet bold">Chọn mức lương :</span>
								</div>
								<div class="clear"></div>
								<div class="list_note_kinhnghiem">
									@foreach($tabsData['salaries'] as $index =>  $item)
										<div class="listkn"><a href="{{ $item->id }}#" class="nounder"><b>- {{ $item->name }} :</b> {{ $item->num_candidates }}</a></div>
									@endforeach
								</div>
								<div class="clear"></div>
							</div>
							<div class="mb10"></div>
						</div>
					</div>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="viec_tinh">
				<div class="search_nghanhnghe list_item_one bg_white">
					<div class="clearfix"></div>
					<div  id="gate_tinhthanh_sl"class="box_tinhthanh list_nganhnghe_all mt_10">
						<div class="content_box_ola">
							@foreach($tabsData['provinces'] as $index =>  $item)
								<div class="w_33 floatLeft tinh_item {{ ( $index < 9 ? 'bold' : '') }}"><a href="#{{ $item->id }}" class="text_black">{{ $item->name }}<span class="text_pink"> ({{ $item->num_candidates }})</span></a></div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>