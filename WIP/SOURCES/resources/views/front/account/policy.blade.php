@if ($policy !== '')
        <div class="block-policy">
            <textarea class="form-control input-lg2 color-input" style="height: 280px;" name="policy" >{{$policy}}</textarea>
        </div>

        <div class="policy-checkbox">
            <label>
                <input type="checkbox" id="policy-checkbox">
                Tôi đồng ý với điều khoản sử dụng </label>
        </div>
@endif