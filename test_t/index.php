<?php include_once(dirname(__FILE__)."/functions.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>尾山台のフレンチ 「a Bee アベー」でワインを堪能</title>
<meta name="keywords" content="尾山台,フレンチ,ワイン,a Bee" />
<meta name="description" content="尾山台のフレンチ「 a Bee (アベー)」。旬の食材をふんだんに使用した美味しい料理をランチ、もしくはディナーの食事にお召し上がりください。ワインは珍しいものも多数ご用意しております。" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="viewport" content="target-densitydpi=device-dpi, width=1280, maximum-scale=1.0, user-scalable=yes" />
<link rel="shortcut icon" href="shared/img/favicon.ico" />
<link rel="stylesheet" href="shared/font/fontello.css" type="text/css" />
<link rel="stylesheet" href="shared/css/common.css" type="text/css" />
<link rel="stylesheet" href="shared/css/shared.css" type="text/css" />
<link rel="stylesheet" href="shared/css/style.css" type="text/css" />
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
});//]]> 





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
<body id="top">
<div id="wrapper">
  <div id="header">
  
  	<nav id="nav_sp" class="nav">
    <div id="nav_sp_Inner">
      <div class="menuLst_wrap">
       	
        <ul class="menuLst">
         	<li class="logo txt_center"><img src="shared/img/sp_logo.png" width="100%" alt=""/></li>
          <li><a href="index.html"><img src="shared/img/sp_nav_01.png" width="100%" alt="TOP"></a></li>
          <li><a href="#about"><img src="shared/img/sp_nav_02.png" width="100%" alt="ABOUT"></a></li>
          <li><a href="#lunch"><img src="shared/img/sp_nav_03.png" width="100%" alt="LUNCH"></a></li>
          <li><a href="#dinner"><img src="shared/img/sp_nav_04.png" width="100%" alt="DINNER"></a></li>
          <li><a href="#wine"><img src="shared/img/sp_nav_05.png" width="100%" alt="WINE"></a></li>
          <li><a href="#access"><img src="shared/img/sp_nav_06.png" width="100%" alt="ACCESS"></a></li>
          <li><a class="telhref"  href="tel:0337016930" onclick="ga('send', 'event', 'tel', 'click', 'header_phone');"><img src="shared/img/sp_tel.png" width="100%" alt="tel"></a></li>
        </ul>
        <span class="mat"><span class="mat1"></span><span class="mat2"></span><span class="mat3"></span><span class="mat4"></span><span class="mat5"></span></span>
      </div>
      <span class="underlay"></span> 
    </div>
  </nav>

    <div id="navTrigger">
    <a href="javascript:void(0)"><span><i><span class="line_top"><span></span></span><span class="line_middle"></span><span class="line_bottom"><span></span></span></i></span></a><span class="mat"></span>
  </div>
  
    <div id="belt">
      <h1>尾山台のフレンチ 「a Bee アベー」でワインを堪能</h1>
      <p id="logo"><img src="shared/img/logo.png" width="166" height="134" alt=" aBee（アベー）" /></p>
      <!--<p id="h_reserve"><a href="https://yoyaku.toreta.in/abee2013/#/" target="_blank" rel="nofollow" onclick="ga('send', 'event', 'Link', 'click', 'reserve');">WEB予約</a></p>-->
      <p id="h_tel"><a class="telhref"  href="tel:0337016930" onclick="ga('send', 'event', 'tel', 'click', 'header_phone');"><img src="shared/img/h_tel.png" width="229" height="45" alt="tel 03-3701-6930" /></a></p>
	  
    <ul id="globalNav">
    <li class="current"><a href="#top"><img src="shared/img/nav1.png" width="120" height="40" alt="TOP"  class="over" /></a></li>
        <li><a href="#about"><img src="shared/img/nav2.png" width="120" height="40" alt="ABOUT" class="over" /></a></li>
        <li class="padd"><a href="#lunch"><img src="shared/img/nav3.png" width="120" height="40" alt="LUNCH " class="over" /></a></li>
        <li><a href="#dinner"><img src="shared/img/nav4.png" width="125" height="40" alt="DINNER" class="over" /></a></li>
        <li><a href="#wine"><img src="shared/img/nav5.png" width="120" height="40" alt="WINE" class="over" /></a></li>
        <li><a href="#access"><img src="shared/img/nav6.png" alt="ACCESS" width="134" height="40" class="over" /></a></li>
      </ul>
    </div>
    <!--  end belt -->
    
    <div id="fixNav_wrap">
        <div class="content">
          <div class="fix_in">
            <ul id="fixNav">
              <li><a href="#top" class="current"><img src="shared/img/fix_nav1.png" width="109" height="60" alt="TOP" /></a></li>
              <li><a href="#about"><img src="shared/img/fix_nav2.png" width="137" height="60" alt="ABOUT" /></a></li>
              <li class="padd"><a href="#lunch"><img src="shared/img/fix_nav3.png" width="137" height="60" alt="LUNCH" /></a></li>
              <li><a href="#dinner"><img src="shared/img/fix_nav4.png" width="150" height="60" alt="DINNER" /></a></li>
              <li><a href="#wine"><img src="shared/img/fix_nav5.png" width="121" height="60" alt="WINE" /></a></li>
              <li><a href="#access"><img src="shared/img/fix_nav6.png" alt="ACCESS" width="146" height="60" /></a></li>
            </ul>
            <span></span> </div>
        </div>
      </div>
    
    
    

    
    <div id="key">
      <ul id="slider_img">
        <li id="slider_img01">カウンター</li>
        <li id="slider_img02">食材</li>
        <li id="slider_img03">料理①</li>
        <li id="slider_img04">料理②</li>
      </ul>
    </div>
  </div>
  
  <!--  end header -->
  <div id="container">
    <div id="lead" class="content clearfix sec_box">
		<!--<p class="oshirase">
			<span>－ ゴールデンニーク －</span><br />
		 	2019年5月3、4、5、6日 開催<br />
			ステーキだけのスペシャルメニューをご提供致します。<br />
			ソースを数種類、和牛3種類（黒毛・褐毛・短角）から<br />
			お選び頂けるメニューになります。<br />
			ご予約、承ります。<br />
			※無くなり次第、終了とさせて頂きます。

		</p>-->
		
      <p>
      尾山台のカウンターフレンチ 「a Bee アベー」では、<br />ランチ・ディナーともにコースにてご提供し、<br />
