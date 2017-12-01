@extends('main')

@section('title', ' Contact')

@section('ActiveContact','active') 

@section('content')

        <div class="row">
            <div class="col-md-12">
                <h1>Contact me</h1>
                <hr>
                <form>
                    <div class="from-group">
                        <label name="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="example@example.com">
                    </div>
                    <div class="from-group">
                        <label name="subject">Subject</label>
                        <input type="subject" name="subject" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label name="message">Message</label>
                        <textarea id="message" name="message" rows="6" class="form-control" placeholder="Type your message here..."></textarea>
                    </div>
                    <input type="submit" value="Send message" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>    

@endsection

@section('scripts')

    {!! Html::script('js/parsley.min.js') !!}

@endsection