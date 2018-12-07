<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ServiCorp || Sign up/ Log in</title>
<!--	<link href="css/style.css" rel="stylesheet" type="text/css" media="screen"/>-->
	  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		  <link href="css/modern-business.css" rel="stylesheet">
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
</head>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand" href="index.html">SERVICORP</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="about.html">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="services.html">Our Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.html">Contact Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="sign.php">Sign In</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<body>
<!--	<?php include("./php/nav.php"); ?>-->
<br>
<br>
	<div id = "content">
		<div id="loginForm">
			<form>
				<div class="form-row">
					<div class="col-md-4 mb-3">
						<label for="validationServer01">Full name</label>
						<input type="text" class="form-control is-valid" id="validationServer01" placeholder="Full name" required>
						<div class="valid-feedback">
							Looks good!
						</div>
					</div>
					<div class="col-md-4 mb-3">
						<label for="validationServer02">State code</label>
						<input type="text" class="form-control is-valid" id="validationServer02" placeholder="XX/XXX/XXXX" required>
						<div class="valid-feedback">
							Looks good!
						</div>
					</div>
					<div class="col-md-4 mb-3">
						<label for="validationServerUsername">Callup Number</label>
						<div class="input-group">
							<input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="NYSC/XXX/XXXX/XXXXXX" required>
							<div class="invalid-feedback">
								Please choose a username.
							</div>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-4 mb-3">
						<label for="validationServer03">Email</label>
						<input type="email" class="form-control is-invalid" id="validationServer03" placeholder="Email" required>
						<div class="invalid-feedback">
							Please provide a valid city.
						</div>
					</div>
					<div class="col-md-4 mb-3">
						<label for="inputState">State</label>
						<select id="inputState" class="form-control">
							<option selected>Choose...</option>
							<option>...</option>
						</select>
						<div class="invalid-feedback">
							Please provide a valid state.
						</div>
					</div>
					<div class="col-md-4 mb-3">
						<label for="validationServer05">Local Government</label>
						<input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
						<div class="invalid-feedback">
							Please provide a valid zip.
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-4 mb-3">
						<label for="validationServer03">PPA</label>
						<textarea name="ppa" class="form-control" aria-label="With textarea"></textarea>
						<div class="invalid-feedback">
							Please provide a valid city.
						</div>
					</div>
					<div class="col-md-4 mb-3">
						<label for="inputState">Year of Entry</label>
						<select id="inputState" class="form-control">
							<option selected>Choose...</option>
							<option>...</option>
						</select>
						<div class="invalid-feedback">
							Please provide a valid state.
						</div>
					</div>
					<div class="col-md-4 mb-3">
						<label for="validationServer05">Batch and Stream</label>
						<input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Batch" required>
						<div class="invalid-feedback">
							Please provide a valid zip.
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-6 mb-3">
						<label for="validationServer03">Password</label>
						<input type="password" class="form-control is-invalid" id="validationServer03" placeholder="Password" required>
						<div class="invalid-feedback">
							Please provide a valid city.
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<label for="validationServer03">Confirm Password</label>
						<input type="password" class="form-control is-invalid" id="validationServer03" placeholder="Confirm password" required>
						<div class="invalid-feedback">
							Please provide a valid city.
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
						<label class="form-check-label" for="invalidCheck3">
							Agree to terms and conditions
						</label>
						<div class="invalid-feedback">
							You must agree before submitting.
						</div>
					</div>
				</div>
				<button class="btn btn-primary" type="submit">Submit form</button>
			</form>
		</div>
	</div>
	<footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Servicorp</p>
      </div>
      <!-- /.container -->
    </footer>
	<?php include("./php/footer.php"); ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
