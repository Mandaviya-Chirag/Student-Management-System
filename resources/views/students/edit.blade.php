@extends ("layout")
@section("content")
<div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">
        <form action="{{ url('students/' . $st->id)}}" method="post">
            @csrf
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$st->id}}" id="id"/>
            <label>Name</label></br>
            <input type="text" name="name" id="name" value="{{$st->name}}" class="form-control" autofocus></br>
            <label>Address</label></br>
            <input type="text" name="address" id="address" value="{{$st->address}}" class="form-control"></br>
            <label>Mobile</label></br>
            <input type="text" name="mobile" id="mobile" value="{{$st->mobile}}" class="form-control"></br>
            <input type="submit" value="update" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop