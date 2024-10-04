<x-layout>
    <x-slot name='title'>Available cars</x-slot>


    <div class="m-3" >
        <form method="POST" action="/cars/search-by-class" >
            @csrf
            <div class="mb-3">
              <label for="classes" class="form-text">Classes</label>
            </div><x-select name="class" :options="$classes"></x-select><div>
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
