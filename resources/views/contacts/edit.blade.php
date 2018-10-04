@extends('contacts.master')

@section('content')
	@if(count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops, something went wrong!</strong>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<div class="card">
		<div class="card-header">
			<h5>Edit Contact</h5>
		</div>
		<div class="card-body">
			{!! Form::model($contact, ['method'=>'PATCH', 'route'=>['contacts.update', $contact->id]]) !!}
				@include('contacts.form')
			{!! Form::close() !!}
		</div>
	</div>
@endsection