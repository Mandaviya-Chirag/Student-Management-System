@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Enrollments Application</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/enrollments/create') }}" class="btn btn-success btn-sm" title="Add New Enrollments">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Enroll No</th>
                                    <th>Batch</th>
                                    <th>Student</th>
                                    <th>Join Date</th>
                                    <th>Fee</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($enrollments as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->enroll_no}}</td>
                                        <td>{{ $item->batch->name}}</td>
                                        <td>{{ $item->st->name}}</td>
                                        <td>{{ $item->join_date}}</td>
                                        <td>{{ $item->fee}}</td>
                                        <td>
                                            <a href="{{ url('/enrollments/' . $item->id) }}" title="View Enrollments"
                                                class="btn btn-info btn-sm">View</a>
                                            <a href="{{ url('/enrollments/' . $item->id . '/edit') }}" title="Edit Enrollments"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <form method="POST" action="{{ url('/enrollments/' . $item->id) }}"
                                                accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Enrollments"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection