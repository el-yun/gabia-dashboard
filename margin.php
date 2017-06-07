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
<?php $page = 'margin'; ?>
	<div id="wrap">
		<header>
			<?php include("include/header.php") ?>
		</header>

		<section id="container">
			<?php include("include/sidebar.php") ?>

			<article id="contents">
				<h1 class="w3-border-bottom w3-border-light-gray">Margins</h1>

				<div class="panel">
					<div class="panel-heading">Margin Classes</div>
					<div class="panel-body">
						<table class="w3-table-all">
						<tbody>
						<tr>
						<th>Class</th>
						<th>Defines</th>
						</tr>
						<tr>
						<td>w3-margin</td>
						<td>Adds a 16px margin to all sides of an element</td>
						</tr>
						<tr>
						<td>w3-margin-top</td>
						<td>Adds a 16px top margin to an element</td>
						</tr>
						<tr>
						<td>w3-margin-right</td>
						<td>Adds a 16px right margin to an element</td>
						</tr>
						<tr>
						<td>w3-margin-bottom</td>
						<td>Adds a 16px bottom margin to an element</td>
						</tr>
						<tr>
						<td>w3-margin-left</td>
						<td>Adds a 16px left margin to an element</td>
						</tr>
						<tr>
						<td>w3-section</td>
						<td>Adds a 16px top and bottom margin to an element</td>
						</tr>
						</tbody>
						</table>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Margin</div>
					<div class="panel-body">
						<div class="w3-border">
							<div class="w3-margin w3-green">
								<p>The <strong>w3-margin</strong> class adds 16px margin to all sides of an  element.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Margin top</div>
					<div class="panel-body">
						<div class="w3-border">
							<div class="w3-margin-top w3-green">
								<p>The <strong>w3-margin-top</strong> class adds a 16px top margin to an element.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Margin Bottom</div>
					<div class="panel-body">
						<div class="w3-border">
							<div class="w3-margin-bottom w3-green">
								<p>The <strong>w3-margin-bottom</strong> class adds a 16px <strong>bottom</strong> margin to an element.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Margin Left</div>
					<div class="panel-body">
						<div class="w3-border">
							<div class="w3-margin-left w3-green">
								<p>The <strong>w3-margin-left</strong> class adds a 16px <strong>left</strong> margin to an element.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Margin Right</div>
					<div class="panel-body">
						<div class="w3-border">
							<div class="w3-margin-right w3-green">
								<p>The <strong>w3-margin-right</strong> class adds a 16px <strong>right</strong> margin to an element.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Sections</div>
					<div class="panel-body">
						<div class="w3-section w3-blue">
							<h1>I am Blue</h1>
						</div>
						<div class="w3-section w3-green">
							<h1>I am Green</h1>
						</div>
					</div>
				</div>

			</article>
		</section>
	</div>

</body>
</html>
