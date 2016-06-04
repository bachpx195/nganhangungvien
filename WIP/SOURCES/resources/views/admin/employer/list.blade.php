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
            success: function() {
                console.log("Request sent success!");
            }
        })
    };
</script>
@section('content')
    <div class="row">
        <div class="col-sm-12 text-center">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <div class="search-bar ">
                            <div class="row">
                                <div class="col-md-5">
                                    <form id="user" class="form-horizontal" role="form" method="get" action="{{ route('admin.employer.list') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Tên nhà tuyển dụng/Tên công ty/Số điện thoại" name="keyword" value="{{ $keyword }}" >
                                            <span class="input-group-btn">
                                                <input type="submit" class="btn blue uppercase bold" value="Tìm Kiếm">
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <table id="employerList" class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Nhà tuyển dụng</th>
                                <th>Tên công ty</th>
                                <th>Số điện thoại</th>
                                <th>Người liên hệ</th>
                                <th>Quản lý</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($employers) > 0)
                                @foreach($employers as $index=>$item)
                                    <tr class="gradeX">
                                        <td>{{ isset($item->user) && $item->user ? $item->user->username : '' }}</td>
                                        <td>{{ $item->company_name }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->contact_person }}</td>
                                        <td>
                                            @if($item->status == 1)
                                                <a href="javascript:;" onclick="changeEmployerStatus({{$item->id}}, 0);" class="btn blue btn-outline sbold " id="status-active-{{ $item->id }}"> Enabled </a>
                                            @else
                                                <a href="javascript:;" onclick="changeEmployerStatus({{$item->id}}, 1);" class="btn gray btn-outline sbold " id="status-disable-{{ $item->id }}"> Disabled </a>
                                            @endif
                                            <a href="{{route('admin.employer.detail', ['id' => $item->id])}}" target="_blank">
                                                <button type="button" class="btn btn-icon-toggle" data-toggle="tooltip"
                                                        data-placement="top" data-original-title="Edit row"><i class="fa fa-pencil"></i></button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5">Chưa có nhà tuyển dụng phù hợp</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                        <div class="box_pagination_footer text-center">
                            {!! $employers->render() !!}
                        </div>
                    </div><!--end .table-responsive -->
                </div><!--end .col -->
            </div><!--end .row -->
        </div>
    </div>
@endsection