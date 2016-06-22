@extends('global_admin')
<title>@lang('messages.site.title')</title>
<style type="text/css">
    #js-transaction .dataTables_length {
        display: none;
    }
    #js-transaction .dataTables_paginate {
        display: none;
    }
</style>
@section('content')
    <div id="js-transaction" class="row">
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
                            <th style="width: 15%;">Nhà tuyển dụng</th>
                            <th>Tên công ty</th>
                            <th style="width: 20%;">Hồ sơ ứng viên</th>
                            <th style="width: 15%;">Thời gian</th>
                            <th style="width: 10%;">Số tiền</th>
                            <th style="width: 10%;">Còn lại</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($transactions) > 0)
                            @foreach($transactions as $index=>$item)
                                <tr class="gradeX odd" role="row">
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->company_name }}</td>
                                    <td>
                                        <a target="_blank" href="{{route('candidate.profile', ['slug' => StringHelper::uri($item->cv_title), 'id' => $item->candidateId])}}">{{ $item->candidateName }}</a> ({{ $item->cv_title }})
                                    </td>
                                    <td>{{ $item->created_at }}</td>
                                    <td class="number">
                                        {{ number_format($item->balance, 0) }} VNĐ
                                    </td>
                                    <td class="number">
                                        {{ number_format($item->amount, 0) }} VNĐ
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            Chưa có lịch sử giao dịch nào
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection