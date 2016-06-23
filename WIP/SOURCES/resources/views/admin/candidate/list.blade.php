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
                    <div class="row">
                        @include('admin.candidate.form_search', ['dropdownData' => $dropdownData])
                    </div>
                    <div class="row">
                        Kết quả: <span id="countResult">0</span> ứng viên
                    </div>
                    <div class="row">
                        <div id="grid"></div>
                    </div>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('/assets/apps/scripts/candidate/candidate.js') }}"></script>
@endsection