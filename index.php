<!DOCTYPE html>
<html>
	<head>
		<title>Registration Form in PHP using Ajax</title>
		
			<script src="js/jquery.min.js"></script>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
			<script src="js/bootstrap.min.js"></script>
			<link rel="stylesheet" href="css/style.css" />
	</head>
<body>

<div class="container">
	<div class="h20"></div>
	<div class="well main">
		<div class="row">
			<div class="col-lg-12">
				<span class="title"><center>Registration Form in PHP using Ajax<hr style="border-top: 3px double #8c8b8b;"></center></span>
			</div>
		</div>
		<div class="h20"></div>
		<form id="form">
		<div class="row">
			<div class="col-lg-2">
				<span class="desc">First Name:</span>
			</div>
			<div class="col-lg-10">
				<input type="text" name="firstname" class="form-control">
			</div>
		</div>
		<div class="h10"></div>
		<div class="row">
			<div class="col-lg-2">
				<span class="desc">Last Name:</span>
			</div>
			<div class="col-lg-10">
				<input type="text" name="lastname" class="form-control">
			</div>
		</div>
		<div class="h10"></div>
		<div class="row">
			<div class="col-lg-2">
				<span class="desc">Username:</span>
			</div>
			<div class="col-lg-10">
				<input type="text" name="username" class="form-control">
			</div>
		</div>
		<div class="h10"></div>
		<div class="row">
			<div class="col-lg-2">
				<span class="desc">Password:</span>
			</div>
			<div class="col-lg-10">
				<input type="password" name="password" class="form-control">
			</div>
		</div>
		<div class="h10"></div>
		<div class="row">
			<div class="col-lg-2">
				<span class="desc">Address:</span>
			</div>
			<div class="col-lg-10">
				<input type="text" name="address" class="form-control">
			</div>
		</div>
		</form>
		<div class="h10"></div>
		<div class="row">
			<div class="col-lg-12">
				<button type="button" class="btn btn-success pull-right" id="submit">Register Now</button>
			</div>
		</div>
	</div>
	<div class="h20"></div>
	<div class="row">
		<div id="table">
		</div>
	</div>
</div>
<script src="js/custom.js"></script>
</body>
</html>