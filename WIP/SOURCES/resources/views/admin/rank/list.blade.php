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
                        <span class="caption-subject bold uppercase"> Danh sách</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                                <div class="col-md-5">
                                    <form id="user" class="form-horizontal" role="form" method="get" action="{{ route('admin.rank.list') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Cấp bậc..." name="name" value="{{ $name }}" >
                                            <span class="input-group-btn">
                                                <input type="submit" class="btn sbold green" value="Tìm Kiếm">
                                            </span>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-7">
                                    <div class="btn-group pull-right">
                                        <button id="sample_editable_1_new" class="btn sbold green" onclick="location.href='{{ route('admin.rank.form') }}'">Thêm mới
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover table-checkable order-column">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th class="text-center" >Cấp bậc</th>
                                <th class="text-right" >Quản lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($rankList) > 0)
                                @foreach($rankList as $index=>$item)
                                <tr class="odd gradeX">
                                    <td>{{ $index + 1 }}</td>
                                    <td class="text-center">{{ $item->name }}</td>
                                    <td class="text-right">
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
                                Chưa có thông tin phù hợp!
                            @endif                             
                        </tbody>
                    </table>
                    <div class="box_pagination_footer text-center">
                        {!! $rankList->render() !!}
                    </div>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection