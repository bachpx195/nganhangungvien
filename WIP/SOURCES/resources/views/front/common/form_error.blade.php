@if ($errors->has($fieldName))
    <div class="text-danger {{ $class or '' }}">{{ $errors->first($fieldName)}}</div>
@endif