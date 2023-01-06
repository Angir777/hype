<?php

	/**
	 * @author   Błażej Skrzypniak <blazej@skrzypniak.pl>
	*/

	// global varables
	global $lang;										// Global language varable
	global $l; 											// Global language array
	
?>
<div class="space-medium">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
				<div class="about-section">
					<h2><?= $l['c_1'] ?></h2>
					<div class="divider additional"></div>
					<p><?= $l['c_2'] ?></p>
					<?php if (!isset($_SESSION['user']['logged']) && $_SESSION['user']['logged'] == false) { ?>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt20">
							<h3><?= $l['c_3'] ?></h3>
							<a href="<?= URL.friendly_url($l['url_login']) ?>" class="btn btn-primary hvr-buzz-out" title="<?= $l['button_login'] ?>"><?= $l['button_login'] ?></a>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt20">
							<h3><?= $l['c_4'] ?></h3>
							<a href="<?= URL.friendly_url($l['url_registration']) ?>" class="btn btn-default" title="<?= $l['button_registration'] ?>"><?= $l['button_registration'] ?></a>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="col-lg-offset-1 col-lg-4 col-md-4 col-md-offset-1 col-sm-12 col-xs-12">
				<div class="">
					<img src="<?= URL ?>template/<?= VIEW ?>/images/about-pic.jpg" alt="about-pic.jpg" class="img-responsive">
				</div>
			</div>
		</div>
	</div>
</div>