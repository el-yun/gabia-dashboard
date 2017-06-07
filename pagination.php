<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>gashboard Paginations</title>
<link rel="shortcut icon" type="image/x-icon" href="https://static.gabia.com/www/common/img/favicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php $page = 'pagination'; ?>
	<div id="wrap">
		<header>
			<?php include("include/header.php") ?>
		</header>

		<section id="container">
			<?php include("include/sidebar.php") ?>

			<article id="contents">
				<h1 class="w3-border-bottom w3-border-light-gray">Pagination</h1>

				<div class="panel">
					<div class="panel-heading">Basic Pagination</div>
					<div class="panel-body">
						<div class="w3-bar">
							<a href="javascript:void(0)" class="w3-bar-item w3-button"><i class="fa fa-angle-left" aria-hidden="true"></i><i class="fa fa-angle-left" aria-hidden="true"></i></a>
							<a href="javascript:void(0)" class="w3-bar-item w3-button w3-green">1</a>
							<a href="javascript:void(0)" class="w3-bar-item w3-button">2</a>
							<a href="javascript:void(0)" class="w3-bar-item w3-button">3</a>
							<a href="javascript:void(0)" class="w3-bar-item w3-button">4</a>
							<a href="javascript:void(0)" class="w3-bar-item w3-button">5</a>
							<a href="javascript:void(0)" class="w3-bar-item w3-button">6</a>
							<a href="javascript:void(0)" class="w3-bar-item w3-button"><i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Pagination Sizing</div>
					<div class="panel-body">
						<div class="w3-bar w3-small">
							<a href="javascript:void(0)" class="w3-bar-item w3-button"><i class="fa fa-angle-left" aria-hidden="true"></i><i class="fa fa-angle-left" aria-hidden="true"></i></a>
							<a href="javascript:void(0)" class="w3-bar-item w3-button w3-indigo">1</a>
							<a href="javascript:void(0)" class="w3-bar-item w3-button">2</a>
							<a href="javascript:void(0)" class="w3-bar-item w3-button">3</a>
							<a href="javascript:void(0)" class="w3-bar-item w3-button">4</a>
							<a href="javascript:void(0)" class="w3-bar-item w3-button">5</a>
							<a href="javascript:void(0)" class="w3-bar-item w3-button">6</a>
							<a href="javascript:void(0)" class="w3-bar-item w3-button"><i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i></a>
						</div>

						<div class="w3-section">
							<div class="w3-bar w3-large">
								<a href="javascript:void(0)" class="w3-bar-item w3-button"><i class="fa fa-angle-left" aria-hidden="true"></i><i class="fa fa-angle-left" aria-hidden="true"></i></a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button w3-blue">1</a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button">2</a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button">3</a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button">4</a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button">5</a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button">6</a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button"><i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
						</div>

						<div class="w3-section">
							<div class="w3-bar w3-xlarge">
								<a href="javascript:void(0)" class="w3-bar-item w3-button"><i class="fa fa-angle-left" aria-hidden="true"></i><i class="fa fa-angle-left" aria-hidden="true"></i></a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button w3-khaki">1</a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button">2</a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button">3</a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button">4</a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button">5</a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button">6</a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button"><i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
						</div>

						<div class="w3-bar w3-xxlarge">
							<a href="javascript:void(0)" class="w3-bar-item w3-button"><i class="fa fa-angle-left" aria-hidden="true"></i><i class="fa fa-angle-left" aria-hidden="true"></i></a>
							<a href="javascript:void(0)" class="w3-bar-item w3-button w3-black">1</a>
							<a href="javascript:void(0)" class="w3-bar-item w3-button">2</a>
							<a href="javascript:void(0)" class="w3-bar-item w3-button">3</a>
							<a href="javascript:void(0)" class="w3-bar-item w3-button">4</a>
							<a href="javascript:void(0)" class="w3-bar-item w3-button">5</a>
							<a href="javascript:void(0)" class="w3-bar-item w3-button">6</a>
							<a href="javascript:void(0)" class="w3-bar-item w3-button"><i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Centered Pagination</div>
					<div class="panel-body">
						<div class="w3-center">
							<div class="w3-bar">
								<a href="javascript:void(0)" class="w3-bar-item w3-button"><i class="fa fa-angle-left" aria-hidden="true"></i><i class="fa fa-angle-left" aria-hidden="true"></i></a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button w3-pink">1</a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button">2</a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button">3</a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button">4</a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button">5</a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button">6</a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button"><i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Bordered Pagination</div>
					<div class="panel-body">
						<div class="w3-center">
							<div class="w3-bar w3-border">
								<a href="javascript:void(0)" class="w3-bar-item w3-button"><i class="fa fa-angle-left" aria-hidden="true"></i><i class="fa fa-angle-left" aria-hidden="true"></i></a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button w3-deep-purple">1</a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button">2</a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button">3</a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button">4</a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button">5</a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button">6</a>
								<a href="javascript:void(0)" class="w3-bar-item w3-button"><i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Other Pagination Examples</div>
					<div class="panel-body">
						<div class="w3-bar w3-border w3-round">
							<a href="#" class="w3-button">&#10094; Previous</a>
							<a href="#" class="w3-button w3-right">Next &#10095;</a>
						</div>

						<div class="w3-section">
							<div class="w3-bar w3-border">
								<a href="javascript:void(0)" class="w3-button w3-border-right"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
								<a href="javascript:void(0)" class="w3-button w3-border-left w3-right"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>				

			</article>
		</section>
	</div>
</body>
</html>
