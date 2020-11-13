@extends('layouts.main')

@section('title','Companies')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Code</th>
            <th>Address</th>
            <th>City</th>
            <th>Country</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th colspan="2">Actions</th>
            <th></th>
        </thead>
        <tbody>
            <tr>
                <form action="{{ route('companies.create') }}" method="POST">
                    @csrf
                    <td colspan="2"><input type="text" class="form-control" name="name"></td>
                    <td><input type="text" class="form-control" name="code"></td>
                    <td><input type="text" class="form-control" name="address"></td>
                    <td><input type="text" class="form-control" name="city"></td>
                    <td><input type="text" class="form-control" name="country"></td>
                    <td colspan="2"><button class="btn btn-success">Add Company</button></td>
                </form>
            </tr>
            <?php foreach ($companies as $company): ?>
                <tr>
                    <td>{{ $company -> id }}</td>
                    <td>{{ $company -> name }}</td>
                    <td>{{ $company -> code }}</td>
                    <td>{{ $company -> address }}</td>
                    <td>{{ $company -> city }}</td>
                    <td>{{ $company -> country }}</td>
                    <td>{{ $company -> created_at }}</td>
                    <td>{{ $company -> updated_at }}</td>
                    <td>
                        <form action="{{ route("companies.delete", ['id' => $company->id]) }}" method="POST">
                            @csrf
                            <button class="btn btn-danger">Delete</button>                        
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('companies.edit',['company_id' => $company->id]) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            
        </tbody>
    </table>
</div>
@endsection