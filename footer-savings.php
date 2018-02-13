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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.slicknav.js"></script>

<script>
	jQuery(function(){
		jQuery('#menu').slicknav({
			label: ''
		});
	});
</script>
<script>
$(document).ready(function() {
 
  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
 
  sync1.owlCarousel({
    singleItem : true,
    slideSpeed : 1000,
    navigation: true,
    navigationText: [
          "",
          ""
          ],
    pagination: false,
    afterAction : syncPosition,
    autoHeight : true,
    responsiveRefreshRate : 200,
  });
 
  sync2.owlCarousel({
    items : 7,
    itemsDesktop      : [1199,10],
    itemsDesktopSmall     : [979,10],
    itemsTablet       : [768,8],
    itemsMobile       : [479,4],
    pagination:false,
    responsiveRefreshRate : 100,
    afterInit : function(el){
      el.find(".owl-item").eq(0).addClass("synced");
    }
  });
 
  function syncPosition(el){
    var current = this.currentItem;
    $("#sync2")
      .find(".owl-item")
      .removeClass("synced")
      .eq(current)
      .addClass("synced")
    if($("#sync2").data("owlCarousel") !== undefined){
      center(current)
    }
  }
 
  $("#sync2").on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).data("owlItem");
    sync1.trigger("owl.goTo",number);
  });
 
  function center(number){
    var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
    var num = number;
    var found = false;
    for(var i in sync2visible){
      if(num === sync2visible[i]){
        var found = true;
      }
    }
 
    if(found===false){
      if(num>sync2visible[sync2visible.length-1]){
        sync2.trigger("owl.goTo", num - sync2visible.length+2)
      }else{
        if(num - 1 === -1){
          num = 0;
        }
        sync2.trigger("owl.goTo", num);
      }
    } else if(num === sync2visible[sync2visible.length-1]){
      sync2.trigger("owl.goTo", sync2visible[1])
    } else if(num === sync2visible[0]){
      sync2.trigger("owl.goTo", num-1)
    }
    
  }
 
});
</script>

<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
<script>
	new WOW().init();
</script>

<?php wp_footer(); ?>

</body>
</html>