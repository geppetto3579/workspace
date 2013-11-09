<?php
header("Content-Type: text/html; charset=UTF-8");
$mysql = mysql_connect('112.78.117.74','webspirits_wp1','guckm4bc');
$db = mysql_select_db('webspirits_hpdata',$mysql);
$rows = mysql_query('SELECT * FROM ntdata LEFT JOIN statements ON ntdata.nt_state = statements.state_id ORDER BY nt_date DESC limit 10;',$mysql);
mysql_close($mysql);
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
<script type="text/javascript" src="JavaScript/ui_tabs/jquery-1.2.6.js"></script>
<script src="JavaScript/ui_tabs/ui.core.js"></script>
<script src="JavaScript/ui_tabs/ui.tabs.js"></script>
<script>
var jQuery126 = $.noConflict(true);
</script>
<script>
$(document).ready(function() {
		var duration = 1000;
		$('body').css('opacity','0').animate({ opacity: 1 }, duration);
		$('#menu a , #fragment-0 a , #fragment-6 a ').pageswitch({
			target: 	'body',
			properties: { opacity: 0 },
			options: 	{ duration: duration }
		});
	});
$(function(){
	$("#top_image img").css({opacity:'0'});
	setTimeout(function(){
		$("#top_image img").stop().animate({opacity:'1'},500);
	},6000);
});

$(function(){
	$("#ui-tab").css({opacity:'0'});
	setTimeout(function(){
		$("#ui-tab").stop().animate({opacity:'1'},500);
	},6000);
});

$(function(){
	$("#raika img").css({opacity:'0'});
	setTimeout(function(){
		$("#raika img").stop().animate({opacity:'1'},500);
	},1500);
});

$(function(){
	$("#text1").css({opacity:'0'});
	setTimeout(function(){
		$("#text1").stop().animate({opacity:'1'},500);
	},2000);
});

$(function(){
	$("#text2").css({opacity:'0'});
	setTimeout(function(){
		$("#text2").stop().animate({opacity:'1'},500);
	},3000);
});

$(function(){
	$("#text3").css({opacity:'0'});
	setTimeout(function(){
		$("#text3").stop().animate({opacity:'1'},500);
	},4000);
});

$(function(){
	$("#text4").css({opacity:'0'});
	setTimeout(function(){
		$("#text4").stop().animate({opacity:'1'},500);
	},5000);
});

$(function(){
        $("#acMenu dt").on("click", function() {
            $(this).next().slideToggle();
        });
    });
