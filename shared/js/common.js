// JavaScript Document

/* --------------------------------------------------------------------------------------
 　各種ユニット
--------------------------------------------------------------------------------------- */

$(function (){
	macfont();
	iosback();
	fadeScroll();
	gnavi();
	Gmap();
	ImageFade();
	anchor();
	pagetop();
	rollover();
	resizebox();
	IEpng();
});

ID = $("body").attr("id");

/* --------------------------------------------------------------------------------------
 　macの場合、フォントをヒラギノに変更
--------------------------------------------------------------------------------------- */

var macfont = function () {
	if(navigator.userAgent.indexOf("Mac") != -1 ) {
		$("body").css("font-family",'"ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro","Osaka","メイリオ",Meiryo,"ＭＳ Ｐゴシック","MS PGothic",sans-serif');
	};
};

/* --------------------------------------------------------------------------------------
 　スマホの背景表示
--------------------------------------------------------------------------------------- */

var iosback = function () {
	var iPhone  = navigator.userAgent.indexOf("iPhone"),
		iPad    = navigator.userAgent.indexOf("iPad"),
		ipod    = navigator.userAgent.indexOf("iPod"),
		Android = navigator.userAgent.indexOf("Android");
	
	if ( iPhone > 0 || iPad > 0 || ipod > 0 || Android > 0){
		if (ID === "top") $("#fixed-image01,#fixed-image02,#fixed-image03").css("background-attachment","inherit");
		else  $("div.fixed-image").css("background-attachment","inherit");
	}
};

/* --------------------------------------------------------------------------------------
 　スクロール
--------------------------------------------------------------------------------------- */

var fadeScroll = function () {
	if (ID === "top") {
		var box    = $("#welcome,#cafe,#dinner").get(),
			posTBL = new Array(); 
		
		for (i=0, Max=$(box).length; i<Max; i++) {
			Array.prototype.push.apply(posTBL, [$(box[i]).offset().top]);
		};
		
		$(window).on("load scroll", function() {
			var scrollTop = $(window).scrollTop();
			
			function FadeEvent(num) {
				$(box[num]).animate({
					"opacity": 1
				},"slow");
			}
			
			if (scrollTop > posTBL[0]) FadeEvent(0);
			if (scrollTop > posTBL[1]) FadeEvent(1);
			if (scrollTop > posTBL[2]) FadeEvent(2);
		});
	};
};

/* --------------------------------------------------------------------------------------
 　グローバルナビ
--------------------------------------------------------------------------------------- */

var gnavi = function () {
	$(window).on("load scroll", function() {
		var scrollTop = $(window).scrollTop(),
			tag       = $("header div:nth-child(3)").get(),
			Animate   = false;
		
		if (Animate !== false) clearTimeout(Animate);
		Animate = setTimeout(function (){
			if (scrollTop < 300) $(tag).removeClass("gnavi");
			else $(tag).addClass("gnavi");
		},200);
	});
};

/* --------------------------------------------------------------------------------------
 　Google Map
--------------------------------------------------------------------------------------- */

