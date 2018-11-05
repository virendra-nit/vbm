	
	<!--footer/-->
	
		<div class="footer">
		<div class="container">
			<div class="row  item-Container padding-bot20 clearfix">
				<div class="col-lg-3 itemH footerName">
					Vishva Bauddha Mahasangh 
				  
				</div>
				<div class="col-md-8 col-lg-3  itemH">
					Buddha Bhavan Shivpur Varanasi Uttar Pradesh India 221003
				</div>
				<div class="col-md-4  col-lg-3  itemH">
					<div class="row">
						<div class="col-xs-4">
							Contact No.
						</div>
						<div class="col-xs-8">
							(+91) 8115081551
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4">
							Contact No:
						</div>
						<div class="col-xs-8">
							(+91) 9919582451
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4">
							e-mail :
						</div>
						<div class="col-xs-8 padding-bot20" >
							<a href="mailto:info@vbm.org.in">info@vbm.org.in </a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-lg-3  itemH">
					<form method="post" action="http://wfbhq.org/post/enew.php" name="enewForm" id="enewForm" enctype="multipart/form-data" class="form-horizontal">
						<div class="form-group">
							<label for="enewsletter" class="col-xs-12 col-sm-4 col-lg-12   control-label footerEnewHead">E-NEWSLETTER SUBSCRIBE</label>
							<div class="col-xs-10 col-sm-7 col-lg-10 padding-right0 tahomaFont">
								<input type="email" name="email" class="form-control" id="enewsletter" required placeholder="Email">
							</div>
							<div class="col-xs-2 col-sm-1 col-lg-2 padding-left0">
								<button type="submit" class="btnEnew"></button>
							</div>
						</div>
					</form>
					</div>
				</div>
			
			<div class="footer-copyright">
				 VISHVA BAUDDHA MAHASANGH .  All Rights Reserved.<br>
			</div>
			</div>
		</div>

	<script>
         $(document).ready(function(){
             $("#enewForm").validate({
			  submitHandler: function(form) { 
			  	  $(form).ajaxSubmit({ 
						dataType			:  'json', 
						success			:  processJson
						});
					function  processJson( data ) {
						document.forms[0].reset();
						swal("Thank you!", "YOU'VE BEEN SUBSCRIBED.", "success");
					}
			  },
			  ignore: [],
                 debug: false,
				 onfocusout: false,
				  onkeyup: false,
				  onclick: false,
                 rules: {email:{required: true,email:true}},
			  messages:{email:{email:'Please put valid email address'}}
             });
        });
		
		// JavaScript Document
		var currentPath = "";
		function language_switch(lang)
		{
			if(lang == 'en'){
					var myPath = window.location.pathname;
					var realPath = myPath.substr(currentPath.length,myPath.length);
					var switchPath = currentPath  + realPath ;
					window.location.href=switchPath+'';
			} 
				if(lang == 'th'){ 
					var myPath = window.location.pathname;
					var realPath = myPath.substr(currentPath.length,myPath.length);
					var switchPath = currentPath + "/th" + realPath ;
					window.location.href=switchPath+'';
			} 
		}
    </script>	<!--end footer//////////////////////////////////////////////-->
</div>

<!-- off canvas mmenu-->
<nav id="menu">
	<ul>
		<li class="Selected"><a href="index-2.html">Home</a></li>
		<li ><a href="#">About us</a>
			<ul>
				<li><a href="about-history.html">History</a></li>
				<li><a href="about-office-bearers.html">Office Bearers</a></li>
				<li><a href="about-executive-council.html">Executive Council</a></li>
				<li><a href="about-constitution.html">Constitution</a></li>
			</ul>
		</li>
		<li ><a href="regional-centres.html">Regional Centres</a></li>
		<li ><a href="#">News &amp; Activity</a>
			<ul>
									<li><a href="newsa3dc.html?cid=001000004">Dhamma Talks</a></li>
									<li><a href="news0efd.html?cid=001000005">Headquarters</a></li>
									<li><a href="newsb1ae.html?cid=001000006">Regional Centres</a></li>
							</ul>
		</li>
		<li ><a href="general-conference.html">General Conference</a></li>
		<li ><a href="#">Library</a>
			<ul>
				<li><a href="library-media.html">Media</a></li>
				<li><a href="library-art.html">Art</a></li>
			</ul>
		</li>
		<li ><a href="contact.html">Contact us</a></li>
		<li ><a href="souvenir.html">Souvenir</a></li>
		<li ><a href="donation.html">Donation</a></li>
		<li ><a href="member-payment.html">Member Payment</a></li>
	</ul>
</nav>
<!-- end off canvas mmenu --> 

<!--sweetAlert--> 
<!--end sweetAlert/////////////////--> 

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/bootstrap.js"></script> 
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug --> 
<script src="assets/js/ie10-viewport-bug-workaround.js"></script> 

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. --> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61639136-1', 'auto');
  ga('send', 'pageview');
</script>
</body>

<!-- Mirrored from wfbhq.org/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Aug 2018 09:35:24 GMT -->
</html>
