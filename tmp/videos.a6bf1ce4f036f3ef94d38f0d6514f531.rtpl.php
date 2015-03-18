<?php if(!class_exists('raintpl')){exit;}?><!DOCTYPE html>
<!--
 * Created by PhpStorm.
 * User 	: Mohamed Hafez
 * Email	: Mohamed.hafezqo@gmail.com
 * Mobile	: 01144688896
 * Date:
 * Time: 5:20 PM


-->

<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("header") . ( substr("header",-1,1) != "/" ? "/" : "" ) . basename("header") );?>

				
				
 <div id="main-content" class="containersidebar-right">
	<div class="content">
				
				
								
		<article class="post-571 page type-page status-publish hentry post-listing post">
					<div class="single-post-thumb">
					</div>
		
		
			<div class="post-inner">
				<h1 class="name post-title entry-title" itemprop="itemReviewed" itemscope itemtype="http://schema.org/Thing"><span itemprop="name">مكتبة الفيديو</span></h1>
				<p class="post-meta"></p>
				<div class="clear"></div>
				<div class="entry">
					
					<script>
	var lightbox_transition = 'elastic';
	var lightbox_speed = 800;
	var lightbox_fadeOut = 300;
	var lightbox_title = false;
	var lightbox_scalePhotos = true;
	var lightbox_scrolling = false;
	var lightbox_opacity = 0.201;
	var lightbox_open = false;
	var lightbox_returnFocus = true;
	var lightbox_trapFocus = true;
	var lightbox_fastIframe = true;
	var lightbox_preloading = true;
	var lightbox_overlayClose = true;
	var lightbox_escKey = false;
	var lightbox_arrowKey = false;
	var lightbox_loop = true;
	var lightbox_closeButton = false;
	var lightbox_previous = "previous";
	var lightbox_next = "next";
	var lightbox_close = "close";
	var lightbox_html = false;
	var lightbox_photo = false;
	var lightbox_width = "800";
	var lightbox_height = "600";
	var lightbox_innerWidth = 'false';
	var lightbox_innerHeight = 'false';
	var lightbox_initialWidth = '300';
	var lightbox_initialHeight = '100';
	
        var maxwidth=jQuery(window).width();
        if(maxwidth > 800 ){ maxwidth= 800 ; }
        var lightbox_maxWidth = maxwidth;
        var lightbox_maxHeight = 600;
        
	var lightbox_slideshow = false;
	var lightbox_slideshowSpeed = 2500;
	var lightbox_slideshowAuto = true;
	var lightbox_slideshowStart = "start slideshow";
	var lightbox_slideshowStop = "stop slideshow";
	var lightbox_fixed = true;
			var lightbox_top = false;
		var lightbox_bottom = false;
		var lightbox_left = false;
		var lightbox_right = false;
		
	var lightbox_reposition = false;
	var lightbox_retinaImage = true;
	var lightbox_retinaUrl = false;
	var lightbox_retinaSuffix = "@2x.$1";
	
				jQuery(document).ready(function(){
				jQuery("#huge_it_videogallery_content a[href$='.jpg'], #huge_it_videogallery_content a[href$='.png'], #huge_it_videogallery_content a[href$='.gif']").addClass('group1');
				
				jQuery(".group1").colorbox({rel:'group1'});
				jQuery(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				jQuery(".vimeo").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				jQuery(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				jQuery(".inline").colorbox({inline:true, width:"50%"});
				jQuery(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				jQuery('.non-retina').colorbox({rel:'group5', transition:'none'})
				jQuery('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				jQuery("#click").click(function(){ 
					jQuery('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		
</script>
	<!--Huge IT videogallery START-->
	<!-- videogallery CONTENT POPUP -->
		<link href="./template/wp-content/plugins/gallery-video/Front_end/../style/colorbox-1.css" rel="stylesheet" type="text/css" />
		
	<script src="./template/wp-content/plugins/gallery-video/Front_end/../js/jquery.colorbox.js"></script>
	<script src="./template/wp-content/plugins/gallery-video/Front_end/../js/jquery.hugeitmicro.min.js"></script>
	
		

	<script> 
jQuery(function(){
    var defaultBlockHeight=197;
	var defaultBlockWidth=275;
    var $container = jQuery('#huge_it_videogallery_container_1');

      $container.find('.element_1').each(function(){
        var $this = jQuery(this),
            number = parseInt( $this.find('.number').text(), 10 );
        if ( number % 7 % 2 === 1 ) {
          $this.addClass('width2');
        }
        if ( number % 3 === 0 ) {
          $this.addClass('height2');
        }
      });
    
    $container.hugeitmicro({
      itemSelector : '.element_1',
      masonry : {
        columnWidth : defaultBlockWidth+20
      },
      masonryHorizontal : {
        rowHeight: defaultBlockHeight+20
      },
      cellsByRow : {
        columnWidth : defaultBlockWidth+20,
        rowHeight : defaultBlockHeight
      },
      cellsByColumn : {
        columnWidth : defaultBlockWidth+20,
        rowHeight : defaultBlockHeight
      },
      getSortData : {
        symbol : function( $elem ) {
          return $elem.attr('data-symbol');
        },
        category : function( $elem ) {
          return $elem.attr('data-category');
        },
        number : function( $elem ) {
          return parseInt( $elem.find('.number').text(), 10 );
        },
        weight : function( $elem ) {
          return parseFloat( $elem.find('.weight').text().replace( /[\(\)]/g, '') );
        },
        name : function ( $elem ) {
          return $elem.find('.name').text();
        }
      }
	 
    });
    
    
	var $optionSets = jQuery('#huge_it_videogallery_options .option-set'),
	$optionLinks = $optionSets.find('a');

	$optionLinks.click(function(){
		var $this = jQuery(this);

		if ( $this.hasClass('selected') ) {
		  return false;
		}
		var $optionSet = $this.parents('.option-set');
		$optionSet.find('.selected').removeClass('selected');
		$this.addClass('selected');

		var options = {},
			key = $optionSet.attr('data-option-key'),
			value = $this.attr('data-option-value');

		value = value === 'false' ? false : value;
		options[ key ] = value;
		if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {

		  changeLayoutMode( $this, options )
		} else {

		  $container.hugeitmicro( options );
		}

		return false;
	});    

	var isHorizontal = false;
	function changeLayoutMode( $link, options ) {
		var wasHorizontal = isHorizontal;
		isHorizontal = $link.hasClass('horizontal');

		if ( wasHorizontal !== isHorizontal ) {

		  var style = isHorizontal ? 
			{ height: '100%', width: $container.width() } : 
			{ width: 'auto' };

		  $container.filter(':animated').stop();

		  $container.addClass('no-transition').css( style );
		  setTimeout(function(){
			$container.removeClass('no-transition').hugeitmicro( options );
		  }, 100 )
		} else {
		  $container.hugeitmicro( options );
		}
	}

    var $sortBy = jQuery('#sort-by');
    jQuery('#shuffle a').click(function(){
      $container.hugeitmicro('shuffle');
      $sortBy.find('.selected').removeClass('selected');
      $sortBy.find('[data-option-value="random"]').addClass('selected');
      return false;
    });
});

jQuery(document).ready(function(){

	jQuery('.element_1 .image-block_1 .image-overlay a').on('click',function(){
		var strid = jQuery(this).attr('href').replace('#','');
		jQuery('body').append('<div id="huge-popup-overlay"></div>');
		jQuery('#huge_it_videogallery_popup_list_1').insertBefore('#huge-popup-overlay');
		var height = jQuery(window).height();
		var width=jQuery(window).width();
		if(width<=767){
			jQuery('body').scrollTop(0);
			jQuery('#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .image-block_1 iframe').height(jQuery('body').width()*0.5);
		}else {jQuery('#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .image-block_1 iframe').height(jQuery('body').width()*0.23);}
		jQuery('#huge_it_videogallery_pupup_element_'+strid).addClass('active').css({height:height*0.7});
		jQuery('#huge_it_videogallery_popup_list_1').addClass('active');
		
		return false;
	});
	
	
	jQuery('#huge_it_videogallery_popup_list_1 .heading-navigation .close').on('click',function(){
		closePopup();
		return false;
	});
	
	jQuery('body').on('click','#huge-popup-overlay',function(){
		closePopup();
		return false;
	});
	
	function closePopup() {
		jQuery('#huge-popup-overlay').remove();
		var videsrc=jQuery('#huge_it_videogallery_popup_list_1 li.active iframe').attr('src');
		jQuery('#huge_it_videogallery_popup_list_1 li.active iframe').attr('src','');
		jQuery('#huge_it_videogallery_popup_list_1 li.active iframe').attr('src',videsrc);
		jQuery('#huge_it_videogallery_popup_list_1 li').removeClass('active');
		jQuery('#huge_it_videogallery_popup_list_1').removeClass('active');
		
	}

	jQuery(window).resize(function(){
		jQuery('#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .image-block_1 iframe').height(jQuery('#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .image-block_1').width()*0.5);
	});

	
}); 
</script>

<style type="text/css"> 

.element_1 {
	width:275px;
	height:205px;
	margin:0px 0px 10px 0px;
	background:#f9f9f9;
	border:1px solid #dedede;
	outline:none;
}

.element_1 .image-block_1 {
	position:relative;
	width:100%;
}

.element_1 .image-block_1 img {
	width:275px !important;
	height:160px !important;
	display:block;
	border-radius: 0px !important;
	box-shadow: 0 0px 0px rgba(0, 0, 0, 0) !important; 
}

.element_1 .image-block_1 .image-overlay {
	position:absolute;
	top:0px;
	left:0px;
	width:100%;
	height:100%;
	background: rgba(255,255,255,0.7)  !important;
	display:none;
}

.element_1:hover .image-block_1  .image-overlay {
	display:block;
}

.element_1 .image-block_1 .image-overlay a {
	position:absolute;
	top:0px;
	left:0px;
	display:block;
	width:100%;
	height:100%;
	background:url('wp-content/plugins/gallery-video/Front_end/../images/zoom.light.png') center center no-repeat;
}

.element_1 .title-block_1 {
	position:relative;
	height: 30px;
	margin: 0;
	padding: 15px 0px 15px 0px;
	-webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,.1);
	box-shadow: inset 0 1px 0 rgba(0,0,0,.1);
}

.element_1 .title-block_1 h3 {
	position:relative;
	margin:0px !important;
	padding:0px 1% 0px 1% !important;
	width:98%;
	text-overflow: ellipsis;
	overflow: hidden; 
	white-space:nowrap;
	font-weight:normal;
	font-size: 18px !important;
	line-height: 18px !important;
	color:#222222;
}

.element_1 .title-block_1 .button-block {
	position:absolute;
	right:0px;
	top:0px;
	display:none;
	vertical-align:middle;
	height:30px;
	padding:10px 10px 4px 10px;
	background: rgba(255,255,255,0.7)  !important;
	border-left: 1px solid rgba(0,0,0,.05);
}
.element_1:hover .title-block_1 .button-block {display:block;}

.element_1 .title-block_1 a,.element_1 .title-block_1 a:link,.element_1 .title-block_1 a:visited,
.element_1 .title-block_1 a:hover,.element_1 .title-block_1 a:focus,.element_1 .title-block_1 a:active {
	position:relative;
	display:block;
	vertical-align:middle;
	padding: 3px 10px 3px 10px; 
	border-radius:3px;
	font-size:14px;
	background:#FF2C2C;
	color:#ffffff;
	text-decoration:none;
}

/*#####POPUP#####*/

#huge_it_videogallery_popup_list_1 {
	position:fixed;
	display:table;
	width:80%;
	top:7%;
	left:7%;
	margin:0px !important;
	padding:0px !important;
	list-style:none;
	z-index:2000;
	display:none;
	height:85%;
}

#huge_it_videogallery_popup_list_1.active {display:table;}

#huge_it_videogallery_popup_list_1 li.pupup-element {
	position:relative;
	display:none;
	width:100%;
	padding:40px 0px 20px 0px;
	min-height:100%;
	position:relative;
	background:#FFFFFF;
}

#huge_it_videogallery_popup_list_1 li.pupup-element.active {
	display:block;
}

#huge_it_videogallery_popup_list_1 .heading-navigation {
	position:absolute;
	width:100%;
	height:40px;
	top:0px;
	left:0px;
	z-index:2001;
	background:url('wp-content/plugins/gallery-video/Front_end/../images/divider.line.png') center bottom repeat-x;
}

#huge_it_videogallery_popup_list_1 .heading-navigation .close,#huge_it_videogallery_popup_list_1 .heading-navigation .close:link, #huge_it_videogallery_popup_list_1 .heading-navigation .close:visited {
	position:relative;
	float:right;
	width:40px;
	height:40px;
	display:block;
	background:url('wp-content/plugins/gallery-video/Front_end/../images/close.popup.dark.png') center center no-repeat;
	border-left:1px solid #ccc;
	opacity:.65;
}

#huge_it_videogallery_popup_list_1 .heading-navigation .close:hover, #huge_it_videogallery_popup_list_1 .heading-navigation .close:focus, #huge_it_videogallery_popup_list_1 .heading-navigation .close:active {opacity:1;}


#huge_it_videogallery_popup_list_1 li.pupup-element .popup-wrapper_1 {
	overflow-y:scroll;
	position:relative;
	width:96%;
	height:98%;
	padding:2% 2% 0% 2%;
}

