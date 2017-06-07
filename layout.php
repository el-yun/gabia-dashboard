<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>gashboard Layouts</title>
<link rel="shortcut icon" type="image/x-icon" href="https://static.gabia.com/www/common/img/favicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php $page = 'layout'; ?>
	<div id="wrap">
		<header>
			<?php include("include/header.php") ?>
		</header>

		<section id="container">
			<?php include("include/sidebar.php") ?>

			<article id="contents">
				<h1 class="w3-border-bottom w3-border-light-gray">Layouts</h1>

				<div class="panel">
					<div class="panel-heading">Layout Classes</div>
					<div class="panel-body">
						<table class="w3-table-all">
						<tbody>
						<tr>
						<th style="width:30%">Class</th>
						<th>Description</th>
						</tr>
						<tr>
						<td>w3-cell-row</td>
						<td>Container for cells (columns).</td>
						</tr>
						<tr>
						<td>w3-cell</td>
						<td>Layout cell (column).</td>
						</tr>
						<tr>
						<td>w3-cell-top</td>
						<td>Aligns content at the top of a cell (column).</td>
						</tr>
						<tr>
						<td>w3-cell-middle</td>
						<td>Aligns content at the vertical middle of a cell (column).</td>
						</tr>
						<tr>
						<td>w3-cell-bottom</td>
						<td>Aligns content at the bottom of a cell (column).</td>
						</tr>
						</tbody>
						</table>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Align Content Layout</div>
					<div class="panel-body">
						<div class="w3-cell-row">
							<div class="w3-teal w3-cell w3-padding-large">
								<p>안녕하세요</p>
								<p>안녕하세요</p>
								<p>안녕하세요</p>
								<p>안녕하세요</p>
								<p>안녕하세요</p>
								<p>안녕하세요</p>
							</div>
							<div class="w3-blue w3-cell w3-cell-middle w3-padding-large">
								<p>안녕하세요</p>
								<p>w3-cell-middle</p>
							</div>
							<div class="w3-blue-gray w3-cell w3-cell-bottom w3-padding-large">
								<p>안녕하세요</p>
								<p>w3-cell-bottom</p>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Layout Container</div>
					<div class="panel-body">
						<div class="w3-cell-row">
							<div class="w3-red w3-cell w3-padding">
							<p>안녕하세요(50%)</p>
							</div>
							<div class="w3-green w3-cell w3-padding">
							<p>안녕하세요(50%)</p>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Layout Container</div>
					<div class="panel-body">
						<div class="w3-cell-row">
							<div class="w3-red w3-cell w3-padding" style="width: 200px;">
							<p>안녕하세요(200px)</p>
							</div>
							<div class="w3-green w3-cell w3-padding">
							<p>안녕하세요</p>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Layout Cells</div>
					<div class="panel-body">
						<div class="w3-red w3-cell w3-padding">
						<p>안녕하세요</p>
						</div>
						<div class="w3-green w3-cell w3-padding">
						<p>안녕하세요</p>
						</div>
					</div>
				</div>

			</article>
		</section>
	</div>
</body>
</html>
