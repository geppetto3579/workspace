<?php
header("Content-Type: text/html; charset=UTF-8");
echo <<< aaa
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
				"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html";charset=UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<link rel="stylesheet" type="text/css" href="css/style.css"/>

<script type="text/javascript" src="JavaScript/jquery.js"></script>
<script type="text/javascript" src="JavaScript/jquery.pageswitch.js"></script>


<title>じゆう庵テストサイト</title>
<script>
$(document).ready(function() {
		var duration = 1000;
		$('body').css('opacity','0').animate({ opacity: 1 }, duration);
		$('#menu a').pageswitch({
			target: 	'body',
			properties: { opacity: 0 },
			options: 	{ duration: duration }
		});
	});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-8144373-5', 'ji-yu-an.com');
  ga('send', 'pageview');

</script>
</head>
<body>
<div id="logo">
	<a href="index.php"><h1><img src="images/title.gif" title="じゆう庵" alt="じゆう庵"/></h1></a>
	</div>
	<div id="menu">
		<ul>
			<li><a href="index">TOPへ戻る</a></li>
			<li><a href="menu">メニュー一覧</a></li>
			<li><a href="contact">予約状況・連絡先</a></li>
			<li><a href="blog">「じゆう庵」ブログ</a></li>
		</ul>
	</div>
aaa
?>
