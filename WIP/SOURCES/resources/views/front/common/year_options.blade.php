{{ $selected = isset($selected) ? $selected : '' }}
{{ $startYear = isset($startYear) ? $startYear: 1946}}
{{ $endYear = isset($endYear) ? $endYear: date("Y")}}
<option value="" @if($selected == '') selected @endif>Năm</option>
@for ($i = $endYear; $i >= $startYear; $i--)
    <option value="{{$i}}" @if($selected == $i) selected @endif>
         {{$i}}
    </option>
@endfor