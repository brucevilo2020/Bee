/*!
 * ScriptName: shared.js
 *
 * FCV - http://foodconnection.jp/
 *
 */

// DOM ready	

$(function () {
		$("#navTrigger").click(function () {
			if ($('#nav_sp').hasClass('_on')) {								
				$('#nav_sp').css({
					opacity:0,						
				})
				$('#nav_sp').removeClass("_on");
				$('#navTrigger').removeClass("_on");
			} else {
				$(this).toggleClass("_on");
				$("#nav_sp").toggleClass("_on");
				$("#nav_sp").css({
					opacity:1,						
				})
			}
		});

		$("#nav_sp a").click(function () {
			$("#navTrigger").removeClass("_on");
				$("#nav_sp").removeClass("_on");
				$("#nav_sp").css({
					opacity:0,						
				})
		});
});

// user agents
var isMobile = {
	Android: function () {
		return navigator.userAgent.match(/Android/i);
	},
	BlackBerry: function () {
		return navigator.userAgent.match(/BlackBerry/i);
	},
	iOS: function () {
		return navigator.userAgent.match(/iPhone|iPad|iPod/i);
	},
	Opera: function () {
		return navigator.userAgent.match(/Opera Mini/i);
	},
	Windows: function () {
		return navigator.userAgent.match(/IEMobile/i);
	},
	any: function () {
		return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
	}
};

$(document).ready(function () {
	
	if (isMobile.any()){
		$("#nav_sp").css("display", "block");
		$("#navTrigger").css("display", "block");
		$("#ft_group").css("display", "block");
	} 
	else{
		$("#nav_sp").css("display", "none");
		$("#navTrigger").css("display", "none");
		$("#ft_group").css("display", "none");
	}
	
});