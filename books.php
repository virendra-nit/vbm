<?php require('header.php')?>
	<!--  headbar//////////////////////////////////////////-->
  <div class="headBar">
    <div class="container">
      <div class="breadCrumb hidden-xs"> <a href="index-2.html">Home</a> / Library </div>
      <h1>Media</h1>
    </div>
  </div>
  
  <!-- end  headbar//////////////////////////////////////////--> 
  
  <!--  search//////////////////////////////////////////-->
  <div class="container padding-bot40 clearfix">
    <div class="row">
      <div class="col-md-9 padding-top30">
      	<form onSubmit="return doSearch();">
                <input type="submit" style="display:none">
                <div class="rsuBlackHead"> Media Search </div>
                <div class="radio">
                  <label class="radio-inline">
                    <input name="search_type" type="radio"  value="1" checked="CHECKED">
                    All </label>
                  <label class="radio-inline">
                   
                </div>
                <div class="form-horizontal">
                  <div class="form-group">
                    <div class="col-xs-12 col-sm-6 col-lg-3 padding-right0sm  padding-bot5xs">
                      <select class="form-control libraryF" id="language" name="language">
                        <option value=""> Language</option>
                        <option value="023000001"  >Hindi</option>

                      </select>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-3 padding-right0lg padding-left0sm padding-bot5xs" id="cat_area">
                      <select class="form-control libraryF" id="category" name="category">
                        <option selected="selected" value="">All Category</option>
                      </select>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-3 padding-right0sm padding-left0lg padding-bot5xs">
                      <select class="form-control libraryF" id="media_type" name="media_type">
                        <option value="">All Media</option>
                        <option value="027000001"  >Books</option>
<option value="027000002"  >Video</option>
<option value="027000003"  >Audio</option>
                      </select>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-3 padding-left0sm">
                      <select class="form-control libraryF" id="source" name="source">
                        <option value="">All Source</option>
                         <option value="028000001"  >VBM</option>
