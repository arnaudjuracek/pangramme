<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<meta name="description" content="">
			<meta name="author" content="Arnaud Juracek">
			<title>Pangramme</title>
		<link rel="stylesheet" type="text/css" href="assets/css/main.css" media="screen" />
			<style id="fontLoader" type='text/css'/></style>
		<script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="mih4vu60by4jua0"></script>
		<script src="assets/js/lib/jquery-1.10.1.min.js"></script>
		<script src="assets/js/lib/jquery.fittext.js"></script>
		<script src="assets/js/class/font_tester.js"></script>
			<script src="assets/js/main.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<header><span title="charger une font" class="upload easing">+</span><span class="title">Arial</span></header>
		 	<div class="sentences">
		 		<?php
					$sentence = "Grumpy wizards make toxic brew for the evil Queen and Jack.";
					$paragraph = "One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked.";

		 			for($i=0;$i<9; $i++) echo '<div class="s'.$i.'"><div contentEditable class="easing">'.$sentence.'<div class="expand">'.$paragraph.'</div></div></div>';
		 		?>
		 	</div>
		 	<div class="glyphs">
		 		<?php
		 			$glyphs = array("&#33;","&#34;","&#35;","&#36;","&#37;","&#38;","&#39;","&#40;","&#41;","&#42;","&#43;","&#44;","&#45;","&#46;","&#47;","&#48;","&#49;","&#50;","&#51;","&#52;","&#53;","&#54;","&#55;","&#56;","&#57;","&#58;","&#59;","&#60;","&#61;","&#62;","&#63;","&#64;","&#65;","&#66;","&#67;","&#68;","&#69;","&#70;","&#71;","&#72;","&#73;","&#74;","&#75;","&#76;","&#77;","&#78;","&#79;","&#80;","&#81;","&#82;","&#83;","&#84;","&#85;","&#86;","&#87;","&#88;","&#89;","&#90;","&#91;","&#92;","&#93;","&#94;","&#95;","&#96;","&#97;","&#98;","&#99;","&#100;","&#101;","&#102;","&#103;","&#104;","&#105;","&#106;","&#107;","&#108;","&#109;","&#110;","&#111;","&#112;","&#113;","&#114;","&#115;","&#116;","&#117;","&#118;","&#119;","&#120;","&#121;","&#122;","&#123;","&#124;","&#125;","&#126;","&#161;","&#162;","&#163;","&#164;","&#165;","&#166;","&#167;","&#168;","&#169;","&#170;","&#171;","&#172;","&#174;","&#175;","&#176;","&#177;","&#178;","&#179;","&#180;","&#181;","&#182;","&#183;","&#184;","&#185;","&#186;","&#187;","&#188;","&#189;","&#190;","&#191;","&#192;","&#193;","&#194;","&#195;","&#196;","&#197;","&#198;","&#199;","&#200;","&#201;","&#202;","&#203;","&#204;","&#205;","&#206;","&#207;","&#208;","&#209;","&#210;","&#211;","&#212;","&#213;","&#214;","&#215;","&#216;","&#217;","&#218;","&#219;","&#220;","&#221;","&#222;","&#223;","&#224;","&#225;","&#226;","&#227;","&#228;","&#229;","&#230;","&#231;","&#232;","&#233;","&#234;","&#235;","&#236;","&#237;","&#238;","&#239;","&#240;","&#241;","&#242;","&#243;","&#244;","&#245;","&#246;","&#247;","&#248;","&#249;","&#250;","&#251;","&#252;","&#253;","&#254;","&#255;","&#8211;","&#8212;","&#8216;","&#8217;","&#8218;","&#8220;","&#8221;","&#8222;","&#8226;","&#8249;","&#8250;");
		 			foreach($glyphs as $value){
		 				echo '<span class="easing"><aside class="value easing">'.$value.'</aside>'.$value.'</span>';
		 			}
		 		?>
		 	</div>
		 </div>
	</body>
</html>