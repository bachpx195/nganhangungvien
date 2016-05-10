@extends('global')

<title>@lang('messages.user.form')</title>

@section('content')

<h3 class="page-title">@lang('messages.user.form')</h3>

<form id="user" role="form" method="get" action="{{ route('user.list') }}">
	
	<div class="form-inline">
		<div class="form-group col-md-4">
			<label>
				@lang('messages.user.model.username')
			</label>
				<input type="text" class="form-control" name="name" value="{{ $name }}">
		</div>
		
		<div class="form-group col-md-4">
			<label>
				@lang('messages.user.model.email')
			</label>
			<input type="text" class="form-control" name="email" value="{{ $email }}">
		</div>
		
		<div class="form-group col-md-4">
			<label>
				@lang('messages.user.model.phone')
			</label>
			<input type="text" class="form-control" name="phone" value="{{ $phone }}">
		</div>
		
		<div class="spacer-10"></div>
		
		<div class="col-md-2">
			<input type="submit" class="btn btn-primary" value="@lang('messages.form.button.search')">
		</div>
	</div>
</form>

<div class="spacer-10"></div>

<div class="row">
	<div class="form-group">
		<div class="col-md-6">
			@lang('messages.form.search.total', ['total' => $userList->total()])
		</div>
		<div class="col-md-6 text-right">
			<a href="form"><i class="fa fa-plus"></i> @lang('messages.form.global.add')</a>
		</div>
	</div>
</div>

<div class="spacer-5"></div>

<div class="box box-color">
	<div class="box-content nopadding">
		<table class="table table-hover nomargin table-job">
			<thead>
				<tr>
					<th>#</th>
					<th>@lang('messages.user.model.username')</th>
					<th>@lang('messages.user.model.full_name')</th>
					<th>@lang('messages.user.model.email')</th>
					<th>@lang('messages.user.model.phone')</th>
					<th>@lang('messages.user.model.role')</th>
					<th>@lang('messages.user.model.active')</th>
					<th class="col-sm-2">@lang('messages.form.global.manager')</th>
				</tr>
			</thead>
			<tbody>
				@if(count($userList) > 0)
					@foreach($userList as $index=>$user)
						<tr>
							<td>{{ ($userList->currentPage() - 1) * $userList->perPage() + $index + 1 }}</td>
							<td>{{ $user->username }}</td>
							<td>{{ $user->full_name }}</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->phone }}</td>
							<td>
								{{ $user->role->name }}
							</td>
							<td>
								@if($user->active == 1)
									Sử dụng
								@else
									Không sử dụng
								@endif
							</td>
							<td>
								<a href="{{ route('user.form') . '?id=' . $user->id }}">
									<i class="fa fa-edit"></i> @lang('messages.form.global.edit') 
								</a> 
								&nbsp;&nbsp;
								<a class="deleteLink" data-href="{{ route('user.delete', ['id' => $user->id]) }}" href="#">
									<i class="fa fa-remove"></i> @lang('messages.form.global.delete') 
								</a>
							</td>
						</tr>
					@endforeach
				@else
					<tr>
						<td colspan="5">
							@lang('messages.notification.noresult')
						</td>
					</tr>
				@endif
			</tbody>
		</table>
	</div>
	
	<?php echo $userList->render(); ?>
</div>

<script type="text/javascript">
$(document).ready(function() {

	$('.deleteLink').click(function(e){

		e.preventDefault();
		if(confirm('@lang('messages.notification.delete_warning')')){

			var url = $(this).attr('data-href');

			NProgress.start();
			$.post( url, {_token: '{{ csrf_token() }}' }, function( data ) {
				NProgress.done();
				if (data.status == true) {
	    			toastr.success("@lang('messages.notification.delete_success')");
	    		}
	    		else {
	    			toastr.error("@lang('messages.notification.delete_faild'): " + data.message);
	    		}
	    		location.reload();
			}, "json");
		}
	});    
});
</script>
@endsection