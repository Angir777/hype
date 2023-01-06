<?php

	/**
	 * @author   Błażej Skrzypniak <blazej@skrzypniak.pl>
	*/

	// global varables
	global $lang;										// Global language varable
	global $l; 											// Global language array
     
?>
<div class="space-medium bg-grey">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="section-title">
					<h1>500</h1>
					<div class="divider"></div>
					<p>Internal Server Error</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="space-medium single_services text-left">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-xs-12">
				<h4><?= $l['e500_1'] ?></h4>
				<div class="divider additional"></div>
				<div class="header-text mt-5">
					<p><?= $l['e500_2'] ?><a href="<?= URL ?>" title=""><?= $l['e500_3'] ?></a>.</p>
				</div>
			</div>
			<div class="col-md-6 col-xs-12 mt20">
				<div class="header-circle">
					<div class="header-circle-icon">
						<i class="fas fa-bomb"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>