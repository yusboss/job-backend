<!DOCTYPE html>
<html lang="en">

<head>
	<title>FatJob</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="favicons/icons-favicon.ico">

	<link rel="stylesheet" type="text/css" href="signup/css/css-bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="signup/css/css-font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="signup/css/animate-animate.css">

	<link rel="stylesheet" type="text/css" href="signup/css/css-hamburgers-hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="signup/css/css-animsition.min.css">

	<link rel="stylesheet" type="text/css" href="signup/css/select2-select2.min.css">

	<link rel="stylesheet" type="text/css" href="signup/css/daterangepicker-daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="signup/css/css-util.css">
	<link rel="stylesheet" type="text/css" href="signup/css/css-main.css">

	<meta name="robots" content="noindex, follow">
</head>

<body>
	@if (Route::has('login'))
		<div class="fixed-top fixed-sm-top-0 fixed-sm-right-0 p-6 text-right z-10">
			@auth
				<a href="{{ url('/dashboard') }}" class="font-weight-bold text-gray-600 hover-text-gray-900 text-dark-400 hover-text-white focus-outline focus-outline-2 focus-rounded-sm focus-outline-danger">Dashboard</a>
			@else
				<a href="{{ url('/') }}" class="font-weight-bold text-gray-600 hover-text-gray-900 text-dark-400 hover-text-white focus-outline focus-outline-2 focus-rounded-sm focus-outline-danger">Log in</a>

				@if (Route::has('register'))
					<a href="{{ route('register') }}" class="ml-4 font-weight-bold text-gray-600 hover-text-gray-900 text-dark-400 hover-text-white focus-outline focus-outline-2 focus-rounded-sm focus-outline-danger">Register</a>
				@endif
			@endauth
		</div>
	@endif
	<div class="limiter">
		<div class="container-login100">
			<div class="row">
				<div class="col-md-6">
					<div class="wrap-login100">
						<div class="login100-form validate-form p-l-55 p-r-55 p-t-178">
							<span class="login100-form-title">
								Student Information
							</span>
							<div class="row">
								<div class="col-md-3">
									<strong>Name:</strong>
								</div>
								<div class="col-md-9">BABATUNDE OLALEKAN FATAI</div>
							</div>
							<div class="row mt-3">
								<div class="col-md-3">
									<strong>Matric:</strong>
								</div>
								<div class="col-md-9">21/98/0018</div>
							</div>
							<div class="row mt-3 mb-5">
								<div class="col-md-3">
									<strong>Lecturer:</strong>
								</div>
								<div class="col-md-9">MR. OLADIMEJI</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="wrap-login100">
						<form method="POST" action="{{ route('login') }}" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
							@csrf
							<span class="login100-form-title">
								Sign In
							</span>
							<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
								<input class="input100" placeholder="Email" id="email" name="email" :value="old('email')" required autofocus autocomplete="username">
								<span class="focus-input100" :messages="$errors->get('email')"></span>
							</div>
							<div class="wrap-input100 validate-input" data-validate="Please enter password">
								<input class="input100" placeholder="Password" id="password" type="password" name="password" required autocomplete="current-password">
								<span class="focus-input100"></span>
							</div>
							<div class="text-right p-t-13 p-b-23">
								<span class="txt1">
									Forgot
								</span>
								@if (Route::has('password.request'))
									<a href="{{ route('password.request') }}" class="txt2">
										{{ __('password?') }}
									</a>
								@endif
							</div>

							<div class="container-login100-form-btn">
								<button class="login100-form-btn">
									Sign in
								</button>
							</div>
							<div class="flex-col-c pt-5">
								<span class="txt1 p-b-9">
									Don&rsquo;t have an account?
								</span>
								<a href="/register" class="txt3">
									Sign up now
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="signup/js/jquery-jquery-3.2.1.min.js"></script>

	<script src="signup/js/js-animsition.min.js"></script>

	<script src="signup/js/js-popper.js"></script>
	<script src="signup/js/js-bootstrap.min.js"></script>

	<script src="signup/js/select2-select2.min.js"></script>

	<script src="signup/js/daterangepicker-moment.min.js"></script>
	<script src="signup/js/daterangepicker-daterangepicker.js"></script>

	<script src="signup/js/countdowntime-countdowntime.js"></script>

	<script src="signup/js/2008-js-main.js"></script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>
	<script defer
		src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
		integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
		data-cf-beacon='{"rayId":"82a1cb493d16c38b","b":1,"version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}'
		crossorigin="anonymous"></script>
</body>

</html>