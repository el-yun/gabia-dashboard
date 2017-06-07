<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>gashboard Paddings</title>
<link rel="shortcut icon" type="image/x-icon" href="https://static.gabia.com/www/common/img/favicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php $page = 'padding'; ?>
	<div id="wrap">
		<header>
			<?php include("include/header.php") ?>
		</header>

		<section id="container">
			<?php include("include/sidebar.php") ?>

			<article id="contents">
				<h1 class="w3-border-bottom w3-border-light-gray">Paddings</h1>

				<div class="panel">
					<div class="panel-heading">Padding Number Classes</div>
					<div class="panel-body">
						<table class="w3-table-all">
						<tbody>
						<tr>
						<th>Class</th>
						<th>Defines</th>
						</tr>
						<tr>
						<td>w3-padding-16</td>
						<td>Adds 16px top and bottom padding to an element</td>
						</tr>
						<tr>
						<td>w3-padding-24</td>
						<td>Adds 24px top and bottom padding to an element</td>
						</tr>
						<tr>
						<td>w3-padding-32</td>
						<td>Adds 32px top and bottom padding to an element</td>
						</tr>
						<tr>
						<td>w3-padding-48</td>
						<td>Adds 48px top and bottom padding to an element</td>
						</tr>
						<tr>
						<td>w3-padding-64</td>
						<td>Adds 64px top and bottom padding to an element</td>
						</tr>
						</tbody>
						</table>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Examples</div>
					<div class="panel-body">
						<div class="w3-padding-16 w3-teal">
						<h4>w3-padding-16</h4>
						<p>I have 16px top and bottom padding</p>
						</div>

						<div class="w3-padding-24 w3-teal w3-section">
						<h4>w3-padding-24</h4>
						<p>I have 16px top and bottom padding</p>
						</div>

						<div class="w3-padding-32 w3-teal w3-section">
						<h4>w3-padding-32</h4>
						<p>I have 16px top and bottom padding</p>
						</div>

						<div class="w3-padding-48 w3-teal w3-section">
						<h4>w3-padding-48</h4>
						<p>I have 16px top and bottom padding</p>
						</div>

						<div class="w3-padding-64 w3-teal">
						<h4>w3-padding-64</h4>
						<p>I have 16px top and bottom padding</p>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Padding Size Classes</div>
					<div class="panel-body">
						<table class="w3-table-all">
						<tbody>
						<tr>
						<th>Class</th>
						<th>Defines</th>
						</tr>
						<tr>
						<td>w3-padding</td>
						<td>Adds 8px top and bottom, and 16px left and right padding</td>
						</tr>
						<tr>
						<td>w3-padding-small</td>
						<td>Adds 4px top and bottom, and 8px left and right padding</td>
						</tr>
						<tr>
						<td>w3-padding-large</td>
						<td>Adds 12px top and bottom, and 24px left and right padding</td>
						</tr>
						</tbody>
						</table>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Examples</div>
					<div class="panel-body">
						<div class="w3-padding-small w3-blue">
						<h4>w3-padding-small</h4>
						<p>I have 4px top and bottom padding and 8px left and right padding.</p>
						</div>

						<div class="w3-padding w3-blue w3-section">
						<h4>w3-padding</h4>
						<p>I have 8px top and bottom padding and 16px left and right padding.</p>
						</div>

						<div class="w3-padding-large w3-blue">
						<h4>w3-padding-large</h4>
						<p>I have 12px top and bottom padding and 24px left and right padding.</p>
						</div>
					</div>
				</div>

			</article>
		</section>
	</div>

</body>
</html>
