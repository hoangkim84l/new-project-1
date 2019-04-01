﻿<!DOCTYPE html>
<html lang="en" class="wow-animation">
    <head>
	  <?php $this->load->view('site/head');?>
    </head>
    <body id="home-page">
	<div class="main-wrapper">	
		<script type="text/javascript" src="<?php echo public_url()?>/site/scripts/common.js"></script>
		<script type="text/javascript" src="<?php echo public_url()?>/site/scripts/slide.js"></script> 
		<script type="text/javascript" src="<?php echo public_url()?>/site/scripts/load.js"></script>
		<script type="text/javascript" src="<?php echo public_url()?>/site/scripts/validate.js" ></script>
		<script type="text/javascript" src="<?php echo public_url()?>/site/scripts/jquery.validationEngine.js" ></script>
		<!--LOAD-PAGE-->
		<div class="all-pics"></div>
		<div class="all-album"></div>
		<div class="allvideo"></div>
		<div class="overlay-album"></div>
		<div class="overlay-video"></div>
		<div class="overlay-dark"></div>	
       <header>
             <?php $this->load->view('site/header')?>
       </header>	 
		<main class="main-container">               
	           <div class="container">
	                <div class="hero-area">
	                      <?php if(isset($message)):?>
	                      <h3 style="color:red"><?php echo $message?></h3>
	                      <?php endif;?>
	                      <?php $this->load->view($temp , $this->data);?>
	                </div>
	                 
	                  <div class="clear"></div>
	           </div>
	           <section class="bottom">
				<div class="bottom-box">
				<!--MAP-->
				<div class="googlemap">
				<div class="zoom-control">
				<a class="zoom-in" href="javascript:void(0);" id="zoom-in"></a>
				<a class="zoom-out" href="javascript:void(0);" id="zoom-out"></a>
				</div>
				<div id="map-canvas"></div>
				</div>
				<!--MAP-->
				<!--COMPANY-->
				<div class="company-info">
				<h3><span>CÔNG TY CP BẤT ĐỘNG SẢN</span> TRẦN ANH LONG AN</h3>
				<p>Tên viết tắt : <strong>TRẦN ANH GROUP</strong></p>
				<ul>
				<li class="bt-location"><p>ẤP MỚI 2, XÃ MỸ HẠNH NAM, ĐỨC HÒA, LONG AN</p></li><li class="bt-phone"><p>0931 539 292</p></li><li class="bt-email"><p><a href="mailto:cskh@diaoctrananh.com.vn">info@diaoctrananh.com.vn</a></p></li></ul>
				<!--SOCIAL-->
				<ul class="social">
				<li><a class="facebook" href="https://www.facebook.com/" target="_blank">facebook</a></li>
				<li><a class="youtube" href="https://www.youtube.com/"  target="_blank">youtube</a></li>
				</ul>
				<!--SOCIAL-->
				</div>
				<!--COMPANY-->
				</div>
				<div class="copyright">
				<p>2017 © <strong>TRẦN ANH GROUP</strong>. All rights reserved. <a href="http://www.btq.vn" target="_blank">DEVELOPED BY 3GRAPHIC</a></p>
				</div>
				</section>	
		</main>     	       
		<div class="loadicon">
		<svg  class="load-present" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="200px" height="200px" viewBox="0 0 200 200">
		<path class="stroke-line"  d="M97.5,1.3 11.9,50.7 11.9,149.6 97.5,199 97.5,169.9 37.1,135 37.1,65.2 72.4,44.8 72.4,121 97.5,135.5z"></path>
		<path class="stroke-line"  d="M102.4,1.3 102.4,135.5 127.6,121 127.6,44.8 162.9,65.2 162.9,135 102.4,169.9 102.4,199 188.1,149.6 188.1,50.7z"></path>
		</svg>
		</div>     
		<!--LOAD-->
		<div class="scroll-down"></div>
		<div class="go-top"></div>

		<div class="httpserver class-hidden">http://www.diaoctrananh.com/</div>
		<div class="httptemplate class-hidden">http://www.diaoctrananh.com/catalog/view/theme/</div>

		<div class="infobox-address class-hidden">ẤP MỚI 2, XÃ MỸ HẠNH NAM, ĐỨC HÒA, LONG AN</div>
		<div class="infobox-image class-hidden">http://www.diaoctrananh.com/pictures/catalog/1.jpg</div>
		<div class="infobox-image-icon class-hidden"></div>
		<div class="infobox-location-lat class-hidden">10.856820</div>
		<div class="infobox-location-lng class-hidden"> 106.502677</div>
		<div class="infobox-googlemap class-hidden"></div>
		<div class="infobox-name class-hidden">C&Ocirc;NG TY CP BẤT ĐỘNG SẢN&lt;br&gt;&lt;strong&gt;TRẦN ANH LONG AN&lt;/strong&gt;</div>
		<div class="infobox-phone class-hidden">0931 539 292</div>
		<div class="infobox-fax class-hidden"></div>
		<div class="infobox-email class-hidden">&lt;a href=&quot;mailto:cskh@diaoctrananh.com.vn&quot;&gt;info@diaoctrananh.com.vn&lt;/a&gt;</div>
		<div class="infobox-text-email class-hidden">Email:</div>
		<div class="infobox-text-fax class-hidden">Fax:</div>
		<div class="infobox-text-tel class-hidden">Tel:</div>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnUR-5FrPxcYHMTkm_5xR1qca1i8NGRps"> </script>
		<script type="text/javascript" src="<?php echo public_url()?>/site/scripts/infobox.js"></script>
		<script type="text/javascript" src="<?php echo public_url()?>/site/scripts/contact.js"></script>

		<script type="text/javascript" src="<?php echo public_url()?>/site/scripts/btq.js"></script>
    </body>
</html>