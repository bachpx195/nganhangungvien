@extends('global_admin')
<title>@lang('messages.site.title')</title>
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> {{$pageTitle}}</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <button class="btn sbold green">
                                <a href="{{route('admin.candidate.form')}}" target="_blank" class="add-more-btn">
                                    <span style="margin-right: 10px;">THÊM HỒ SƠ</span><i class="fa fa-plus"></i>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="datatable_ajax">
                        <thead>
                            <tr>
                                <th style="width: 10px;">STT</th>
                                <th style="width: 15%;">Hồ sơ ứng viên</th>
                                <th style="width: 20%;">Email</th>
                                <th style="width: 20%;">Tên ứng viên</th>
                                <th style="width: 15%;">Mức lương</th>
                                <th>Kinh nghiệm</th>
                                <th style="width: 61px;"></th>
                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection