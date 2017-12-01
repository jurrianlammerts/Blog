@if (Session::has('success'))
	
	<div class="alert alert-success alert-dismissable fade in" role="alert" ria-label="Close">
		<strong>Success:</strong> {{ Session::get('success') }}
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	</div>

@endif

@if (count($errors) > 0)

	<div class="alert alert-danger alert-dismissable fade in" role="alert" >
		<strong>Errors:</strong>
		<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach  
		</ul>
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	</div>

@endif