#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .image-block_1 {
	width:60%;
	position:relative;
	float:left;
	margin-right:2%;
	border-right:1px solid #ccc;
	min-width:200px;
}

#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .image-block_1 img {
	width:100% !important;
	display:block;
}

#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .image-block_1 iframe  {
	width:100% !important;
	height:100%;
	display:block;

}

#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .right-block {
	width:37%;
	position:relative;
	float:left;
}

#huge_it_videogallery_popup_list_1 li.pupup-element .popup-wrapper_1 .right-block > div {
	padding-top:10px;
	margin-bottom:10px;
			background:url('wp-content/plugins/gallery-video/Front_end/../images/divider.line.png') center top repeat-x;
	}
#huge_it_videogallery_popup_list_1 li.pupup-element .popup-wrapper_1 .right-block > div:last-child {background:none;}


#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .right-block .title {
	position:relative;
	display:block;
	margin:0px 0px 10px 0px !important;
	font-size:18px !important;
	line-height:18px !important;
	color:#222222;
}

#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .right-block .description {
	clear:both;
	position:relative;
	font-weight:normal;
	text-align:justify;
	font-size:14px !important;
	color:#;
}

#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .right-block .description h1,
#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .right-block .description h2,
#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .right-block .description h3,
#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .right-block .description h4,
#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .right-block .description h5,
#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .right-block .description h6,
#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .right-block .description p, 
#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .right-block .description strong,
#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .right-block .description span {
	padding:2px !important;
	margin:0px !important;
}

