<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>gashboard Progressbars</title>
<link rel="shortcut icon" type="image/x-icon" href="https://static.gabia.com/www/common/img/favicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php $page = 'progressbar'; ?>
	<div id="wrap">
		<header>
			<?php include("include/header.php") ?>
		</header>

		<section id="container">
			<?php include("include/sidebar.php") ?>

			<article id="contents">
				<h1 class="w3-border-bottom w3-border-light-gray">Progress Bar</h1>

				<div class="panel">
					<div class="panel-heading">Basic Progress Bar</div>
					<div class="panel-body">
						<div class="w3-light-gray">
							<div class="w3-green" style="width:20%">
								<div class="w3-center">20%</div>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Progress Bar Text Size</div>
					<div class="panel-body">

						<div class="w3-light-gray w3-tiny">
							<div class="w3-pink" style="width:20%">
								<div class="w3-center">20%</div>
							</div>
						</div>

						<div class="w3-section">
							<div class="w3-light-gray w3-large">
								<div class="w3-blue" style="width:50%">
									<div class="w3-center">50%</div>
								</div>
							</div>
						</div>

						<div class="w3-light-gray w3-xxlarge">
							<div class="w3-purple" style="width:80%">
								<div class="w3-center">80%</div>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Progress Bar Padding</div>
					<div class="panel-body">

						<div class="w3-light-gray">
							<div class="w3-black w3-padding" style="width:20%">
								<div class="w3-center">20%</div>
							</div>
						</div>

						<div class="w3-section">
							<div class="w3-light-gray">
								<div class="w3-red w3-padding-16" style="width:50%">
									<div class="w3-center w3-padding-16">50%</div>
								</div>
							</div>
						</div>

						<div class="w3-light-gray">
							<div class="w3-teal w3-padding-24" style="width:80%">
								<div class="w3-center">80%</div>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Rounded Progress Bar</div>
					<div class="panel-body">

						<div class="w3-light-gray w3-round">
							<div class="w3-round w3-pink" style="width:20%">
								<div class="w3-center">20%</div>
							</div>
						</div>

						<div class="w3-section">
							<div class="w3-light-gray w3-round-xlarge">
								<div class="w3-round-xlarge w3-blue" style="width:50%">
									<div class="w3-center">50%</div>
								</div>
							</div>
						</div>

						<div class="w3-light-gray w3-round-xlarge">
							<div class="w3-round-xlarge w3-purple" style="width:80%">
								<div class="w3-center">80%</div>
							</div>
						</div>
					</div>
				</div>

				
				

			</article>
		</section>
	</div>
</body>
</html>
