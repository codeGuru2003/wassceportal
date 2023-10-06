@extends('layouts.layout')
@section('content')
    <div>
        <h1>Levels</h1>
        <a href="{{ url('levels/create') }}" class="btn btn-primary text-light">Create</a><br />
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
                            @foreach ($levels as $level)
                                <tr>
                                    <td>{{ $count }}</td>
                                    <td>{{ $level->name }}</td>
                                    <td>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <a href="{{ route('levels.edit', ['id' => $level->id]) }}" class="btn btn-warning btn-sm text-light"><i class="tf-icons bx bxs-edit"></i></a>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6">
                                                            <form action="{{ route('levels.delete', ['id' => $level->id ])}}" method="POST">
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