function AutoFsize(){
var wpx = $("#tab_in , #menu , #ui-tab ,#balloon_text").width();
var fpar = (Math.floor((wpx)/(1190/100)));// 横幅px ÷ (最少幅px/100)
var fpar2 = (Math.floor((wpx)/(950/100)));// 横幅px ÷ (最少幅px/100)
	if(fpar <= 130){
		$("#tab_in , #menu , #ui-tab").css("font-size",fpar+"%");
	}else {
		$("#tab_in , #menu , #ui-tab").css("font-size","140%");
	}
	if(fpar2 <=130){
		$("#balloon_text").css("font-size",fpar2+"%");
	}else {
		$("#balloon_text").css("font-size","140%");
	}


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
<script>
jQuery126(function() {
		jQuery126('#ui-tab > ul').tabs({ fx: { opacity: 'toggle', duration: 'normal'  } });
	});
</script>
<title>じゆう庵テストサイト</title>
</head>
<body>
<div id="logo">
	<a href="index"><h1><img src="images/title.gif" title="じゆう庵" alt="じゆう庵"/></h1></a>
	</div>
	<div id="menu">
		<ul>
			<li><a href="index">TOPへ戻る</a></li>
			<li><a href="menu">メニュー一覧</a></li>
			<li><a href="contact">予約状況・連絡先</a></li>
			<li><a href="blog">「じゆう庵」ブログ</a></li>
		</ul>
	</div>

<div id="top_image">
<img src="images/pic/top_test.jpg">
<p id="balloon_text">
<span id="text1">「じゆう庵」は<span id="text2">猫のいる</span>、<span id="text3">個人の</span>、<span id="text4">自宅エステサロン</span>です。</span>
</p>
</div>

<div id="raika">
<img src="images/raika_black.gif">
</div>

<div id="ui-tab">
	<ul>
		<li><a href="#fragment-0"><span>News&Topics!!</span></a></li>
		<li><a href="#fragment-1"><span>フェイシャル</span></a></li>
		<li><a href="#fragment-2"><span>ボディ</span></a></li>
		<li><a href="#fragment-3"><span>商品</span></a></li>
		<li><a href="#fragment-4"><span>じゆう庵倶楽部</span></a></li>
		<li><a href="#fragment-5"><span><marquee scrolldelay="280">モニター募集</marquee></span></a></li>
		<li><a href="#fragment-6"><span>お客様の感想</span></a></li>
	</ul>
	<div id="tab_in">
		<div id="fragment-0">
			<h3>News&Topics!!(<span class="notice"><a href='http://ji-yu-an.com/contact'>ご予約やご質問はこちら</a></span>)</h3>
		<table>
aaa;
while($row = mysql_fetch_array($rows)){
		echo "<tr><td ='nt_day'>";
		echo date('Y/m/d', strtotime($row[nt_date]));
		echo "</td><td id='nt_title'><a href='$row[nt_link]'>";
		echo "$row[nt_title]</td>";
		echo "<td>$row[state_name]</td></tr>";
	}
echo <<< bbb
			</table>

		</div>
		<div id="fragment-1">
			<h3>フェイシャルケアメニュー<span class="notice">（各メニュークリックで簡単な施術の流れを表示します）</span></h3><br/>
			<dl id="acMenu">
			    <dt><table id="menu_p"><tr><th>小顔矯正</th><td id="price">（3600円/60分）</td><td id="menu_s">小ジワ対策、たるみ解消、くすみ除去、バランス調整効果、肩こり解消、頭痛抑制</td></tr></table></dt>
			    <dd>ヘッドマッサージ　⇒　クレンジング　⇒　ウォッシング　⇒　フェイスマッサージ　⇒　デコルテトリートメント　⇒　拭き取り　⇒　仕上げ</dd>
			    <dt><table id="menu_p"><tr><th>リンパドレナージュ</th><td id="price">（3600円/60分）</td><td id="menu_s">代謝向上、小ジワ対策、くすみ除去、血行促進、小顔効果</td></tr></table></dt>
			    <dd>ヘッドマッサージ　⇒　クレンジング　⇒　ウォッシング　⇒　フェイシャルリンパドレナージュ　⇒　拭き取り　⇒　仕上げ</dd>
			    <dt><table id="menu_p"><tr><th>超音波ケア</th><td id="price">（3600円/60分）</td><td id="menu_s">小顔効果、小ジワ対策、たるみ解消、くすみ除去、美白効果、むくみ対策</td></tr></table></dt>
			    <dd>クレンジング　⇒　ウォッシング　⇒　超音波トリートメント　⇒　冷却　⇒　拭き取り　⇒　仕上げ</dd>
				<dt><table id="menu_p"><tr><th>ヘッドマッサージ</th><td id="price">（1200円/20分）</td><td id="menu_s">小顔効果、頭皮ケア、疲労回復、頭痛抑制</td></tr></table></dt>
			    <dd>ヘッドマッサージは短時間で受けていただくことができます！</dd>
			    <dt><table id="menu_p"><tr><th>オプションメニュー</th><td id="price">（各500円）</td><td id="menu_s"><span class="notice">（オプションメニューのみでの施術は行っておりません！）</span></td></tr></table></dt>
			    <dd>うるおいセラミドパック、プラセンタパック</dd>
			</dl>

		</div>

		<div id="fragment-2">
			<h3>ボディケアメニュー<span class="notice">（各メニュークリックで簡単な施術の流れを表示します）</span></h3><br/>
			<dl id="acMenu">
			<dt><table id="menu_p"><tr><th>アロマリラックス・ボディ矯正</th><td id="price"></td><td id="menu_s"></td></tr></table></dt>
			    <dd></dd>
			    <dt><table id="menu_p"><tr><th class="min">30分パーツケア</th><td id="price">（1800円/30分）</td><td id="menu_s">全身ではなく、疲労のある部位を中心に行います。</td></tr></table></dt>
			    <dd>専用ショーツ、施術着にお着替え　⇒　疲労箇所にオイルか水溶性のジェルを塗布　⇒　疲労箇所マッサージ　⇒　拭き取り　⇒　お着替え</dd>
			    <dt><table id="menu_p"><tr><th class="min">60分全身ケア</th><td id="price">（3600円/60分）</td><td id="menu_s">疲労部分を中心に、全身のケアを行います。</td></tr></table></dt>
			    <dd>専用ショーツ、施術着にお着替え　⇒　全身にオイルか水溶性のジェルを塗布　⇒　疲労箇所中心に全身マッサージ　⇒　拭き取り　⇒　お着替え</dd>
			    <dt><table id="menu_p"><tr><th  class="min">90分全身リラックス</th><td id="price">（5400円/90分）</td><td id="menu_s">デコルテから足先まで全身を徹底的にケアします！</td></tr></table></dt>
			    <dd>専用ショーツ、施術着にお着替え　⇒　全身にオイルか水溶性のジェルを塗布　⇒　全身マッサージ　⇒　拭き取り　⇒　お着替え</dd>
			    <dt><table id="menu_p"><tr><th>揉みだしリンパドレナージュ</th><td id="price"></td><td id="menu_s"></td></tr></table></dt>
			    <dd></dd>
			    <dt><table id="menu_p"><tr><th class="min">30分パーツケア</th><td id="price">（1800円/30分）</td><td id="menu_s">ご希望のボディパーツ1か所の脂肪を揉み、排出を促します。</td></tr></table></dt>
			    <dd>専用ショーツ、施術着にお着替え　⇒　ご希望パーツにオイルか水溶性のジェルを塗布　⇒　脂肪を揉み出し　⇒　拭き取り　⇒　お着替え</dd>
			    <dt><table id="menu_p"><tr><th class="min">60分半身ケア</th><td id="price">（3600円/60分）</td><td id="menu_s">上半身、下半身どちらかの脂肪を揉み出し、排出を促します。</td></tr></table></dt>
			    <dd>専用ショーツ、施術着にお着替え　⇒　ご希望の半身にオイルか水溶性のジェルを塗布　⇒　半身の脂肪を揉み出し　⇒　拭き取り　⇒　お着替え</dd>
			    <dt><table id="menu_p"><tr><th class="min">90分全身ケア</th><td id="price">（5400円/90分）</td><td id="menu_s">全身の脂肪を揉み出し、排出を促します。</td></tr></table></dt>
			    <dd>専用ショーツ、施術着にお着替え　⇒　全身にオイルか水溶性のジェルを塗布　⇒　全身の脂肪を揉み出し　⇒　拭き取り　⇒　お着替え</dd>
			    <dt><table id="menu_p"><tr><th>リラックス脚むくみケア</th><td id="price">（2400円/40分）</td><td id="menu_s">足裏からひざ上まで全身の反射区をくまなく刺激してむくみを取ります。</td></tr></table></dt>
			    <dd></dd>
			</dl>
		</div>

		<div id="fragment-3">
			<p>COMING SOON！</p>
		</div>

		<div id="fragment-4">
			<p>COMING SOON！</p>
		</div>

		<div id="fragment-5">
			<p>2013/10/30</p>
			<p>フェイシャル超音波ケアのモニターを募集しています！</p>
			<ul><li>2500円/40分</li>
			<li>先着7名</li>
			<li>施術後、感想を頂ける方</li>
			<li>クレンジング→洗顔→超音波トリートメント→冷却→ふきとり→仕上げ(アイメイクはオフせずに行います。)</li>
		</div>

		<div id="fragment-6">
			<p><a href="http://ameblo.jp/jiyu-an/entry-11639884061.html">背中のオイルトリートメント</a></p>
			<p><a href="http://ji-yu-an.com/blog/post-24/">頭皮マッサージ</a></p>
		</div>
	</div>

</div>





bbb
?>