#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .right-block .description ul,
#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .right-block .description li {
	padding:2px 0px 2px 5px;
	margin:0px 0px 0px 8px;
}

#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .right-block ul.thumbs-list {
	list-style:none;
	display:table;
	position:relative;
	clear:both;
	width:100%;
	margin:0px auto;
	padding:0px;
}

#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .right-block ul.thumbs-list li {
	display:block;
	float:left;
	width:75px;
	height:75px;
	margin:0px 2% 5px 1% !important;
	opacity:0.45;
}

#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .right-block ul.thumbs-list li.active,#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .right-block ul.thumbs-list li:hover {
	opacity:1;
}

#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .right-block ul.thumbs-list li a {
	display:block;
}

#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .right-block ul.thumbs-list li img {
	width:75px !important;
	height:75px !important;
}


.pupup-element .button-block {
	position:relative;
}

.pupup-element .button-block a,.pupup-element .button-block a:link,.pupup-element .button-block a:visited {
	position:relative;
	display:inline-block;
	padding:6px 12px;
	background:#FF2C2C;
	color:#ffffff;
	font-size:14px;
	text-decoration:none;
}

.pupup-element .button-block a:hover,.pupup-element .button-block a:focus,.pupup-element .button-block a:active {
	background:#c02121;
	color:#ffffff;
}


