@extends('front/global')
<style type="text/css">
    #list_hs {
        min-height: 180px;
    }
</style>
@section('content')

    @if (Auth::check() && Auth::user()->user_type == 'employer')
        <div class="content_cols-right" style="padding-left:232px;">
    @else
        <div class="content_cols-right">
    @endif
    <div class="content_cols-right pt_16 pb_24">
        <div class="mh_415">
            <h3 class="title_text_line mt_24 mb_8 uppercase">
                <span class="fwb txt-color-363636 fs20">Hồ sơ tìm việc đã lưu</span>
            </h3>
            <div class="box_tab bg_white box_shadow pt_12 pl_14 pr_14 pb_16">
                <div class="w_100">
                    <div class="box_info font14">
                        <div class="tablehsut">
                            <div id="list_hs">
                                <input id="hdfStart" type="hidden" name="start" value="{{ $start }}">
                                <input id="hdfLimit" type="hidden" name="limit" value="{{ $limit }}">
                                <table>
                                    <thead>
                                    <tr style="background: rgb(245, 245, 245);">
                                        <th style="width: 45px;">STT</th>
                                        <th>Tên hồ sơ ứng viên</th>
                                        <th style="width: 20%;">Thời gian lưu</th>
                                    </tr>
                                    </thead>
                                    <tbody id="table_employer_saved_cv">
                                    @if(count($saveCvs) > 0)
                                        @foreach($saveCvs as $index=>$item)
                                            <tr>
                                                <td style="width: 45px;">
                                                    {{ $index + 1 }}
                                                </td>
                                                <td>
                                                    <a href="{{route('candidate.profile', ['slug' => StringHelper::uri($item->cv_title), 'id' => $item->candidateId])}}">{{ $item->candidateName }}</a> ({{ $item->cv_title }})
                                                </td>
                                                <td style="width: 20%;">
                                                    {{ $item->created_at }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="center">Bạn chưa lưu hồ sơ nào</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                            @if(count($saveCvs) > 0)
                                <div class="transaction_table_bottom center button_load_more">
                                    <button id="btnShowMoreSavedCv"
                                            class="btn btn-white no-shadow btn-xs font14 pr_12 pl_6 mt_10 show_popup_s33_4">
                                    <span class="line-icon">
                                        <i class="icon-24 icon_24 icon-pencil pos_absolute"></i> <span
                                                class="pl_28"> Hiển thị thêm</span>
                                    </span>
                                    </button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div hidden="hidden">
        @include('front.account.template.template_employer_saved_cv')
    </div>
    @include('front.account.employer_saved_cv_js')
@endsection