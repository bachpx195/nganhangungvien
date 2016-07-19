@if ($policy !== '')
    <div class="box-child-ths">
        <div class="head-box-child-ths">
            <a aria-expanded="true" data-toggle="collapse" data-parent="#accordion" class="accordion">
                <span class="uppercase bold text-tim-nhat">Điều khoản sử dụng</span>
            </a>
        </div>
        <div class="clearfix"></div>
        <div aria-expanded="true" class="collapse in" id="coll_ntk" style="">
            <div class="corner_top" id="div-frm-thamkhao">
                <div class="form-horizontal noboder pt_10 pb_10">
                    <textarea class="form-control input-lg2 color-input" style="height: 280px;" name="policy" >{{$policy}}</textarea>
                </div>
            </div>
        </div>
    </div>
@endif