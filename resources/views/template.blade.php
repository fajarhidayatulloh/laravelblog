<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/css/app.css" rel="stylesheet">
	{!! Html::style ('assets/css/styles.css')!!}
	{!! Html::style ('assets/css/bootstrap.min.css')!!}
    {!! Html::style ('assets/css/bootstrap.css')!!}
    {!! Html::script('assets/js/jquery-2.1.1.min.js')!!}
    {!! Html::script('assets/js/bootstrap.min.js')!!}
    {!! Html::script('assets/js/bootstrap.js')!!}
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<nav class="navbar navbar-fixed-top navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{URL::to('/')}}">Info Buku Lapnet</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{URL::to('/')}}">Home</a></li>
					
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{URL::to('/auth/login')}}">Login</a></li>
					<li><a href="{{URL::to('/auth/register')}}">Register</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<br><br><br>
	<div class="container">
		@yield('content')
				
	</div>			               		 
</div>
<div class="container">
	<hr>
    <footer>
    	<p>&copy; Laboratorium Pengembangan Internet Universitas Gunadarma 2015</p>
    </footer>
</div>
</body>
</html>
