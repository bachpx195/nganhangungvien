<?php $selected = isset($selected) ? $selected : ''?>
<?php $key = isset($key) ? $key : 'id'?>
<?php $radioName = isset($radioName) ? $radioName : ''?>
<?php $radioClass = isset($radioClass) ? $radioClass : 'col-sm-9'?>
<?php $radioInputClass = isset($radioInputClass) ? $radioInputClass : 'radio-inline radio-styled'?>
<div class="{{$radioClass}}">
@foreach($radios as $index => $radio)
        <label class="{{$radioInputClass}}">
            <input type="radio" name="{{$radioName}}" value="{{$radio->$key}}"
                   @if($selected == $radio->$key) checked="checked" @endif>
        </label>
@endforeach
</div>