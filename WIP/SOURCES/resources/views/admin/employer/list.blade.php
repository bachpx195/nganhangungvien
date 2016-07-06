@extends('global_admin')
<title>@lang('messages.site.title')</title>
<style type="text/css">
    .btn-employer {
        width: 55px;
    }
</style>
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light ">
                <input type="hidden" id="_currentRoleId" value="{{ $role->code }}">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> {{$pageTitle}}</span>
                    </div>
                    <div class="actions">

                    </div>
                </div>
                <div class="portlet-body" id="admin-employers">
                    <div class="row">
                        @include('admin.employer.form_search', ['provinces' => $provinces])
                    </div>
                    <div class="row">
                        Kết quả: <span id="countResult">0</span> nhà tuyển dụng
                    </div>
                    <div class="row">
                        <div id="grid"></div>
                    </div>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('/assets/apps/scripts/employer/employer.js') }}"></script>
@endsection