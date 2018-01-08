@extends('main')

@section('title', ' Admin Dashboard')

@section('content')
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Admin Dashboard</div>

                                <div class="panel-body">
                                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col"><i class="fa fa-id-badge" aria-hidden="true"></i></th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col"></th>
                                    <th></th>
                                    <th></th>
                                    </tr>
                                </thead>
                                
                                <tbody>

                                    @foreach($users as $user) 

                                    <tr>
                                        <th>{{ $user->id }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ date('j/m/Y, H:i', strtotime($user->created_at)) }}</td>
                                        <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-default btn-sm">View</a></td>
                                        <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-default btn-sm">Edit</a></td>
                                        <td><a href="{{ route('users.destroy', $user->id) }}" class="btn btn-default btn-sm">Delete</a></td>
                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
