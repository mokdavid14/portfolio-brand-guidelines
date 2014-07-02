	<div class="sticky contain-to-grid" id="navigation">
		<nav class="top-bar" data-topbar data-options="">
			<ul class="title-area">
			    <li>
					<a href="index.php">
			    	<img src="assets/images/logo_blue_shrunk.png" alt="PlayStation 4 Logo" style="padding: 11px;">
					</a>
			    </li>
			    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		  	</ul>
		  	<section class="top-bar-section">
            <?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
			    <!-- Right Nav Section -->
			    <ul class="right">
			      <li <?php if ($currentPage == 'index.php') { echo 'class="active"' ;} ?>><a href="index.php">About</a></li>
			      <li <?php if ($currentPage == 'logo.php') { echo 'class="active"' ;} ?>>
			        <a href="logo.php">Logo</a>
			      </li>
			      <li <?php if ($currentPage == 'typeface.php') { echo 'class="active"' ;} ?>>
			        <a href="typeface.php">Typeface</a>
			      </li>
			    </ul>

			    <!-- Left Nav Section -->
			    <ul class="left hide-for-small-only">
			      <li><a id="guideline-label" href="index.php">Brand Guidelines</a></li>
			    </ul>
			 </section>
		</nav>
	</div>