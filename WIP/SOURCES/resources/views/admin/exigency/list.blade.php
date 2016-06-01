@extends('global_admin')
<title>@lang('messages.site.title')</title>
@section('content')
    <div class="row">
        <div class="col-sm-12 text-center">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                         <div class="search-bar ">
                            <div class="row">
                                <div class="col-md-5">
                                    <form id="user" class="form-horizontal" role="form" method="get" action="{{ route('admin.exigency.list') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Nhu cầu công việc..." name="name" value="{{ $name }}" >
                                            <span class="input-group-btn">
                                                <input type="submit" class="btn blue uppercase bold" value="Tìm Kiếm">
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <table id="datatable1" class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Nhu cầu công việc</th>
                                <th class="text-right" >Quản lý</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if(count($exigencyList) > 0)
                                    @foreach($exigencyList as $index=>$item)
                                        <tr class="gradeX">
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td class="text-right">
                                                <a href="{{route('admin.exigency.form'). '?id=' . $item->id}}" target="_blank">
                                                    <button type="button" class="btn btn-icon-toggle" data-toggle="tooltip"
                                                     data-placement="top" data-original-title="Edit row"><i class="fa fa-pencil"></i></button></a>
                                                <a class="sweet-delete"
                                                    data-id="{{$item->id}}"
                                                    data-url="{{route('admin.exigency.delete', ['id' => $item->id])}}">
                                                    <button type="button" class="btn btn-icon-toggle " data-toggle="tooltip"
                                                            data-placement="top" data-original-title="Delete row"><i class="fa fa-trash-o"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    Chưa có tin tức phù hợp!
                                @endif
                            </tbody>
                        </table>
                        <div class="box_pagination_footer text-center">
                            {!! $exigencyList->render() !!}
                        </div>
                    </div><!--end .table-responsive
            </div><!--end .row -->
        </div>
    </div>
@endsection