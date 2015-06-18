$(document).ready(function(){
	var font_url = document.location.hash.split('#').pop();
		// console.log(font_url);
		load_font(font_url);
		$("header").fitText();
	window.font_tester = new font_tester($('header .upload'));
});

var load_font = function(url){
	$('header .title').html(url.substring(url.lastIndexOf('/')+1) || 'Arial');
	$('head > style#fontLoader').html("\
			@font-face {\
				font-family: 'fromURL';\
				src: url('https://"+url+"') format('truetype');\
				font-weight: normal;\
				font-style: normal;\
				font-smooth: never;\
				-webkit-font-smoothing : none;\
			}");

	// $('head').append("\
	// 	<style type='text/css'>\
	// 		@font-face {\
	// 			font-family: 'fromURL';\
	// 			src: url('"+url+"') format('truetype');\
	// 			font-weight: normal;\
	// 			font-style: normal;\
	// 			font-smooth: never;\
	// 			-webkit-font-smoothing : none;\
	// 		}\
	// 	</style>");
}