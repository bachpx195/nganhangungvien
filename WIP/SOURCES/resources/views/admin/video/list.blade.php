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
                    <form action="{{ route('admin.video') }}" class="form-horizontal form-row-seperated" role="form" method="POST" enctype="multipart/form-data">
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