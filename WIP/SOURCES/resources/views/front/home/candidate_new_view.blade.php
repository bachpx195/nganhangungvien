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
                        <a href="{{route('candidate.profile', ['slug' => StringHelper::uri($key->cv_title), 'id' => $key->id])}}" class="link_box_panel1 text_grey2 ">
                        {{ $key->cv_title }}                     </a>
                        </span>
                        <span class="title-blockjob-sub truncate-ellipsis font14">
                        <a href="{{route('candidate.profile', ['slug' => StringHelper::uri($key->cv_title), 'id' => $key->id])}}" class="link_box_panel2 text_grey">
                        {{ $key->full_name}}                         <span class="text_pink display_inline">(Cập nhật: {{DateTimeHelper::formatDate($key->updated)}})</span>
                        </a>
                        </span>
                        <div class="s22_list_note_icon">
                           <div class="w_33 floatLeft">
                              <div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
                                 <i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
                                 {{ $key->salary? $key->salary: '&nbsp;' }}                        
                              </div>
                           </div>
                           <div class="w_33 floatLeft">
                              <div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
                                 <i class="icon_select_box icon_time_list icon_24 icon-24"></i>
                                 {{ $key->exp_years? $key->exp_years: '&nbsp;' }}                            
                              </div>
                           </div>
                           <div class="w_33 floatLeft">
                              <div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
                                 <i class="icon_select_box icon_local_list icon_24 icon-24"></i>
                                 @if(count($key->expectAddresses) > 0)
                                 @foreach($key->expectAddresses as $index=>$item)
                                    {{$item->name}}<span
                                    class="text_pink">@if($index < count($key->expectAddresses) - 1), 
                                    @endif 
                                 @endforeach 
                                 @endif                      
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
                        <a href="{{route('candidate.profile', ['slug' => StringHelper::uri($key->cv_title), 'id' => $key->id])}}" class="link_box_panel1 text_grey2 ">
                        {{ $key->cv_title }}                     </a>
                        </span>
                        <span class="title-blockjob-sub truncate-ellipsis font14">
                        <a href="{{route('candidate.profile', ['slug' => StringHelper::uri($key->cv_title), 'id' => $key->id])}}" class="link_box_panel2 text_grey">
                        {{ $key->full_name}}                         <span class="text_pink display_inline">(Cập nhật: {{DateTimeHelper::formatDate($key->updated)}})</span>
                        </a>
                        </span>
                        <div class="s22_list_note_icon">
                           <div class="w_33 floatLeft">
                              <div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Mức lương">
                                 <i class="icon_select_box icon_moneybox2 icon_24 icon-24"></i>
                                 {{ $key->salary? $key->salary: '&nbsp;' }}                        
                              </div>
                           </div>
                           <div class="w_33 floatLeft">
                              <div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Kinh nghiệm">
                                 <i class="icon_select_box icon_time_list icon_24 icon-24"></i>
                                 {{ $key->exp_years? $key->exp_years: '&nbsp;' }}                            
                              </div>
                           </div>
                           <div class="w_33 floatLeft">
                              <div class="note_mucluong text-center font12 text_black" data-toggle="tooltip" data-placement="bottom" title="Địa điểm">
                                 <i class="icon_select_box icon_local_list icon_24 icon-24"></i>
                                 @if(count($key->expectAddresses) > 0)
                                 @foreach($key->expectAddresses as $index=>$item)
                                    {{$item->name}}<span
                                    class="text_pink">@if($index < count($key->expectAddresses) - 1), 
                                    @endif 
                                 @endforeach 
                                 @endif                         
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
                     Xem thêm Hồ sơ được xem nhiều nhất        
                  </h3>
               </a>
            </div>
         </div>
      </div>
   </div>
   <!-- END ho so moi nhat -->