{{ $selected = isset($selected) ? $selected : ''}}
{{ $key = isset($key) ? $key : 'id'}}
{{ $value = isset($value) ? $value : 'name'}}
{{ $defaultName = isset($defaultName) ? $defaultName : ''}}

<option value="" >{{$defaultName}}</option>
@foreach($options as $index => $option)
    <option value="{{$option->$key}}" @if($selected == $option->$key) selected @endif>
        {{$option->$value}}
    </option>
@endforeach