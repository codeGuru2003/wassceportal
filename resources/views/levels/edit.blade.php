   @extends('layouts.layout')
   @section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Edit Level</div>
                <div class="card-body">
                    <form action="{{ route('levels.update', ['id' => $level->id]) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="name" value="{{ $level->name }}">
                        </div><br />
                        <div class="form-group">
                            <button class="btn btn-primary text-light">Update</button> |
                            <a href="{{ url('/levels') }}" class="btn btn-dark">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
