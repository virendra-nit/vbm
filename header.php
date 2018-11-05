<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="vishva bauddha mahasangh.">
<meta name="author" content="Zubvector Studio">
<meta name="keywords" content="vishva bauddha mahasangh">

<!--for social media-->
<meta property="og:title" content="vishva bauddha mahasangh"/>
<meta property="og:image" content="thumb_facebook.png"/>
<meta property="og:description" content=" vishva bauddha mahasangh. "/>
<link rel="icon" href="fevocon.png">

<!--for apple App-->

<title>Vishva Bauddha Mahasangh</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="template.css" rel="stylesheet">
<link href="media-query.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="assets/js/ie-emulation-modes-warning.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<!--jquery -->
<script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
<!--jquery -->
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.form.js"></script>
<!--fancyapp-->
<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="fancyapp/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="fancyapp/jquery.fancybox.js"></script>
<link rel="stylesheet" type="text/css" href="fancyapp/jquery.fancybox.css" media="screen" />

<!-- Add Button helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="fancyapp/helpers/jquery.fancybox-buttons3447.css?v=1.0.5" />
<script type="text/javascript" src="fancyapp/helpers/jquery.fancybox-buttons3447.js?v=1.0.5"></script>

<!-- Add Thumbnail helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="fancyapp/helpers/jquery.fancybox-thumbsf2ad.css?v=1.0.7" />
<script type="text/javascript" src="fancyapp/helpers/jquery.fancybox-thumbsf2ad.js?v=1.0.7"></script>

<!-- Add Media helper (this is optional) -->
<script type="text/javascript" src="fancyapp/helpers/jquery.fancybox-mediac924.js?v=1.0.6"></script>
<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				/*prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,*/

				helpers : {
					title	: {
						type: 'outside'
					},
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('img/1_b.html');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 0
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : 'img/1_b.jpg',
						title : 'My title'
					}, {
						href : 'img/2_b.jpg',
						title : '2nd title'
					}, {
						href : 'img/3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});
			
			/*customIframe*/
			$(".popupIframe1").fancybox({
				maxWidth		: '500',
				maxHeight		: '300',
				autoSize :  'auto',
				/*autoSize	: false,*/
				closeClick	: true,
				padding		: '0',
				scrolling	: 'auto',
				preload   : true,
			});
			
			$(".popupIframe2").fancybox({

				maxWidth	: '680',
				maxHeight	: '300',
				width		: '90%',
				height		: '90%',
				/*autoSize :  'auto',*/
				autoSize	: false,
				closeClick	: true,
				padding		: '0',
				scrolling	: 'auto',
				preload   : true,

			});
			/*end customIframe*/


		});
	</script>
<!--end fancyapp-->

<!-- mMenu-->
<link type="text/css" rel="stylesheet" href="mmenu/css/jquery.mmenu.all.css" />
<script type="text/javascript" src="mmenu/js/jquery.mmenu.js"></script>
<script type="text/javascript">
		$(function() {
				$('nav#menu').mmenu({
					slidingSubmenus: false
				});
				//set ให้สามารถคลิกเปิดเมนูเต็มความกว้างได้  ถ้าไม่ใส่จะคลิกเปิดได้เฉพาะตรง ลูกศร
				$('nav#menu').find( ".mm-subopen" ).addClass( "mm-fullsubopen" );
		});
	</script>

<!-- end mMenu-->

<!-- iosSlider plugin -->
<link rel = "stylesheet" media = "screen" href = "iosslider/iosslider-home.css" />
<script src = "iosslider/jquery.iosslider.js"></script>
<script type="text/javascript">
			$(document).ready(function() {
				
				$('.iosSlider').iosSlider({
					snapToChildren: true,
					desktopClickDrag: false,
					infiniteSlider: true,
					snapSlideCenter: true,
					navSlideSelector: $('.indicators .item'),
					onSlideChange: slideChange,
						navNextSelector: $('.header-two-box-next'),
					navPrevSelector: $('.header-two-box-prev'),
					autoSlide: true,
					autoSlideTimer: 5000,
					
					
					
				});
				
			});
			
			function slideChange(args) {
			
				try {
					console.log('changed: ' + (args.currentSlideNumber - 1));
				} catch(err) {
				}
				
				$('.indicators .item').removeClass('selected');
				$('.indicators .item:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');
			
			}
		</script>
<!--end  iosSlider plugin -->

<!-- matchHeight-->