#huge-popup-overlay {
	position:fixed;
	top:0px;
	left:0px;
	width:100%;
	height:100%;
	z-index:199;
	background: rgba(0,0,0,0.7)  !important}


@media only screen and (max-width: 767px) {
	
	#huge_it_videogallery_popup_list_1 {
		position:absolute;
		left:0px;
		top:0px;
		width:100%;
		height:auto !important;
		left:0px;
	}
	
	#huge_it_videogallery_popup_list_1 li.pupup-element {
		margin:0px;
		height:auto !important;
		position:absolute;
		left:0px;
		top:0px;
	}

	#huge_it_videogallery_popup_list_1 li.pupup-element .popup-wrapper_1 {
		height:auto !important;
		overflow-y:auto;
	}


	#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .image-block_1 {
		width:100%;
		float:none;
		clear:both;
		margin-right:0px;
		border-right:0px;
	}

	#huge_it_videogallery_popup_list_1 .popup-wrapper_1 .right-block {
		width:100%;
		float:none;
		clear:both;
		margin-right:0px;
		border-right:0px;
	}

	#huge-popup-overlay {
		position:fixed;
		top:0px;
		left:0px;
		width:100%;
		height:100%;
		z-index:199;
	}

}
</style>
<section id="huge_it_videogallery_content_1">
  <div id="huge_it_videogallery_container_1" class="super-list variable-sizes clearfix">
  			<div class="element_1" tabindex="0" data-symbol="عنوان عنوان عنوان عنوان عنوان عنوان " data-category="alkaline-earth">
			<div class="image-block_1">
																				<img src="http://img.youtube.com/vi/ZAwb3ZVPCv4/mqdefault.jpg" alt="عنوان عنوان عنوان عنوان عنوان عنوان " />		
															
				<div class="image-overlay"><a href="#1"></a></div>
			</div>
			<div class="title-block_1">
				<h3>عنوان عنوان عنوان عنوان عنوان عنوان </h3>
									<div class="button-block"><a href="#" target="_blank" >View More</a></div>
							</div>
		</div>	
				<div class="element_1" tabindex="0" data-symbol="عنوان عنوان عنوان عنوان عنوان عنوان " data-category="alkaline-earth">
			<div class="image-block_1">
																				<img src="http://i.vimeocdn.com/video/432648831_640.jpg" alt="عنوان عنوان عنوان عنوان عنوان عنوان " />
															
				<div class="image-overlay"><a href="#2"></a></div>
			</div>
			<div class="title-block_1">
				<h3>عنوان عنوان عنوان عنوان عنوان عنوان </h3>
									<div class="button-block"><a href="#" target="_blank" >View More</a></div>
							</div>
		</div>	
				<div class="element_1" tabindex="0" data-symbol="عنوان عنوان عنوان عنوان عنوان عنوان " data-category="alkaline-earth">
			<div class="image-block_1">
																				<img src="http://i.vimeocdn.com/video/481539487_640.jpg" alt="عنوان عنوان عنوان عنوان عنوان عنوان " />
															
				<div class="image-overlay"><a href="#3"></a></div>
			</div>
			<div class="title-block_1">
				<h3>عنوان عنوان عنوان عنوان عنوان عنوان </h3>
									<div class="button-block"><a href="http://huge-it.com/fields/order-website-maintenance/" target="_blank" >View More</a></div>
							</div>
		</div>	
				<div class="element_1" tabindex="0" data-symbol="عنوان عنوان عنوان عنوان عنوان عنوان " data-category="alkaline-earth">
			<div class="image-block_1">
																				<img src="http://img.youtube.com/vi/t5vta25jHQI/mqdefault.jpg" alt="عنوان عنوان عنوان عنوان عنوان عنوان " />		
															
				<div class="image-overlay"><a href="#4"></a></div>
			</div>
			<div class="title-block_1">
				<h3>عنوان عنوان عنوان عنوان عنوان عنوان </h3>
									<div class="button-block"><a href="#" target="_blank" >View More</a></div>
							</div>
		</div>	
				<div class="element_1" tabindex="0" data-symbol="عنوان عنوان عنوان عنوان " data-category="alkaline-earth">
			<div class="image-block_1">
																				<img src="http://i.vimeocdn.com/video/92507981_640.jpg" alt="عنوان عنوان عنوان عنوان " />
															
				<div class="image-overlay"><a href="#5"></a></div>
			</div>
			<div class="title-block_1">
				<h3>عنوان عنوان عنوان عنوان </h3>
									<div class="button-block"><a href="#" target="_blank" >View More</a></div>
							</div>
		</div>	
				<div class="element_1" tabindex="0" data-symbol="عنوان عنوان عنوان عنوان " data-category="alkaline-earth">
			<div class="image-block_1">
																				<img src="http://i.vimeocdn.com/video/486549161_640.jpg" alt="عنوان عنوان عنوان عنوان " />
															
				<div class="image-overlay"><a href="#6"></a></div>
			</div>
			<div class="title-block_1">
				<h3>عنوان عنوان عنوان عنوان </h3>
									<div class="button-block"><a href="#" target="_blank" >View More</a></div>
							</div>
		</div>	
				<div class="element_1" tabindex="0" data-symbol="عنوان عنوان عنوان عنوان " data-category="alkaline-earth">
			<div class="image-block_1">
																				<img src="http://i.vimeocdn.com/video/209167988_640.jpg" alt="عنوان عنوان عنوان عنوان " />
															
				<div class="image-overlay"><a href="#8"></a></div>
			</div>
			<div class="title-block_1">
				<h3>عنوان عنوان عنوان عنوان </h3>
									<div class="button-block"><a href="#" target="_blank" >View More</a></div>
							</div>
		</div>	
				<div class="element_1" tabindex="0" data-symbol="عنوان عنوان عنوان عنوان " data-category="alkaline-earth">
			<div class="image-block_1">
																				<img src="http://img.youtube.com/vi/gb69WX82Hvs/mqdefault.jpg" alt="عنوان عنوان عنوان عنوان " />		
															
				<div class="image-overlay"><a href="#9"></a></div>
			</div>
			<div class="title-block_1">
				<h3>عنوان عنوان عنوان عنوان </h3>
									<div class="button-block"><a href="#" target="_blank" >View More</a></div>
							</div>
		</div>	
			<div style="clear:both;"></div>
  </div>
