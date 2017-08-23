<?php
require_once '../config/init.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="Content-type" content="text/html;charset=ENCODING">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>MyAPI Client</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/styles.css" type="text/css"/>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
	        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
	        crossorigin="anonymous"></script>
	<script>var ENVIRONMENT = 'production';</script>
	<script src="js/ajaxEvents.js?v=<?= time(); ?>"></script>
	<script src="js/scripts.js?v=<?= time(); ?>"></script>
	<script>
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-104982459-2', 'auto');
		ga('send', 'pageview');

	</script>

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
			        data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">MyAPI Client</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li>
					<a href="https://github.com/dreboard">Github</a>
				</li>
				<li>
					<a href="http://blog.dev-php.site">Blog</a>
				</li>
				<li>
					<a href="#">Contact</a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">
	<div class="row">

		<!-- Blog Entries Column -->
		<div class="col-md-8">

			<h1 class="page-header">
				MyAPI Client
			</h1>
			<p class="lead">
				by <a href="https://github.com/dreboard/myapi">Responses from MyAPI</a>
			</p>
			<hr>
			<div id="results"></div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus
				inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum
				officiis rerum.</p>
			<a id="ajax_btn" class="btn btn-primary" href="#">Ajax Button <span
						class="glyphicon glyphicon-chevron-right"></span></a>
			<hr>


		</div>

		<!-- Blog Sidebar Widgets Column -->
		<div class="col-md-4">

			<!-- Blog Search Well -->
			<div class="well">
				<h4>Blog Search</h4>
				<div class="input-group">
					<input name="post_var" value="" id="post_var" type="text" class="form-control">
					<span class="input-group-btn">
                            <button id="post_btn" class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
				</div>
				<!-- /.input-group -->
			</div>

			<!-- Blog Categories Well -->
			<div class="well">
				<h4>Post Response</h4>
				<div class="row">
					<div class="col-lg-12">
						<p id="post_response"></p>
					</div>
					<!-- /.col-lg-6 -->
				</div>
				<!-- /.row -->
			</div>

			<!-- Side Widget Well -->
			<div class="well">
				<h4>Side Widget Well</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus
					laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
			</div>

		</div>

	</div>
	<!-- /.row -->

	<hr>

	<!-- Footer -->
	<footer>
		<div class="row">
			<div class="col-lg-12">
				<p>Copyright &copy; MyAPI Client 2017</p>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
	</footer>
</div>
<!-- /.container -->

</body>

</html>