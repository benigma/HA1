<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="user-scalable=no">
	<title>Harrow BID</title>
	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slicknav.css">

	<link href="<?php echo get_template_directory_uri(); ?>//img/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>//img/android-chrome-192x192.png" sizes="192x192">
	<!--  jQuery 1.7+  -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.slicknav.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<script type="text/javascript" src="http://fast.fonts.net/jsapi/59b8cc31-61bf-417a-b9a1-86b84539182b.js"></script>
		
</head>
<body <?php body_class(); ?>>

<header class="savings">
	<div class="row">
		<div class="col-md-12">
		
			<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/HA1-BID-Logo.png" alt="Harrow BID" class="BID-logo" /></a>
			
			<nav>
				<?php 
					$defaults = array(	
					'container' => false, 	
					'theme_location' => 'primary-menu'
					);
									
					wp_nav_menu( $defaults );
				 ?>
			</nav>
			
			<?php echo the_field('page_header_introduction'); ?>
	
		</div>
	</div>
</header>

<div class="row">
	<div class="col-md-12">
	
	<div id="sync2" class="owl-carousel">
	  <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Waste-Card.png" /></div>
	  <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Energy-Card.png" /></div>
	  <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Telecoms-Card.png" /></div>
	  <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Testing-Card.png" /></div>
	  <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Pest-Card.png" /></div>
	  <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Print-Card.png" /></div>
	  <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Cars-Card.png" /></div>
	  <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Couriers-Card.png" /></div>
	  <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Fix-Card.png" /></div>
	  <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Stationary-Card.png" /></div>
	  <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Insurance-Card.png" /></div>
	  <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Security-Card.png" /></div>
	  <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Training-Card.png" /></div>
	</div>
		<div id="sync1" class="owl-carousel">
		
		<div class="item">
			<div class="savings-icon">
				<img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Waste-Icon.png" />
			</div>
			<div class="savings-item">
			  	<h1><strong>HA1</strong>Waste &amp; Recycling</h1>
			  	<p>Every business produces waste and has to pay to have it removed. Every business community has many suppliers driving large trucks through the streets, collecting rubbish. This means that different businesses are paying different rates and receiving different service levels.</p>
			  	<p>In most business communities a large percentage of the waste collected ends up in landfill. Being a member of the Harrow BID means that you can benefit from free waste & recycling advice to help reduce waste to landfill across the UK.</p>
			  	<p>Along with the community benefits, if your business currently has waste management issues, we can advise and help you find a bespoke, cost effective environmental solution. Zero-2-landfill is at the very core of every waste management strategy implemented by our team.</p>
			  	<p>Our advice is free and you are under no obligations.</p>
			  	<h3>NATIONAL BID BUYING GROUP SUCCESSES</h3>
			  	<p><strong>£1,500/yr</strong> was saved by a construction company in Central London, by adopting the BIDs award winning waste and recycling scheme.</p>
			  	<p>A central London Publishers saved <strong>£800/yr</strong> on their existing costs by switching to the recommended award winning waste and recycling scheme.</p>
			  	<blockquote>Any business can save money with the Savings & Support team with their easy to use procurement service. We did and are delighted with the little time it took to make big savings.</blockquote>
			  	<figure>Christine Redford, Redfords, <strong>Newcastle</strong></figure>
			  </div>
		</div>
		
		  <div class="item">
		  	<div class="savings-icon">
		  		<img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Energy-Icon.png" />
		  	</div>
		  	<div class="savings-item">
			  	<h1><strong>HA1</strong>Energy</h1>
			  	<p>Electricity and gas procurement is complex, confusing and time consuming for our members. That's why we are here to do it for you. Our energy experts are on hand to ensure that you have the right energy strategy, monitoring and contract for your business.</p>
			  	<h3>NATIONAL BID BUYING GROUP SUCCESSES</h3>
			  	<p>The Savings & Support team were able to identify an annual savings of <strong>£4,173.81</strong> for a Golf centre location in Cuckfield, Sussex.</p>
			  	<p>Over <strong>£5,000</strong> of dual energy savings were achieved for a Japanese Fusion restaurant in Winchester.</p>
			  	<blockquote>With so many supplier tariffs on offer it's good to have a team help us make sense of everything and do all the back ground work.</blockquote>
			  	<figure>Penny McNeil, <strong>Imagination</strong></figure>
			  </div>
		  </div>
		  
		  <div class="item">
		  	<div class="savings-icon">
		  		<img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Telecoms-Icon.png" />
		  	</div>
		  	<div class="savings-item">
		  	  	<h1><strong>HA1</strong>Telecoms</h1>
		  	  	<p>Business landlines, business mobiles, VoIP and broadband can result in many bills with countless line items and analysing all of this data to compare it against the best market rates is time consuming. Simply provide us with your most recent bill and the saving team's telecoms experts will do all of the work for you. We will then present the data back to you in a concise report.</p>
		  	  	<h3>NATIONAL BID BUYING GROUP SUCCESSES</h3>
		  	  	<p>After careful analyses, the Savings &amp; Support team identified an <strong>£8,000/yr</strong> saving for a London Hair Clinic.</p>
		  	  	<p>The Savings and Support team upgraded a London share advisors telecoms and made them a saving of <strong>£5,393</strong> on their infrastructure costs.</p>
		  	  	<blockquote>It takes little time, they are experienced in their field and the team are efficient and helpful.</blockquote>
		  	  	<figure>Robert Taylor, Organiser, <strong>Camden Federation of Private Tenants (CFPT)</strong></figure>
		  	  </div>
		  </div>
		  
		  <div class="item">
		  	<div class="savings-icon">
		  		<img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Testing-Icon.png" />
		  	</div>
		  	<div class="savings-item">
		  	  	<h1><strong>HA1</strong>Testing</h1>
		  	  	<p>Our preferential rate for qualified testers and risk assessors means that you can protect your business and adhere to H&S regulations. Feel safe and secure in the knowledge that you are getting the best team at the best rates.</p>
		  	  	<p>Portable appliance testing (PAT) is proving to be very popular across the BID. <strong>Our rates are around 50% cheaper than the market average!</strong></p>
		  	  	<p>Feel confident in the knowledge that all areas of H&S regulations are covered by just one phone call.</p>
		  	  	<h3>NATIONAL BID BUYING GROUP SUCCESSES</h3>
		  	  	<p>A media company on Tottenham Court Road saved <strong>51%</strong> on their portable appliance testing (PAT).</p>
		  	  	<p>Using the Savings & Support team, a London publishers achieved a saving of <strong>50%</strong> for their portable appliance testing (PAT) requirements.</p>
		  	  	<p>A publishers on Fitzroy Square achieved a saving of <strong>50%</strong> by using the BID portable appliance testing (PAT) company.</p>
		  	  	<blockquote>The part of the service that has impressed me most is that the Savings and Support team are not “pushy”. Also you let us &quot;pick and choose&quot; the services where there are cost savings to be made whereas other companies are only interested if there is a minimum turnover to work.</blockquote>
		  	  	<figure>Trevor Hamshere, Practice Manager, <strong>Goodman Jones LLP</strong></figure>
		  	  </div>
		  </div>
		  
		  <div class="item">
		  	<div class="savings-icon">
		  		<img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Pest-Icon.png" />
		  	</div>
		  	<div class="savings-item">
		  	  	<h1><strong>HA1</strong>Pest Control</h1>
		  	  	<p>A town is an area where there is always going to be pest activity: Harrow is no exception. Your BID pest controllers will work discretely behind the scenes and keep this annoyance routinely under control for you, in both food and non-food environments; with free emergency calls outs, we will always be there to look after you.</p>
		  	  	<p>With all businesses working together in the BID we control the problem and control the costs. You can expect to see an average of around 27% saving against your current bill. The more companies that join, the greater the saving will be.</p>
		  	  	<h3>NATIONAL BID BUYING GROUP SUCCESSES</h3>
		  	  	<p>The Savings &amp; Support team assisted a design company in central London to save <strong>£1,680/yr</strong> on their pest control contract.</p>
		  	  	<p>A clinical trials company on Tottenham Court Road made a yearly saving of <strong>£500/yr</strong> by switching to the pest controller suggested by the Savings & Support team.</p>
		  	  	<blockquote>We use the Pest Control service - the staff are polite, friendly and efficient, we are visited at a time convenient for us and I never have to chase anything up. The price is the best around.</blockquote>
		  	  	<figure>Renata Giacobazzi, Delicatessen Owner, <strong>Hampstead</strong></figure>
		  	  </div>
		  </div>
		  
		  <div class="item">
		  	<div class="savings-icon">
		  		<img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Print-Icon.png" />
		  	</div>
		  	<div class="savings-item">
		  	  	<h1><strong>HA1</strong>Print</h1>
		  	  	<p>No matter how electronic we become, we still require business cards, letterheads, compliment slips etc. Every BID business requires some form of printing. We have therefore put together the best quality service at the best rates exclusively for BID members.</p>
		  	  	<p>Whatever your needs, small or complex, we have print experts ready to help you and your business.</p>
		  	  	<h3>NATIONAL BID BUYING GROUP SUCCESSES</h3>
		  	  	<p>A retailer on Tottenham Court Road used the Savings & Support service for their marketing material and saved <strong>23%</strong> on their print costs.</p>
		  	  	<p>A designer on Cleveland Street, London, made a saving of <strong>31%</strong> on their office stationery, by switching to the recommended service.</p>
		  	  	<blockquote>Any business can save money with Meercat with their easy to use procurement service. We did and are delighted with the little time it took to make big savings.</blockquote>
		  	  	<figure>Christine Redford, Salon Owner, <strong>Newcastle</strong></figure>
		  	  </div>
		  </div>
		  
		  <div class="item">
		  	<div class="savings-icon">
		  		<img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Cars-Icon.png" />
		  	</div>
		  	<div class="savings-item">
		  	  	<h1><strong>HA1</strong>Cars</h1>
		  	  	<p>Addressing our BID member's requirements we have put together a high quality, environmentally friendly and cost-effective taxi service: introducing your very own HA1Cars.</p>
		  	  	<p>With new European standards and fuel efficient engine and hybrid vehicles, sit back in a Mercedes Benz E-class and relax in the knowledge that you are saving up to 25% on standard fares and helping to save the planet at the same time.</p>
		  	  	<h3>NATIONAL BID BUYING GROUP SUCCESSES</h3>
		  	  	<p>The Savings and Support team helped a London medical company achieve an <strong>£8,640/yr</strong> saving on their passenger transport, whilst at the same time improving the level of service being provided.</p>
		  	  	<p>Renegotiation of an existing contract secured a <strong>£2,500/yr</strong> saving for a TV and film promotion company on Stephen Street, London, without changing service level or supplier.</p>
		  	  	<blockquote>Over a cup of coffee, the Savings & Support team allowed me to review the services that they offered whilst under no obligation or pressure to sign up there and then.<br /><br />I believe that one of the greatest offers for my team is around the taxi service, not just for my shop but for the team within my shop who can use it and enjoy these great rates.</blockquote>
		  	  	<figure>Ian Everett, Store Manager, <strong>Waitrose</strong></figure>
		  	  </div>
		  </div>
		  
		  <div class="item">
		  	<div class="savings-icon">
		  		<img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Couriers-Icon.png" />
		  	</div>
		  	<div class="savings-item">
		  	  	<h1><strong>HA1</strong>Couriers</h1>
		  	  	<p>Welcome to couriers, where we have pre-negotiated rates for motorcycle, van and cycle courier services across London taking care of large, small, local or international deliveries.</p>
		  	  	<p>A simple review by your BID saving team can give you on average around a 10% saving on your existing costs.</p>
		  	  	<h3>NATIONAL BID BUYING GROUP SUCCESSES</h3>
		  	  	<p>The Savings & Support team were able to identify an annual savings of <strong>£4,173.81</strong> for a Golf centre location in Cuckfield, Sussex.</p>
		  	  	<p>Over <strong>£5,000</strong> of dual energy savings were achieved for a Japanese Fusion restaurant in Winchester.</p>
		  	  	<blockquote>With so many supplier tariffs on offer it's good to have a team help us make sense of everything and do all the back ground work.</blockquote>
		  	  	<figure>Ian Everett, Store Manager, Waitrose</figure>
		  	  </div>
		  </div>
		  
		  <div class="item">
		  	<div class="savings-icon">
		  		<img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Fix-Icon.png" />
		  	</div>
		  	<div class="savings-item">
		  	  	<h1><strong>HA1</strong>Fix</h1>
		  	  	<p>Our one stop shop for all maintenance and handyman requirements. If you’re looking for a professional, reliable and cost effective approach with a team you can trust to get the job done, our A1Fix team are the perfect solution.</p>
		  	  	<p>Not only will we save you on average, 15% on your existing call out charges and project costs, we’ll also remove the burden and concern of finding the skills and people you need.</p>
		  	  	<h3>NATIONAL BID BUYING GROUP SUCCESSES</h3>
		  	  	<p>A construction company on Store Street, London made use of the handyman service on several occasions and to date have made a <strong>20%</strong> saving on their existing costs.</p>
		  	  	<p>The Savings and Support team assisted on a retail project in Tottenham Court Road, and achieved a <strong>22%</strong> saving for the owner.</p>
		  	  	<blockquote>Diligent and fast, the Handyman service exceeded all expectations.</blockquote>
		  	  	<figure>Steve Black, Owner, <strong>Highly Sprung</strong></figure>
		  	  </div>
		  </div>
		  
		  <div class="item">
		  	<div class="savings-icon">
		  		<img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Stationary-Icon.png" />
		  	</div>
		  	<div class="savings-item">
		  	  	<h1><strong>HA1</strong>Stationary</h1>
		  	  	<p>Currently there are dozens of stationery suppliers across the Harrow BID. Costs are inconsistent and traffic is increased through 100’s of deliveries.</p>
		  	  	<p>The Savings & Support Team will analyse all your requirements and carry out a market test for you to ensure you receive exactly what you want. Working together we can reduce truck deliveries into the BID area while saving on average 18%.</p>
		  	  	<p>The BID offers a closed loop environmental solution (this is where we recycle stationery and then reuse it within the BID in its new form).</p>
		  	  	<h3>NATIONAL BID BUYING GROUP SUCCESSES</h3>
		  	  	<p>A designer on Cleveland Street, London, made a savings of <strong>31%</strong> on their office stationery by switching to the Savings & Support team’s suggested supplier service.</p>
		  	  	<p>A <strong>14%</strong> reduction in existing costs made by an Architects firm on Foley Street in London.</p>
		  	  	<blockquote>Ensuring that as the customer, my needs are taken care of in terms of delivery, quality, and costs of services.</blockquote>
		  	  	<figure>Maulyne Anatol, Office Manager, <strong>Marie Stopes International</strong></figure>
		  	  </div>
		  </div>
		  
		  <div class="item">
		  	<div class="savings-icon">
		  		<img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Insurance-Icon.png" />
		  	</div>
		  	<div class="savings-item">
		  	  	<h1><strong>HA1</strong>Insurance</h1>
		  	  	<p>By bringing together businesses within the same sector we can consolidate your needs and negotiate better premiums. Your BID insurance team will do all the work for you and provide you with all the support you need.</p>
		  	  </div>
		  </div>
		  
		  <div class="item">
		  	<div class="savings-icon">
		  		<img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Security-Icon.png" />
		  	</div>
		  	<div class="savings-item">
		  	  	<h1><strong>HA1</strong>Security</h1>
		  	  	<p>Covering all physical and electronic requirements, a BID security expert will work with you to ensure the security needs of your business are fully addressed and appropriate.</p>
		  	  	<p>Safe. Professional. Cost effective.</p>
		  	  </div>
		  </div>
		  
		  
		  <div class="item">
		  	<div class="savings-icon">
		  		<img src="<?php echo get_template_directory_uri(); ?>/img/HA1-Training-Icon.png" />
		  	</div>
		  	<div class="savings-item">
		  	  	<h1><strong>HA1</strong>Training</h1>
		  	  	<p>Every business needs to ensure that their staff are working to the best of their abilities. We have listened to our members and looked to address some of their common training needs:</p>
		  	  	<ul>
					<li>Health & safety</li>
					<li>Fire warden training</li>
					<li>First Aid</li>
					<li>Energy procurement and efficiency</li>
					<li>Environmental waste management</li>
					<li>Effective procurement</li>
				</ul>
		  	  </div>
		  </div>
		</div>
	
	</div>
