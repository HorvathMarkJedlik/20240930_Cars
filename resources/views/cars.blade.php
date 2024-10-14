<x-layout>
    <x-slot name='title'>Available cars</x-slot>


    <div class="row my-3" >
        <form method="POST" action="/cars/search-by-class" class="col-md-6" >
            @csrf
            <div class="mb-3">
                <label for="classes" class="form-label">Classes</label>
                <x-select name="class" :options="$classes"></x-select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

          <form method="POST" action="/cars/search-by-name" class="col-md-6" >
            @csrf
            <div class="mb-3-0">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

    <div class="row">
        @foreach ($cars as $car )
        <div class="col-md-3">
            <x-card :car="$car"></x-card>
        </div>
        @endforeach
    </div>
</x-layout>
