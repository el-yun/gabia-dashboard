<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>gashboard Bars</title>
<link rel="shortcut icon" type="image/x-icon" href="https://static.gabia.com/www/common/img/favicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php $page = 'bar'; ?>
	<div id="wrap">
		<header>
			<?php include("include/header.php") ?>
		</header>

		<section id="container">
			<?php include("include/sidebar.php") ?>

			<article id="contents">
				<h1 class="w3-border-bottom w3-border-light-gray">Bars</h1>

				<div class="panel">
					<div class="panel-heading">Horizontal Bars</div>
					<div class="panel-body">
						<div class="w3-bar w3-green">
							<div class="w3-bar-item">London</div>
							<div class="w3-bar-item">Paris</div>
							<div class="w3-bar-item">Tokyo</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Vertical Bars</div>
					<div class="panel-body">
						<div class="w3-bar-block w3-green" style="width:100px">
							<div class="w3-bar-item">London</div>
							<div class="w3-bar-item">Paris</div>
							<div class="w3-bar-item">Tokyo</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Hover Colors</div>
					<div class="panel-body">
						<div class="w3-bar w3-brown">
							<div class="w3-bar-item w3-hover-red">Home</div>
							<div class="w3-bar-item w3-hover-green">Link 1</div>
							<div class="w3-bar-item w3-hover-blue">Link 2</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Bar Buttons</div>
					<div class="panel-body">
						<div class="w3-bar w3-indigo">
							<a href="#" class="w3-bar-item w3-button">Home</a>
							<a href="#" class="w3-bar-item w3-button">Link 1</a>
							<a href="#" class="w3-bar-item w3-button">Link 2</a>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Right-Aligned Bar</div>
					<div class="panel-body">
						<div class="w3-bar w3-red">
							<a href="#" class="w3-bar-item w3-button">Home</a>
							<a href="#" class="w3-bar-item w3-button">Link 1</a>
							<a href="#" class="w3-bar-item w3-button">Link 2</a>
							<a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-search w3-large"></i></a>
						</div>
					</div>
				</div>

				

			</article>
		</section>
	</div>
</body>
</html>
