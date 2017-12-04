@extends('main')

@section('title', ' All Posts')

@section('content')

    <div class="row">
    
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>

        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-lg btn-primary btn-h1-spacing">New Post</a>
        </div>
        <hr>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col"><i class="fa fa-id-badge" aria-hidden="true"></i></th>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Created At</th>
                    <th scope="col"></th>
                    <th></th>
                    </tr>
                </thead>
                
                <tbody>

                    @foreach($posts as $post) 

                    <tr>
                        <th>{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ substr($post->body, 0, 50) }} {{ strlen($post->body) > 50 ? " ..." : "" }}</td>
                        <td>{{ date('j/m/Y, H:i', strtotime($post->created_at)) }}</td>
                        <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm">View</a></td>
                        <td><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a></td>
                    </tr>

                    @endforeach

                </tbody>
            </table>

            <div class="text-center">
                {!! $posts->links(); !!}
            </div>

        </div>
    </div>

@endsection

@section('partials.javascript')

@endsection