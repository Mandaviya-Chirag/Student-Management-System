@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Batches</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/batches/create') }}" class="btn btn-success btn-sm" title="Add New batch">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>Start Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($batches as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->course->name }}</td>
                                        <td>{{ $item->start_date }}</td>
                                        <td>
                                            <a href="{{ url('/batches/' . $item->id) }}" title="View batches"
                                                class="btn btn-info btn-sm">View</a>
                                            <a href="{{ url('/batches/' . $item->id . '/edit') }}" title="Edit batches"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <form method="POST" action="{{ url('/batches/' . $item->id) }}"
                                                accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete batches"
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