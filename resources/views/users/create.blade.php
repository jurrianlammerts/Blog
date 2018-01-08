@extends('main')

@section('title', ' Create New User')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}

@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New User</h1>
            <hr>
            
            {!! Form::open(['route' => 'users.store', 'data-parsley-validate' => '']) !!}
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 
                'maxlength' => '255', 'data-parsley-errors-messages-disabled')) }}

                {{ Form::label('email', 'Email') }}
                {{ Form::text('email', null, array('class' => 'form-control', 'required' => '', 
                'minlength' => '5', 'maxlength' => '255', 'data-parsley-errors-messages-disabled')) }}

                {{ Form::label('password', "Password") }}
                {{ Form::email('password', null, array('class' => 'form-control',  
                'required' => '', 'minlength' => '5', 'maxlength' => '255', 'data-parsley-errors-messages-disabled')) }}

                {{ Form::submit('Create User', array('class' => 'btn btn-primary btn-lg btn-block', 
                'style' => 'margin-top: 20px'))}}

            {!! Form::close() !!}

        </div>
    </div>

@endsection

@section('scripts')

    {!! Html::script('js/parsley.min.js') !!}

@endsection