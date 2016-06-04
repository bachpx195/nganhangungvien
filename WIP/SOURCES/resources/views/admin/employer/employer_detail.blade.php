@extends('global_admin')
<title>@lang('messages.site.title')</title>
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-8 profile-info">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i> Thông tin công ty </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <h3 class="font-green sbold uppercase"> {{ $employer->company_name }}</h3>
                            <p style="text-align: justify;">
                                {{$employer->company_description}}
                            </p>
                            <p>
                                <b>Địa chỉ:</b> {{ $employer->company_address }}
                            </p>
                            <ul class="list-inline">
                                <li>
                                    <i class="fa fa-map-marker"></i> {{ isset($employer->province) && $employer->province ? $employer->province->name : '' }} </li>
                                <li>
                                    <i class="fa fa-link"></i> <a href="{{ $employer->website }}">{{$employer->website}}</a> </li>
                                <li>
                                    <i class="fa fa-users"></i> {{ $employer->company_size }} </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end col-md-8-->
                <div class="col-md-4">
                    <div class="portlet box purple">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Thông tin liên hệ </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <p><i class="fa fa-user"></i> {{ $employer->contact_person }} </p>
                            <p><i class="fa fa-envelope-o"></i> {{ $employer->contact_email }} </p>
                            <p><i class="fa fa-phone"></i> {{ $employer->contact_phone }} </p>
                        </div>
                    </div>
                </div>
                <!--end col-md-4-->
            </div>
        </div>
    </div>
@endsection