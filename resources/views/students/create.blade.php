@extends('students.layout')
@section('content')

    <div class="card">
        <div class="card-header">Create New Students</div>

        <div class="card-body">
            <a href="{{ url('student') }}" class="btn btn-danger btn-sm" title="Add New Student">Back</a>
        </div>
        <div class="card-body">

            <form action="{{ url('student') }}" method="post">
                {!! csrf_field() !!}
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Age</label></br>
                <input type="number" name="age" id="age" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" class="form-control"></br>
                <input type="submit" value="save" class="btn btn-success"></br>

            </form>
        </div>
    </div>

@stop
