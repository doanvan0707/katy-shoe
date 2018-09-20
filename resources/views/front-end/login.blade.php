@extends('front-end.layouts.master')
@section('content')
<form action="{{ route('customer.loginform') }}" method="post">
	{{ csrf_field() }}
	<input type="email" name="email" placeholder="Email"><br>
	<input type="password" name="password" placeholder="Mat khau"><br>
	<input type="submit" value="Dang nhap">
</form>
@endsection