<option value="028000002"  >Buddhanet</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-horizontal">
                  <div class="form-group">
                    <div class="col-xs-12 col-sm-11  padding-bot5xs padding-right0sm ">
                      <input type="text" name="kw" id="kw" class="form-control  libraryF"  placeholder="keyword">
                    </div>
                    <div class="col-xs-12 col-sm-1 padding-left0sm"> <a class="btnMediaSearch" href="javascript:doSearch();"></a> </div>
                  </div>
                </div>
        </form>
      </div>
      <div class="col-md-3 hidden-sm hidden-xs">
        <div class="submenuHead"> LIBRARY </div>
        <ul class="submenuRight">
          <li> <a href="media.php">Books</a>
		  </li><li> <a href="gallery.php">Photos</a></li>
          <li><a href="videos.php">Videos</a></li>
          <li><a href="greatman.php">Photos Of Great Man</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--  end  search//////////////////////////////////////////--> 
  
  <!--  slide//////////////////////////////////////////-->
  
  <div class="brownBG2 padding-top30 padding-bot40" >
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="libraryHighHead"> Books </div>
        </div>
        <div class="col-md-9"> 
          <!--   bx slider-->
          <div class="libaryNav padding-bot10 text-right"> 
                      	<a data-slide-index="0" href="#"></a>  
                      	<a data-slide-index="1" href="#"></a>  
                      	<a data-slide-index="2" href="#"></a>  
                      	<a data-slide-index="3" href="#"></a>  
                      	<a data-slide-index="4" href="#"></a>  
                      	<a data-slide-index="5" href="#"></a>  
                      	<a data-slide-index="6" href="#"></a>  
                      	<a data-slide-index="7" href="#"></a>  
                      	<a data-slide-index="8" href="#"></a>  
                      </div>
          <div>
            <ul  class="bxWrapper">
                             <li>
                <div class="row">
                  <div class="col-md-2 padding-bot20"> <a class="libraryHLPic" href="library-media-detail30ac.html?id=026000063">
                  	                    <img src="uploads/book/book1.jpg">
                     
                    </a>
                  
                  </div>
                  <div class="col-md-10">
                    <div class="borderBrown"> <a class="newslink-head" href="library-media-detail30ac.html?id=026000063">WFB Vol. 4 No. 1 January - April B.E. 2558 (2015)</a> </div>
                    <div class="row padding-bot10 padding-top10">
                      <div class="col-sm-6 col-lg-3">
                        <div class="row padding-bot10">
                          <div class="col-xs-5 col-sm-12 text-greySmall"> Author </div>
                          <div class="col-xs-7 col-sm-12"> The World Fellowship of Buddhists </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div class="row padding-bot10">
                          <div class="col-xs-5 col-sm-12 text-greySmall"> Language </div>
                          <div class="col-xs-7 col-sm-12"> English </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div class="row padding-bot10">
                          <div class="col-xs-5 col-sm-12 text-greySmall"> Year of Publication </div>
                          <div class="col-xs-7 col-sm-12"> B.E. 2558 (2015) </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div class="row padding-bot10">
                          <div class="col-xs-5 col-sm-12 text-greySmall"> Source </div>
                          <div class="col-xs-7 col-sm-12"> VBM </div>
                        </div>
                      </div>
                    </div>
                    <div class="padding-bot20"> The Buddhist Princess, HRH Princess Maha Chakri Sirindhorn and her role in promoting Buddhism at the international level, Princess Poon and the WFB, Her Serene Highness Princess Poon Pismai Diskul, Sasanaguna by HSH Princess Poon Pismai Diskul, Ven. U. Dhammaratana and his support for Buddhism, Pioneer monk returns Buddhism to its roots, The problem of Buddhist nun or Bhikkuni ordination of Thai Sangha: Mindful solving with principles, Tibetans as I know, Mahabodhi Mahavihara: Land of enlightenment, 27th General Conference of the World Fellowship of Buddhist, Baoji, Shaanxi, China, B.E. 2557 (2014), Baoji Declaration </div>
                                        <a class="btnDownload" data-id="026000063" href="uploads/book/book1.pdf" target="_blank">DOWNLOAD FILE</a> 
                                        </div>
                  </div>
                </div>
              </li>
                            <li>
                <div class="row">
                  <div class="col-md-2 padding-bot20"> <a class="libraryHLPic" href="library-media-detaila0b7.html?id=026000071">
                  	                    <img src="uploads/libraries/026000071_02601.jpg">
                     
                    </a>
                  
                  </div>
                  <div class="col-md-10">
                    <div class="borderBrown"> <a class="newslink-head" href="library-media-detaila0b7.html?id=026000071">WFB Vol. 4 No. 2 May - August B.E. 2558 (2015)</a> </div>
                    <div class="row padding-bot10 padding-top10">
                      <div class="col-sm-6 col-lg-3">
                        <div class="row padding-bot10">
                          <div class="col-xs-5 col-sm-12 text-greySmall"> Author </div>
                          <div class="col-xs-7 col-sm-12"> The World Fellowship of Buddhists </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div class="row padding-bot10">
                          <div class="col-xs-5 col-sm-12 text-greySmall"> Language </div>
                          <div class="col-xs-7 col-sm-12"> English </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div class="row padding-bot10">
                          <div class="col-xs-5 col-sm-12 text-greySmall"> Year of Publication </div>
                          <div class="col-xs-7 col-sm-12"> B.E. 2558 (2015) </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div class="row padding-bot10">
                          <div class="col-xs-5 col-sm-12 text-greySmall"> Source </div>
                          <div class="col-xs-7 col-sm-12"> WFB </div>
                        </div>
                      </div>
                    </div>
                    <div class="padding-bot20"> The journal provides articles as follows: H.M. the Queen&#39;s contribution to Buddhism; The villages of the Five Precepts Dharma Project for Peace; How to promote world peace: the Buddhist way by Thakur Phanit; The Elements of Duta by Thakur Phanit; Yasa Kumar Stone Inscription which the credit of World Cultural Heritage is long overdue (Part 1) by Maha Suddhamma Jotikadhaja Sithu and Dr. Khin Maung Nyunt; Thai Buddha amulets from faith to commerce by Sajjaphum La-or; The Four Holy Places of Buddhism to be built at Buddhamonthon; Somdet Phra Maha Ratchamangalacharn offered helps to Nepal; Handing Buddhist aid to devastated Nepal; Providing aid to flood victims in Myanmar; EXCO 85 Meeting in Chiang Mai. </div>
                    <div class="clearfix"> <a class="btnDetail" href="library-media-detaila0b7.html?id=026000071">DETAIL</a> 
                                        <a class="btnDownload" data-id="026000071" href="http://202.170.120.224/~wfb/library-media/WFB-Vol4-No2-May- August2558.pdf" target="_blank">DOWNLOAD FILE</a> 
                                        </div>
                  </div>
                </div>
              
          </li>
                  </ul>
      </div>
    </div>
  </div>
    <!-- end category//////////////////////////////////////////--> 
<?php require('footer.php')?>