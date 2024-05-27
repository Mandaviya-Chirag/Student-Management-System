@extends ("Layout")
@section('content')
<div class="card">
    <div class="card-header">Teachers Page</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $teachers->name }}</h5><br>
            <p class="card-text">Address: {{ $teachers->address }}</p>
            <p class="card-text">Mobile: {{ $teachers->mobile }}</p>
        </div>
        </br>
    </div>
</div>
@endsection