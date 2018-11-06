@extends('main')

@section('title', ' Admin Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as <strong>Admin! </strong><a href="{{ url('users') }}">Click to continue to Dashboard</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
