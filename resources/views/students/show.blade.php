@extends ("Layout")
@section('content')
<div class="card">
    <div class="card-header">Students Page</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $st->name }}</h5><br>
            <p class="card-text">Address: {{ $st->address }}</p>
            <p class="card-text">Mobile: {{ $st->mobile }}</p>
        </div>
        </br>
    </div>
</div>
@endsection