

@extends('front/global')
@section('content')
<div class="">
   <div class="top-ads clearfix mb10">
      <div class="row w_100">
         <script type="text/javascript" src="http://admicro1.vcmedia.vn/ads_codes/ads_box_221.ads"></script>
         <script type="text/javascript" src="//admicro1.vcmedia.vn/core/admicro_core_nld.js?id=1"></script>
         <div style="height:0px; width:0px; overflow:hidden;">
            <object style="visibility:hidden;" type="application/x-shockwave-flash" height="0" width="0"
               classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="_admFlck" bgcolor="#ffffff">
               <param value="//adi.vcmedia.vn/adt/flck.swf?id=1" name="movie">
               <param value="true" name="allowFullScreen">
               <param value="opaque" name="wmode">
               <param value="always" name="allowscriptaccess">
               <embed width="0" height="0" allowfullscreen="true" allowscriptaccess="always" quality="high"
                  name="_admFlck" id="_admFlck" src="//adi.vcmedia.vn/adt/flck.swf?id=1"
                  type="application/x-shockwave-flash" wmode="opaque">
            </object>
            <object type="application/x-shockwave-flash" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
               width="1px" height="1px" id="shareObject" name="shareObject">
               <param value="//adi.vcmedia.vn/adt/cpc/tvcads/2012/demoTVC/Temperature/share_object.swf"
                  name="movie">
               <param value="high" name="quality">
               <param value="transparent" name="wmode">
               <param value="11.0.0.0" name="swfversion">
               <param value="false" name="allowFullScreen">
               <param value="always" name="allowScriptAccess">
               <embed src="//adi.vcmedia.vn/adt/cpc/tvcads/2012/demoTVC/Temperature/share_object.swf"
                  pluginspage="http://www.macromedia.com/go/getflashplayer"
                  type="application/x-shockwave-flash" allowscriptaccess="always" wmode="transparent"
                  quality="high" name="shareObject" width="1px" height="1px" id="shareObject">
            </object>
         </div>
      </div>
   </div>
   {!! component()->uses('CandidateStatistics', ['args' => '1'])->render() !!}
   <div class="box_title_content w_100 font16 pos_relative mb_30 mt_16">
      <h1 class="title_title_box pl_8 pr_8 uppercase bold text_blue">Cổng dành cho nhà tuyển dụng (610,976)</h1>
   </div>
   @include('front/home/search', ['dropdownData' => $dropdownData])
   <!-- Phan loai ho theo -->
   <h3 class="title_text_line mt24 fwb">
      <span class="text-tim-nhat uppercase">Phân loại hồ sơ người tìm việc theo :</span>
   </h3>
   @include('front/home/classification', ['tabsData' => $tabsData])
   <!--End phan loai ho theo --->
   <!-- ho so moi nhat -->
   <div class="box_tab pt_22">
      <div role="tabpanel">
         <!-- Nav tabs -->
         <ul class="nav nav-tabs w_100" role="tablist">
            <li role="presentation" class="active ml1"><span class="left_tab"></span><a href="#viecmoi" aria-controls="viecmoi" role="tab" data-toggle="tab" class="bold font16 uppercase m0">Hồ sơ tìm việc mới nhất</a><span class="right_tab"></span></li>
            <li role="presentation" class="ml_20"><span class="left_tab"></span><a href="#viecmoi2" aria-controls="viecmoi2" role="tab" data-toggle="tab" class="bold font16 uppercase m0">Hồ sơ tìm việc nhiều người xem nhất</a><span class="right_tab"></span></li>
         </ul>
         <!-- Tab panes -->
         <div class="tab-content w_100">
            <div role="tabpanel" class="tab-pane active" id="viecmoi">
               <div class="list_item_two bg_white">
                  @foreach($candidatesData['candidate'] as $index => $key)
                  <div class="{{ $index % 2 == 0 ? 'col_list_left':'col_list_right'}} floatLeft floatLeft">
                     <div class="list-items item_link">
                        <span class="title-blockjob-main truncate-ellipsis font14">
                        <a href="#" class="link_box_panel1 text_grey2 ">
                        {{ $key->cv_title }}                     </a>
                        </span>
                        <span class="title-blockjob-sub truncate-ellipsis font14">
                        <a href="#" class="link_box_panel2 text_grey">
                        {{ $key->full_name}}                         <span class="text_pink display_inline">(Cập nhật: {{DateTimeHelper::formatDate($key->updated)}})</span>
                        </a>
                        </span>
                        <div class="s22_list_note_icon">
                           <div class="w_33 floatLeft">
                              <div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
                                 <i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
                                 {{ $key->salary }}                        
                              </div>
                           </div>
                           <div class="w_33 floatLeft">
                              <div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
                                 <i class="icon_select_box icon_time_list icon_24 icon-24"></i>
                                 {{ $key->exp_years }}                            
                              </div>
                           </div>
                           <div class="w_33 floatLeft">
                              <div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
                                 <i class="icon_select_box icon_local_list icon_24 icon-24"></i>
                                 {{ $key->province }}                        
                              </div>
                           </div>
                        </div>
                        <div class="line_list"></div>
                     </div>
                  </div>
                  @endforeach
               </div>
               <a href="#">
                  <h3 class="btn btn-lg w_100 btn-nobg btn_more_list">
                     <i class="icon_load_more icon_24 icon-24"></i>
                     Xem thêm Hồ sơ mới nhất        
                  </h3>
               </a>
            </div>
            <div role="tabpanel" class="tab-pane" id="viecmoi2">
               <div class="list_item_two bg_white">
                  @foreach($candidatesData['bestView'] as $index => $key)
                  <div class="{{ $index % 2 == 0 ? 'col_list_left':'col_list_right'}} floatLeft floatLeft">
                     <div class="list-items item_link">
                        <span class="title-blockjob-main truncate-ellipsis font14">
                        <a href="#" class="link_box_panel1 text_grey2 ">
                        {{ $key->cv_title }}                     </a>
                        </span>
                        <span class="title-blockjob-sub truncate-ellipsis font14">
                        <a href="#" class="link_box_panel2 text_grey">
                        {{ $key->full_name}}                         <span class="text_pink display_inline">(Cập nhật: {{DateTimeHelper::formatDate($key->updated)}})</span>
                        </a>
                        </span>
                        <div class="s22_list_note_icon">
                           <div class="w_33 floatLeft">
                              <div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
                                 <i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
                                 {{ $key->salary }}                        
                              </div>
                           </div>
                           <div class="w_33 floatLeft">
                              <div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
                                 <i class="icon_select_box icon_time_list icon_24 icon-24"></i>
                                 {{ $key->exp_years }}                            
                              </div>
                           </div>
                           <div class="w_33 floatLeft">
                              <div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
                                 <i class="icon_select_box icon_local_list icon_24 icon-24"></i>
                                 {{ $key->province }}                        
                              </div>
                           </div>
                        </div>
                        <div class="line_list"></div>
                     </div>
                  </div>
                  @endforeach
               </div>
               <a href="https://vieclam24h.vn/danh-sach-ung-vien-nhieu-nguoi-xem.html">
                  <h3 class="btn btn-lg w_100 btn-nobg btn_more_list">
                     <i class="icon_load_more icon_24 icon-24"></i>
                     Xem thêm Hồ sơ được xem nhiều nhất        
                  </h3>
               </a>
            </div>
         </div>
      </div>
   </div>
   <!-- END ho so moi nhat -->
   <!-- Thong tin lien he -->
   @include('front/home/contact_info')
   <!-- END Thong tin lien he -->
</div>
@endsection

