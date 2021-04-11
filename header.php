<?php include_once(dirname(__FILE__)."/functions.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>尾山台のフレンチ 「a Bee アベー」デート、記念日、クリスマスに</title>
<meta name="keywords" content="尾山台,フレンチ,ワイン,a Bee" />
<meta name="description" content="尾山台のフレンチレストラン「 a Bee (アベー)」。ランチ、ディナーに旬の食材を使用したコース料理をワインとお楽しみください。デート、記念日、クリスマスにおすすめ。九品仏・等々力からもアクセス良好" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="viewport" content="target-densitydpi=device-dpi, width=1280, maximum-scale=1.0, user-scalable=yes" />
<link rel="shortcut icon" href="shared/img/favicon.ico" />
<link rel="stylesheet" href="shared/font/fontello.css" type="text/css" />
<link rel="stylesheet" href="shared/css/common.css" type="text/css" />
<link rel="stylesheet" href="shared/css/shared.css" type="text/css" />
<link rel="stylesheet" href="shared/css/style.css" type="text/css" />
<link rel="stylesheet" href="shared/css/news.css" type="text/css" />
<link rel="stylesheet" href="shared/css/blog.css" type="text/css" />
<link rel="canonical" href="http://www.a-bee-restaurant.info" />
<script type="text/javascript" src="shared/js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="shared/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="shared/js/about.js"></script>
<script type="text/javascript" src="shared/js/socialbutton.js"></script>
<script type="text/javascript" src="shared/js/rollover.js"></script>
<script type="text/javascript" src="shared/js/smoothscroll.js"></script>

<!--[if lt IE 9]>
<script src="shared/js/html5shiv-printshiv.js" type="text/javascript"></script>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
<script src="shared/js/respond.src.js" type="text/javascript"></script>

<!--<script type="text/javascript" src="shared/js/scrolltopcontrol.js"></script>-->
<script src="https://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript" src="shared/js/jquery.bxslider.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtdx9nSDstjJOTDGsGnHC5nqmFmJXi4G8"></script>
<script type="text/javascript" src="shared/js/googlemap.js"></script>
<script type="text/javascript">
$(function(){
	var slider = $('#slider_img').bxSlider({
	auto: true,
	pause: 4000,
	speed: 1000,
	mode: 'fade',
	controls: false
	});
});

$(function(){
	var slider = $('.photo_eff').bxSlider({
	auto: true,
	pause: 4000,
	speed: 1000,
	 mode: 'horizontal',
	controls: true
	});
});



$(window).load(function(){
$('#tab_content .tab').hide();
$('#tab_content .tab:first').show();

$('#tab_navi li').click(function() {
	
    $('#tab_navi li span').removeClass("active");
    $(this).find('span').addClass("active");
   // $('#tab_content .tab').hide();
 
 $('#tab_content .tab ul').addClass("reactive");
	$('#tab_content .tab').fadeOut(500);
	
	

    var indexer = $(this).index(); //gets the current index of (this) which is #nav li
	  $('#tab_content .tab ul:eq(' + indexer + ')').removeClass("reactive");
    $('#tab_content .tab:eq(' + indexer + ')').fadeIn(500); //uses whatever index the link has to open the corresponding box 
});
});





</script>
<script type="text/javascript">

jQuery(document).ready(function($)	{
		//navi fix scroll
		
	$("#fixNav_wrap").hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('#fixNav_wrap').fadeIn(500);
        } else {
            $('#fixNav_wrap').fadeOut(500);
        }
		
		
    });
	
	
	

$(function(){
	
	var set = 300;//ウインドウ上部からどれぐらいの位置で変化させるか
	
	var boxTop = new Array;
	var current = -1;
	
	//各要素の位置
	$('.sec_box').each(function(i) {
        boxTop[i] = $(this).offset().top;
    });
	
	//最初の要素にclass="on"をつける
	changeBox(0);
	
	//スクロールした時の処理
	$(window).scroll(function(){
		scrollPosition = $(window).scrollTop();	
		for (var i = boxTop.length - 1 ; i >= 0; i--) {
			if ($(window).scrollTop() > boxTop[i] - set) {
	            changeBox(i);
	        	break;
	        }
		};
	});
	
	//ナビの処理
	function changeBox(secNum) {
		if (secNum != current) {

			current = secNum;
			secNum2 = secNum + 1;//HTML順序用
				
			$('#fixNav li a').removeClass('current');
			$('#fixNav li a:nth-child(' + secNum2 +')').addClass('current');
			$('#fixNav_wrap span').stop().animate({
				width:$('#fixNav li:nth-child(' + secNum2 +')').outerWidth(),
				left: $('#fixNav li:nth-child(' + secNum2 +')').position().left}
			,1500);
			
		}
	};


 
});

	
		//navi fix hover
			
	
		$('#fixNav_wrap span').css({ 
			width: $('#fixNav_wrap .current').outerWidth(),
			left: $('#fixNav_wrap .current').position().left 
		});
		
		
		$('#fixNav a').mouseover(function(){
			$('#fixNav_wrap span').stop().animate({
				width: $(this).outerWidth(),
				left: $(this).position().left}
			,1000);
		});
		
	
	});

</script>




<script type="text/javascript">
$(function(){
    var ua = navigator.userAgent;
    if(ua.indexOf('iPhone') < 0 && ua.indexOf('Android') < 0){
        $('.telhref').contents().unwrap();
    }
});



      
      (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "http://connect.facebook.net/ja_JP/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44704774-52', 'auto');
  ga('send', 'pageview');

</script>
</head>
