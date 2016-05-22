{{ $selected = isset($selected) ? $selected : '' }}
<option value="" @if($selected == '') selected @endif>Năm</option>
@for ($i = 2004; $i >= 1946; $i--)
    <option value="{{$i}}" @if($selected == $i) selected @endif>
         {{$i}}
    </option>
@endfor