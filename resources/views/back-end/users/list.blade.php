@extends('back-end.layouts.master')
@section('content')
<div class="container">
	<form action="" method="post">
		{{ csrf_field() }}
		<label for="">Tìm kiếm</label>
		<input type="text" placeholder="Search" class="fom-control">
		<input type="submit" value="Search">
	</form>
	<a href="{{ route('users.create') }}">Add User</a>    
    <tr id="members-repeat-container" ng-repeat="">
    <td>You</td>
    </tr>
   </table>   
	<table class="table">
		<tr>
		    <th scope="col">ID</th>
			<th scope="col">Username</th>
			<th scope="col">Email</th>
			<th scope="col">Password</th>
			<th scope="col">Role</th>
			<th scope="col">Edit</th>
			<th scope="col">Delete</th>
	    </tr>
		@foreach($users as $user)
		<tr>
			<td scope="col">{{ $user->id }}</td>
			<td scope="col">{{ $user->name }}</td>
			<td scope="col">{{ $user->email }}</td>
			<td scope="col">{{ $user->password }}</td>
			<td scope="col">{{ $user->role_id }}</td>
			<td scope="col"><a href="{{ route('users.edit', $user->id) }}">Edit</a></td>
			<td scope="col">
				<form action="{{ route('users.destroy', $user->id) }}" method="post">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<input type="submit" value="Delete">
				</form>
			</td>
		</tr>
		@endforeach	
	</table>
</div>
@endsection