</section>
<ul id="huge_it_videogallery_popup_list_1">
			<li class="pupup-element" id="huge_it_videogallery_pupup_element_1">
			<div class="heading-navigation">
				<a href="#close" class="close"></a>
				<div style="clear:both;"></div>
			</div>
			<div class="popup-wrapper_1">
				<div class="image-block_1">					
																							<iframe src="//www.youtube.com/embed/ZAwb3ZVPCv4" frameborder="0" allowfullscreen></iframe>
															
				</div>
				<div class="right-block">
					<h3 class="title">عنوان عنوان عنوان عنوان عنوان عنوان </h3>					<div class="description">الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف </div>											<div class="button-block">
						<a href="#"  target="_blank">View More</a>
						</div>
										<div style="clear:both;"></div>
				</div>
				<div style="clear:both;"></div>
			</div>
		</li>
				<li class="pupup-element" id="huge_it_videogallery_pupup_element_2">
			<div class="heading-navigation">
				<a href="#close" class="close"></a>
				<div style="clear:both;"></div>
			</div>
			<div class="popup-wrapper_1">
				<div class="image-block_1">					
																							<iframe src="//player.vimeo.com/video/62604342?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
															
				</div>
				<div class="right-block">
					<h3 class="title">عنوان عنوان عنوان عنوان عنوان عنوان </h3>					<div class="description">الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف </div>											<div class="button-block">
						<a href="#"  target="_blank">View More</a>
						</div>
										<div style="clear:both;"></div>
				</div>
				<div style="clear:both;"></div>
			</div>
		</li>
				<li class="pupup-element" id="huge_it_videogallery_pupup_element_3">
			<div class="heading-navigation">
				<a href="#close" class="close"></a>
				<div style="clear:both;"></div>
			</div>
			<div class="popup-wrapper_1">
				<div class="image-block_1">					
																							<iframe src="//player.vimeo.com/video/99310168?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
															
				</div>
				<div class="right-block">
					<h3 class="title">عنوان عنوان عنوان عنوان عنوان عنوان </h3>					<div class="description">الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف </div>											<div class="button-block">
						<a href="http://huge-it.com/fields/order-website-maintenance/"  target="_blank">View More</a>
						</div>
										<div style="clear:both;"></div>
				</div>
				<div style="clear:both;"></div>
			</div>
		</li>
				<li class="pupup-element" id="huge_it_videogallery_pupup_element_4">
			<div class="heading-navigation">
				<a href="#close" class="close"></a>
				<div style="clear:both;"></div>
			</div>
			<div class="popup-wrapper_1">
				<div class="image-block_1">					
																							<iframe src="//www.youtube.com/embed/t5vta25jHQI" frameborder="0" allowfullscreen></iframe>
															
				</div>
				<div class="right-block">
					<h3 class="title">عنوان عنوان عنوان عنوان عنوان عنوان </h3>					<div class="description">الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف </div>											<div class="button-block">
						<a href="#"  target="_blank">View More</a>
						</div>
										<div style="clear:both;"></div>
				</div>
				<div style="clear:both;"></div>
			</div>
		</li>
				<li class="pupup-element" id="huge_it_videogallery_pupup_element_5">
			<div class="heading-navigation">
				<a href="#close" class="close"></a>
				<div style="clear:both;"></div>
			</div>
			<div class="popup-wrapper_1">
				<div class="image-block_1">					
																							<iframe src="//player.vimeo.com/video/15371143?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
															
				</div>
				<div class="right-block">
					<h3 class="title">عنوان عنوان عنوان عنوان </h3>					<div class="description">الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف </div>											<div class="button-block">
						<a href="#"  target="_blank">View More</a>
						</div>
										<div style="clear:both;"></div>
				</div>
				<div style="clear:both;"></div>
			</div>
		</li>
				<li class="pupup-element" id="huge_it_videogallery_pupup_element_6">
			<div class="heading-navigation">
				<a href="#close" class="close"></a>
				<div style="clear:both;"></div>
			</div>
			<div class="popup-wrapper_1">
				<div class="image-block_1">					
																							<iframe src="//player.vimeo.com/video/103151169?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
															
				</div>
				<div class="right-block">
					<h3 class="title">عنوان عنوان عنوان عنوان </h3>					<div class="description">الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف </div>											<div class="button-block">
						<a href="#"  target="_blank">View More</a>
						</div>
										<div style="clear:both;"></div>
				</div>
				<div style="clear:both;"></div>
			</div>
		</li>
				<li class="pupup-element" id="huge_it_videogallery_pupup_element_8">
			<div class="heading-navigation">
				<a href="#close" class="close"></a>
				<div style="clear:both;"></div>
			</div>
			<div class="popup-wrapper_1">
				<div class="image-block_1">					
																							<iframe src="//player.vimeo.com/video/31022539?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
															
				</div>
				<div class="right-block">
					<h3 class="title">عنوان عنوان عنوان عنوان </h3>					<div class="description">الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف </div>											<div class="button-block">
						<a href="#"  target="_blank">View More</a>
						</div>
										<div style="clear:both;"></div>
				</div>
				<div style="clear:both;"></div>
			</div>
		</li>
				<li class="pupup-element" id="huge_it_videogallery_pupup_element_9">
			<div class="heading-navigation">
				<a href="#close" class="close"></a>
				<div style="clear:both;"></div>
			</div>
			<div class="popup-wrapper_1">
				<div class="image-block_1">					
																							<iframe src="//www.youtube.com/embed/gb69WX82Hvs" frameborder="0" allowfullscreen></iframe>
															
				</div>
				<div class="right-block">
					<h3 class="title">عنوان عنوان عنوان عنوان </h3>					<div class="description">الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف الوصف وصف وصف </div>											<div class="button-block">
						<a href="#"  target="_blank">View More</a>
						</div>
										<div style="clear:both;"></div>
				</div>
				<div style="clear:both;"></div>
			</div>
		</li>
		</ul>
	  
     
	
      
										
					
									</div><!-- .entry /-->	
				<span style="display:none" class="updated">2015-01-21</span>
								<div style="display:none" class="vcard author" itemprop="author" itemscope itemtype="http://schema.org/Person"><strong class="fn" itemprop="name"><a href="#?rel=author">+amin</a></strong></div>
								
			</div><!-- .post-inner -->
		</article><!-- .post-listing -->
				
				
				<div id="comments">

		

		
