@extends('global_admin')
<title>@lang('messages.site.title')</title>
<style type="text/css">
    .custom-thumbnail {
        display: block;
        padding: 4px;
        line-height: 1.42857143;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        -webkit-transition: border .2s ease-in-out;
        -o-transition: border .2s ease-in-out;
        transition: border .2s ease-in-out;
    }
    .custom-upload-image {
        width: 180px;
        height: 140px;
    }
    .floatLeft {
        float: left;
    }
    .item-row {
        margin-bottom: 7px;
        margin-top: 7px;
    }
</style>
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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="item-row">
                                                <b>Tên công ty:</b> {{ $employer->company_name }}
                                            </div>
                                            <div class="item-row">
                                                <b>Địa chỉ:</b> {{ $employer->company_address }}
                                            </div>
                                            <div class="item-row">
                                                <b>Điện thoại cố định:</b> {{ $employer->phone }}
                                            </div>
                                            <div class="item-row">
                                                <b>Website:</b> <a href="{{ $employer->website }}" target="_blank">{{$employer->website}}</a>
                                            </div>
                                            <div class="item-row">
                                                <b>Tỉnh/Thành phố: </b> {{ $employer->provinceName }}
                                            </div>
                                            <div class="item-row">
                                                <b>Quy mô công ty: </b> {{ $employer->companySize }}
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div style="margin-bottom: 5px;"><b>Ảnh đại diện:</b></div>
                                            <div class="fileinput-new custom-thumbnail custom-upload-image floatLeft">
                                                @if(empty($employer->image))
                                                    <img src="{{ URL::asset('assets/image/default.png') }}" height="130"
                                                         width="170" alt=""/>
                                                @else
                                                    <img src="{{ URL::to('/') . $employer->image }}" height="130"
                                                         width="170" alt=""/>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <b>Địa chỉ:</b> {{ $employer->company_address }}
                                    </p>
                                </div>
                            </div>
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
                    <div class="portlet box purple">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Thông tin tài khoản </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <p><b>Tài khoản: </b> {{ number_format($employer->balance) }} VNĐ</p>
                            <p><b>Loại tài khoản: </b> {{ $employer->vipState == 1 ? 'TÀI KHOẢN VIP' : 'Tài khoản thường' }} </p>
                        </div>
                    </div>
                </div>
                <!--end col-md-4-->
            </div>
        </div>
    </div>
@endsection