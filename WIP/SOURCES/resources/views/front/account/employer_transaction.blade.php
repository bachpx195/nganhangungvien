@extends('front/global')
@section('content')
    <div class="container-fluid nopadding">
        <div class="content_body">
            <div class="content_cols-right pt_16 pl_24 pb_24">
                <h3 class="title_text_line mt_24 mb_8 ml_12 mr_12 uppercase">
                    <span class="fwb txt-color-363636 fs20">Lịch sử giao dịch</span>
                </h3>
                <div class="box_tab bg_white box_shadow pt_12 pl_14 pr_14 pb_16 ml_12 mr_12">
                    <div class="w_100">
                        <div class="box_info font14">
                            <div class="tablehsut">
                                <div id="list_hs">
                                    <input id="hdfStart" type="hidden" name="start" value="{{ $start }}">
                                    <input id="hdfLimit" type="hidden" name="limit" value="{{ $limit }}">
                                    <table>
                                        <thead>
                                        <tr style="background: rgb(245, 245, 245);">
                                            <th style="width: 40px;">STT</th>
                                            <th>Tên hồ sơ ứng viên</th>
                                            <th style="width: 20%;">Thời gian</th>
                                            <th style="width: 15%;">Số tiền</th>
                                            <th style="width: 15%;">Số tiền còn lại</th>
                                        </tr>
                                        </thead>
                                        <tbody id="table_employer_transaction">
                                        @if(count($transactions) > 0)
                                            @foreach($transactions as $index=>$item)
                                                <tr>
                                                    <td style="width: 40px;">
                                                        {{ $index + 1 }}
                                                    </td>
                                                    <td>
                                                        <a href="{{route('candidate.profile', ['slug' => StringHelper::uri($item->cv_title), 'id' => $item->candidateId])}}">{{ $item->candidateName }}</a> ({{ $item->cv_title }})
                                                    </td>
                                                    <td style="width: 20%;">
                                                        {{ $item->created_at }}
                                                    </td>
                                                    <td style="width: 15%;" class="number">
                                                        {{ number_format($item->balance, 0) }} VNĐ
                                                    </td>
                                                    <td style="width: 15%;" class="number">
                                                        {{ number_format($item->amount, 0) }} VNĐ
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5" class="center">Bạn chưa có lịch sử giao dịch nào</td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                                @if(count($transactions) > 0)
                                    <div class="transaction_table_bottom center button_load_more">
                                        <button id="btnShowMoreTransaction"
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
        @include('front.account.template.template_employer_transaction')
    </div>
    @include('front.account.employer_transaction_js')
@endsection