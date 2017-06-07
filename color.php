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
</head>
<body>
	<?php $page = 'color'; ?>
	<div id="wrap">
		<header>
			<?php include("include/header.php") ?>
		</header>

		<section id="container">
			<?php include("include/sidebar.php") ?>

			<article id="contents">
				<h1>Colors</h1>

				<div class="w3-row-padding" style="margin: 0 -16px">
					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading">Colors palette for gabia</div>
							<div class="panel-body">
								<div class="w3-padding-xlarge g-light-blue">g-light-blue</div>
								<div class="w3-padding-xlarge g-pale-blue">g-pale-blue</div>
								<div class="w3-padding-xlarge g-blue">g-blue</div>
								<div class="w3-padding-xlarge g-indigo">g-indigo</div>
								<div class="w3-padding-xlarge g-yellow">g-yellow</div>
								<div class="w3-padding-xlarge g-orange">g-orange</div>
								<div class="w3-padding-xlarge g-deep-orange">g-deep-orange</div>
								<div class="w3-padding-xlarge g-red">g-red</div>
								<div class="w3-padding-xlarge g-light-green">g-light-green</div>
								<div class="w3-padding-xlarge g-green">g-green</div>
								<div class="w3-padding-xlarge g-light-gray">g-light-gray</div>
								<div class="w3-padding-xlarge g-gray">g-gray</div>
								<div class="w3-padding-xlarge g-dark-gray">g-dark-gray</div>
								<div class="w3-padding-xlarge g-deep-gray">g-deep-gray</div>
								<div class="w3-padding-xlarge g-black">g-black</div>
							</div>
						</div>
					</div>

					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading">Colors palette</div>
							<div class="panel-body">
								<div class="w3-padding-xlarge w3-red">w3-red</div>
								<div class="w3-padding-xlarge w3-pink">w3-pink</div>
								<div class="w3-padding-xlarge w3-purple">w3-purple</div>
								<div class="w3-padding-xlarge w3-deep-purple">w3-deep-purple</div>
								<div class="w3-padding-xlarge w3-indigo">w3-indigo</div>
								<div class="w3-padding-xlarge w3-blue">w3-blue</div>
								<div class="w3-padding-xlarge w3-light-blue">w3-light-blue</div>
								<div class="w3-padding-xlarge w3-cyan">w3-cyan</div>
								<div class="w3-padding-xlarge w3-aqua">w3-aqua</div>
								<div class="w3-padding-xlarge w3-teal">w3-teal</div>
								<div class="w3-padding-xlarge w3-green">w3-green</div>
								<div class="w3-padding-xlarge w3-light-green">w3-light-green</div>
								<div class="w3-padding-xlarge w3-lime">w3-lime</div>
								<div class="w3-padding-xlarge w3-sand">w3-sand</div>
								<div class="w3-padding-xlarge w3-khaki">w3-khaki</div>
								<div class="w3-padding-xlarge w3-yellow">w3-yellow</div>
								<div class="w3-padding-xlarge w3-amber">w3-amber</div>
								<div class="w3-padding-xlarge w3-orange">w3-orange</div>
								<div class="w3-padding-xlarge w3-deep-orange">w3-deep-orange</div>
								<div class="w3-padding-xlarge w3-blue-gray">w3-blue-gray</div>
								<div class="w3-padding-xlarge w3-brown">w3-brown</div>
								<div class="w3-padding-xlarge w3-light-gray">w3-light-gray</div>
								<div class="w3-padding-xlarge w3-gray" >w3-gray</div>
								<div class="w3-padding-xlarge w3-dark-gray">w3-dark-gray</div>
								<div class="w3-padding-xlarge w3-black">w3-black</div>
								<div class="w3-padding-xlarge w3-pale-red">w3-pale-red</div>
								<div class="w3-padding-xlarge w3-pale-yellow">w3-pale-yellow</div>
								<div class="w3-padding-xlarge w3-pale-green">w3-pale-green</div>
								<div class="w3-padding-xlarge w3-pale-blue">w3-pale-blue</div>
							</div>
						</div>
					</div>
				</div>

				<div class="w3-row-padding" style="margin: 0 -16px">
					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading bg-sand">Buttons</div>
							<div class="panel-body">
								<button class="w3-button w3-large w3-teal">Teal</button>
								<button class="w3-button w3-large w3-blue">Blue</button>
								<button class="w3-button w3-large w3-yellow">Yellow</button>
								<button class="w3-button w3-large w3-orange">Orange</button>
								<button class="w3-button w3-large w3-red">Red</button>
								<button class="w3-button w3-large w3-purple">Purple</button>
							</div>
						</div>
					</div>

					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading bg-sand">Hover Color Classes</div>
							<div class="panel-body">
								<button class="w3-button w3-large w3-hover-teal w3-border">Teal</button>
								<button class="w3-button w3-large w3-hover-blue w3-border">Blue</button>
								<button class="w3-button w3-large w3-hover-yellow w3-border">Yellow</button>
								<button class="w3-button w3-large w3-hover-orange w3-border">Orange</button>
								<button class="w3-button w3-large w3-hover-red w3-border">Red</button>
								<button class="w3-button w3-large w3-hover-purple w3-border">Purple</button>
							</div>
						</div>
					</div>
				</div>

				<div class="w3-row-padding" style="margin: 0 -16px">
					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading bg-sand">Text</div>
							<div class="panel-body">
								<div>
								<span class="w3-xlarge w3-text-red w3-margin-right">Red</span>
								<span class="w3-xlarge w3-text-purple w3-margin-right">Purple</span>
								<span class="w3-xlarge w3-text-blue w3-margin-right">Blue</span>
								<span class="w3-xlarge w3-text-green w3-margin-right">Green</span>
								<span class="w3-xlarge w3-text-orange">Orange</span>
								</div>
							</div>
						</div>
					</div>

					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading bg-sand">Hover Text Color Classes</div>
							<div class="panel-body">
								<div>
								<span class="w3-xlarge w3-hover-text-red w3-margin-right">Red</span>
								<span class="w3-xlarge w3-hover-text-purple w3-margin-right">Purple</span>
								<span class="w3-xlarge w3-hover-text-blue w3-margin-right">Blue</span>
								<span class="w3-xlarge w3-hover-text-green w3-margin-right">Green</span>
								<span class="w3-xlarge w3-hover-text-orange">Orange</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading bg-sand">Borders</div>
					<div class="panel-body">
						<div class="w3-border w3-border-red"><div class="w3-padding">Red</div></div><br>
						<div class="w3-border w3-border-green"><div class="w3-padding">Green</div></div><br>
						<div class="w3-border w3-border-blue"><div class="w3-padding">Blue</div></div><br>
						<div class="w3-border w3-border-yellow"><div class="w3-padding">Yellow</div></div><br>
						<div class="w3-border w3-border-gray"><div class="w3-padding">Gray</div></div><br>
						<div class="w3-border w3-border-black"><div class="w3-padding">Black</div></div>
					</div>
				</div>

			</article>
		</section>
	</div>
</body>
</html>
