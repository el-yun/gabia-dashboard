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
	<?php $page = 'input'; ?>
	<div id="wrap">
		<header>
			<?php include("include/header.php") ?>
		</header>

		<section id="container">
			<?php include("include/sidebar.php") ?>

			<article id="contents">
				<h1>Forms</h1>

				<div class="panel">
					<div class="panel-heading">Basic Form Elements</div>
					<div class="panel-body">
						<form>
							<p class="w3-section">
							<label>Name</label>
							<input class="w3-input" type="text" required="">
							</p>
							<p class="w3-section">
							<label>Email</label>
							<input class="w3-input" type="text" required="">
							</p>
							<p class="w3-section">
							<label>Text area</label>
							<textarea class="w3-input"></textarea>
							</p>
							<div class="w3-row">
								<div class="w3-half">
									<p>
									<input id="milk" class="" type="checkbox" checked="checked">
									<label for="milk">Milk</label>
									</p>
									<p>
									<input id="sugar" class="" type="checkbox">
									<label for="sugar">Sugar</label>
									</p>
									<p>
									<input id="lemon" class="" type="checkbox" disabled="">
									<label for="lemon">Lemon (Disabled)</label>
									</p>
								</div>
								<div class="w3-half">
									<p>
									<input id="male" class="" type="radio" name="gender" value="male" checked="">
									<label for="male">Male</label>
									</p>
									<p>
									<input id="female" class="" type="radio" name="gender" value="female">
									<label for="female">Female</label>
									</p>
									<p>
									<input id="unknown" class="" type="radio" name="gender" value="" disabled="">
									<label for="unknown">Don't know (Disabled)</label>
									</p>
								</div>
							</div>
						</form>
					</div>
					<div class="panel-footer">
						<button type="button" class="w3-button w3-black">Cancel</button>
						<button type="button" class="w3-button w3-blue w3-right">Send</button>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Horizontal Form</div>
					<div class="panel-body">
						<div class="w3-cell-row">
							<div class="w3-cell w3-right-align w3-padding-large" style="width:120px;">
								<label for="">Email</label>
							</div>
							<div class="w3-cell w3-cell-middle">
								<input type="email" class="w3-input" id="" placeholder="Email">
							</div>
						</div>
						<div class="w3-cell-row">
							<div class="w3-cell w3-right-align w3-padding-large" style="width:120px;">
								<label for="">Password</label>
							</div>
							<div class="w3-cell w3-cell-middle">
								<input type="password" class="w3-input" id="" placeholder="Password">
							</div>
						</div>
						<div class="w3-cell-row w3-padding-16">
							<div class="w3-cell w3-right-align" style="width:120px;"></div>
							<div class="w3-cell"><label><input type="checkbox"> Remember me</label></div>
						</div>
					</div>
					<div class="panel-footer">
						<button type="button" class="w3-button w3-teal">Cancel</button>
						<button type="button" class="w3-button w3-pink w3-right">Sign in</button>
					</div>
				</div>
				

				<!-- <div class="panel">
					<div class="panel-heading">Input groups</div>
					<div class="panel-body">

						<div class="w3-cell-row">
							<input type="text" class="w3-input w3-cell" placeholder="Search...">
							<span class="w3-cell" style="width:1%;">
								<button type="button" class="w3-button w3-border"><i class="fa fa-search"></i></button>
							</span>
						</div>
						<br><br><br><br><br><br><br>

						<div class="w3-cell-row">
							<div class="w3-cell w3-cell-middle">
								<input type="email" class="w3-input" id="" placeholder="Email">
							</div>
							<span class="w3-cell" style="width:1%;">
								<button type="button" class="w3-button w3-border"><i class="fa fa-search"></i></button>
							</span>
						</div>
						<br><br><br><br><br><br><br>


						<div class="w3-input-group">
							<input type="text" class="w3-input" placeholder="Search...">
							<span class="input-group-btn">
								<button type="button" class="w3-button"><i class="fa fa-search"></i></button>
							</span>
						</div>
						<div class="w3-input-group w3-section">
							<span class="input-group-addon fa fa-envelope"></span>
							<input type="text" class="w3-input" placeholder="Email">
						</div>
						<div class="w3-input-group w3-section">
							<span class="input-group-addon fa fa-check"></span>
							<input type="text" class="w3-input" placeholder="Search...">
						</div>

						<div class="w3-input-group w3-section">
							<span class="input-group-addon fa fa-check"></span>
							<input type="text" class="w3-input" placeholder="Search...">
							<span class="input-group-btn">
								<button type="button" class="w3-button"><i class="fa fa-search"></i></button>
							</span>
						</div>
						<div class="w3-input-group w3-section">
							<span class="input-group-addon">
								<input id="" class="" type="checkbox">
							</span>
							<input type="text" class="w3-input" placeholder="Search...">
						</div>
						<div class="w3-input-group w3-section">
							<span class="input-group-addon">
								<input id="milk" class="" type="radio">
							</span>
							<input type="text" class="w3-input" placeholder="Search...">
						</div>

						<h1>flexbox</h1>
						<div class="flex w3-section">
							<input type="text" class="w3-input" placeholder="Search...">
							<button type="button" class="w3-button w3-border border-left-0"><i class="fa fa-search"></i></button>
						</div>
						<div class="flex w3-section">
							<div class="w3-border border-right-0" style="padding:6px 12px"><span class="fa fa-envelope"></span></div>
							<input type="text" class="w3-input" placeholder="Search...">
						</div>
						<div class="flex w3-section">
							<div class="w3-border border-right-0" style="padding:6px 12px"><span class="fa fa-check"></span></div>
							<input type="text" class="w3-input" placeholder="Search...">
						</div>
						<div class="flex w3-section">
							<div class="w3-border border-right-0" style="padding:6px 12px"><span class="fa fa-check"></span></div>
							<input type="text" class="w3-input" placeholder="Search...">
							<button type="button" class="w3-button w3-border border-left-0"><i class="fa fa-search"></i></button>
						</div>
					</div>
				</div> -->

				<div class="panel">
					<div class="panel-heading">Bordered Select Menu</div>
					<div class="panel-body">
						<select class="w3-select">
							<option value="1">Choose your option</option>
							<option value="2">Option 1</option>
							<option value="3">Option 2</option>
							<option value="4">Option 3</option>
						</select>

						<!-- <div class="flex w3-section">
							<div style="width:180px">
								<select class="w3-select">
									<option value="1">Choose your option</option>
									<option value="2">Option 1</option>
									<option value="3">Option 2</option>
									<option value="4">Option 3</option>
								</select>
							</div>
							<div style="flex:1"><input type="email" class="w3-input" placeholder="Search..."></div>
						</div> -->
					</div>
				</div>

			</article>
		</section>
	</div>
</body>
</html>