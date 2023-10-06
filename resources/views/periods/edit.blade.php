@extends('layouts.layout')
@section('content')
 <div class="row justify-content-center">
     <div class="col-md-4">
         <div class="card">
             <div class="card-header">Edit Period</div>
             <div class="card-body">
                 <form action="{{ route('periods.update', ['id' => $period->id]) }}" method="POST">
                     @csrf
                     <div class="form-group">
                         <label>Name</label>
                         <input class="form-control" name="name" value="{{ $period->name }}">
                     </div><br />
                     <div class="form-group">
                         <button class="btn btn-primary text-light">Update</button> |
                         <a href="{{ url('/periods') }}" class="btn btn-dark">Back</a>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
@endsection
