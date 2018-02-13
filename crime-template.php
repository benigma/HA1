<?php
/*
Template Name: Crime Template
*/
?>
<?php get_header(); ?>

<section class="crime-statistics">
<div class="row">
	<div class="col-md-12">
		<?php echo the_field('business_crime_introduction'); ?>
		<div id="canvas">
			<div class="circle" id="circles-1"></div>
		    <div class="circle" id="circles-2"></div>
		    <div class="circle" id="circles-3"></div>
		    <div class="circle" id="circles-4"></div>
		</div>
	</div>
</div>
</section>

<div class="row">
	<div class="col-md-12 wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">
		<?php echo the_field('safer_neighbourhood'); ?>
	</div>
</div>

<section class="crime-numbers">
<div class="row">
	<div class="col-md-12 wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">
		<h2>Crime Partnership in numbers</h2>
		<ul class="crime-statistics">
		
		<?php if( have_rows('crime_partnership_figures') ): ?>
			<?php while( have_rows('crime_partnership_figures') ): the_row(); ?>
			
				<li>
					<img src="<?php the_sub_field('crime_figure_image'); ?>" />
					<p class="statistic"><strong><?php echo the_sub_field('crime_figure_number'); ?></strong></p>
					<p><?php the_sub_field('crime_figure_category'); ?></p>
				</li>
			
		<?php endwhile; endif; ?>
		
		</ul>
	</div>
</div>
</section>

<script src="<?php echo get_template_directory_uri(); ?>/js/circles.min.js"></script>

<script>
	
			(function() {
				var canvas = document.getElementById('canvas'),
					circlesCreated = false;
				function onScroll() {
					if (!circlesCreated && elementInViewport(canvas)) {
						circlesCreated = true;
						createCircles();
					}
				}
				function elementInViewport(el) {
			    var rect = el.getBoundingClientRect();
			    return (
			      rect.top  >= 0 &&
			      rect.left >= 0 &&
			      rect.top  <= 750
			    );
			  }
				function createCircles() {
					var colors = [
							['#D3B6C6', '#4B253A'], ['#FCE6A4', '#EFB917'], ['#BEE3F7', '#45AEEA']
						],
						circles = [];
					for (var i = 1; i <= colors.length; i++) {
						var child = document.getElementById('circles-' + i),
							percentage = 31.42 + (i * 9.84),
							circle1 = Circles.create({
								id:         'circles-1',
								radius:              100,
								value:               15,
								maxValue:            100,
								width:               15,
								text:                function(value){return value + '%';},
								colors:              ['#d2d4d8', '#56616f'],
								duration:            400,
								wrpClass:            'circles-wrp',
								textClass:           'circles-text',
								valueStrokeClass:    'circles-valueStroke',
								maxValueStrokeClass: 'circles-maxValueStroke',
								styleWrapper:        true,
								styleText:           true
							});
							circle2 = Circles.create({
								id:         'circles-2',
								radius:              100,
								value:               35,
								maxValue:            100,
								width:               15,
								text:                function(value){return value + '%';},
								colors:              ['#d2d4d8', '#91c46b'],
								duration:            400,
								wrpClass:            'circles-wrp',
								textClass:           'circles-text',
								valueStrokeClass:    'circles-valueStroke',
								maxValueStrokeClass: 'circles-maxValueStroke',
								styleWrapper:        true,
								styleText:           true
							});
							circle3 = Circles.create({
								id:         'circles-3',
								radius:              100,
								value:               72,
								maxValue:            100,
								width:               15,
								text:                function(value){return value + '%';},
								colors:              ['#d2d4d8', '#91c46b'],
								duration:            400,
								wrpClass:            'circles-wrp',
								textClass:           'circles-text',
								valueStrokeClass:    'circles-valueStroke',
								maxValueStrokeClass: 'circles-maxValueStroke',
								styleWrapper:        true,
								styleText:           true
							});
							circle4 = Circles.create({
								id:         'circles-4',
								radius:              100,
								value:               97,
								maxValue:            100,
								width:               15,
								text:                function(value){return value + '%';},
								colors:              ['#d2d4d8', '#56616f'],
								duration:            400,
								wrpClass:            'circles-wrp',
								textClass:           'circles-text',
								valueStrokeClass:    'circles-valueStroke',
								maxValueStrokeClass: 'circles-maxValueStroke',
								styleWrapper:        true,
								styleText:           true
							});
						circles.push(circle);
					}
				}
			  window.onscroll = onScroll;
			})();

</script>

<?php get_footer(); ?>