{{ $selected = isset($selected) ? $selected : '' }}
<option value="" @if($selected == '') selected @endif>Tháng</option>
@for ($i = 0; $i <= 12; $i++)
    <option value="{{$i}}" @if($selected == $i) selected @endif>
        @if($i < 10) 0{{$i}} @else {{$i}} @endif
    </option>
@endfor