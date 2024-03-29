<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Saloka Sales Report | Login Page</title>
	<link rel="stylesheet" href="../../../../css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="icon" href="../../../../img/lokaprofpic.png" >
</head>
<body class="login">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="../../../../img/logo-saloka.png" alt="logo" width="200">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">Username</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
									<p class="error username-error"></p>
								</div>
								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
									</div>
									<input id="password" type="password" class="form-control" name="password" required>
								    <p class="error password-error"></p>
								</div>
								<div class="d-flex align-items-center">
									<div class="form-check">
										<input type="checkbox" name="remember" id="remember" class="form-check-input">
										<label for="remember" class="form-check-label">Remember Me</label>
									</div>
									<a href="{{route('welcome')}}" class="btn btn-success ms-auto">Login</a>
								</div>
							</form>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						<p style="color: white;">Copyright © Saloka 2023</p>
					</div>
				</div>
			</div>
		</div>
		<footer class="fixed-bottom d-flex justify-content-center mb-5">
        	<span>Copyright © Saloka 2023</span>
		</footer>
	</section>
</body>
</html>