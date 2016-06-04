@extends('global_admin')
<title>@lang('messages.site.title')</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script type="text/javascript">
    function changeEmployerStatus(id, status) {
        $.ajax({
            type: "POST",
            url: 'http://localhost/employer/status/' + id,
            data: {'status': status},
            dataType: 'JSON',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function () {
                console.log("Request sent success!");
            }
        })
    }
    ;
</script>
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
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                        <tr>
                            <th style="width: 3%;">STT</th>
                            <th style="width: 20%;">Nhà tuyển dụng</th>
                            <th style="width: 30%;">Tên công ty</th>
                            <th style="width: 12%;">Số điện thoại</th>
                            <th style="width: 15%;">Người liên hệ</th>
                            <th style="width: 15%;"></th>
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
                                    <td>
                                        <a class="change-status"
                                           data-id="{{$item->id}}" data-status="{{$item->status}}"
                                           data-url="{{route('admin.employer.status', ['id' => $item->id])}}">
                                            @if($item->status == 1)
                                                <button type="button" class="btn blue btn-outline" data-toggle="tooltip"
                                                        data-placement="top" data-original-title="Click to disable employer"> Enabled </button>
                                            @else
                                                <button type="button" class="btn dark btn-outline" data-toggle="tooltip"
                                                        data-placement="top" data-original-title="Click to enable employer"> Disabled </button>
                                            @endif
                                        </a>
                                        <a href="{{route('admin.employer.detail', ['id' => $item->id])}}" target="_blank">
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
@endsection