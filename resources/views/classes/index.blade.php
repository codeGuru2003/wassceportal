@extends('layouts.layout')
@section('content')
    <div>
        <h1>Classes</h1>
        <a href="{{ url('classes/create') }}" class="btn btn-primary text-light">Create</a><br />
        <br />
        <div class="card">
            <div class="card-body">
                <?php $count = 1; ?>
                <div class="table-responsive">
                    <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Level Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($classTypes as $classType)
                                <tr>
                                    <td>{{ $classType->name }}</td>
                                    <td>{{ $classType->level->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endsection

