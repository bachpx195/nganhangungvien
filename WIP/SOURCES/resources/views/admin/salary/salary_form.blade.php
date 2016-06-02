@extends('global_admin')
<title>@lang('messages.site.title')</title>
@section('content')
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i>Quản lý Lương </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>
            <a href="javascript:;" class="reload"> </a>
            <a href="javascript:;" class="remove"> </a>
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form id="salary" class="form-horizontal" role="form" method="POST" action="{{ route('admin.salary.form') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" id="id" name="id" value="{{ $salary->id }}" />
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Mức Lương <span class="required" aria-required="true">*</span></label>
                    <div class="col-md-4">
                        <input type="text" class="form-control input-circle" name="name" value="{{ old('name') != null ? old('name') : $salary->name }}" data-rule-required="true">

                    </div>
                </div>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                {{ $errors->first('name') }}
                            </span>
                        @endif
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <input type="submit" id="btn-save" class="btn btn-circle green" value="Cập nhật">
                        <button type="button" class="btn btn-circle grey-salsa btn-outline" onClick="window.location='{{ route('admin.salary.list') }}'">Hủy</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>
<script>
$(function() {
    jQuery("body")
    .on("click", "#btn-save", function(){
        
        $form = $(this).closest('form');
        
        var validator = $form.validate({
            ignore      : "", 
            errorClass  : 'help-block has-error'
        });
        if(validator.form()) {
            $form.submit();
        } else {
        }
    });
});
</script>

@endsection