<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>gashboard Tabs</title>
<link rel="shortcut icon" type="image/x-icon" href="https://static.gabia.com/www/common/img/favicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php $page = 'tab'; ?>
	<div id="wrap">
		<header>
			<?php include("include/header.php") ?>
		</header>

		<section id="container">
			<?php include("include/sidebar.php") ?>

			<article id="contents">
				<h1 class="w3-border-bottom w3-border-light-gray">Tabs</h1>

				<div class="panel">
					<div class="panel-heading">Tabbed Navigation</div>
					<div class="panel-body">

						<div class="w3-border dashtab">
							<div class="w3-bar w3-border-bottom w3-light-gray dashtab-menu">
								<a class="w3-bar-item w3-button g-blue" href="#London">What</a>
								<a class="w3-bar-item w3-button" href="#Paris">Why</a>
								<a class="w3-bar-item w3-button" href="#Tokyo">Where</a>
							</div>

							<div id="London" class="w3-padding-large city dashtab-content">
								<p class="w3-xlarge">What is Lorem Ipsum?</p>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							</div>

							<div id="Paris" class="w3-padding-large city dashtab-content w3-hide">
								<p class="w3-xlarge">Why do we use it?</p>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
							</div>

							<div id="Tokyo" class="w3-padding-large city dashtab-content w3-hide">
								<p class="w3-xlarge">Where can I get some?</p>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
							</div>
						</div>

					</div>
				</div>
			</article>
		</section>
	</div>

	<script type="text/javascript" src="js/dashboard.js"></script>
	<script>
		var dashboard = new Dashboard.tab('dashtab');
	</script>
</body>
</html>
