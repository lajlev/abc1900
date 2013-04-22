</section><!-- Container End -->

<div class="row full-width">
	<?php dynamic_sidebar("Footer"); ?>
</div>
<hr>
<footer class="row full-width" role="contentinfo">
	<div class="small-12 large-4 columns">
		<p>
			<small>&copy; <?php echo date('Y'); ?> Aarhus Beachvolley Club 1900</small>	
		</p>
	</div>
	
	<div class="small-12 large-8 columns">
		<?php //wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'inline-list right')); ?>
	</div>
</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>
	
</body>
</html>