ゆったり流れる時間の中でお楽しみいただけます。<br />
食材はオーナーシェフの地元、鳥取県の野菜や境港直送の鮮魚など、旬のものを使用し、<br />
味だけでなく見た目にも四季を感じさせる美しい盛り付けで、<br />
季節によって見せるお料理の顔や味をご提供させていただきます。</p>

<p>旬の食材を使ったメニューやワインの紹介、<br />
お料理教室やコラボレーション企画などの最新情報はこちらをご覧ください。<br />
      </p>
      <p class="bnr"><a href="#facebook"><img src="shared/img/fb_btn.png" width="51" height="51" alt=" Facebook" class="over" /></a></p>
    </div>
    
    <!--  #lead -->
    
    <div id="about" class="sec_box">
      <div class="lead content">
        <h2><img src="shared/img/about_h2.png" width="380" height="55" alt="ABOUT" /></h2>

        <p>ベルギー、フランスでは<br />
料理の腕を磨くとともに、現地で食材が出来るまでの過程も体験しました。<br />
水や土、育て方ひとつで変わる、素材の味。<br />
食材へのこだわりだけでなく、日本にはない、<br />
料理への「追求の形」を目の当たりにすることができました。</p>

<p>培ってきた経験を生かし、静岡県の契約農家で栽培された旬の食材や境港直送の鮮魚など、<br />
厳選した美味しい食材を使用しております。<br />
体に馴染むような自分らしいフランス料理をご提供させていただきます。</p>
		          
      </div>
      <div class="menu_contents sec_bg" id="slide_panel">
        <div id="sec1" class="m_menu1 panel content">
          <div class="x_close"><img src="shared/img/close.png" width="49" height="67" alt="close" /></div>
          <h3><img src="shared/img/about_h3_1.png" width="380" height="66" alt="ベルギーでの経験" /></h3>
          <p class="txt">グルメの街、デュルビュイのホテル「ル・サングリエ・デ・ザルデンヌ」。<br />