var Gmap = function () {
	function initialize() {
		var latlng = new google.maps.LatLng(34.695370, 135.489444);
		var latlng2 = new google.maps.LatLng(34.693448, 135.485092);
	
		var myOptions = {
			zoom : 17, /*拡大比率*/
			center : new google.maps.LatLng(34.695370, 135.48700), /*表示枠内の中心点*/
			mapTypeControlOptions : {
				mapTypeIds : ['sample', google.maps.MapTypeId.ROADMAP]
			}, /*表示タイプの指定*/
			scrollwheel : false
		};
		var map = new google.maps.Map(document.getElementById('maps'), myOptions);
		
		function createMarker(name,latlng,icons,map){
			var infoWindow = new google.maps.InfoWindow();
			var marker = new google.maps.Marker({position: latlng,icon:icons,map: map});
			google.maps.event.addListener(marker, 'click', function() {
				if (currentWindow) { currentWindow.close(); }
				infoWindow.setContent(name);
				infoWindow.open(map,marker);
				currentWindow = infoWindow;
			});
		};
		
		var map_tbl   = [latlng,latlng2],
			icon_tbl  = ['shared/img/common/l_cocolo.png','shared/img/common/l_story.png'],
			title_tbl = ['cocolo','story'];
			
		for (var i = 0; i < map_tbl.length; i++) {
			var name = title_tbl[i];
			var latlng = map_tbl[i];
			var icons = icon_tbl[i];
			createMarker(name,latlng,icons,map);
		}
	
		/*取得スタイルの貼り付け*/
		var styleOptions = [{
			"stylers" : [{
				"saturation" : -80
			}, {
				"gamma" : 1.44
			}, {
				"hue" : "#77531a"
			}]
		}];
		
		var styledMapOptions = { name : 'Cocolo＆Story'};
		var sampleType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
		map.mapTypes.set('sample', sampleType);
		map.setMapTypeId('sample');
	}
	
	google.maps.event.addDomListener(window, 'load', initialize);
};

/* --------------------------------------------------------------------------------------
 　TOPのメイン画像
--------------------------------------------------------------------------------------- */

var ImageFade = function (){
	
	var box   = $("#top-key div").get(),
		image = $(box).children().get(),
		cnt   = 1,
		dummy = 0,
		q     = 0,
		IndexC   = 0,
		delay = 5000,
		fadespeed = 1500,
		Imagettl = new Array(),
		back_bg = $(image[0]).find("img").attr("src"),
		
		//画像の配置と表示
		firstImage = function () {
			//画像の配置
			for(i=0, Max=$(image).length; i<Max; i++){
				$(image[i]).css({
					"position" : "absolute",
					"z-index"  : Max--
				});
				
				if(Max === 0) Max = $(image).length;
			};
			
			//最初の画像を表示
			$(image[0]).css("display","block");
			$(box).css("background-image","url(" + back_bg + ")");
		},
		
		//フェードイベント
		Fade = function (){
			//初期化
			if (cnt === 0) cnt++;
			if (cnt === $(image).length) cnt = 0;
			
			$(image).css("display","none");
			var Display = $(image[cnt]).css("display");
			
			//背景画像	
			var bg = "";
			if (cnt === 0) bg = $(image[0]).find("img").attr("src");
			else bg = $(image[cnt]).find("img").attr("src");
			
			cnt++;
			dummy++;
			
			$(image).css({"position":"absolute","z-index":"1"});
			
			//フェード画像を最前面へ
			$(image[cnt - 1]).css("z-index",parseInt($(image).length + 1));
				
			//フェード
			$(image[cnt - 1]).stop().fadeIn(fadespeed,function (){ $(box).css("background-image","url(" + bg + ")"); });
			
			//現在のIndexを変数に格納
			IndexC = (cnt - 1);
		},
		
		//サイズ代入
		boxsize = function() {
			var timer = false;
			
			var resizer = function (){
				$(window).on("load resize", function() {
				
					var width = $(window).width(),
						heightTbl  = new Array();
					
					$(box).css("width",width);
					
					for(i=0, Max=$(image).length; i<Max; i++){
						Array.prototype.push.apply(heightTbl,[$(image[i]).find("img").height()]);
					};
					
					heightTbl.sort(function(a,b){ return(b-a); });
					
					$(box).css({
						"width": width,
						"height": heightTbl[0]
					});
					
					$(image).css({
						"width": width,
						"height": heightTbl[0]
					});
				});
			};
			
			if (timer !== false) clearTimeout(timer);
			timer = setTimeout(function() { resizer(); }, 50);
		};
	
	if (ID === "top"){
		boxsize();
		$(image).css("opacity","1");
		firstImage();
		fadeEvent = setInterval(Fade,delay);
	}
};

/* --------------------------------------------------------------------------------------
 　ページ内アンカー
--------------------------------------------------------------------------------------- */

