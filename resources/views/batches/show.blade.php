@extends ("Layout")
@section('content')
<div class="card">
    <div class="card-header">Batches</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Batch Name: {{ $batches->name }}</h5><br>
            <p class="card-text">Course Name: {{ $batches->course->name }}</p>
            <p class="card-text">Date: {{ $batches->start_date }}</p>
        </div>
        </br>
    </div>
</div>
@endsection