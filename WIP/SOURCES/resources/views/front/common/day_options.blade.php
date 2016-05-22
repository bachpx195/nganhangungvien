{{ $selected = isset($selected) ? $selected : '' }}
<option value="" @if($selected == '') selected @endif>Ngày</option>
@for ($i = 0; $i <= 31; $i++)
    <option value="{{$i}}" @if($selected == $i) selected @endif>
        @if($i < 10) 0{{$i}} @else {{$i}} @endif
    </option>
@endfor