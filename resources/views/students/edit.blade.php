@extends('students.layout')
@section('content')

    <div class="card">
        <div class="card-header">Student Edit</div>

        <div class="card-body">
            <div class="card-body">

                <form action="{{ url('student/' .$student->id) }}" method="post">
                    {!! csrf_field() !!}
                    @method("PATCH")
                    <input type="hidden" name="id" id="id" value="{{$student->id}} "  id="id"></br>

                    <label>Name</label></br>
                    <input type="text" name="name" id="name" value="{{$student->name}}" class="form-control"></br>
                    <label>Age</label></br>
                    <input type="number" name="age" id="age" value="{{$student->age}}" class="form-control"></br>
                    <label>Address</label></br>
                    <input type="text" name="address" id="address" value="{{$student->address}}" class="form-control"></br>
                    <input type="submit" value="update" class="btn btn-success"></br>

                </form>
            </div>

        </div>
    </div>

@stop
