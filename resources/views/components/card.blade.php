<div class="card" style="width: 18rem;">
    <img src="{{ $car['image'] }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $car['title'] }}</h5>
        <p class="card-text">Start prdocution: {{ $car['start_production'] ?? '---'}}</p>
        <p class="card-text">Class: {{ $car['class'] ?? '---'}}</p>
    </div>
</div>
