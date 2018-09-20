@extends('back-end.layouts.master')
@section('content')
<form action="{{ route('users.store') }}" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="">Username</label>
		<input type="text" name="name" placeholder="Ho ten" class="form-control">
	</div>
	<div class="form-group">
		<label for="">Email</label>
		<input type="email" name="email" placeholder="Email" class="form-control"> 
	</div>
	<div class="form-group">
		<label for="">Password</label>
		<input type="password" name="password" placeholder="Password" class="form-control">
	</div>
	<div>
		<label for="">Role</label>
		<select name="role_id" id="" class="form-group">
			@foreach($roles as $role)
				<option value="{{ $role->id }}">{{ $role->name }}</option>
			@endforeach
		</select>
	</div>	
	<div class="form-group">
		<input type="submit" value="Create" class="btn btn-primary">
	</div>
</form>
@endsection