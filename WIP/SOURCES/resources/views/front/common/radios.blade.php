<?php $selected = isset($selected) ? $selected : ''?>
<?php $key = isset($key) ? $key : 'id'?>
<?php $radioName = isset($radioName) ? $radioName : ''?>
<?php $radioClass = isset($radioClass) ? $radioClass : 'demo-list  sex-lable trinhdo'?>
<?php $radioInputClass = isset($radioInputClass) ? $radioInputClass : 'input_capdo_ngoaingu'?>
@foreach($radios as $index => $radio)
    <div class="{{$radioClass}}">
        <input class="{{$radioInputClass}}" relval="{{$radio->$key}}"
               tabindex="1" type="radio"
               name="{{$radioName}}"
               value="{{$radio->$key}}" @if($selected == $radio->$key) checked="checked" @endif>
    </div>
@endforeach