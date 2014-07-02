<div id="footer" class="row">
	<div class="small-12 columns spacing">

		<div class="row section" id="textAndColor">
			<div class="small-12 columns">

			<div class="pagination-centered">
			  <ul class="pagination">
			        <?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>

				    <li <?php if ($currentPage == 'index.php') { echo 'class="current"' ;} ?>><a href="index.php">About</a></li>
				    <li <?php if ($currentPage == 'logo.php') { echo 'class="current"' ;} ?>><a href="logo.php">Logo</a></li>
				    <li <?php if ($currentPage == 'typeface.php') { echo 'class="current"' ;} ?>><a href="typeface.php">Typeface</a></li>
			  </ul>
			</div>

			</div>
		</div>

	</div>
</div>