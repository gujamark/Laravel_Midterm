@extends('layouts.main')

@section('content')
    <a href="{{ route('companies.all') }}" class="btn btn-primary">Companies</a>
    <br>
    <a href="{{ route('employees.all') }}" class="btn btn-danger">Employees</a>
@endsection