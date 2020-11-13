@extends('layouts.main')

@section('title', 'Edit Employee')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Edit Employee</h3>
            </div>

        </div>
        <div class="card-body">
            <form action="{{ route('employees.save') }}">
                @csrf
                <input type="hidden" name="id" value="{{ $employee->id }}">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $employee->name }}">
                </div>
                <div class="form-group">
                    <label for="name">Last name</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" value="{{ $employee->lastname }}">
                </div>
                <div class="form-group">
                    <label for="name">Birth Date</label>
                    <input type="date" name="birthdate" id="birthdate" class="form-control" value="{{ $employee->birthdate }}">
                </div>
                <div class="form-group">
                    <label for="name">Personal Id</label>
                    <input type="text" name="personal_id" id="personal_id" class="form-control" value="{{ $employee->personal_id }}">
                </div>
                <div class="form-group">
                    <label for="name">Salary</label>
                    <input type="number" step=0 name="salary" id="name" class="form-control" value="{{ $employee->salary }}">
                </div>
                <button class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
@endsection