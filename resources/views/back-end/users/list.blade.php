@extends('layouts.admin')
@section('content')
<div class="container">
	<a href="{{ route('users.create') }}" class="btn btn-primary">Add User</a>
	<br>       
	<table class="table table-dark table-striped">
		<thead>
			<tr>
			    <th>ID</th>
				<th>Username</th>
				<th>Email</th>
				<th>Password</th>
				<th>Role</th>
				<th>Edit</th>
				<th>Delete</th>
		    </tr>
		</thead>
		@foreach($users as $user)
			<tbody>
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->password }}</td>
					<td>{{ $user->role_id }}</td>
					<td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a></td>
					<td>
						<form action="{{ route('users.destroy', $user->id) }}" method="post">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<input type="submit" value="Delete" class="btn btn-danger">
						</form>
					</td>
				</tr>
			</tbody>	
		@endforeach	
	</table>
	<h2>Role</h2>
	<table class="table table-dark table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
			</tr>
		</thead>
		@foreach($roles as $role)
			<tbody>
				<tr>
					<td>{{ $role->id }}</td>
					<td>{{ $role->name }}</td>
				</tr>
			</tbody>
		@endforeach
	</table>
</div>
@endsection