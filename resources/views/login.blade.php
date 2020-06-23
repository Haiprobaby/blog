<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	@if(session('thongbao'))
                    <div class="alert alert-danger">
                    {{session('thongbao')}}
                    </div>
                    @endif 
	<form action="login" method="POST">
		<h2>ĐĂNG NHẬP</h2>
		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
		<label>email</label>
		<input type="email" name="email">
		<br>
		<label>password</label>
		<input type="password" name="password">
		<br>
		<button>Login</button>		
	</form>

</body>
</html>