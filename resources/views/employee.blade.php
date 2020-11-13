@extends('layouts.main')

@section('title','Employee')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Birth Date</th>
            <th>Personal Id</th>
            <th>Salary</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th colspan="2">Actions</th>
            <th></th>
        </thead>
        <tbody>
            <tr>
                <form action="{{ route('employees.create') }}" method="POST">
                    @csrf
                    <td colspan="2"><input type="text" class="form-control" name="name"></td>
                    <td><input type="text" class="form-control" name="lastname"></td>
                    <td><input type="date" class="form-control" name="birthdate"></td>
                    <td><input type="text" class="form-control" name="personalid"></td>
                    <td><input type="number" min=0 class="form-control" name="salary"></td>
                    <td colspan="2"><button class="btn btn-success">Add Employee</button></td>
                </form>
            </tr>
            <?php foreach ($employees as $employee): ?>
                <tr>
                    <td>{{ $employee -> id }}</td>
                    <td>{{ $employee -> name }}</td>
                    <td>{{ $employee -> lastname }}</td>
                    <td>{{ $employee -> birthdate }}</td>
                    <td>{{ $employee -> personal_id }}</td>
                    <td>{{ $employee -> salary }}</td>
                    <td>{{ $employee -> created_at }}</td>
                    <td>{{ $employee -> updated_at }}</td>
                    <td>
                        <form action="{{ route("employees.delete", ['id' => $employee->id]) }}" method="POST">
                            @csrf
                            <button class="btn btn-danger">Delete</button>                        
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('employees.edit',['employee_id' => $employee->id]) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            
        </tbody>
    </table>
</div>
@endsection