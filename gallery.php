<?php require('header.php')?> 
	
	<!--  headbar//////////////////////////////////////////-->
	<div class="headBar">
		<div class="container">
			<div class="breadCrumb hidden-xs">
				<a href="index-2.html">Home</a> / Library
			</div>
			<h1>ART</h1>
		</div>
	</div>
	
	<!-- end  headbar//////////////////////////////////////////--> 
	
	<!--  content//////////////////////////////////////////-->
	<div class="container padding-bot40 clearfix">
		<div class="row">
			<div class="col-md-9 padding-top20">
				<div class="padding-bot30 padding-top20">
					<div class="row">
						<div class="col-md-5">
							<div class="form-horizontal">
								<div class="form-group">
									<label for="arttype" class="col-xs-12 col-sm-4  control-label "><span id="totalRecord"></span> Items</label>
									<div class="col-xs-12 col-sm-8">
										<select class="form-control" id="scat"  name="scat" onChange="filterCat()">
											<option selected="selected" value="">View All</option>
											<option value="017000001"  >Sculpture</option>
<option value="017000002"  >Painting/Photography</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!--media item//////////////////////////////////////////-->
				<div class="padding-bot20">
					<!--start masonry--> 
					
					<!--กำหนด container ของ masonry ที่จะเรียกมาแสดงมาโหลดรูปครบ-->
					<div id="containerMasonry" class="clearfix">
						<div class="grid-sizer">
						</div>
					</div>
					
					<!--group ของ item ทั้งหมด จะ hide อยู่จนโหลดครบ ก็จะถูกดึงไปแสดงใน containerMasonry-->
					<div  id="itemMasonryGroup"></div>
					
					<!--end  masonry-->
				</div>
				<!--end media item//////////////////////////////////////////-->
				
				<div class="text-center">
					<a class="btnMoreCent" id="moreBtn" href="javascript:nextPage();">MORE</a>
				</div>
			</div>
			<div class="col-md-3 hidden-sm hidden-xs">
				<div class="submenuHead">
					LIBRARY
				</div>
				<ul class="submenuRight">
					 <li> <a href="media.php">Books</a>
		             </li><li> <a href="gallery.php">Photos</a></li>
                     <li><a href="videos.php">Videos</a></li>
                     <li><a href="greatman.php">Photos Of Great Man</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!--  end  content//////////////////////////////////////////--> 
	
	
		<?php require('footer.php')?>