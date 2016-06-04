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
                                <a href="{{route('admin.rank.form')}}" target="_blank" class="add-more-btn">
                                    THÊM CẤP BẬC <i class="fa fa-plus"></i>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                            <tr>
                                <th style="width: 10px;">STT</th>
                                <th class="no-sort" style="width: 85%;" class="text-center">Cấp bậc</th>
                                <th style="width: 61px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($rankList) > 0)
                                @foreach($rankList as $index=>$item)
                                    <tr class="gradeX odd" role="row">
                                        <td class="text-center">{{ $index + 1 }}</td>
                                        <td class="text-center">{{ $item->name }}</td>
                                        <td>
                                            <a href="{{route('admin.rank.form'). '?id=' . $item->id}}" target="_blank">
                                                <button type="button" class="btn btn-icon-toggle" data-toggle="tooltip"
                                                 data-placement="top" data-original-title="Edit row"><i class="fa fa-pencil"></i></button></a>
                                            <a class="sweet-delete"
                                                data-id="{{$item->id}}"
                                                data-url="{{route('admin.rank.delete', ['id' => $item->id])}}">
                                                <button type="button" class="btn btn-icon-toggle " data-toggle="tooltip"
                                                        data-placement="top" data-original-title="Delete row"><i class="fa fa-trash-o"></i></button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                Chưa có thông tin phù hợp
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection