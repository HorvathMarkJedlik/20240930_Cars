<x-layout>
    <x-slot name='title'>Cars</x-slot>

    <h2>Available cars</h2>
    <div class="row">
        @foreach ($cars as $car )
        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
                <img src="{{ $car['image'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{ $car['title'] }}</h5>
                <p class="card-text">Start prdocution: {{ $car['start_production'] ?? '---'}}</p>
                <p class="card-text">Class: {{ $car['class'] ?? '---'}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>
