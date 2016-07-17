@if ($policy !== '')
    <div class="box-child-ths">
        <div class="head-box-child-ths">
            <a aria-expanded="true" data-toggle="collapse" data-parent="#accordion" class="accordion">
                <span class="uppercase bold text-tim-nhat">Thỏa thuận sử dụng</span>
                <span class="required_l">(bắt buộc)</span>
            </a>
        </div>
        <div class="clearfix"></div>
        <div aria-expanded="true" class="collapse in" id="coll_ntk" style="">
            <div class="corner_top" id="div-frm-thamkhao">
                <div class="form-horizontal noboder pt_10 pb_10">
                    <textarea class="form-control input-lg2 color-input" style="height: 280px;" name="policy" >{{$policy}}</textarea>

                    <div class="policy-checkbox">
                        <label>
                            <input type="checkbox" id='policy-checkbox'>
                            Tôi đồng ý với điều khoản sử dụng </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif