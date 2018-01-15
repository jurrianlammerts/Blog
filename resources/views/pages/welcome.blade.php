@extends('main') 

@section('title', ' Homepage') 

@section('ActiveHome','active') 

@section('content')

<div class="row">
	<div class="col-md-12">

		<div class="jumbotron typewrite">

			@if (Auth::user())
			<h1>
				<a href="" class="typewrite" style="text-decoration: none;" data-period="2000" data-type='[ "Hi, I am {{ Auth::user()->name }}.", "I am Creative.", "I Love to Develop.", "I Love to Blog." ]'>
					<span class="wrap"></span>
				</a>
			</h1>
			@else
			<h1>
				<a href="" class="typewrite" style="text-decoration: none;" data-period="2000" data-type='[ "Hi, Welcome to my Blog.", "Create an Account.", "And Start Blogging." ]'>
					<span class="wrap"></span>
				</a>
			</h1>
			@endif
		</div>
	</div>
</div>
<!-- End of header .row -->

<div class="row">
	<div class="col-md-8">

		@foreach($posts as $post)
		<div class "post">
			<h3>{{ $post->title }}</h3>
			<p>
				{{ substr($post->body, 0, 300) }} {{ strlen($post->body) > 300 ? "..." : "" }}
			</p>
			<a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read more</a>
		</div>

		<hr> @endforeach

	</div>

	<div class="col-md-3 col-md-offset-1">
		<h2>About us</h2>
		<p>The <i class="fa fa-paper-plane" aria-hidden="true"></i> Blog delivers a daily mix of advice and inspiration for digital and traditional artists, web designers, graphic designers, illustrators, and more. We bring the very best creative work to our audience and offer the insight that enables them to keep up to date with the latest trends and developments in the Tech industry.</p>
	</div>
</div>

@endsection 

@section('scripts') 

@endsection