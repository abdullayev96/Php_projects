<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v1 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{asset('login/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">

		<!-- STYLE CSS -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{asset('login/css/style.css')}}">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('{{asset('login/images/bg-registration-form-1.jpg')}}');">
			<div class="inner">
				<div class="image-holder">
					<img src="{{asset('login/images/registration-form-1.jpg')}}" alt="">
				</div>
				<form action="{{ route('login.check') }}" method="POST">
                    @csrf
					<h3>Login Form</h3>
					<div class="form-wrapper">
						<input type="email" placeholder="Email Address" name="email" class="form-control @error('email') is-invalid @enderror">
						@error("email") <span class="invalid-feedback">{{$message}}</span>  @enderror
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Password" name="password" class="form-control @error('password') is-invalid @enderror">
						@error("password") <span class="invalid-feedback">{{$message}}</span>  @enderror
						<i class="zmdi zmdi-lock"></i>
					</div>
{{--					<div class="form-wrapper">--}}
{{--						<div class=" g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>--}}
{{--						@if ($errors->has('g-recaptcha-response'))--}}
{{--							<span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>--}}
{{--						@endif--}}
{{--					</div>--}}
					<button type="submit" class="btn btn-primary">Enter</button>
				</form>
			</div>
		</div>

{{--		<script src="https://www.google.com/recaptcha/api.js"></script>--}}

	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
