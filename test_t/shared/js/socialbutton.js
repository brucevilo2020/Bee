$(function() {
	var title  = $("title").html(),
		URL    = location.href,
		sourse = "",
		tw     = '<p><a href="http://twitter.com/share?url=' + URL + '&text=' + title +'"><img src="shared/img/shared/sco_ico2.png" width="37" height="36" alt="twitter" class="over" /></a></p>',
		fa     = '<p><a href="http://www.facebook.com/share.php?u=' + URL + '" onclick="window.open(this.href, "FBwindow", "width=650, height=450, menubar=no, toolbar=no, scrollbars=yes"); return false;"><img src="shared/img/shared/sco_ico1.png" width="37" height="36" alt="facebook" class="over" /></a></p>',
		go     = '<p><a href="https://plus.google.com/share?url=' + URL + '" onclick="window.open(this.href, "Gwindow", "width=650, height=450, menubar=no, toolbar=no, scrollbars=yes"); return false;"><img src="shared/img/shared/sco_ico3.png" width="37" height="36" alt="google" class="over" /></a></p>';
	sourse += fa;
	
	sourse += tw;
	
	
	sourse += go;
	
	$("#socialbuttons").append(sourse);
	
	$("#socialbuttons p a").bind("click", function () {
		window.open(this.href,"WindowName","width=600,height=500,resizable=yes,scrollbars=yes,left=500,top=200");
		return false;
	});
});