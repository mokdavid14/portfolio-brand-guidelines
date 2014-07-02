<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>David Mok's Online Brand Guidelines</title>

	<link rel="stylesheet" href="assets/stylesheets/normalize.css">
	<link rel="stylesheet" href="assets/stylesheets/foundation.css">

	<script src="http://modernizr.com/downloads/modernizr-latest.js"></script>
</head>
<body>
	<!-- Set Background Image -->
	<div id="bg">
		<img src="assets/images/ps4_background.png" alt="PS4 Background">
	</div>

	<!-- Inject Top Navigation Bar -->
	<?php include 'includes/nav.inc.php'; ?>
	
	<!-- Main Content -->
	<div id="mainContent" class="row" >
		<div class="small-12 columns spacing">

			<div class="row section" id="intro">
				<div class="small-12 columns">

					<!-- Title -->
					<div class="row">
						<div class="large-6 columns">
							<img id="main-logo" src="assets/images/logo_blue_cropped.png" alt="PlayStation 4 Logo" class="small-text-center large-text-left">
						</div>
						<div class="large-6 columns" >
							<h1 id="guidelines-title" class="small-text-center large-text-left">Brand Guidelines</h1>
						</div>
					</div>

					<hr> 

					<!-- About -->
					<div class="row">
						<div class="medium-4 columns"><h2>About</h2></div>
						<div class="medium-8 columns">
							<p>This Online Brand Guildelines has been created as part of an assignment to demonstrate clear understanding of the concept of a Brand Guildeline.  For this exercise, extracts from the Sony PlayStation 4 Brand Guidelines were employed</p>
							<p>The PlayStation 4 (PS4) is the latest edition in Sony's PlayStation product line of video game consoles</p>
							<p>The original PS4 Brand Guidelines can be found <a href="http://www.playstation-assistenza.it/files/download/PS4%20Brand%20Guidelines_v1.0_SCEE.pdf" target="_blank">here</a></p>
						</div>
					</div>
					<hr>

					<!-- Brand Pillars -->
					<h2>Brand Pillars</h2>
					<div class="row">
						<div class="small-6 medium-12 columns">
							<div class="row">
								<div class="small-12 medium-4 large-2 columns medium-text-center">
									<button id="emotive-btn" class="secondary pillar-btn" >Emotive</button>
								</div>
								<div class="small-12 medium-4 large-2 columns medium-text-center">
									<button id="immersive-btn" class="secondary pillar-btn" >Immersive</button>
								</div>
								<div class="small-12 medium-4 large-2 columns medium-text-center">
									<button id="irreverent-btn" class="secondary pillar-btn" >Irreverent</button>
								</div>
								<div class="small-12 medium-4 large-2 columns medium-text-center">
									<button id="celebratory-btn" class="secondary pillar-btn" >Celebratory</button>
								</div>
								<div class="small-12 medium-4 large-2 columns medium-text-center">
									<button id="unexpected-btn" class="secondary pillar-btn" >Unexpected</button>
								</div>
								<div class="small-12 medium-4 large-2 columns medium-text-center">
									<button id="fearless-btn" class="secondary pillar-btn" >Fearless</button>
								</div>
							</div>
						</div>
						<div id="pillar-column" class="small-6 medium-6 medium-offset-3 large-offset-0 columns end">
							<div class="pillar-wrapper hide">

								<div class="panel">
									<h2 id="pillar-title"></h2>
					  				<p id="pillar-details"></p>
								</div>

							</div>
						</div>
					</div>


				</div>
			</div>

		</div>
	</div>
	
	<!-- Inject Footer/Pagination -->
	<?php include 'includes/pagination.inc.php'; ?>

	<script src="assets/js/fastclick.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="assets/js/jquery-ui.min.js"></script>

	<script src="assets/js/foundation/foundation.js"></script>
	<script src="assets/js/foundation/foundation.accordion.js"></script>
	<script src="assets/js/foundation/foundation.reveal.js"></script>
	<script src="assets/js/foundation/foundation.topbar.js"></script>
	<script src="assets/js/foundation/foundation.tab.js"></script>

	<script src="assets/js/custom.js"></script>

</body>
</html>