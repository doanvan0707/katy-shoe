<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
</head>
<body>
  <div>
  	@if(isset($user))
		{{ $user->name }}
		
  	@endif
    <a href="{{ route('customer.login') }}">Login</a>
    <a href="{{ route('customer.logout') }}">Logout</a>
  </div>
</body>
</html>
