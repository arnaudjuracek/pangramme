$(document).ready(function(){
	var font_url = document.location.hash.split('#').pop();
		load_font(font_url);
		$('header').fitText();
	window.font_tester = new font_tester($('header .upload'));

	$('.button.invert').on('click',function(){
		$('body').toggleClass('invert');
	})
});

var load_font = function(url){
	url = 'https://' + url;
	$.post(url,function(){
		$('header .title').html(url.substring(url.lastIndexOf('/')+1));
		$('head > style#fontLoader').html("\
			@font-face {\
				font-family: 'fromURL';\
				src: url('"+url+"') format('truetype');\
				font-weight: normal;\
				font-style: normal;\
				font-smooth: never;\
				-webkit-font-smoothing : none;\
			}");
	}).error(function(){
		console.log("401 : font can't be loaded");
	});
}