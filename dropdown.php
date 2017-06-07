<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>gashboard Panels</title>
<link rel="shortcut icon" type="image/x-icon" href="https://static.gabia.com/www/common/img/favicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
	.show { display:block; }
	.hide { display: none; !important}
</style>
</head>
<body>
	<?php $page = 'dropdown'; ?>
	<div id="wrap">
		<header>
			<?php include("include/header.php") ?>
		</header>

		<section id="container">
			<?php include("include/sidebar.php") ?>

			<article id="contents">
				<h1 class="w3-border-bottom w3-border-light-gray">Dropdowns</h1>

				<div class="panel">
					<div class="panel-heading">Dropdown Elements</div>
					<div class="panel-body">
						<div class="w3-dropdown-hover">
							<button class="w3-button w3-green">Hover Over Me!</button>
							<div class="w3-dropdown-content w3-bar-block w3-border">
								<a href="#" class="w3-bar-item w3-button">Link 1</a>
								<a href="#" class="w3-bar-item w3-button">Link 2</a>
								<a href="#" class="w3-bar-item w3-button">Link 3</a>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Menu Dropdowns</div>
					<div class="panel-body">
						<div class="w3-bar w3-blue">
							<a href="javascript:void(0)" class="w3-bar-item w3-button">Home</a>
							<a href="javascript:void(0)" class="w3-bar-item w3-button">Link 1</a>
							<div class="w3-dropdown-hover">
								<button class="w3-button">Dropdown <i class="fa fa-caret-down"></i></button>
								<div class="w3-dropdown-content w3-bar-block w3-card-4">
									<a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
									<a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
									<a class="w3-bar-item w3-button" href="javascript:void(0)">Link 3</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="w3-row-padding" style="margin: 0 -16px">
					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading">Center-aligned Dropdown</div>
							<div class="panel-body">
								<div class="w3-center">
									<div class="w3-dropdown-hover">
										<button class="w3-button w3-teal">Hover Over Me!</button>
										<div class="w3-dropdown-content w3-bar-block w3-border">
											<a href="#" class="w3-bar-item w3-button">Link 1</a>
											<a href="#" class="w3-bar-item w3-button">Link 2</a>
											<a href="#" class="w3-bar-item w3-button">Link 3</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading">Right-aligned Dropdown</div>
							<div class="panel-body">
								<div class="w3-dropdown-hover w3-right">
									<button class="w3-button w3-indigo">Hover Over Me!</button>
									<div class="w3-dropdown-content w3-bar-block w3-border">
										<a href="#" class="w3-bar-item w3-button">Link 1</a>
										<a href="#" class="w3-bar-item w3-button">Link 2</a>
										<a href="#" class="w3-bar-item w3-button">Link 3</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				

				<div class="panel">
					<div class="panel-heading">Clickable Dropdown - <span class="w3-text-red">developing...</span></div>
					<div class="panel-body">
						<div class="w3-dropdown-click">
							<button class="w3-button w3-pink">Hover Over Me!</button>
							<div class="w3-dropdown-content w3-bar-block w3-border">
								<a href="#" class="w3-bar-item w3-button">Link 1</a>
								<a href="#" class="w3-bar-item w3-button">Link 2</a>
								<a href="#" class="w3-bar-item w3-button">Link 3</a>
							</div>
						</div>
					</div>
				</div>
			</article>
		</section>
	</div>
	<script src="js/dashboard.js"></script>
	<script>
		var dashboard = new Dashboard.dropdown('w3-dropdown', 'click');
		console.log(dashboard);
	</script>
</body>
</html>
