@extends('main')

@section('title', ' Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! <a href="{{ url('posts') }}">Click to continue to Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
