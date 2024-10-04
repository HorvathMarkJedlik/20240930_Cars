<select class="form-select" name="{{ $name }}" id={{ $name}}>
    @foreach ($options as $option)
        <option value="{{ $option }}">{{$option}}</option>
    @endforeach
</select>
