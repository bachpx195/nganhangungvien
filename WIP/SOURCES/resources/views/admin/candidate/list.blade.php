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
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                    <button class="btn sbold green">
                                        <a href="{{route('admin.candidate.form')}}" target="_blank" class="add-more-btn">
                                            THÊM HỒ SƠ <i class="fa fa-plus"></i>
                                        </a>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                            <tr>
                                <th style="width: 15%;">Hồ sơ ứng viên</th>
                                <th style="width: 20%;">Email</th>
                                <th style="width: 20%;">Tên ứng viên</th>
                                <th style="width: 15%;">Mức lương</th>
                                <th>Kinh nghiệm</th>
                                <th style="width: 10%;">Actions</th>
                            </tr>
                        </thead>
                    <tbody>
                        @if(count($candidates) > 0)
                            @foreach($candidates as $index=>$item)
                                <tr class="gradeX odd" role="row">
                                    <td>{{ $item->cv_title }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->full_name }}</td>
                                    <td>{{$item->expectSalary ? $item->expectSalary->name : ''}}</td>
                                    <td>{{$item->experienceYears ? $item->experienceYears->name : ''}}</td>
                                    <td>
                                        <a href="{{route('admin.candidate.update', ['id' => $item->id])}}" target="_blank">
                                            <button type="button" class="btn btn-icon-toggle" data-toggle="tooltip"
                                                    data-placement="top" data-original-title="Edit row"><i class="fa fa-pencil"></i></button></a>
                                        <a class="sweet-delete"
                                           data-id="{{$item->id}}"
                                           data-url="{{route('admin.candidate.delete', ['id' => $item->id])}}">
                                            <button type="button" class="btn btn-icon-toggle " data-toggle="tooltip"
                                                    data-placement="top" data-original-title="Delete row"><i class="fa fa-trash-o"></i></button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            Chưa có hồ sơ phù hợp
                        @endif
                    </tbody>
                    </table>
                    <div class="box_pagination_footer text-center">
                        {!! $candidates->render() !!}
                    </div>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection