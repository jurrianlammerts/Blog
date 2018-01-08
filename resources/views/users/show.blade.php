@extends('main')

@section('title', ' View User')

@section('content')

<div class="row">
    <div class="col-md-8">
        <h1>{{ $user->name }}</h1>

        <p class="lead">{{ $user->email }}</p>
    </div>
   
    <div class="col-md-4">
        <div class="well">

            <dl class="dl-horizontal">
                <label>Created at:</label>
                <p>{{ date('d F o', strtotime($user->created_at)) }}</p>
            </dl>

            <dl class="dl-horizontal">
                <label>Last Updated:</label>
                <p>{{ date('d F o', strtotime($user->updated_at)) }}</p>
            </dl>
            <hr>

            <div class="row">
                <div class="col-sm-6">
                    {!! Html::linkRoute('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-primary btn-block')) !!}
                </div>
                <div class="col-sm-6">
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!}

                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

                    {!! Form::close() !!}
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    {{ Html::linkRoute('users.index', '< See All users', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing'] ) }}
                </div>
            </div>

        </div>

    </div>


</div>

@endsection

@section('partials.javascript')

@endsection
