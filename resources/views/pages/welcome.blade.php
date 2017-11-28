@extends('main')

@section('title', '| Homepage')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to The Blog!</h1>
                <p>Welcome on my page. I hope you like my recent posts below!</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular posts</a></p>
            </div>
        </div>
    </div><!-- End of header .row -->

    <div class="row">
        <div class="col-md-8">
            <div class"post">
                <h3>Post title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis minus dolore molestiae eum quibusdam! 
                Voluptas corrupti maxime rerum sapiente odio, assumenda dignissimos iure vero libero non dolore modi sed eaque!</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>

            <hr>

            <div class"post">
                <h3>Post title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis minus dolore molestiae eum quibusdam! 
                Voluptas corrupti maxime rerum sapiente odio, assumenda dignissimos iure vero libero non dolore modi sed eaque!</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>

            <hr>

            <div class"post">
                <h3>Post title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis minus dolore molestiae eum quibusdam! 
                Voluptas corrupti maxime rerum sapiente odio, assumenda dignissimos iure vero libero non dolore modi sed eaque!</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>

            <hr>

            <div class"post">
                <h3>Post title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis minus dolore molestiae eum quibusdam! 
                Voluptas corrupti maxime rerum sapiente odio, assumenda dignissimos iure vero libero non dolore modi sed eaque!</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>
        </div>

        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>
    </div>

@endsection

@section('scripts')

    <link rel="stylesheet" type="text/css" href="styles.css">

@endsection