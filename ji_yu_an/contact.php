<?php
header("Content-Type: text/html; charset=UTF-8");
echo <<< aaa
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html";charset=UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script type="text/javascript" src="JavaScript/jquery.js"></script>
<script type="text/javascript" src="JavaScript/jquery.pageswitch.js"></script>
<script type="text/javascript" src="JavaScript/mail.js"></script>
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
$(function(){
	$("#calendar").css({opacity:'0'});
	setTimeout(function(){
		$("#calendar").stop().animate({opacity:'1'},500);
	},1000);
});

function AutoFsize(){
var wpx = $("#form ,#menu").width();
var fpar = (Math.floor((wpx)/(1190/100)));// 横幅px ÷ (最少幅px/100)
$("#form,#menu").css("font-size",fpar+"%");
}
setInterval(AutoFsize,1000);//ミリ秒ごとに横幅チェック
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
<iframe id="calendar" src="gcalendar-wrapper.php?showTitle=0&amp;showTz=0&amp;showTabs=0&amp;mode=WEEK&amp;wkst=1&amp;bgcolor=%23d19389&amp;src=umy1723%40gmail.com&amp;ctz=Asia%2FTokyo" frameborder="0" scrolling="no"></iframe>
</iframe>

<div id="form">
<h3>お問い合わせ</h3><br/>
<p>下記フォームに必要事項を入力後、</p><p>確認ボタンを押してください。</p>
<p class="notice">※印は必須項目です。</p><br/>
<form method="post" action="#" name="frm1" id="frm1" onsubmit="return check();">
<table id="form_table">
<tr>
<td>おなまえ<span class="notice">※</span></td>
<td><input type="text" name="name" class="text" id="name"/></td>
</tr>
<tr>
<td>電話番号</td>
<td><input type="text" name="phone" class="text" id="phone" /></td>
</tr>
<tr>
  <td>メールアドレス<span class="notice">※</span></td>
  <td><input type="text" name="mail" class="text" id="mail" /></td>
</tr>
<tr>
<td colspan="2">お問い合わせ内容<span class="notice">※</span><br />
<textarea name="summary" rows="5" class="text" id="summary"></textarea></td>
</tr>
</table>

<input class="button" type="submit" value="　確認　" />

<input class="button" type="reset" value="リセット" />
<p>※問合せ頂いたIPアドレスを保存しています。</p><p>いたずらはご遠慮ください。</p>
<p>※LINEによるお問合せは　umy1723　まで。</p>
</form>
<br/>

</div>

aaa
?>