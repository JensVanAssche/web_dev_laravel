<div>
	<div class="form-group">
		{!! Form::text('name', null, ['placeholder'=>'Name', 'class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::text('email', null, ['placeholder'=>'E-mail', 'class'=>'form-control']) !!}
	</div>
	<button type="submit" class="btn btn-primary" name="button">Submit</button>
	<a href="{{ route('contacts.index') }}" class="btn btn-danger">Back</a>
</div>