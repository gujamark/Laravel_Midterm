@extends('layouts.main')

@section('title', 'Edit Company')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Edit Company </h3>
            </div>

        </div>
        <div class="card-body">
            <form action="{{ route('companies.save') }}">
                @csrf
                <input type="hidden" name="id" value="{{ $company->id }}">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $company->name }}">
                </div>
                <div class="form-group">
                    <label for="name">Code</label>
                    <input type="text" name="code" id="code" class="form-control" value="{{ $company->code }}">
                </div>
                <div class="form-group">
                    <label for="name">Address</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{ $company->address }}">
                </div>
                <div class="form-group">
                    <label for="name">City</label>
                    <input type="text" name="city" id="city" class="form-control" value="{{ $company->city }}">
                </div>
                <div class="form-group">
                    <label for="name">Country</label>
                    <input type="text" name="country" id="country" class="form-control" value="{{ $company->country }}">
                </div>
                <button class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
@endsection