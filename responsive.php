<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>gashboard Responsive</title>
<link rel="shortcut icon" type="image/x-icon" href="https://static.gabia.com/www/common/img/favicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php $page = 'responsive'; ?>
	<div id="wrap">
		<header>
			<?php include("include/header.php") ?>
		</header>

		<section id="container">
			<?php include("include/sidebar.php") ?>

			<article id="contents">
				<h1 class="w3-border-bottom w3-border-light-gray">Responsive</h1>
				
				<div class="panel">
					<div class="panel-heading">Responsive Rows</div>
					<div class="panel-body">
						<table class="w3-table-all">
						<tbody>
						<tr>
						<th style="width:20%">Class</th>
						<th>Description</th>
						</tr>
						<tr>
						<td>w3-row</td>
						<td>Container for responsive classes, with no padding</td>
						</tr>
						<tr>
						<td>w3-row-padding</td>
						<td>Container for responsive classes, with 8px left and right padding</td>
						</tr>
						<tr>
						<td>w3-col</td>
						<td>Defines one column in a 12-column responsive grid</td>
						</tr>
						</tbody>
						</table>
					</div>
				</div>
				<div class="w3-row w3-center w3-border w3-section">
					<div class="w3-col m1 g-gray">1</div>
					<div class="w3-col m1 g-white">2</div>
					<div class="w3-col m1 g-gray">3</div>
					<div class="w3-col m1 g-white">4</div>
					<div class="w3-col m1 g-gray">5</div>
					<div class="w3-col m1 g-white">6</div>
					<div class="w3-col m1 g-gray">7</div>
					<div class="w3-col m1 g-white">8</div>
					<div class="w3-col m1 g-gray">9</div>
					<div class="w3-col m1 g-white">10</div>
					<div class="w3-col m1 g-gray">11</div>
					<div class="w3-col m1 g-white">12</div>
					<div class="w3-row w3-left-align">
						<div class="w3-col m4 l3 g-orange w3-padding" style="height:100px;">이 부분은 작은 화면에서 12 열, 중간 화면에서 4 열, 큰 화면에서 3 열을 차지합니다.</div>
						<div class="w3-col m8 l9 g-indigo w3-padding" style="height:100px;">이 부분은 작은 화면에서 12 열, 중간 화면에서 8 열, 큰 화면에서 9 열을 차지합니다.</div>
					</div>
					<div class="w3-col m1 g-gray">1</div>
					<div class="w3-col m1 g-white">2</div>
					<div class="w3-col m1 g-gray">3</div>
					<div class="w3-col m1 g-white">4</div>
					<div class="w3-col m1 g-gray">5</div>
					<div class="w3-col m1 g-white">6</div>
					<div class="w3-col m1 g-gray">7</div>
					<div class="w3-col m1 g-white">8</div>
					<div class="w3-col m1 g-gray">9</div>
					<div class="w3-col m1 g-white">10</div>
					<div class="w3-col m1 g-gray">11</div>
					<div class="w3-col m1 g-white">12</div>
				</div>

				<div class="panel">
					<div class="panel-heading">작은 화면을 위한 열 (smart phones):</div>
					<div class="panel-body">
						<table class="w3-table-all">
						<tbody>
						<tr>
						<th style="width:20%">Class</th>
						<th>Description</th>
						</tr>
						<tr>
						<td>s1</td>
						<td>Defines 1 of 12 columns (width:08.33%) for small screens </td>
						</tr>
						<tr>
						<td>s2</td>
						<td>Defines 2 of 12 columns (width:16.66%) for small screens</td>
						</tr>
						<tr>
						<td>s3</td>
						<td>Defines 3 of 12 columns (width:25.00%) for small screens</td>
						</tr>
						<tr>
						<td>s4</td>
						<td>Defines 4 of 12 columns (width:33.33%) for small screens</td>
						</tr>
						<tr>
						<td>s5-s11</td>
						<td>...</td>
						</tr>
						<tr>
						<td>s12</td>
						<td>Defines 12 of 12 columns (width:100%). Default for small screens</td>
						</tr>
						</tbody>
						</table>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">중간 화면을 위한 열 (tablets):</div>
					<div class="panel-body">
						<table class="w3-table w3-bordered w3-striped w3-border">
						<tbody>
						<tr>
						<th style="width:20%">Class</th>
						<th>Description</th>
						</tr>
						<tr>
						<td>m1</td>
						<td>Defines 1 of 12 columns (width:08.33%) for medium screens</td>
						</tr>
						<tr>
						<td>m2</td>
						<td>Defines 2 of 12 columns (width:16.66%) for medium screens</td>
						</tr>
						<tr>
						<td>m3</td>
						<td>Defines 3 of 12 columns (width:25.00%) for medium screens</td>
						</tr>
						<tr>
						<td>m4</td>
						<td>Defines 4 of 12 columns (width:33.33%) for medium screens</td>
						</tr>
						<tr>
						<td>m5-m11</td>
						<td>...</td>
						</tr>
						<tr>
						<td>m12</td>
						<td>Defines 12 of 12 columns (width:100%). Default for medium screens</td>
						</tr>
						</tbody>
						</table>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">큰 화면을 위한 열 (laptops and desktops):</div>
					<div class="panel-body">
						<table class="w3-table w3-bordered w3-striped w3-border">
						<tbody>
						<tr>
						<th style="width:20%">Class</th>
						<th>Description</th>
						</tr>
						<tr>
						<td>l1</td>
						<td>Defines 1 of 12 columns (width:08.33%) for large screens</td>
						</tr>
						<tr>
						<td>l2</td>
						<td>Defines 2 of 12 columns (width:16.66%) for large screens</td>
						</tr>
						<tr>
						<td>l3</td>
						<td>Defines 3 of 12 columns (width:25.00%) for large screens</td>
						</tr>
						<tr>
						<td>l4</td>
						<td>Defines 4 of 12 columns (width:33.33%) for large screens</td>
						</tr>
						<tr>
						<td>l5-l11</td>
						<td>...</td>
						</tr>
						<tr>
						<td>l12</td>
						<td>Defines 12 of 12 columns (width:100%). Default for large screens)</td>
						</tr>
						</tbody></table>
					</div>
				</div>

				<div class="w3-row-padding" style="margin: 0 -16px">
					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading">2단(equal columns)</div>
							<div class="panel-body">
								<div class="w3-row">
									<div class="w3-col s6 w3-padding w3-teal">
										<p>s6</p>
									</div>
									<div class="w3-col s6 w3-padding w3-green">
										<p>s6</p> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading">2단(unequal columns)</div>
							<div class="panel-body">
								<div class="w3-row">
									<div class="w3-col s3 w3-padding w3-teal">
										<p>s3</p>
									</div>
									<div class="w3-col s9 w3-padding w3-green">
										<p>s9</p> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="w3-row-padding" style="margin: 0 -16px">
					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading">3단(equal columns)</div>
							<div class="panel-body">
								<div class="w3-row">
									<div class="w3-col s4 w3-padding w3-teal">
										<p>s4</p>
									</div>
									<div class="w3-col s4 w3-padding w3-green">
										<p>s4</p> 
									</div>
									<div class="w3-col s4 w3-padding w3-pink">
										<p>s4</p> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading">3단(unequal columns)</div>
							<div class="panel-body">
								<div class="w3-row">
									<div class="w3-col m3 w3-padding w3-teal">
										<p>m3</p>
									</div>
									<div class="w3-col m6 w3-padding w3-green">
										<p>m6</p> 
									</div>
									<div class="w3-col m3 w3-padding w3-pink">
										<p>m3</p> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">6단: 태블릿, 노트북, 데스크톱의 경우 6열(각각 16 %), 모바일은 1열(너비 100 %)</div>
					<div class="panel-body">
						<div class="w3-row">
							<div class="w3-col m2 w3-padding w3-teal">
								<p>m2</p>
							</div>
							<div class="w3-col m2 w3-padding w3-green">
								<p>m2</p>
							</div>
							<div class="w3-col m2 w3-padding w3-dark-gray">
								<p>m2</p>
							</div>
							<div class="w3-col m2 w3-padding w3-blue">
								<p>m2</p>
							</div>
							<div class="w3-col m2 w3-padding w3-black">
								<p>m2</p>
							</div>
							<div class="w3-col m2 w3-padding w3-purple">
								<p>m2</p>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">아래 예제는 큰 화면에서 83.34% / 16.66% (l10, l2)로 분할하고 작은 화면에서는 50% / 50% (s6, s6)로 분할 된 두 개의 열 레이아웃을 생성합니다.</div>
					<div class="panel-body">
						<div class="w3-row">
							<div class="w3-row">
							<div class="w3-col l10 s6 w3-padding w3-pink w3-center"><p>l10 s6</p></div>
							<div class="w3-col l2 s6 w3-padding w3-dark-grey w3-center"><p>l2 s6</p></div>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">아래 예제는 큰 화면에서는 25% / 58.34% / 16.66% (l3, l7, l2) 분할, 중간 화면에서는 50% / 25% / 25% (m6, m3, m3) 작은 화면에서 33.3% / 33.3% / 33.3% (s4, s4, s4) 분할합니다.</div>
					<div class="panel-body">
						<div class="w3-row">
							<div class="w3-col w3-padding l3 m6 s4 w3-green w3-center"><p>l3 m6 s4</p></div>
							<div class="w3-col w3-padding l7 m3 s4 w3-dark-grey w3-center"><p>l7 m3 s4</p></div>
							<div class="w3-col w3-padding l2 m3 s4 w3-red w3-center"><p>l2 m3 s4</p></div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Using w3-rest</div>
					<div class="panel-body">
						<div class="w3-row">
							<div class="w3-col w3-padding w3-blue" style="width:150px"><p>150px</p></div>
							<div class="w3-rest w3-padding w3-green"><p>rest</p></div>
						</div>

						<div class="w3-row w3-section">
							<div class="w3-col w3-right w3-padding w3-blue" style="width:75px"><p>75px</p></div>
							<div class="w3-rest w3-padding w3-green"><p>rest</p></div>
						</div>

						<div class="w3-row w3-section">
							<div class="w3-col w3-left w3-padding w3-blue" style="width:100px"><p>100px</p></div>
							<div class="w3-col w3-right w3-padding w3-blue" style="width:100px"><p>100px</p></div>
							<div class="w3-rest w3-padding w3-green"><p>rest</p></div>
						</div>

						<div class="w3-row w3-section">
							<div class="w3-quarter w3-padding w3-red"><p>quarter</p></div>
							<div class="w3-half">
								<div class="w3-row">
									<div class="w3-col w3-padding w3-blue" style="width:80px"><p>80px</p></div>
									<div class="w3-rest w3-padding w3-green"><p>rest</p></div>
								</div>
							</div>
							<div class="w3-quarter w3-padding w3-purple"><p>quarter</p></div>
						</div>

						<div class="w3-row">
							<div class="w3-quarter w3-padding w3-red"><p>quarter</p></div>
							<div class="w3-quarter w3-padding w3-purple"><p>quarter</p></div>
							<div class="w3-half">
								<div class="w3-row">
									<div class="w3-col w3-padding w3-blue" style="width:35%"><p>35%</p></div>
									<div class="w3-rest w3-padding w3-green"><p>rest</p></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Using Percent</div>
					<div class="panel-body">
						<div class="w3-row">
							<div class="w3-col w3-green w3-padding" style="width:20%"><p>20%</p></div>
							<div class="w3-col w3-blue w3-padding" style="width:60%"><p>60%</p></div>
							<div class="w3-col w3-red w3-padding" style="width:20%"><p>20%</p></div>
						</div>
						<div class="w3-row w3-section">
							<div class="w3-col w3-green w3-padding" style="width:45%"><p>45%</p></div>
							<div class="w3-col w3-dark-grey w3-padding" style="width:55%"><p>55%</p></div>
						</div>
						<div class="w3-row">
							<div class="w3-col w3-green w3-padding" style="width:15%"><p>15%</p></div>
							<div class="w3-col w3-dark-grey w3-padding" style="width:35%"><p>35%</p></div>
							<div class="w3-col w3-red w3-padding" style="width:10%"><p>10%</p></div>
							<div class="w3-col w3-blue w3-padding" style="width:30%"><p>30%</p></div>
							<div class="w3-col w3-purple w3-padding" style="width:10%"><p>10%</p></div>
						</div>
					</div>
				</div>

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
						<td>w3-half</td>
						<td>Occupies 1/2 of the window (on medium and large screens)</td>
						</tr>
						<tr>
						<td>w3-third</td>
						<td>Occupies 1/3 of the window (on medium and large screens)</td>
						</tr>
						<tr>
						<td>w3-twothird</td>
						<td>Occupies 2/3 of the window (on medium and large screens)</td>
						</tr>
						<tr>
						<td>w3-quarter</td>
						<td>Occupies 1/4 of the window (on medium and large screens)</td>
						</tr>
						<tr>
						<td>w3-threequarter</td>
						<td>Occupies 3/4 of the window (on medium and large screens)</td>
						</tr>
						<tr>
						<td>w3-rest</td>
						<td>Occupies the rest of the column width</td>
						</tr>
						<tr>
						<td>w3-col</td>
						<td>Defines one column in a 12-column responsive grid</td>
						</tr>
						</tbody>
						</table>
					</div>
				</div>

				<div class="w3-row-padding" style="margin: 0 -16px">
					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading">The w3-half Class</div>
							<div class="panel-body">
								<div class="w3-row">
									<div class="w3-half w3-padding w3-teal">
										<p>1/2</p>
									</div>
									<div class="w3-half w3-padding w3-green">
										<p>1/2</p> 
									</div>
								</div>
							</div>
						</div>		
					</div>
					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading">The w3-third Class</div>
							<div class="panel-body">
								<div class="w3-row">
									<div class="w3-third w3-padding w3-deep-purple">
										<p>1/3</p>
									</div>
									<div class="w3-third w3-padding w3-green">
										<p>1/3</p> 
									</div>
									<div class="w3-third w3-padding w3-purple">
										<p>1/3</p> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="w3-row-padding" style="margin: 0 -16px">
					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading">The w3-twothird Class</div>
							<div class="panel-body">
								<div class="w3-row">
									<div class="w3-twothird w3-padding w3-blue">
										<p>2/3</p>
									</div>
									<div class="w3-third w3-padding w3-green">
										<p>1/3</p> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading">The w3-quarter Class</div>
							<div class="panel-body">
								<div class="w3-row">
									<div class="w3-quarter w3-padding w3-blue-gray">
										<p>1/4</p>
									</div>
									<div class="w3-quarter w3-padding w3-green">
										<p>1/4</p> 
									</div>
									<div class="w3-quarter w3-padding w3-blue-gray">
										<p>1/4</p>
									</div>
									<div class="w3-quarter w3-padding w3-green">
										<p>1/4</p> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="w3-row-padding" style="margin: 0 -16px">
					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading">The w3-threequarter Class</div>
							<div class="panel-body">
								<div class="w3-row">
									<div class="w3-threequarter w3-padding w3-khaki">
										<p>3/4</p>
									</div>
									<div class="w3-quarter w3-padding w3-dark-gray">
										<p>1/4</p> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="w3-col m6">
						<div class="panel">
							<div class="panel-heading">Columns Using Rest</div>
							<div class="panel-body">
								<div class="w3-row">
									<div class="w3-col w3-padding w3-lime" style="width:150px"><p>150px</p></div>
									<div class="w3-rest w3-padding w3-green"><p>rest</p></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Combinations</div>
					<div class="panel-body">
						<div class="w3-row">
							<div class="w3-quarter w3-padding w3-lime">
								<p>1/4</p>  
							</div>
							<div class="w3-half w3-padding w3-green">
								<p>1/2</p>
							</div>
							<div class="w3-quarter w3-padding w3-lime">
								<p>1/4</p>  
							</div>
						</div>

						<div class="w3-row w3-section">
							<div class="w3-quarter w3-padding w3-lime">
								<p>1/4</p>  
							</div>
							<div class="w3-quarter w3-padding w3-light-blue">
								<p>1/4</p>
							</div>
							<div class="w3-half w3-padding w3-green">
								<p>1/2</p>
							</div>
						</div>

						<div class="w3-row w3-section">
							<div class="w3-half w3-padding w3-green">
								<p>1/2</p>
							</div>
							<div class="w3-quarter w3-padding w3-lime">
								<p>1/4</p>  
							</div>
							<div class="w3-quarter w3-padding w3-light-blue">
								<p>1/4</p>
							</div>
						</div>

						<div class="w3-row w3-section">
							<div class="w3-third w3-padding w3-lime">
								<p>1/3</p>
							</div>
							<div class="w3-twothird w3-padding w3-green">
								<p>2/3</p>  
							</div>
						</div>

						<div class="w3-row w3-section">
							<div class="w3-quarter w3-padding w3-lime">
								<p>1/4</p>
							</div>
							<div class="w3-threequarter w3-padding w3-green">
								<p>3/4</p>  
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Responsive Show / Hide</div>
					<div class="panel-body">
						<div class="w3-padding w3-hide-small w3-purple">
							<p>w3-hide-small will be hidden on small screens (phones)</p>
						</div>

						<div class="w3-padding w3-hide-medium w3-green">
							<p>w3-hide-medium will be hidden on medium screens (tablets)</p>
						</div>

						<div class="w3-padding w3-hide-large w3-blue">
							<p>w3-hide-large will be hidden on large screens (laptops/desktop)</p>
						</div>
					</div>
				</div>


			</article>
		</section>
	</div>
</body>
</html>
