@extends('students.layout')
@section('content')

    <div class="card">
        <div class="card-header">Student Show</div>

        <div class="card-body">
<div class="card-body">

    <h5 class="card-title"> Name: {{ $student->name}}</h5>
    <p class="card-text">Age: {{ $student->age}}</p>
    <p class="card-text">Address: {{ $student->address}}</p>
</div>

        </div>
    </div>