<script type="text/javascript" src="matchHeight/jquery.matchHeight.js"></script>
<script type="text/javascript">
            (function() {

                /* matchHeight example */

                $(function() {
                    // apply your matchHeight on DOM ready (they will be automatically re-applied on load or resize)

                    // get test settings
                   var byRow = $('body').hasClass('matchHeightBody');

                    // apply matchHeight to each item container's items
                    $('.item-Container').each(function() {
                        $(this).children('.itemH').matchHeight(byRow);
                    });
                });

            })();
        </script>
<!-- end matchHeight-->

<!--owl-carousel-->
<!-- Important Owl stylesheet -->
<link rel="stylesheet" href="owl-carousel/assets/owl.carousel.css">

<!-- Default Theme -->
<link rel="stylesheet" href="owl-carousel/assets/owl.theme.default.css">

<!-- Include js plugin -->
<script src="owl-carousel/owl.carousel.js"></script>
<script>
$(document).ready(function() {
 
  var owl = $("#owl-brand");
 
  owl.owlCarousel({
	  items:1,
	  margin:10,
	  autoplay: true,
	  autoplayHoverPause: true,
	  autoplayTimeout:3000,
	  loop: true,
	  dots: false,
	  nav:true,
	 /* autoHeight:true,*/
	 
  });
 

});

</script>

<!--end owl-carousel////////////////////////-->

<!-- add bxslider-->

<script src="bxslider/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="bxslider/jquery.bxslider.css" rel="stylesheet" />
<script>
$(document).ready(function(){
  $('.bxWrapper').bxSlider({
 /* adaptiveHeight: false,
  mode: 'horizontal',

 
  controls: false,*/
    speed:500,
  infiniteLoop: true,
  auto: true,
  pager: false,
  nextSelector: '#homePartner-next',
  prevSelector: '#homePartner-prev',
  nextText: '',
  prevText: ''

});



});
</script>
<!-- end  bxslider-->

<!-- sweetAlert plugin -->
<script src="sweetAlert/sweet-alert.js"></script>
<link rel="stylesheet" type="text/css" href="sweetAlert/sweet-alert.css">
<!-- end sweetAlert plugin//////////////////////////// -->

</head>

<body   class="matchHeightBody">
<div>
	<!--div  container wrapper layout -> 
  

  <!--  head//////////////////////////////////////////-->
	<div class="headWrapper clearfix">
  <div class="container mainhead">
        <div class="pull-right headRight text-right clearfix" >
          <div class="topNav clearfix">
          
          <div class="mm-fixed-top">
         	 <a class="mToggle" href="#menu">MENU</a>
          </div>
          <!-- mm-fixed-top slide fix slide-->
          	<a class="btn-fb" href="https://www.facebook.com/vishvabauddh.mahasangh" target="_blank"></a>
          	<div class="languageWrapper">
           		 <a class="activeLang" href="javascript:language_switch('en')">EN</a> 
           		 <a href="javascript:language_switch('hi')">HI</a>
            	 <!--<a href="javascript:language_switch('cn')">CN</a>-->
             </div>
          	<div class="topNav-grey">
            	
           		 <a href="menbership.php">Membership</a>
            </div>
           <a  class="btnHome" href="index.php"></a> </div>
          <div class="navMain clearfix">
         
          <!--mainMenu//////////////////////////////////////////////////-->

				<ul class="topNavMenu">
				
				<li class=""><a href="index.php">Home</a>
					
                 <li class=""><a href="about.php">About us</a>
                    	<ul>
									<li><a href="about.php">About us</a></li>
									
						</ul>
                    </li>
					
				  <li  class="noSub  "><a href="centres.">Our Centres</a></li>
				  <li class="  "><a href="news.">Buddha Quotes</a>
				  <li class="  "><a href="books.php">Books</a>
                    	<ul>
							
															
															
													</ul>
                  </li>
					
				    <li class=""><a href="#">Gallery</a>
                    	<ul>
							<li><a href="gallery.php">Photos</a></li>
							<li><a href="videos.php">Videos</a></li>
							<li><a href="greatman.php">Photos Of Mahapurush</a></li>
						
						</ul>
                  </li>
					<li   class="noSub  "><a href="contact.php">Contact us</a></li>					
  </ul>
            <!--end mainMenu//////////////////////////////////////////////////-->     
          </div>
          
        </div>
        <div class="pull-left vbm-logo text-center"><a href="index.php"><img  src="img/logo.png" ></a></div>
        
      </div>
    </div>	<!-- end head ////////////////////////////////////////////////////////--> 