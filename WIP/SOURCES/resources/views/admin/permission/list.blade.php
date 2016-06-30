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
                    <table class="table table-striped table-bordered table-hover table-checkable order-column"
                           id="sample_1">
                        <thead>
                        <tr>
                            <th style="width: 10px;">STT</th>
                            <th style="width: 15%;" class="text-center">Tên đăng nhập</th>
                            <th style="width: 20%;" class="text-center">Họ và tên</th>
                            <th class="text-center">Email</th>
                            <th style="width: 15%;" class="text-center">Tên quyền</th>
                            <th style="width: 15%;" class="text-center">Ngày cập nhật</th>
                            <th style="width: 25px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($userRoles) > 0)
                            @foreach($userRoles as $index=>$item)
                                <tr class="gradeX odd" role="row">
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->full_name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->roleName }}</td>
                                    <td>{{ date('d/m/Y H:i', strtotime($item->updated_at)) }}</td>
                                    <td>
                                        <a class="change-permission" data-id="{{ $item->userId }}" data-role="{{ $item->roleId }}">
                                            <button type="button" class="btn btn-icon-toggle" data-toggle="tooltip"
                                                    data-placement="top" data-original-title="Phân quyền"><i
                                                        class="fa fa-pencil"></i></button>
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
        <div class="col-sm-10" style="display: none;">
            <div id="modal-content">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="role" class="col-sm-2">Quyền</label>
                        <div class="col-sm-10">
                            <select name="role" class="form-control chosen" id="role">
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.permission.permission_js')
@endsection