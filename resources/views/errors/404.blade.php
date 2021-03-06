<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="Content-Language" content="id">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Not Found</title>
		<link rel="stylesheet" type="text/css" href="{{asset('css/errors/style.css')}}" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/bootstrap.css')}}">
	</head>
	<body>
		<div class="holder">
			<div class="logo">
				<a href=""><img src="http://172.17.154.55/hrd/public/images/frontend/web/fPqz4.png"></a>
			</div>
			<div class="content">
				<div class="character-container">
					<img src="{{asset('images/errors/icon.png')}}" class="character">
				</div>
				<div class="main-title">
					Oops...
				</div>
				<div class="secondary-title">
					Looks Like Page You Are Looking Not Found
				</div>
				<div class="action">
					<a href="{{url('/')}}">Back To Kawanlama Career</a>
				</div>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
</html>