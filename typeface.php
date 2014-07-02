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
	<div class="row" id="mainContent">
		<div class="small-12 columns spacing">

			<div class="row section" id="textAndColor">
				<div class="small-12 columns">

					<!-- Typography -->
					<div class="row">
						<div class="large-4 columns">
							<h2>Typography</h2>
							<p>SST is the font preferred and recommended for use on PlayStation® comms.  The following are weights of the SST font that can be used.</p>
							<p>If SST is unavailable, <strong>Helvetica Neue</strong> can be used in place of SST font.</p>
						</div>
						<div class="large-8 columns">
							<img id="sst-fonts" src="assets/images/typography.png" alt="SST Fonts">
						</div>
					</div>

					<hr>
					
					<!-- Colours -->
					<div class="row">
						<div class="small-12 columns">
							<h2>Brand Colours</h2>
							<p>Blue is the PlayStation® hero colour and should be synonymous with the brand. The specific colourvalues that should be used when creating PlayStation® brand materials are shown below.</p>
							<ul class="small-block-grid-1 medium-block-grid-3">
							  <li>
								<div class="row">
									<div class="small-6 columns medium-12 medium-text-center">
										<img src="assets/images/colour/dark-blue.png" alt="dark blue">
									</div>
									<div class="small-6 columns medium-12 medium-text-center color-column">
										Pantone 287C<br>C100 M80<br>R0 G55 B145
									</div>
								</div>
							  </li>
							  <li>
								<div class="row">
									<div class="small-6 columns medium-12 medium-text-center">
										<img src="assets/images/colour/black.png" alt="black">
									</div>
									<div class="small-6 columns medium-12 medium-text-center color-column">Black</div>
								</div>
							  </li>
							  <li>
								<div class="row">
									<div class="small-6 columns medium-12 medium-text-center">
										<img src="assets/images/colour/white.png" alt="white">
									</div>
									<div class="small-6 columns medium-12 medium-text-center color-column">White</div>
								</div>
							  </li>

							</ul>

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

	<script src="assets/js/foundation/foundation.js"></script>
	<script src="assets/js/foundation/foundation.accordion.js"></script>
	<script src="assets/js/foundation/foundation.reveal.js"></script>
	<script src="assets/js/foundation/foundation.topbar.js"></script>
	<script src="assets/js/foundation/foundation.tab.js"></script>


	<script src="assets/js/custom.js"></script>
</body>
</html>