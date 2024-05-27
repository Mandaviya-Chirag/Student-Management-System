@extends ("Layout")
@section('content')
<div class="card">
    <div class="card-header">Enrollments Page</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Enroll No: {{ $enrollments->enroll_no }}</h5><br>
            <p class="card-text">Batch: {{ $enrollments->batch_id }}</p>
            <p class="card-text">Student: {{ $enrollments->st_id }}</p>
            <p class="card-text">Join Date: {{ $enrollments->join_date }}</p>
            <p class="card-text">Fee: {{ $enrollments->fee }}</p>
        </div>
        </br>
    </div>
</div>
@endsection