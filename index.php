<?php include "start.php"; ?> <!-- This should run a valid mysql_connect() command -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Log in to samhirsch.net">
		<meta name="author" content="Sam Hirsch">
		<title id="title">Sam Hirsch</title>
		<link href="../jumbotron.css" rel="stylesheet">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">Sam Hirsch</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="/">Home</a></li>
						<li class="active"><a href="/experience">Experience</a></li>
						<li class="active"><a href="/services">Services</a></li>
						<li class="active"><a href="/contact">Contact</a></li>
						<li class="active"><a href="/login">Log In</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="jumbotron">
			<div class="container">
				<h1 style="color: #FFFFFF">Log in to Samhirsch.net</h1>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<form class="form-signin" id="login-form" method="post" action="index.php" role="form">
						<h2 class="form-signin-heading">Log in</h2>
						<label for="inputEmail" class="sr-only"></label>
						<input type="email" id="inputEmail" class="form-control" placeholder="Email Address" required autofocus>
						<label for="inputPassword" class="sr-only">Password</label>
						<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
						<hr />
						<div class="row">
							<div class="col-sm-4">
								<button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-4"></div>
			</div>
			<div class="row"></div>
			<hr>
			<footer>
				<p>You may use content provided by <a href="/">Samhirsch.net</a> for nearly anything non-commercial.</p>
			</footer>
		</div> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
		<script src="../js/bootstrap.min.js"></script>
	</body>
</html>
