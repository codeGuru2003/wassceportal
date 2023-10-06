@extends('layouts.layout')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Create Class</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('classes.store') }}">
                        @csrf
                    
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                    
                        <div class="form-group">
                            <label for="levels_id">Level Type</label>
                            <select name="levels_id" id="levels_id" class="form-control">
                                @foreach($levelTypes as $levelTypeId => $levelTypeName)
                                    <option value="{{ $levelTypeId }}">{{ $levelTypeName }}</option>
                                @endforeach
                            </select>
                        </div>
                    
                        <br>
                        <button type="submit" class="btn btn-primary">Create</button> |
                        <a href="{{ url('/classes') }}" class="btn btn-dark">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
