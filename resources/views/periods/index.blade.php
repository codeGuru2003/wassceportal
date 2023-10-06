@extends('layouts.layout')
@section('content')
    <div>
        <h1>Periods</h1>
        <a href="{{ url('periods/create') }}" class="btn btn-primary text-light">Create</a><br />
        <br />
        <div class="card">
            <?php $count = 1; ?>
            <div class="card-body">
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
                            @foreach ($periods as $period)
                                <tr>
                                    <td>{{ $count; }}</td>
                                    <td>{{ $period->name }}</td>
                                    <td>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <a href="{{ route('periods.edit', ['id' => $period->id]) }}" class="btn btn-warning btn-sm text-light"><i class="tf-icons bx bxs-edit"></i></a>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6">
                                                            <form action="{{ route('periods.delete', ['id' => $period->id ])}}" method="POST">
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
                                <?php $count++ ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