</div><!-- #comments -->
	</div><!-- .content -->

<aside id="sidebar">
        <div class="full-width"><a href="#" target="_blank"><img src="./template/wp-content/uploads/2015/01/gif1.gif"/></a></div>

                <div class="full-width"><a href="#" target="_blank"><img src="./template/wp-content/uploads/2015/01/4331.jpg"/></a></div>

                <div class="full-width"><a href="#" target="_blank"><img src="./template/wp-content/uploads/2015/01/gif-de-bono.gif"/></a></div>

                <div class="full-width"><a href="#" target="_blank"><img src="./template/wp-content/uploads/2015/01/43.jpg"/></a></div>

        </aside><div class="clear"></div>
<nav  class="container-last-menu">
    <div class="last-wrap">
        <div class="main-menu"><ul id="menu-%d9%82%d8%a7%d8%a6%d9%85%d8%a9-%d8%a7%d8%b9%d9%84%d9%89-%d8%a7%d9%84%d9%81%d9%88%d8%aa%d8%b1" class="menu"><li id="menu-item-464" class="menu-item  menu-item-type-custom  menu-item-object-custom"><a href="#">عنوان رئيسي</a></li>
<li id="menu-item-465" class="menu-item  menu-item-type-custom  menu-item-object-custom"><a href="#">عنوان رئيسي</a></li>
<li id="menu-item-466" class="menu-item  menu-item-type-custom  menu-item-object-custom"><a href="#">عنوان رئيسي</a></li>
<li id="menu-item-467" class="menu-item  menu-item-type-custom  menu-item-object-custom"><a href="#">عنوان رئيسي</a></li>
<li id="menu-item-468" class="menu-item  menu-item-type-custom  menu-item-object-custom"><a href="#">عنوان رئيسي</a></li>
<li id="menu-item-469" class="menu-item  menu-item-type-custom  menu-item-object-custom"><a href="#">عنوان رئيسي</a></li>
</ul></div>    </div>
</nav><!-- .main-nav /-->
<div class="clear"></div>
</div><!-- .container /-->

<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("footer") . ( substr("footer",-1,1) != "/" ? "/" : "" ) . basename("footer") );?>