過去に皇太子ご夫妻も宿泊された、有名なホテルのレストランで経験を積み、<br />
本格フレンチを学ぶ。</p>
          <p class="photo1"><img src="shared/img/about_photo1.jpg" width="370" height="255" alt="お店周辺" /></p>
          <p class="photo2"><img src="shared/img/about_photo2.jpg" width="406" height="305" alt="スタッフ" /></p>
          <p class="photo3"><img src="shared/img/about_photo3.jpg" width="371" height="255" alt="街並み" /></p>
          <p class="photo4"><img src="shared/img/about_photo4.jpg" width="300" height="230" alt="料理" /></p>
        </div>
        
        <!--  #sec1 -->
        
        <div id="sec2" class="m_menu2 panel content">
          <div class="x_close"><img src="shared/img/close.png" width="49" height="67" alt="close" /></div>
          <h3><img src="shared/img/about_h3_2.png" width="380" height="66" alt="パリでの経験" /></h3>
          <p class="txt">街のレストラン「レストラン・ブール・ノワゼット」。<br />
美食の要素を残しながらも、季節の食材を現代的に仕上げる技を学び、<br />
前菜、メイン、デザートの全工程を経験したことで、<br />
オリジナルフレンチへと拍車が掛かる。</p>
          <p class="photo1"><img src="shared/img/about_photo5.jpg" width="370" height="255" alt="風景" /></p>
          <p class="photo2"><img src="shared/img/about_photo6.jpg" width="251" height="325" alt="風景2" /></p>
          <p class="photo3"><img src="shared/img/about_photo7.jpg" width="371" height="255" alt="料理2" /></p>
          <p class="photo4"><img src="shared/img/about_photo8.jpg" width="300" height="230" alt="食材" /></p>
        </div>
        
        <!--  #sec2 -->
        
        <div id="sec3" class="m_menu3 panel content">
          <div class="x_close"><img src="shared/img/close.png" width="49" height="67" alt="close" /></div>
          <h3><img src="shared/img/about_h3_3.png" width="380" height="66" alt="アルザスでの経験" /></h3>
          <p class="txt">ビオのチーズ農家でヤギの放牧からチーズの製造までを経験。<br />
ワイナリーではぶどうの収穫、シャルキュトリーではハムやソーセージ、<br />
豚肉の加工を経験した。</p>
          <p class="photo1"><img src="shared/img/about_photo9.jpg" width="370" height="255" alt="ファミリー" /></p>
          <p class="photo2"><img src="shared/img/about_photo10.jpg" width="406" height="305" alt=" ソーセージ" /></p>
          <p class="photo3"><img src="shared/img/about_photo11.jpg" width="371" height="255" alt="チーズ" /></p>
          <p class="photo4"><img src="shared/img/about_photo12.jpg" width="300" height="230" alt="子ヤギ" /></p>
        </div>
        
        <!--  #sec3 -->
        
        <div id="sec4" class="m_menu4 panel content">
          <div class="x_close"><img src="shared/img/close.png" width="49" height="67" alt="close" /></div>
          <h3><img src="shared/img/about_h3_4.png" width="380" height="66" alt="ローヌでの経験" /></h3>
          <p class="txt">ヤギのチーズ農家でチーズ作りの全工程を経験。<br />
