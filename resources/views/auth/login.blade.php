@extends('layouts.blank')

@section('pageTitle', "Log In")

@section('content')

<div class="login-box">
	<div class="login-logo">
		<a href="#!">
			<img src="{{ asset("/img/logo.png") }}"/>
		</a>
	</div>
	<!-- /.login-logo -->
	<div class="login-box-body">
		<form role="form" method="POST" action="{{ url('/login') }}">
			{{ csrf_field() }}
			<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }} has-feedback">
				<input id="username" type="username" class="form-control" name="username" value="{{ old('username') }}" required autofocus placeholder="Usuário">
				@if ($errors->has('username'))
					<span class="help-block">
						<strong>{{ $errors->first('username') }}</strong>
					</span>
				@endif
				<span class="glyphicon glyphicon-user form-control-feedback"></span>
			</div>
			<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
				<input id="password" type="password" class="form-control" name="password"  placeholder="Senha" required>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				@if ($errors->has('password'))
					<span class="help-block">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
				@endif
			</div>
			<div class="row">
				<div class="col-xs-8">
					<div class="checkbox icheck">
						<label>
							<input type="checkbox" name="remember"> Manter conectado
						</label>
					</div>
				</div>
				<!-- /.col -->
				<div class="col-xs-4">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
				</div>
			<!-- /.col -->
			</div>
		</form>

		<a class="btn btn-link" href="{{ url('/password/reset') }}">
			Esqueceu sua senha?
		</a>

	</div>
	<!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection