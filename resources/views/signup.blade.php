<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
</head>
<body>
	<h2>ĐĂNG KÝ</h2>
	@if(count($errors)>0)
     <div class="alert alert-danger">
         @foreach ($errors ->all() as $err )
           {{$err}}<br>
        @endforeach
     </div>
      @endif
      @if(session('thongbao'))
      <div class="alert alert-success">
      {{session('thongbao')}}
      </div>
      @endif
<form action="signup" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
<label>name</label>	
<input type="text" name="name">
<br>
<label>email</label>
<input type="email" name="email">
<br>
<label>password </label>
<input type="password" name="password">
<br>
<label>Phone</label>
<input type="text" name="phone">
<br>
<label>Address</label>
<input type="text" name="Address">
<br>
<button>Sign up</button>
</form>
</body>
</html>