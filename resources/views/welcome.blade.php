<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>{{ config('app.name', 'Kickstart App') }}</title>

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		
		<!-- Styles -->
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script> 
		<style>
			html, body {
				background-color: #fff;
				color: #636b6f;
				
				font-weight: 100;
				height: 100vh;
				margin: 0;
			}
			.flex-center {
				align-items: center;
				display: flex;
				justify-content: center;
			}

			.position-ref {
				position: relative;
			}

			.top-right {
				position: absolute;
				right: 10px;
				top: 18px;
			}

			.content {
				text-align: center;
			}

			.title {
				font-size: 84px;
			}

			.links > a {
				color: #636b6f;
				padding: 0 25px;
				font-size: 12px;
				font-weight: 600;
				letter-spacing: .1rem;
				text-decoration: none;
				text-transform: uppercase;
			}

			.m-b-md {
				margin-bottom: 30px;
			}
		</style>
	</head>
	<body>
		<div class="flex-center position-ref">
			@if (Route::has('login'))
				<div class="top-right links">
					@if (Auth::check())
						<a href="{{ url('/home') }}">Home</a>
					@else
						<a href="{{ url('/login') }}">@lang('auth.login')</a>
						<a href="{{ url('/register') }}">@lang('auth.register')</a>
					@endif
				</div>
			@endif

			<div class="content">
				<div class="title m-b-md">
					{{ config('app.name', 'Kickstart App') }}
				</div>

				<div class="">
					<h2>
						Instruções de uso
					</h2>
					<ul class="list-group">
						<li class="list-group-item">
							Criar database. ex.: <pre>'kickstart'</pre>
						</li>
						<li class="list-group-item">
							Editar arquivo '.env' com credenciais de acesso do seu servidor. ex.:<br>
							<pre>DB_CONNECTION=mysql<br>DB_HOST=127.0.0.1<br>DB_PORT=3306<br>DB_DATABASE=kickstart<br>DB_USERNAME=user<br>DB_PASSWORD=password</pre>
							<pre>MAIL_DRIVER=smtp<br>MAIL_HOST=mailtrap.io<br>MAIL_PORT=2525<br>MAIL_USERNAME=user<br>MAIL_PASSWORD=password<br>MAIL_ENCRYPTION=null<br></pre>
						</li>
						<li class="list-group-item">
							Executar comando: <pre>php artisan make:migrate</pre>
						</li>
						<li class="list-group-item">
							Pronto! Tudo deve funcionar, para começar <a href="{{ url('/register') }}">@lang('auth.register')</a> um usuário.
						</li>
						<li class="list-group-item">
							<a href="{{ url('/login') }}">@lang('auth.login')</a>
						</li>
					</ul>
				</div>

			</div>
		</div>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</body>
</html>
