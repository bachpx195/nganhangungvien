@extends('global_admin')
<title>@lang('messages.site.title')</title>
@section('content')
    <div class="row">
        <div class="col-sm-12 text-center">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Tỉnh/Thành phố </label>
                            <form id="user" class="form-horizontal" role="form" method="get" action="{{ route('admin.province.list') }}">
                                <div class="col-md-3">
                                    <input type="text" class="form-control input-circle" name="name" value="{{ $name }}">
                                </div>
                                
                                <div class="col-md-2">
                                    <input type="submit" class="btn btn-circle green" value="Tìm Kiếm">
                                </div>
                            </form>
                        </div>
                        <table id="datatable1" class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên tỉnh</th>
                                <th>Quản lý</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if(count($provinceList) > 0)
                                    @foreach($provinceList as $index=>$item)
                                        <tr class="gradeX">
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                <a href="{{route('admin.province.form'). '?id=' . $item->id}}" target="_blank">
                                                    <button type="button" class="btn btn-icon-toggle" data-toggle="tooltip"
                                                     data-placement="top" data-original-title="Edit row"><i class="fa fa-pencil"></i></button></a>
                                                <a class="sweet-delete"
                                                    data-id="{{$item->id}}"
                                                    data-url="{{route('admin.province.delete', ['id' => $item->id])}}">
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
                            {!! $provinceList->render() !!}
                        </div>
                    </div><!--end .table-responsive
            </div><!--end .row -->
        </div>
    </div>
@endsection