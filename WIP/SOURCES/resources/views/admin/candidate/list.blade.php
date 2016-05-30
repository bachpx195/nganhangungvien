@extends('global_admin')
<title>@lang('messages.site.title')</title>
@section('content')
    <div class="row">
        <div class="col-sm-12 text-center">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table id="datatable1" class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Hồ sơ ứng viên</th>
                                <th>Tên ứng viên</th>
                                <th>Mức lương</th>
                                <th>Kinh nghiệm</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if(count($candidates) > 0)
                                    @foreach($candidates as $index=>$item)
                                        <tr class="gradeX">
                                            <td>{{ $item->cv_title }}</td>
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
                    </div><!--end .table-responsive -->
                </div><!--end .col -->
            </div><!--end .row -->
        </div>
    </div>
@endsection