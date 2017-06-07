<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>gashboard Rounds</title>
<link rel="shortcut icon" type="image/x-icon" href="https://static.gabia.com/www/common/img/favicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php $page = 'display'; ?>
	<div id="wrap">
		<header>
			<?php include("include/header.php") ?>
		</header>

		<section id="container">
			<?php include("include/sidebar.php") ?>

			<article id="contents">
				<h1 class="w3-border-bottom w3-border-light-gray">Displays</h1>

				<div class="panel">
					<div class="panel-heading">Display Classes</div>
					<div class="panel-body">
						<table class="w3-table-all">
						<tbody>
						<tr>
						<th>Class</th>
						<th>Defines</th>
						</tr>
						<tr>
						<td>w3-display-container</td>
						<td>Container for w3-display-<em>classes</em></td>
						</tr>
						<tr>
						<td>w3-display-topleft</td>
						<td>Displays content at the top left corner of the w3-display-container</td>
						</tr>
						<tr>
						<td>w3-display-topright</td>
						<td>Displays content at the top right corner of the w3-display-container</td>
						</tr>
						<tr>
						<td>w3-display-bottomleft</td>
						<td>Displays content at the bottom left corner of the w3-display-container</td>
						</tr>
						<tr>
						<td>w3-display-bottomright</td>
						<td>Displays content at the bottom right corner of the w3-display-container</td>
						</tr>
						<tr>
						<td>w3-display-left</td>
						<td>Displays content to the left (middle left) of the w3-display-container</td>
						</tr>
						<tr>
						<td>w3-display-right</td>
						<td>Displays content to the right (middle right) of the w3-display-container</td>
						</tr>
						<tr>
						<td>w3-display-middle</td>
						<td>Displays content in the middle (center) of the w3-display-container</td>
						</tr>
						<tr>
						<td>w3-display-topmiddle</td>
						<td>Displays content at the top middle of the w3-display-container</td>
						</tr>
						<tr>
						<td>w3-display-bottommiddle</td>
						<td>Displays content at the bottom middle of the w3-display-container</td>
						</tr>
						<tr>
						<td>w3-display-position</td>
						<td>Displays content at a specified position in the w3-display-container</td>
						</tr>
						<tr>
						<td>w3-display-hover</td>
						<td>Displays content on hover inside the w3-display-container</td>
						</tr>
						<tr>
						<td>w3-left</td>
						<td>Floats an element to the left (float: left)</td>
						</tr>
						<tr>
						<td>w3-right</td>
						<td>Floats an element to the right (float: right)</td>
						</tr>
						<tr>
						<td>w3-show</td>
						<td>Shows an element (display: block)</td>
						</tr>
						<tr>
						<td>w3-hide</td>
						<td>Hides an element (display: none)</td>
						</tr>
						<tr>
						<td>w3-mobile</td>
						<td>Adds mobile-first responsiveness to any element.<br>Displays
						elements as block elements on mobile devices</td>
						</tr>
						</tbody>
						</table>
					</div>
				</div>

				<div class="w3-row-padding" style="margin:0 -16px">
					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading">Displaying text inside an box</div>
							<div class="panel-body">
								<div class="w3-display-container w3-blue-gray" style="height:300px;">
									<div class="w3-padding w3-display-topleft">Top Left</div>
									<div class="w3-padding w3-display-topright">Top Right</div>
									<div class="w3-padding w3-display-bottomleft">Bottom Left</div>
									<div class="w3-padding w3-display-bottomright">Bottom Right</div>
									<div class="w3-padding w3-display-left">Left</div>
									<div class="w3-padding w3-display-right">Right</div>
									<div class="w3-padding w3-display-middle">Middle</div>
									<div class="w3-padding w3-display-topmiddle">Top Mid</div>
									<div class="w3-padding w3-display-bottommiddle">Bottom Mid</div>
								</div>
							</div>
						</div>
					</div>
					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading">Displaying text inside an image</div>
							<div class="panel-body w3-center">
								<div class="w3-display-container w3-text-white">
									<img class="w3-sepia-max" src="https://static.pexels.com/photos/4097/city-cars-traffic-lights.jpeg" alt="Lights" style="width:100%; height:300px">
									<div class="w3-padding w3-display-topleft">Top Left</div>
									<div class="w3-padding w3-display-topright">Top Right</div>
									<div class="w3-padding w3-display-bottomleft">Bottom Left</div>
									<div class="w3-padding w3-display-bottomright">Bottom Right</div>
									<div class="w3-padding w3-display-topmiddle">Top Mid</div>
									<div class="w3-padding w3-display-left">Left</div>
									<div class="w3-padding w3-display-right">Right</div>
									<div class="w3-padding w3-display-middle">Middle</div>
									<div class="w3-padding w3-display-bottommiddle">Bottom Mid</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Display Hover</div>
					<div class="panel-body">
						<div class="w3-row-padding" style="margin:0 -16px">
							<div class="w3-col m4">
								<div class="w3-display-container w3-border">
									<img src="https://company.gabia.com/assets/images/people_8.jpg" class="w3-grayscale-min">
									<div class="w3-display-topmiddle w3-display-hover">
										<button class="w3-button w3-blue">디자인실 - 공영제</button>
									</div>
								</div>
							</div>
							<div class="w3-col m4">
								<div class="w3-display-container w3-border">
									<img src="https://company.gabia.com/assets/images/people_3.jpg" class="w3-grayscale-min">
									<div class="w3-display-middle w3-display-hover">
										<button class="w3-button w3-blue">개발실 - 방소현</button>
									</div>
								</div>
							</div>
							<div class="w3-col m4">
								<div class="w3-display-container w3-border">
									<img src="https://company.gabia.com/assets/images/people_1.jpg" class="w3-grayscale-min">
									<div class="w3-display-bottommiddle w3-display-hover">
										<button class="w3-button w3-blue">서비스운영실 - 정지은</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="w3-row-padding" style="margin:0 -16px">
					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading">Floating Classes</div>
							<div class="panel-body">
								<div class="w3-bar w3-light-grey">
									<div class="w3-left w3-red w3-padding">w3-left</div>
									<div class="w3-right w3-blue w3-padding">w3-right</div>
								</div>
							</div>
						</div>
					</div>
					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading">Hide and Show</div>
							<div class="panel-body">
								<button onclick="myFunction()" class="w3-button w3-black">Toggle hide and show</button>
								<p id="Demo" class="w3-hide w3-red">Paragraph 2.</p>
							</div>
						</div>
					</div>
				</div>

			</article>
		</section>
	</div>

<script type="text/javascript">
function myFunction() {
    var x = document.getElementById("Demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>


</body>
</html>
