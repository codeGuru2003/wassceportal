@extends('layouts.layout')
@section('content')
    <div>
        <h1>Subjects</h1>
        <a href="{{ url('subjects/create') }}" class="btn btn-primary text-light">Create</a><br />
        <br />
        <div class="card">
            <div class="card-body">
                <?php $count = 1; ?>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subjects as $subject)
                                <tr>
                                    <td>{{ $count; }}</td>
                                    <td>{{ $subject->name }}</td>
                                    <td>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <a href="{{ route('subjects.edit', ['id' => $subject->id]) }}" class="btn btn-warning btn-sm text-light"><i class="tf-icons bx bxs-edit"></i></a>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6">
                                                            <form action="{{ route('subjects.delete', ['id' => $subject->id ])}}" method="POST">
                                                                @csrf
                                                                <button class="btn btn-danger btn-sm text-light"><i class="tf-icons bx bxs-trash"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-sm-6"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php $count++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
