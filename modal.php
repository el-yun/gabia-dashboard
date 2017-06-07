<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>gashboard Modals</title>
<link rel="shortcut icon" type="image/x-icon" href="https://static.gabia.com/www/common/img/favicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php $page = 'modal'; ?>
	<div id="wrap">
		<header>
			<?php include("include/header.php") ?>
		</header>

		<section id="container">
			<?php include("include/sidebar.php") ?>

			<article id="contents">
				<h1 class="w3-border-bottom w3-border-light-gray">Modals</h1>

				<div class="panel">
					<div class="panel-heading">Default Modal</div>
					<div class="panel-body">
						<button onclick="document.getElementById('id01').style.display='block'" class="w3-button g-indigo">Open Modal</button>
						<div id="id01" class="w3-modal">
							<div class="w3-modal-content">
								<div class="w3-padding-large">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
									Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
									when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								</div>
								<div onclick="document.getElementById('id01').style.display='none'" class="w3-display-topright w3-padding-small">
									<a href="javascript:void(0);"><i class="fa fa-times"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Animated Modals</div>
					<div class="panel-body">
						<button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-teal">animate-top</button>
						<button onclick="document.getElementById('id03').style.display='block'" class="w3-button g-blue">animate-bottom</button>
						<button onclick="document.getElementById('id04').style.display='block'" class="w3-button g-deep-gray">animate-left</button>
						<button onclick="document.getElementById('id05').style.display='block'" class="w3-button g-orange">animate-right</button>
						<button onclick="document.getElementById('id06').style.display='block'" class="w3-button w3-deep-purple">zoom-in</button>
						<div id="id02" class="w3-modal">
							<div class="w3-modal-content w3-animate-top">
								<div class="w3-padding-large">
									<p>Some text..</p>
									<p>Some text..</p>
								</div>
								<div onclick="document.getElementById('id02').style.display='none'" class="w3-display-topright w3-padding-small">
									<a href="javascript:void(0);"><i class="fa fa-times"></i></a>
								</div>
							</div>
						</div>
						<div id="id03" class="w3-modal">
							<div class="w3-modal-content w3-animate-bottom">
								<div class="w3-padding-large">
									<p>Some text..</p>
									<p>Some text..</p>
								</div>
								<div onclick="document.getElementById('id03').style.display='none'" class="w3-display-topright w3-padding-small">
									<a href="javascript:void(0);"><i class="fa fa-times"></i></a>
								</div>
							</div>
						</div>
						<div id="id04" class="w3-modal">
							<div class="w3-modal-content w3-animate-left">
								<div class="w3-padding-large">
									<p>Some text..</p>
									<p>Some text..</p>
								</div>
								<div onclick="document.getElementById('id04').style.display='none'" class="w3-display-topright w3-padding-small">
									<a href="javascript:void(0);"><i class="fa fa-times"></i></a>
								</div>
							</div>
						</div>
						<div id="id05" class="w3-modal">
							<div class="w3-modal-content w3-animate-right">
								<div class="w3-padding-large">
									<p>Some text..</p>
									<p>Some text..</p>
								</div>
								<div onclick="document.getElementById('id05').style.display='none'" class="w3-display-topright w3-padding-small">
									<a href="javascript:void(0);"><i class="fa fa-times"></i></a>
								</div>
							</div>
						</div>
						<div id="id06" class="w3-modal">
							<div class="w3-modal-content w3-animate-zoom">
								<div class="w3-padding-large">
									<p>Some text..</p>
									<p>Some text..</p>
								</div>
								<div onclick="document.getElementById('id06').style.display='none'" class="w3-display-topright w3-padding-small">
									<a href="javascript:void(0);"><i class="fa fa-times"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>


			</article>
		</section>
	</div>

</body>
</html>