var anchor = function (){
	
	//リンク先がアンカーか調べるてパラメーターを付与
	$("a").on("click", function() {
		var link = $(this).attr("href");
		
		if (!link.match("#")) {
			return
		} else if (link.match("#") && !link.match("/") && !link.match("php") && !link.match("html") && !link.match("cgi")) {
			var top = $(link).offset().top - 150;
			
			$("html,body").animate({
				"scrollTop" : top
			},{
				"duration" : "normal"
			});
		} else {
			var URL = link.substr(0, link.lastIndexOf("#")),
				par = link.substring(link.lastIndexOf("#")).replace("#","");
			location.href = URL + "?anchor=" + par;
			return false
		};
	});
	
	//アンカーだった場合、アニメーション
	$(window).on("load", function (){
		var currentURL = location.href;
		if (currentURL.match("anchor")) {
			var ID  = currentURL.substring(currentURL.lastIndexOf("=")).replace("=",""),
				top = $("#" + ID).offset().top - 150;
				
			$("html,body").animate({
				"scrollTop" : top
			},{
				"duration" : "fast"
			});
		};
	});
};

/* --------------------------------------------------------------------------------------
 　ページトップ
--------------------------------------------------------------------------------------- */

var pagetop = function (){
	var tag   = $("div.pagetop").get(),
		Event = function (top) {
			$(tag).on("click", function() {
				$(this).blur();
				$(top).animate({ scrollTop: 0 }, "slow");
			});
		};
	
	Event("html,body");
	
	$(window).on("load scroll", function() {
		var scrollTop = $(window).scrollTop(),
			Animate   = false;
		
		if (Animate !== false) clearTimeout(Animate);
		Animate = setTimeout(function (){
			if (scrollTop === 0) $(tag).stop(false,true).fadeOut();
			else $(tag).fadeIn();
		},200);
	});
};

/* --------------------------------------------------------------------------------------
 　画像のロールオーバー
--------------------------------------------------------------------------------------- */

var rollover = function (){
	$("header ul:last-child a img").not('[src*="'+ "_over" +'."]').each(function() {
		var src = $(this).attr("src");
		var src_on = src.substr(0, src.lastIndexOf(".")) + "_over" + src.substring(src.lastIndexOf("."));
		
		$(this).on("mouseover", function() { $(this).attr("src", src_on); });
		$(this).on("mouseout", function() { $(this).attr("src", src); });
	});
	
	var over  = $("img.over,input.over,#top-inner li a img").get(),
		speed = "fast";
		
	$(over).on("mouseover", function() { $(this).stop().fadeTo(speed,0.7); });
	$(over).on("mouseout", function() { $(this).stop().fadeTo(speed,1); });
};
/* --------------------------------------------------------------------------------------
 　リサイズ
--------------------------------------------------------------------------------------- */

var resizebox = function () {
	var Wsize = $(window).width(),
		width = 1000,
		body  = $("body").get(),
		Event = function () {
			if (Wsize > width) $(body).css("overflow-x","hidden");
			else $(body).css("overflow-x","auto");
		};
	
	Event();
	
	$(window).on("resize", function() {
		Wsize = $(window).width();
		Event();
	});
	
	//スマホのポイント調整
	var iPhone  = navigator.userAgent.indexOf("iPhone"),
		iPad    = navigator.userAgent.indexOf("iPad"),
		ipod    = navigator.userAgent.indexOf("iPod"),
		Android = navigator.userAgent.indexOf("Android");
	
	if ( iPhone > 0 || iPad > 0 || ipod > 0 || Android > 0){
		$("body,html").css({
			"width"    : "1280px",
			"overflow-x" :"hidden"
		});
	}
};

/* --------------------------------------------------------------------------------------
 　透過PNG
--------------------------------------------------------------------------------------- */

var IEpng = function (){
	if(!$.support.noCloneChecked){
		var img = $("img.over").get();
		
		for(var i=0; i<img.length; i++) {
			var src = img[i].src;
			if (src.substr(src.length-4) === ".png") {
				img[i].style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled='true',sizingMethod='crop',src='" + src + "')";
				img[i].src = "shared/img/common/opacity.png";
			};
		};
 	};
};