レストラン「ラルエット」ではすべての工程を学び、<br />
当時一つ星の「オーベルジュドフォンローズ」では、お菓子作りを担当した。</p>
          <p class="photo1"><img src="shared/img/about_photo13.jpg" width="370" height="255" alt="鴨" /></p>
          <p class="photo2"><img src="shared/img/about_photo14.jpg" width="251" height="325" alt="チーズ" /></p>
          <p class="photo3"><img src="shared/img/about_photo15.jpg" width="370" height="254" alt="テラス" /></p>
          <p class="photo4"><img src="shared/img/about_photo16.jpg" width="300" height="230" alt="フォアグラ" /></p>
        </div>
        
        <!--  #sec4 --> 
        
      </div>
      <div class="map content">
	  <h3><img src="shared/img/about_tit.png" width="380" height="40" alt="経験" /></h3>
        <div class="info1">
          <p class="photo bnr1"><img src="shared/img/map_photo1.jpg" width="283" height="248" alt="&quot;シェフ&quot;" class="over" /></p>
          <p><img src="shared/img/map_tit1.png" width="283" height="35" alt="Belgique" /></p>
          <p class="txt">有名なホテルのレストランで、<br />
魚料理のシェフを主に担当し、経験を積んだ。</p>
        </div>
        <div class="info2">
          <p class="photo bnr2"><img src="shared/img/map_photo2.jpg" width="283" height="248" alt="ぶどう" class="over" /></p>
          <p><img src="shared/img/map_tit2.png" width="283" height="35" alt="Alsace" /></p>
          <p class="txt">ワイナリーやシャルキュトリーなどの<br />
専門店で働き、ぶどうの収穫や<br />
チーズ農家で飼育から製造工程まで学んだ。</p>
        </div>
        <div class="info3">
          <p class="photo bnr3"><img src="shared/img/map_photo3.jpg" width="283" height="248" alt="店内" class="over" /></p>
          <p><img src="shared/img/map_tit3.png" width="283" height="35" alt="Paris" /></p>
          <p class="txt">レストランで前菜やメイン、デザート全ての<br />
工程を経験し、シェフとしての腕を磨いた。</p>
        </div>
        <div class="info4">
          <p class="photo bnr4"><img src="shared/img/map_photo4.jpg" width="283" height="248" alt="ヤギ" class="over" /></p>
          <p><img src="shared/img/map_tit4.png" width="283" height="35" alt="Rhone-Alpes" /></p>
          <p class="txt">チーズ農家で知識を学び、<br />
2つのレストランで働いた後に<br />
フォアグラ農家でも経験を積んだ。</p>
        </div>
      </div>
    </div>
    <!--about -->
    
    <div id="lunch" class="content sec_box">
      <h2 class="center"><img src="shared/img/lunch_h2.png" width="140" height="35" alt="LUNCH" /></h2>
      <div class="shared_wrap">
        <ul class="photo_eff">
          <li><img src="shared/img/lunh_photo1.jpg" width="471" height="350" alt="ランチ1" /></li>
          <li><img src="shared/img/lunh_photo2.jpg" width="471" height="350" alt="ランチ2" /></li>
          <li><img src="shared/img/lunh_photo3.jpg" width="471" height="350" alt="ランチ3" /></li>
          <li><img src="shared/img/lunh_photo4.jpg" width="471" height="350" alt="ランチ4" /></li>
        </ul>
      </div>
      <div class="info">
        <h3>ランチ　<span class="f_eng">4,500</span>円(税別)</h3>
        <h4>ランチメニュー</h4>
        <div class="menu_list">
          <p class="pl50">
			  前菜2種類<br />
			  季節のスープ<br />
			  メイン：肉or魚を選べます<br />
			  デザート<br />
			  コーヒー or 紅茶 or エスプレッソ
			</p>
        </div>
        <p class="attention mb10">
			2019年8月より、ディナーで好評のメニューを<br />
			「ショートコース」にてご提供させて頂きます。
		  </p>
      </div>
	  <div class="txt_note">
	  <p align="center">※ランチはご予約で定員になり次第、終了させていただきます。</p>
	  </div>
	  
      <p align="center"><a href="#" target="_blank" rel="nofollow" ><img src="shared/img/lunch_bnr.jpg" width="390" height="40" alt="最新のランチメニュー" class="over" /></a></p>
    </div>
    
    <!--  #lunch -->
    
    <div id="dinner" class="sec_bg sec_box">
      <div class="content clearfix">
        <h2 class="center"><img src="shared/img/dinner_h2.png" width="140" height="35" alt="DINNER" /></h2>
        <div class="shared_wrap">
          <ul class="photo_eff">
            <li><img src="shared/img/dinner_photo1.jpg" width="471" height="350" alt="ディナー1" /></li>
            <li><img src="shared/img/dinner_photo2.jpg" width="471" height="350" alt="ディナー2" /></li>
            <li><img src="shared/img/dinner_photo3.jpg" width="471" height="350" alt="ディナー3" /></li>
            <li><img src="shared/img/dinner_photo4.jpg" width="471" height="350" alt="ディナー4" /></li>
          </ul>
        </div>
        <div class="info">
          <h3>ディナー おすすめコース　<span class="f_eng">5,200</span>円(税別)</h3>
          <h4>～ある日の一例～</h4>
          <div class="menu_list">
		  	<dl class="padd">
              <dt>アミューズ</dt>
              <dd>のりの入ったシュー<br />
