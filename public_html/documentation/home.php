<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- The 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href=//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- My Custom CSS rlewis37@cnm.edu -->
		<link rel="stylesheet" href="../css/stylesheet.css" type="text/css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (required for Bootstap's JS plugins) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<title>Home</title>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">

<!--************************NAV BAR START********************************-->
						<!--this is where the header and navbar go-->
			<header>
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="home.php">
							<img alt="Logo" src="../images/logo2.png" height="40" width="100">
						</a>
					</div>


					<div class="btn-group" role="group" aria-label="...">
						<a class="navbar-brand">
							<button type="button" class="btn btn-default">Home</button>
							<a rel="Home" href="home.php"></a>
							<button type="button" class="btn btn-default">My Work</button>
							<a rel="My Work" href="work.php"></a>
							<button type="button" class="btn btn-default">Education</button>
							<a rel="My Education" href="education.php"></a>
							<button type="button" class="btn btn-default">Background</button>
							<a rel="My Background" href="background.php"></a>
							<button type="button" class="btn btn-default">Contact Me</button>
							<a href="contact-me.php"></a>
						</a>



					</div>


				</div><!-- /.navbar-collapse -->
<!--************************NAV BAR END********************************-->
							</header>

							<!--this is where the main content goes-->
			<main>
				<div class="container">

					<!--begin welcome row-->
					<div class="row">
						<div class="col-md-12">
						</div>
					</div>

					<!--begin welcome row-->
					<div class="row">
						<div class="col-md-12">
							<div class="jumbotron">
								<img alt="Logo" src="../images/dandilion-strip.jpg" height="200" width="800">
								<h1>Web Developer
									<img alt="Logo" src="../images/logo.png" height="80" width="200">
								</h1>
								<p>Welcome to The Hackey Hooker!</p>
							</div>
						</div>
					</div>


					<!--begin 2 column row-->
					<div class="row">
						<div class="col-md-6">
							<div class="content-box">
								<h3>Navbar</h3>
								<p>This example uses Bootstrap's built-in Navbar. RTFM here: <a
										href="http://getbootstrap.com/components/#navbar" target="_blank">http://getbootstrap.com/components/#navbar</a></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="content-box">
								<h3>Flexbox Sticky Footer</h3>
								<p>Keep the footer at the bottom of the page, always. Even if the content-area is "short". This is the finest sticky footer I've ever used. View the source code.</p>
							</div>
						</div>
					</div>


					<!--begin 4 column row-->
					<div class="row">
						<div class="col-md-3">
							<div class="content-box">
								<h3>Jumbotron</h3>
								<p>The Bootstrap "jumbotron" made the "Meow!" big. This is also sometimes referred to as a "Hero Message", lol. RTFM <a href="http://getbootstrap.com/components/#jumbotron" target="_blank">here</a>.</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="content-box">
								<h3>Box Styling</h3>
								<p>See these fancy round-corner boxes? I did that with some custom CSS. Open devtools and look for the &lt;div class="content-box"&gt;. Yay!</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="content-box">
								<h3>Mobile First</h3>
								<p>Check this page out on your mobile device! Bootstrap powers the responsive behavior by default when build websites the Bootstrap way. :D</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="content-box">
								<h3>View Source</h3>
								<p>This is a lotta Bootstrap, I know. View the source code, it's well commented. Take a look in devtools. Try stuff. Break things. Have fun.</p>
							</div>
						</div>
					</div>
				</div>
			</main>

			<!--begin footer content-->
			<footer>
				<div class="container">
					&copy; Creative Corrie Artista, LLC
				</div>
			</footer>

		</div> <!-- /.sfooter collapse-->

	</body>
</html>