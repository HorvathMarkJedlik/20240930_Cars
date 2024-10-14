<select class="form-select" name="{{ $name }}" id={{ $name}}>
    @foreach ($options as $option)
        @if (old('class') == $option)
            <option selected value="{{ $option }}">{{$option}}</option>
        @else
            <option value="{{ $option }}">{{$option}}</option>
        @endif
    @endforeach
</select>
