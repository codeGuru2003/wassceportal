@extends('layouts.layout')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Create Subjects</div>
                <div class="card-body">
                    <form action="{{ url('subjects/create') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="name">
                        </div><br />
                        <div class="form-group">
                            <button class="btn btn-primary text-light">Save</button> |
                            <a href="{{ url('/subjects') }}" class="btn btn-dark">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
