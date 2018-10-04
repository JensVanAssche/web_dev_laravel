@extends('contacts.master')

@section('content')
	<div class="card">
		<div class="card-header">
			<h5>My Contacts</h5>
		</div>
		<div class="card-body">
			<div>
				<a class="btn btn-success add-contact-btn" href="{{ route('contacts.create') }}">Add contact</a>
			</div>

			@if ($message = Session::get('success'))
				<div class="alert alert-success">
					<p>{{ $message }}</p>
				</div>
			@endif

			<table>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th width="300px">Actions</th>
				</tr>

				@foreach ($contacts as $contact)
					<tr>
						<td>{{ $contact->name }}</td>
						<td>{{ $contact->email }}</td>
						<td>
							<a class="btn btn-sm btn-primary" href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
							{!! Form::open(['method'=>'DELETE', 'route'=>['contacts.destroy', $contact->id], 'style'=>'display: inline']) !!}
							{!! Form::submit('Delete',['class'=>'btn btn-sm btn-danger']) !!}
							{!! Form::close() !!}
						</td>
					</tr>
				@endforeach

			</table>
		</div>
	</div>
@endsection