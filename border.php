<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>gashboard Borders</title>
<link rel="shortcut icon" type="image/x-icon" href="https://static.gabia.com/www/common/img/favicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php $page = 'border'; ?>
	<div id="wrap">
		<header>			
			<?php include("include/header.php") ?>
		</header>

		<section id="container">
			<?php include("include/sidebar.php") ?>

			<article id="contents">
				<h1 class="w3-border-bottom w3-border-light-gray">Borders</h1>

				<div class="panel">
					<div class="panel-heading">Border Classes</div>
					<div class="panel-body">
						<table class="w3-table-all">
						<tbody>
						<tr>
						<th style="width:30%">Class</th>
						<th>Defines</th>
						</tr>
						<tr>
						<td>w3-border</td>
						<td>Adds borders (top, right, bottom, left) to an element</td>
						</tr>
						<tr>
						<td>w3-border-top</td>
						<td>Adds a top border to an element</td>
						</tr>
						<tr>
						<td>w3-border-right</td>
						<td>Adds a right border to an element</td>
						</tr>
						<tr>
						<td>w3-border-bottom</td>
						<td>Adds a bottom border to an element</td>
						</tr>
						<tr>
						<td>w3-border-left</td>
						<td>Adds a left border to an element</td>
						</tr>
						<tr>
						<td>w3-border-0</td>
						<td>Removes all borders</td>
						</tr>
						<tr>
						<td>w3-border-<em>color</em></td>
						<td>Displays the border in a specified color (like red, blue, etc)</td>
						</tr>
						<tr>
						<td>w3-hover-border-<em>color</em></td>
						<td>Adds a hoverable border color</td>
						</tr>
						<tr>
						<td>w3-bottombar</td>
						<td>Adds a thick bottom border to an element</td>
						</tr>
						<tr>
						<td>w3-leftbar</td>
						<td>Adds a thick left border to an element</td>
						</tr>
						<tr>
						<td>w3-rightbar</td>
						<td>Adds a thick right border to an element</td>
						</tr>
						<tr>
						<td>w3-topbar</td>
						<td>Adds a thick top border to an element</td>
						</tr>
						</tbody>
						</table>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Adding Borders</div>
					<div class="panel-body">
						<div class="w3-border w3-padding">
						<p>I have borders.</p>
						</div>
						<div class="w3-border-left w3-section w3-padding">
						<p>I have only a left border.</p>
						</div>
						<div class="w3-border-top w3-border-bottom w3-padding">
						<p>I have a green top and bottom border.</p>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Border Colors</div>
					<div class="panel-body">
						<div class="w3-border w3-border-red w3-padding">
						<p>I have red borders.</p>
						</div>

						<div class="w3-border-left w3-border-blue w3-section w3-padding">
						<p>I have a blue left border.</p>
						</div>

						<div class="w3-border-top w3-border-bottom w3-border-green w3-padding">
						<p>I have a green top and bottom border.</p>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Rounded Borders</div>
					<div class="panel-body">
						<div class="w3-border w3-round-xlarge w3-padding">
						<p>I have rounded borders.</p>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Hoverable Borders</div>
					<div class="panel-body">
						<div class="w3-border w3-hover-border-red w3-padding">
						<p>Red hoverable border</p>
						</div>

						<div class="w3-border w3-border-purple w3-hover-border-blue w3-padding w3-section">
						<p>Purple border that turns blue on hover</p>
						</div>

						<div class="w3-leftbar w3-border-red w3-hover-border-green w3-padding">
						<p>Thick red left border that turns green on hover.</p>
						</div>
					</div>
				</div>

			</article>
		</section>
	</div>

</body>
</html>
