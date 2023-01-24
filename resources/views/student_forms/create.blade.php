@extends('student_forms.layout')
@section('content')

    <div class="card">
        <div class="card-header">Crete New Students</div>
        <div class="card-body">

            <form action="{{ url('student') }}" method="post">
                {!! csrf_field() !!}
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Age</label></br>
                <input type="number" name="age" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" class="form-control"></br>
                <input type="submit" value="save" class="btn btn-success"></br>

            </form>
        </div>
    </div>

@stop
