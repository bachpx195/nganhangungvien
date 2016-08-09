@extends('global_admin')
<title>@lang('messages.admin.title.video')</title>
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> @lang('messages.admin.title.video')</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">

                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <form action="{{ route('admin.video') }}" class="form-horizontal form-row-seperated" role="form" method="POST" enctype="multipart/form-data" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-2">Link Youtube</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control input-lg2 color-input" value="{{$videoLink}}" name="videoLink" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Link Kênh Youtube </label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control input-lg2 color-input" value="{{$videoLinkChanel}}" name="videoLinkChanel" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Banner trái</label>
                                <div class="col-md-10" style="padding-left: 0px;">
                                    <div class="col-md-9">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail">
                                                <a href="{{route('employer.register') }}"><img style="height: 91px; width: 469px;"  src="{{ !empty($bannerLeftImageConfig['value']) ? URL::to('/') . '/banner/images/' . $bannerLeftImageConfig->value : URL::asset('assets/default/images/banner.png') }}" alt="" /> </a></div>
            <!--                                     @include('admin.common.news_image',
                                                array('newsImage' => isset($news['image']) ? $news['image'] : URL::asset('assets/image/default.png'))) -->
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                            <div>
                                                <span class="btn red btn-outline btn-file">
                                                    <span class="fileinput-new"> Chọn hình ảnh </span>
                                                    <span class="fileinput-exists"> Thay đổi </span>
                                                    <input  type="file" name="banner_left_image_"> </span>
                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Hủy </a>
                                            </div>
                                        </div>
                                        <div class="clearfix margin-top-10">
                                            <span class="label label-success">LƯU Ý!</span> (Dạng file ảnh .jpg, .gif, .png có kích thước khuyên dùng 469 x 92px ) </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Banner phải</label>
                                <div class="col-md-10" style="padding-left: 0px;">
                                    <div class="col-md-9">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail">
                                                <a href="{{route('candidate/form') }}"><img style="height: 91px; width: 469px;" src="{{ !empty($bannerRightImageConfig['value']) ? URL::to('/') . '/banner/images/' . $bannerRightImageConfig->value : URL::asset('assets/default/images/banner.png') }}" alt="" /></a> </div>
            <!--                                     @include('admin.common.news_image',
                                                array('newsImage' => isset($news['image']) ? $news['image'] : URL::asset('assets/image/default.png'))) -->
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                            <div>
                                                <span class="btn red btn-outline btn-file">
                                                    <span class="fileinput-new"> Chọn hình ảnh </span>
                                                    <span class="fileinput-exists"> Thay đổi </span>
                                                    <input  type="file" name="banner_right_image_"> </span>
                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Hủy </a>
                                            </div>
                                        </div>
                                        <div class="clearfix margin-top-10">
                                            <span class="label label-success">LƯU Ý!</span> (Dạng file ảnh .jpg, .gif, .png có kích thước khuyên dùng 469 x 92px ) </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Banner tài liệu</label>
                                <div class="col-md-10" style="padding-left: 0px;">
                                    <div class="col-md-9">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail">
                                                <img style="height: 200px; width: 340px;"  src="{{! empty($newsBannerImageConfig['value']) ? URL::to('/') . '/banner/images/' . $newsBannerImageConfig->value : URL::asset('/banner/images/blog-340x200.jpg') }}" alt="" /> </div>
            <!--                                     @include('admin.common.news_image',
                                                array('newsImage' => isset($news['image']) ? $news['image'] : URL::asset('assets/image/default.png'))) -->
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                            <div>
                                                <span class="btn red btn-outline btn-file">
                                                    <span class="fileinput-new"> Chọn hình ảnh </span>
                                                    <span class="fileinput-exists"> Thay đổi </span>
                                                    <input  type="file" name="news_banner_image_"> </span>
                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Hủy </a>
                                            </div>
                                        </div>
                                        <div class="clearfix margin-top-10">
                                            <span class="label label-success">LƯU Ý!</span> (Dạng file ảnh .jpg, .gif, .png có kích thước khuyên dùng 340 x 200px ) </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="sss-label col-md-2">Điều khoản sử dụng </label>
                                <div class="col-md-10">
                                    <textarea class="form-control input-lg2 color-input" style="height: 280px;" name="policy" >{{$policy}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Hướng dẫn</label>
                                <div class="col-md-10">
                                    Link Youtube cần có dạng <b>https://www.youtube.com/watch?v=tOlqnMr_3Sg</b>
                                    <br>hoặc <b>https://www.youtube.com/embed/tOlqnMr_3Sg</b> (trong đó tOlqnMr_3Sg là mã của video trên Youtube)
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <input type="submit" id="btn-save" class="btn btn-circle green" value="Cập nhật">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection