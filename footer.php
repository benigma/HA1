<footer>
<div class="row">
	<div class="col-md-11">
		<p>&copy; 2013 - <?php echo date('Y'); ?> Harrow Town Centre Business Improvement District. All rights reserved<br />
		Harrow Town Centre BID, c/o Debenhams Management Offices, 275 Station Road, Harrow, HA1 1NA.</p>
	</div>
	<div class="col-md-1">
		<img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" />
		<img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" />
	</div>
</div>
</footer>

<script>
	jQuery(function(){
		jQuery('#menu').slicknav({
			label: ''
		});
	});
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.slicknav.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
<script>
	new WOW().init();
</script>

<?php wp_footer(); ?>

</body>
</html>