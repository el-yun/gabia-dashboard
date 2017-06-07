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
	<?php $page = 'button'; ?>
	<div id="wrap">
		<header>
			<?php include("include/header.php") ?>
		</header>

		<section id="container">
			<?php include("include/sidebar.php") ?>

			<article id="contents">
				<h1 class="w3-border-bottom w3-border-light-gray">Buttons</h1>

				<div class="w3-row-padding" style="margin:0 -16px">
					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading">Default Buttons</div>
							<div class="panel-body">
								<div class="w3-margin-bottom">
									<button class="w3-button">button</button>
									<button class="w3-button w3-red">button</button>
									<button class="w3-button w3-green">button</button>
									<button class="w3-button w3-blue">button</button>
									<button class="w3-button w3-black">button</button>
									<button class="w3-button w3-pink">button</button>
									<button class="w3-button w3-teal">button</button>
									<button class="w3-button w3-indigo">button</button>
									<button class="w3-button w3-brown">button</button>
								</div>
								<div>
									<button class="w3-button w3-orange">button</button>
									<button class="w3-button w3-cyan">button</button>
									<button class="w3-button w3-purple">button</button>
									<button class="w3-button w3-yellow">button</button>
									<button class="w3-button w3-lime">button</button>
									<button class="w3-button w3-khaki">button</button>
									<button class="w3-button w3-light-gray">button</button>
									<button class="w3-button w3-sand">button</button>
									<button class="w3-button w3-aqua">button</button>
								</div>
							</div>
						</div>
					</div>
					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading">Disabled Buttons</div>
							<div class="panel-body">
								<div class="w3-margin-bottom">
									<button class="w3-button w3-disabled">button</button>
									<button class="w3-button w3-red w3-disabled">button</button>
									<button class="w3-button w3-green w3-disabled">button</button>
									<button class="w3-button w3-blue w3-disabled">button</button>
									<button class="w3-button w3-black w3-disabled">button</button>
									<button class="w3-button w3-pink w3-disabled">button</button>
									<button class="w3-button w3-teal w3-disabled">button</button>
									<button class="w3-button w3-indigo w3-disabled">button</button>
									<button class="w3-button w3-brown w3-disabled">button</button>
								</div>
								<div>
									<button class="w3-button w3-orange w3-disabled">button</button>
									<button class="w3-button w3-cyan w3-disabled">button</button>
									<button class="w3-button w3-purple w3-disabled">button</button>
									<button class="w3-button w3-yellow w3-disabled">button</button>
									<button class="w3-button w3-lime w3-disabled">button</button>
									<button class="w3-button w3-khaki w3-disabled">button</button>
									<button class="w3-button w3-light-gray w3-disabled">button</button>
									<button class="w3-button w3-sand w3-disabled">button</button>
									<button class="w3-button w3-aqua w3-disabled">button</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="w3-row-padding" style="margin:0 -16px">
					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading">Hover Colors</div>
							<div class="panel-body">
								<div class="w3-margin-bottom">
									<button class="w3-button">button</button>
									<button class="w3-button w3-hover-red">button</button>
									<button class="w3-button w3-hover-green">button</button>
									<button class="w3-button w3-hover-blue">button</button>
									<button class="w3-button w3-hover-black">button</button>
									<button class="w3-button w3-hover-pink">button</button>
									<button class="w3-button w3-hover-teal">button</button>
									<button class="w3-button w3-hover-indigo">button</button>
									<button class="w3-button w3-hover-brown">button</button>
								</div>
								<div>
									<button class="w3-button w3-hover-orange">button</button>
									<button class="w3-button w3-hover-cyan">button</button>
									<button class="w3-button w3-hover-purple">button</button>
									<button class="w3-button w3-hover-yellow">button</button>
									<button class="w3-button w3-hover-lime">button</button>
									<button class="w3-button w3-hover-khaki">button</button>
									<button class="w3-button w3-hover-light-gray">button</button>
									<button class="w3-button w3-hover-sand">button</button>
									<button class="w3-button w3-hover-aqua">button</button>
								</div>
							</div>
						</div>
					</div>

					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading">Button Borders Hover Colors</div>
							<div class="panel-body">
								<div class="w3-margin-bottom">
									<button class="w3-button w3-white w3-border ">Button</button>
									<button class="w3-button w3-white w3-border w3-border-red w3-hover-red">button</button>
									<button class="w3-button w3-white w3-border w3-border-green w3-hover-green">button</button>
									<button class="w3-button w3-white w3-border w3-border-blue w3-hover-blue">button</button>
									<button class="w3-button w3-white w3-border w3-border-black w3-hover-black">button</button>
									<button class="w3-button w3-white w3-border w3-border-pink w3-hover-pink">button</button>
									<button class="w3-button w3-white w3-border w3-border-teal w3-hover-teal">button</button>
									<button class="w3-button w3-white w3-border w3-border-indigo w3-hover-indigo">button</button>
								</div>
								<div class="w3-margin-bottom">
									<button class="w3-button w3-white w3-border w3-border-brown w3-hover-brown">button</button>
									<button class="w3-button w3-white w3-border w3-border-orange w3-hover-orange">button</button>
									<button class="w3-button w3-white w3-border w3-border-cyan w3-hover-cyan">button</button>
									<button class="w3-button w3-white w3-border w3-border-purple w3-hover-purple">button</button>
									<button class="w3-button w3-white w3-border w3-border-yellow w3-hover-yellow">button</button>
									<button class="w3-button w3-white w3-border w3-border-lime w3-hover-lime">button</button>
									<button class="w3-button w3-white w3-border w3-border-khaki w3-border-khaki">button</button>
									<button class="w3-button w3-white w3-border w3-border-light-gray w3-hover-light-gray">button</button>
								</div>
								<div>
									<button class="w3-button w3-white w3-border w3-border-sand w3-hover-sand">button</button>
									<button class="w3-button w3-white w3-border w3-border-aqua w3-hover-aqua">button</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="w3-row-padding" style="margin:0 -16px">
					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading">Hover Colors</div>
							<div class="panel-body">
								<button class="w3-button w3-round">button</button>
								<button class="w3-button w3-round-large">button</button>
								<button class="w3-button w3-round-xlarge">button</button>
								<button class="w3-button w3-round-xxlarge">button</button>
							</div>
						</div>
					</div>

					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading">Button Borders Hover Colors</div>
							<div class="panel-body">
								<button class="w3-button w3-tiny w3-black">Tiny</button>
								<button class="w3-button w3-small w3-red">Small</button>
								<button class="w3-button w3-medium w3-green">Medium</button>
								<button class="w3-button w3-large w3-blue">Large</button>
								<button class="w3-button w3-xlarge w3-pink">xLarge</button>
								<button class="w3-button w3-xxlarge w3-teal">XXLarge</button>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Full-width Buttons</div>
					<div class="panel-body">
						<div><button class="w3-button w3-block w3-green">button</button></div>
						<div class="w3-section"><button class="w3-button w3-block w3-blue">button</button></div>
						<div><button class="w3-button w3-block w3-indigo">button</button></div>
					</div>
				</div>

				<div class="w3-row-padding" style="margin:0 -16px">
					<div class="w3-col m4">
						<div class="panel">
							<div class="panel-heading">Button Group</div>
							<div class="panel-body">
								<div class="w3-bar">
									<button class="w3-button w3-bar-item w3-pink">Button</button>
									<button class="w3-button w3-bar-item w3-indigo">Button</button>
									<button class="w3-button w3-bar-item w3-green">Button</button>
								</div>
							</div>
						</div>
					</div>

					<div class="w3-col m4">
						<div class="panel">
							<div class="panel-heading">Button Group - align center</div>
							<div class="panel-body">
								<div class="w3-center">
									<div class="w3-bar">
										<button class="w3-button w3-bar-item w3-pink">Button</button>
										<button class="w3-button w3-bar-item w3-indigo">Button</button>
										<button class="w3-button w3-bar-item w3-green">Button</button>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="w3-col m4">
						<div class="panel">
							<div class="panel-heading">Button Group - align right</div>
							<div class="panel-body">
								<div class="w3-right">
									<div class="w3-bar">
										<button class="w3-button w3-bar-item w3-pink">Button</button>
										<button class="w3-button w3-bar-item w3-indigo">Button</button>
										<button class="w3-button w3-bar-item w3-green">Button</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- <div class="panel">
					<div class="panel-heading">Default Buttons</div>
					<div class="panel-body">
						<button class="w3-button">button</button>
						<button class="w3-button w3-red">button</button>
						<button class="w3-button w3-green">button</button>
						<button class="w3-button w3-blue">button</button>
						<button class="w3-button w3-black">button</button>
						<button class="w3-button w3-pink">button</button>
						<button class="w3-button w3-teal">button</button>
						<button class="w3-button w3-indigo">button</button>
						<button class="w3-button w3-brown">button</button>
						<button class="w3-button w3-orange">button</button>
						<button class="w3-button w3-cyan">button</button>
						<button class="w3-button w3-purple">button</button>
						<button class="w3-button w3-yellow">button</button>
						<button class="w3-button w3-lime">button</button>
						<button class="w3-button w3-khaki">button</button>
						<button class="w3-button w3-light-gray">button</button>
						<button class="w3-button w3-sand">button</button>
						<button class="w3-button w3-aqua">button</button>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Disabled Buttons</div>
					<div class="panel-body">
						<button class="w3-button w3-disabled">button</button>
						<button class="w3-button w3-red w3-disabled">button</button>
						<button class="w3-button w3-green w3-disabled">button</button>
						<button class="w3-button w3-blue w3-disabled">button</button>
						<button class="w3-button w3-black w3-disabled">button</button>
						<button class="w3-button w3-pink w3-disabled">button</button>
						<button class="w3-button w3-teal w3-disabled">button</button>
						<button class="w3-button w3-indigo w3-disabled">button</button>
						<button class="w3-button w3-brown w3-disabled">button</button>
						<button class="w3-button w3-orange w3-disabled">button</button>
						<button class="w3-button w3-cyan w3-disabled">button</button>
						<button class="w3-button w3-purple w3-disabled">button</button>
						<button class="w3-button w3-yellow w3-disabled">button</button>
						<button class="w3-button w3-lime w3-disabled">button</button>
						<button class="w3-button w3-khaki w3-disabled">button</button>
						<button class="w3-button w3-light-gray w3-disabled">button</button>
						<button class="w3-button w3-sand w3-disabled">button</button>
						<button class="w3-button w3-aqua w3-disabled">button</button>
					</div>
				</div> -->

				<!-- <div class="panel">
					<div class="panel-heading">Hover Colors</div>
					<div class="panel-body">
						<button class="w3-button">button</button>
						<button class="w3-button w3-hover-red">button</button>
						<button class="w3-button w3-hover-green">button</button>
						<button class="w3-button w3-hover-blue">button</button>
						<button class="w3-button w3-hover-black">button</button>
						<button class="w3-button w3-hover-pink">button</button>
						<button class="w3-button w3-hover-teal">button</button>
						<button class="w3-button w3-hover-indigo">button</button>
						<button class="w3-button w3-hover-brown">button</button>
						<button class="w3-button w3-hover-orange">button</button>
						<button class="w3-button w3-hover-cyan">button</button>
						<button class="w3-button w3-hover-purple">button</button>
						<button class="w3-button w3-hover-yellow">button</button>
						<button class="w3-button w3-hover-lime">button</button>
						<button class="w3-button w3-hover-khaki">button</button>
						<button class="w3-button w3-hover-light-gray">button</button>
						<button class="w3-button w3-hover-sand">button</button>
						<button class="w3-button w3-hover-aqua">button</button>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Button Borders Hover Colors</div>
					<div class="panel-body">
						<button class="w3-button w3-white w3-border">Button</button>
						<button class="w3-button w3-white w3-border w3-border-red w3-hover-red">button</button>
						<button class="w3-button w3-white w3-border w3-border-green w3-hover-green">button</button>
						<button class="w3-button w3-white w3-border w3-border-blue w3-hover-blue">button</button>
						<button class="w3-button w3-white w3-border w3-border-black w3-hover-black">button</button>
						<button class="w3-button w3-white w3-border w3-border-pink w3-hover-pink">button</button>
						<button class="w3-button w3-white w3-border w3-border-teal w3-hover-teal">button</button>
						<button class="w3-button w3-white w3-border w3-border-indigo w3-hover-indigo">button</button>
						<button class="w3-button w3-white w3-border w3-border-brown w3-hover-brown">button</button>
						<button class="w3-button w3-white w3-border w3-border-orange w3-hover-orange">button</button>
						<button class="w3-button w3-white w3-border w3-border-cyan w3-hover-cyan">button</button>
						<button class="w3-button w3-white w3-border w3-border-purple w3-hover-purple">button</button>
						<button class="w3-button w3-white w3-border w3-border-yellow w3-hover-yellow">button</button>
						<button class="w3-button w3-white w3-border w3-border-lime w3-hover-lime">button</button>
						<button class="w3-button w3-white w3-border w3-border-khaki w3-border-khaki">button</button>
						<button class="w3-button w3-white w3-border w3-border-light-gray w3-hover-light-gray">button</button>
						<button class="w3-button w3-white w3-border w3-border-sand w3-hover-sand">button</button>
						<button class="w3-button w3-white w3-border w3-border-aqua w3-hover-aqua">button</button>
					</div>
				</div> -->

				<!-- <div class="panel">
					<div class="panel-heading">Button Shapes</div>
					<div class="panel-body">
						<button class="w3-button w3-round">button</button>
						<button class="w3-button w3-round-large">button</button>
						<button class="w3-button w3-round-xlarge">button</button>
						<button class="w3-button w3-round-xxlarge">button</button>
					</div>
				</div> -->

				

				<!-- <div class="panel">
					<div class="panel-heading">Button Sizes</div>
					<div class="panel-body">
						<button class="w3-button w3-tiny w3-black">Tiny</button>
						<button class="w3-button w3-small w3-red">Small</button>
						<button class="w3-button w3-medium w3-green">Medium</button>
						<button class="w3-button w3-large w3-blue">Large</button>
						<button class="w3-button w3-xlarge w3-pink">xLarge</button>
						<button class="w3-button w3-xxlarge w3-teal">XXLarge</button>
						<button class="w3-button w3-xxxlarge w3-indigo">XXXLarge</button>
						<button class="w3-button w3-jumbo w3-brown">Jumbo</button>
					</div>
				</div> -->


				<div class="panel">
					<div class="panel-heading">Left and Right Buttons</div>
					<div class="panel-body">
						<div class="w3-bar">
							<button class="w3-button w3-black w3-left">Left</button>
							<button class="w3-button w3-black w3-right">Right</button>
						</div>
					</div>
				</div>

			</article>
		</section>
	</div>
</body>
</html>
