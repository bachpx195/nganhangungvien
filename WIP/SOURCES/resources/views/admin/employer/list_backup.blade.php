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
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> {{$pageTitle}}</span>
                    </div>
                    <div class="actions">

                    </div>
                </div>
                <div class="portlet-body" id="admin-employers">
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                            <tr>
                                <th style="width: 10px;">STT</th>
                                <th style="width: 20%;">Nhà tuyển dụng</th>
                                <th>Tên công ty</th>
                                <th style="width: 12%;">Số điện thoại</th>
                                <th style="width: 15%;">Người liên hệ</th>
                                <th style="width: 5%;">Set VIP</th>
                                <th style="width: 85px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($employers) > 0)
                            @foreach($employers as $index=>$item)
                                <tr class="gradeX odd" role="row">
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->company_name }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->contact_person }}</td>
                                    <td style="text-align: center;">
                                        <input type="checkbox" class="icheck set-vip"  @if($item->vip == 1) checked @endif
                                               data-id="{{$item->id}}" data-vip="{{$item->vip}}"
                                               data-url="{{route('admin.employer.set_vip', ['id' => $item->id])}}"
                                        >
                                    </td>
                                    <td style="width: 85px;">
                                        <a class="change-status"
                                           data-id="{{$item->id}}" data-status="{{$item->status}}"
                                           data-url="{{route('admin.employer.status', ['id' => $item->id])}}">
                                            @if($item->status == 1)
                                                <button type="button" class="btn-employer btn blue btn-outline" data-toggle="tooltip"
                                                        data-placement="top" data-original-title="Click to disable employer"> Hiện </button>
                                            @else
                                                <button type="button" class="btn-employer btn dark btn-outline" data-toggle="tooltip"
                                                        data-placement="top" data-original-title="Click to enable employer"> Ẩn </button>
                                            @endif
                                        </a>
                                        <a href="{{route('admin.employer.detail', ['id' => $item->id])}}">
                                            <button type="button" class="btn btn-icon-toggle" data-toggle="tooltip"
                                                    data-placement="top" data-original-title="Edit row"><i class="fa fa-pencil"></i></button></a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            Chưa có hồ sơ phù hợp
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('/assets/apps/scripts/employer/employer.js') }}"></script>
@endsection