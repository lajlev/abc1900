<?php 
/*
Template Name: Home
*/
get_header(); ?>

<!-- Row for main content area -->
	<div class="columns" role="main">
		<ul data-orbit data-options="timer_speed:4000; bullets:true;">
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/img/home-orbit/home-5.jpg">
    		<!-- <div class="orbit-caption">here comes caption</div> -->
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/img/home-orbit/home-1.jpg">
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/img/home-orbit/home-4.jpg">
			</li>
		</ul>
		
		<div class="row vspace-bottom">
			<div class="columns large-6">
					<h3>Træning</h3>
					<p>
						ABC har 12 træningshold som dækker alle niveauer, alder og køn. Find et træningshold der passer til dit niveau.
					</p>
					
					<p>
						<a href="/?page_id=584" class="button round secondary">Træning oversigt</a>
					</p>
			</div>
			<div class="columns large-6">
					<h3>ABC Ligaen</h3>
					<p>
						I ABC ligaen er der dame-, herrer- og mix-ligaer som afviklet stævner på faste ugedage hen over sommeren. 
					</p>
					<p>
						<a href="/?page_id=70" class="button round secondary">Liga oversigt</a>
					</p>
			</div>
		</div>
		<div class="row vspace-bottom">
			<div class="columns large-6">
					<h3>Stævner</h3>
					<p>
						Vi afholder 4 store weekend stævner, samt er medarrangøre til 2 landsdækkende stævner.
					</p>
					<p>
						<a href="/?page_id=33" class="button round secondary">Stævne oversigt</a>
					</p>
			</div>
			<div class="columns large-6">
					<h3>Bliv medlem</h3>
					<p>
						Som medlem i ABC får du adgang til måske Danmarks bedste beachpark, træningshold, samt rabat til stævner.
					</p>
					<p>
						<a href="/?page_id=898" class="button round">Bliv medlem</a>
					</p>
			</div>
		</div>
		
		<div class="row">
			<div class="columns large-6 vspace-bottom">
				<h3>Facebook side</h3>
				<div class="fb-like-box" data-href="https://www.facebook.com/abc1900aarhus" data-width="400" data-height="600" data-show-faces="false" data-stream="true" data-show-border="false" data-header="false"></div>
			</div>
			<div class="columns large-6 vspace-bottom">
				<h3>Næste begivenheder</h3>
					<script type="text/javascript" src="https://www.conventus.dk/dataudv/www/kalender.php?type_ikon=1&niveau_ikon=0&mos=1&kort_dato=0&dato=1&dato_tidspunkt=1&tidspunkt=0&kort_tid=0&titel=1&sted=1&klikbar=1&tid=5&niveau=1&gruppe=&gruppe_type=2&rss=1&smal=0&foreningsid=5286"></script>
			</div>
		</div>
	</div>
	
		
<?php get_footer(); ?>