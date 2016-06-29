@extends('front/global')
@section('content')
    @if (Auth::check() && Auth::user()->user_type == 'employer')
        <div class="content_cols-right" style="padding-left:232px;">
    @else
        <div class="content_cols-right">
    @endif
    <div class="content_cols-right pb_10" style="height: 560px;">
        <h3 class="title_text_line mt_24 mb_8 uppercase">
            <span class="fwb txt-color-363636 fs20">Lịch sử giao dịch</span>
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
                                    <th style="width: 40px;">STT</th>
                                    <th>Nội dung</th>
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
                                                @if($item->payment_type == \App\Libs\Constants::PAYMENT_TYPE_VIEW_CANDIDATE)
                                                    Xem hồ sơ <a href="{{route('candidate.profile', ['slug' => StringHelper::uri($item->cv_title), 'id' => $item->candidateId])}}">{{ $item->candidateName }}</a> ({{ $item->cv_title }})
                                                @elseif($item->payment_type == \App\Libs\Constants::PAYMENT_TYPE_CARD)
                                                    {{ \App\Libs\Constants::$PAYMENT_TYPE[\App\Libs\Constants::PAYMENT_TYPE_CARD] }}
                                                @elseif($item->payment_type == \App\Libs\Constants::PAYMENT_TYPE_ATM)
                                                    {{ \App\Libs\Constants::$PAYMENT_TYPE[\App\Libs\Constants::PAYMENT_TYPE_ATM] }}
                                                @else
                                                    Lý do khác
                                                @endif
                                            </td>
                                            <td style="width: 20%;">
                                                {{ date('d/m/Y H:i', strtotime($item->created_at)) }}
                                            </td>
                                            <td style="width: 15%;" class="number">
                                                @if ($item->type == \App\Libs\Constants::$TRANSACTION_TYPES['RECHARGE'])
                                                    <span class="transaction_type_add">[+]</span> {{ number_format($item->amount, 0) }} VNĐ
                                                @elseif($item->type == \App\Libs\Constants::$TRANSACTION_TYPES['WITHDRAWAL'])
                                                    <span class="transaction_type_subtract">[-]</span> {{ number_format($item->amount, 0) }} VNĐ
                                                @else
                                                    {{ number_format($item->amount, 0) }} VNĐ
                                                @endif
                                            </td>
                                            <td style="width: 15%;" class="number">
                                                {{ number_format($item->balance, 0) }} VNĐ
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
    <div hidden="hidden">
        @include('front.account.template.template_employer_transaction')
    </div>
    @include('front.account.employer_transaction_js')
@endsection