</div>

<section class="grey">
<div class="row brochure wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">
	<div class="col-md-6">
		<img src="<?php echo get_template_directory_uri(); ?>/img/BID-Savings-Cover.jpg" />
	</div>
	
	<div class="col-md-6">
		<h2>HA1 SAVINGS AND SUPPORT</h2>
		<p>Our service covers commodities and services common to most businesses and provides professional support and invaluable market knowledge.  Our team can handle everything, saving members time and money, and helping them to reduce their carbon footprint.</p>
		<p><strong>The advantages to you</strong></p>
		<ul>
			<li>We can draw on the national buying power provided by nearly 200 UK BIDS representing10,000s of businesses</li>
			<li>You save money on your supplier costs and utility bills</li>
			<li>You save time while a team of experts manages your supplier relationships</li>
			<li>You improve your environmental footprint</li>
			<li>You receive individual service with no call centres to deal with</li>
			<li>Funding is from the BID; the savings are yours</li>
		</ul>
		<p style="text-align: center;"><button>DOWNLOAD the savings brochure</button></p>
	</div>
</div>
</section>

<footer>
<div class="row">
	<div class="col-md-11">
		<p>&copy; 2013 - 2016 Harrow Town Centre Business Improvement District. All rights reserved<br />
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
</body>
</html>