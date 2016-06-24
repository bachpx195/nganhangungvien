@extends('global_admin')

@section('content')
    <link href="{{ asset('/assets/default/css/main_ntd.css') }}" rel="stylesheet" property='stylesheet'
          type='text/css' media='all'>
    <link href="{{ asset('/assets/default/css/main2.css') }}" rel="stylesheet" property='stylesheet'
          type='text/css' media='all'>

    <!-- BEGIN EXAMPLE TABLE PORTLET-->
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption font-dark">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject bold uppercase"> {{$pageTitle}}</span>
            </div>
            <div class="actions">
                <div class="btn-group">
                    <span class="required_r">(<label>*</label>)Thông tin bắt buộc nhập</span>
                </div>
            </div>
        </div>
        <div class="portlet-body">

            @if (!empty($candidate['email_errors']))
                <div class="block-note-ths">
                    <div class="pos-dang-ky-hotline">
                        {{ $candidate['email_errors'] }}
                        <div class="ln_hr"></div>
                    </div>
                </div>
            @endif

            <div class="content_dangky">
                <div class="clearfix"></div>
                <div class="mt8"></div>
                <form id="candidate-form" class="form-horizontal" role="form" method="POST" action="{{$action}}"
                      name="candidate_form"  enctype="multipart/form-data">
                    <div class="block-content div-frm-hoso">
                        <div class="mb8">
                            <div class="center-p12p24">
                            </div>
                        </div>
                    </div>)
                </form>
            </div>
        </div>
    </div>
    <!-- END EXAMPLE TABLE PORTLET-->
@endsection