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

                    </div>
                </div>
                <div class="portlet-body" id="admin-transactions">
                    <div class="row">
                        @include('admin.transaction.form_search')
                    </div>
                    <div class="row">
                        Kết quả: <span id="countResult">0</span> giao dịch
                    </div>
                    <div class="row">
                        <div id="grid"></div>
                    </div>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('/assets/apps/scripts/transaction/transaction.js') }}"></script>
@endsection