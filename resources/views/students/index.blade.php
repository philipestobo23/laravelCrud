@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Student Form</h2>
                    </div>

                    <div class="card-body">
                        <a href="{{ url('/student/create') }}" class="btn btn-primary btn-sm" title="Add New Student">Add
                            New</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead>
                                <th>#</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </thead>

                            <tbody>
                                @foreach ($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->age }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>
                                            <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i
                                                        class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                            <a href="" title="Edit Student"><button class="btn btn-primary btn-sm"><i
                                                        class="fa fa-pencil" aria-hidden="true"></i>Edit</button></a>


                                            <form method="POST" action="" accept-charset="UTF-8" style="display:inline">
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"
                                                ><i class="fa fa-trash"
                                                        aria-hidden="true"></i>Delete</button>
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
@endsection