チェリートマトのコンポート</dd>
            </dl>
            <dl class="padd">
              <dt>前菜</dt>
              <dd>フォアグラのテリーヌとブルーベリーのコンフィチュール<br />
絞甲イカとアボカドのサラダ イベリコチョリソーを添えて<br />
静岡産野菜のプレゼ ヘーゼルナッツのラペ
              </dd>
            </dl>
            
            
            <dl>
              <dt>メイン(魚)</dt>
              <dd>マトウダイのヴァプール　キャベツを添えて二色のソース</dd>
            </dl>
			<dl>
              <dt>メイン(肉)</dt>
              <dd>アメリカ産牛肉のロースト　季節の野菜とともに</dd>
            </dl>
          </div>

          <p class="attention2 mb10 note">※メインの肉料理はプラス料金で<br />鴨肉・熊本産あか牛等に変更可能です。<br />
            ※冬場はご予約でジビエ料理もご用意出来ます。<br />
※食後のお飲み物（コーヒー、紅茶、エスプレッソ)とデザートは<br />
＋<span class="f_eng">700</span>円(税別）です。</p>

        </div>
        <div class="bnr">
		
		<!--<div class="course">
		<p style="font-size:16px;">12月23,24,25日限定<br />
        <strong>クリスマスコース</strong> <span class="f_eng">8,000</span>円(税別)</p>
		<p>全8品(デザート込み)　</p>
        <p>※要予約となります</p>
		</div>
		</div>
        
        <div class="bnr">-->
		
		<div class="course">
		<p style="font-size:16px; margin-bottom:0.8em;">シェフの特別コース</p>
        <p><span class="f_eng">6,800</span>円(税別)<br />
        <span class="f_eng">8,000</span>円(税別)</p>
		<p>※詳細はお問い合わせください。</p>
		</div>
		
		<p><a href="#" target="_blank" rel="nofollow" ><img src="shared/img/dinner_bnr.jpg" width="390" height="40" alt="最新のディナー" class="over" /></a></p>
		
		</div>
        
      </div>
    </div>
    
    <!--  #dinner -->
    <div id="fixed-image01"></div>
    
    <!--  #img_fix -->
    
    <div id="wine" class="content sec_box">
      <h2 class="center"><img src="shared/img/wine_h2.png" width="140" height="35" alt="WINE" /></h2>
      <div class="wine">
        <p class="tit"><img src="shared/img/wine_tit.png" width="409" height="57" alt="アルザスワイン" /></p>
        <ul id="tab_navi" class="clearfix">
          <li class="tab1"><span class="active">白ワイン Vin blanc</span></li>
          <li class="tab2"><span>赤ワイン Vin rouge</span></li>
        </ul>
        <div id="tab_content">
          <div class="tab tab01">
            <ul>
              <li>ch.ラ・レイル　ベルジュラック('12)</li>
              <li>アラン・パレ　コートデュローヌ('12)</li>
              <li>リーフレ　シルヴァネールトラディション('12)</li>
              <li>リーフレ　リースリングトラディション('12)</li>
              <li>マルセン・セルヴァン　プライベートシャブリ</li>
            </ul>
            <p class="photo"><img src="shared/img/wine_photo1.png" width="326" height="538" alt="白ワイン" /></p>
          </div>
          <div class="tab tab02">
            <ul>
              <li>ch.ラ・レイル　ベルジュラック('11)</li>
              <li>アラン・パレ　コートデュローヌ('11)</li>
              <li>ドメーヌ・ド・ロウシュ・ガイヤール トゥーレーヌ</li>
              <li>シャンタル・レスキュール　コートド・ボーヌ</li>
              <li>アラン・パレ　サンジョセフ420ニュイ('10)</li>
            </ul>
            <p class="photo"><img src="shared/img/wine_photo2.png" width="326" height="538" alt="赤ワイン" /></p>
          </div>
        </div>
        
        <!--  #tab_content  -->
        
        <div class="shared">
          <p>グラスワイン(赤・白)　870円（税別）～<br />
            ボトルワイン(赤・白)　4,000円（税別）～</p>
          <p>料理をより一層引き立てるワインを取り揃えております。<br />
            このお料理と合うワインは？<br />
            ワインに合わせて食事を楽しみたい、など<br />
            ご要望やご相談がございましたら、お気軽にお申し付けください。<br />
          </p>
        </div>
      </div>
      <p class="bnr clear"><a href="#" target="_blank" rel="nofollow" ><img src="shared/img/wine_bnr.jpg" width="390" height="40" alt="最新入荷のワイン" class="over" /></a></p>
      <p class="deco"><img src="shared/img/deco1.png" width="105" height="133" alt="ランチ1" /></p>
    </div>
    
    <!--  #wine  -->
    
    <div id="access" class="sec_bg sec_box">
      <div class="content">
        <h2 class="center"><img src="shared/img/access_h2.png" width="140" height="35" alt="ACCESS" /></h2>
        <div class="shared_wrap">
          <ul class="photo_eff">
            <li><img src="shared/img/access_photo1.jpg" width="471" height="350" alt="外観" /></li>
            <li><img src="shared/img/access_photo2.jpg" width="471" height="350" alt="内観1" /></li>
            <li><img src="shared/img/access_photo3.jpg" width="471" height="350" alt="内観2" /></li>
          </ul>
        </div>
        <div class="info">
          <p><strong>フランス料理レストラン　a Bee (アベー)</strong></p>
          <p>東急大井町線尾山台駅より徒歩3分。<br />
素材に真っ直ぐと向き合う、正統派フレンチ。</p>
<p>季節によって異なる「美味しい食材」を常に探求し、<br />
素材の持ち味を十分に生かすため、調理へのこだわりもかかしません。<br />
是非、厳選した多種多様なワインと共に、お召し上がりください。</p>
<p>何気ない日の普段使いから、特別な記念日やデートにもおすすめです。<br />
皆様のご来店を心よりお待ちしております。</p>
          <p>オーナーシェフ　阿部　篤志 </p>
        </div>
        <div class="contact">
          <p class="txt mb20">〒<span class="f_eng">158-0086</span><br />
            東京都世田谷区尾山台<span class="f_eng">3-24-11</span>　第<span class="f_eng">10</span>大浦ビル<span class="f_eng">1</span>階<br />
            ランチ　　<span class="f_eng">12:00～13:00(Last order)</span><br />
            ディナー <span class="f_eng">18:00～23:00(Last order 22:00)</span><br />
            定休日　火曜日、水曜日のランチ<br />
            最寄り駅　東急大井町線尾山台駅より徒歩<span class="f_eng">3</span>分</p>
			<p class="note2">※ランチはご予約で定員になり次第、終了させていただきます。</p>
          <p class="tel"><a class="telhref"  href="tel:0337016930" onclick="ga('send', 'event', 'tel', 'click', 'info_phone');"><img src="shared/img/access_tel.png" width="397" height="128" alt="tel 03-3701-6930" /></a></p>
		  <p class="tel_txt">
          	※当日のキャンセルはコースの金額を100％頂戴させて頂きます。<br />
          	※2日前までのご予約をお願いいたします。
         </p>
        </div>
      </div>
    </div>
    
    <!--  #access -->
    
    <div id="gmap"> </div>
    
    <!--  #gmap -->
    
    <div id="group" class="content clearfix">
      <div id="news">
        <h3><img src="shared/img/news_h3.png" width="51" height="51" alt="ブログ" /></h3>
        <div id="feed" class="box">
        <?php
		// RSS情報を取得する(URL,記事の表示数)
		$rss = get_ameba_rss("http://rssblog.ameba.jp/abee2013/rss20.xml",3,56);
		foreach( $rss as $item ) : ?>

		<dl>
			

            <dt><span class="date"><?php print $item->date; ?></span><br />
            <span class="ttl"><a href="<?php print $item->link; ?>" target="_blank" rel="nofollow"><?php print $item->title; ?></a></span><dt>
            <dd><?php print $item->post; ?></dd>
		</dl>
	<?php endforeach; ?>
          <!--<dl>
            <dt><span class="date">2015-5-12</span><br />
              <a href="#">ホームページをリニューアルしました</a></dt>
            <dd>ブログは只今準備中です</a></dd>
            
          </dl>-->
        </div>
      </div>
      
      <!--  #news -->
      
      <div id="facebook">
        <h3><img src="shared/img/fb_h3.png" width="51" height="51" alt="Facebook" /></h3>
        <div class="box">
          <div id="fb-root"></div>
          <div class="fb-page" data-href="https://www.facebook.com/pages/%E3%83%95%E3%83%A9%E3%83%B3%E3%82%B9%E6%96%99%E7%90%86-%C3%A0B%C3%AAe/197712040433800?fref=ts" data-width="300" data-height="445" data-hide-cover="false" data-show-facepile="false" data-show-posts="true"></div>
        </div>
      </div>
      
      <!--  #facebook --> 
      
    </div>
    
    
    <!--  #group --> 
    
    <div id="instagram" class="content clearfix">
    <h3><img src="shared/img/insta_h3.png" width="51" height="51" alt="Instagram" /></h3>
    <ul id="instafeed"></ul>
    </div>
    
  </div>
  <!--  end container  -->
  
  <div id="footer">
   <div id="ft_group">
    <div class="contact_gr clearfix">
      <div  class="box ft_contact_tel left_col">
        <p><a href="tel:0337016930" onclick="ga('send','event','tel','click','sp_footer_phone');"><img src="shared/img/tel_B.png" width="100%" alt="tel"/></a></p>
      </div>
      <div class="box ft_contact_map left_col">
        <p><a href="https://goo.gl/maps/fwAttTrjyUk" target="_blank" ><img src="shared/img/map_B.png" width="100%" alt=""/></a></p>
      </div>
      <div class="box up right_col">
        <p><a href="#header" ><img src="shared/img/up.png" width="100%" alt="up"/></a></p>
      </div>
    </div>
    
  </div>
    <p id="f_logo"><img src="shared/img/f_logo.png" width="170" height="139" alt="フランス料理　aBee" /></p>
    <address>
    <img src="shared/img/address.png" width="60" height="22"  alt=" &copy; aBee" />
    </address>
  </div>
</div>

<script type="text/javascript" src="shared/js/common.js"></script>
<script type="text/javascript" src="shared/js/sp_nav.js"></script>
<script src="shared/js/instagram.min.js"></script>
    <script>
	var userFeed = new Instafeed({
get: 'user', 
userId: 1708817873,
accessToken: '1708817873.cc30f62.c6e084f6d5b047b8958f053a5cd4e76d',
limit: 10, 
resolution: 'low_resolution',
sortBy: "random", 
template: '<li><a href="{{link}}"><img src="{{image}}" width="200" height="200" alt=""></a></li>',
});
userFeed.run();
	</script>
	
</body>
</html>