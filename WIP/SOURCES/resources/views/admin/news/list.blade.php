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
                                <th>STT</th>
                                <th>Tiêu đề</th>
                                <th>Đường dẫn</th>
                                <th>Ngày đăng</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if(count($news) > 0)
                                    @foreach($news as $index=>$item)
                                        <tr class="gradeX">
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->link }}</td>
                                            <td>{{ date('F d, Y', strtotime($item->updated_at)) }}</td>
                                            <td>
                                                <a href="{{route('new.form'). '?id=' . $item->id}}" target="_blank">
                                                    <button type="button" class="btn btn-icon-toggle" data-toggle="tooltip"
                                                     data-placement="top" data-original-title="Edit row"><i class="fa fa-pencil"></i></button></a>
                                                <a class="sweet-delete"
                                                    data-id="{{$item->id}}"
                                                    data-url="{{route('admin.news.delete', ['id' => $item->id])}}">
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
                            {!! $news->render() !!}
                        </div>
                    </div><!--end .table-responsive -->
                </div><!--end .col -->
            </div><!--end .row -->
        </div>
    </div>
@endsection