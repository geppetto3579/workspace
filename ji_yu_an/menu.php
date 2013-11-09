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

$(function(){
        $("#acMenu dt").on("click", function() {
            $(this).next().slideToggle();
        });
    });
var flg = "close";
$(function(){
        $("#all_open").on("click", function() {
            if(flg == "close"){
				$("#all_open").text("全て閉じる");
				$("#acMenu dd").slideDown();
				flg = "open";
			}else{
				$("#all_open").text("全て開く");
				$("#acMenu dd").slideUp();
				flg = "close";
			}
        });
    });
function AutoFsize(){
var wpx = $("#menu_list , #menu ").width();
var fpar = (Math.floor((wpx)/(1190/100)));// 横幅px ÷ (最少幅px/100)
$("#menu_list , #menu ").css("font-size",fpar+"%");
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

<div id="menu_list">
	<p><span class="notice">各メニュークリックでメニューの特徴や詳細をご覧いただけます。</span><button type="button" id="all_open">全て開く</button></p>
	<dl id="acMenu">
		<dt><table id="menu_p"><tr><th>フェイシャルケアメニュー</th><td id="price">60分3600円から</td><td id="menu_s">お顔や肌の悩み解消のお手伝いのメニューです。</td></tr></table></dt>
			<dd>
				<dl id="acMenu_inner">
					<dt>
						<table id="menu_p"><tr><th>小顔矯正</th><td id="price">（3600円/60分）</td><td id="menu_s"></td></tr></table>
					</dt>
					<dd>
						<p>まず最初にヘッドマッサージを行います。その後クレンジングでお化粧を落とし、ウォッシングでお顔の汚れを取り除きます。加えてフェイスマッサージを行うことでお顔の血流を良くします。更にデコルテトリートメントとバストケアを行います。お顔のシワ・たるみ・くすみ・左右のバランスの崩れ・肩こり・頭痛などを気にされている方には特に効果的です。バストアップも実感できます。</p>
					</dd>
					<dt>
						<table id="menu_p"><tr><th>リンパドレナージュ</th><td id="price">（3600円/60分）</td><td id="menu_s"></td></tr></table></dt>
					<dd>
						<p>リンパドレナージュもまず最初にヘッドマッサージを行います。その後クレンジングからウォッシングまでは小顔矯正メニューと同じです。違いはフェイシャルマッサージがリンパの流れを特に重視したリンパドレナージュマッサージになることです。通常のフェイスマッサージとは異なり、より効果の高いマッサージ効果が得られます。時間も要するマッサージですのでデコルテとバストケアは行いません。ご希望であれば別途オプションにてお申し込みください。</p>
					</dd>
					<dt>
						<table id="menu_p"><tr><th>超音波ケア</th><td id="price">（3600円/60分）</td><td id="menu_s"></td></tr></table>
					</dt>
					<dd>
						<p>超音波ケアではヘッドマッサージは行いません。最初にまずクレンジングを行い、ウォッシングを行います。その後、機械を利用してお顔に専用のジェルを塗布し超音波トリートメントを行います。金属を当てますので最初は冷たく感じますが、超音波の振動でお顔が温かくなることが実感できます。終わりましたら広がった毛穴を引き締めるために同じく機械を使って冷却します。特にお顔のむくみやたるみを気にされている場合には大きな効果を実感できます。</p>
					</dd>
				</dl>
			</dd>
		<dt><table id="menu_p"><tr><th>ボディケアメニュー</th><td id="price">30分1800円から</td><td id="menu_s">体全体のお悩み解消をお手伝いするメニューです。</td></tr></table></dt>
			<dd>
				<dl id="acMenu_inner">
				    <dt><table id="menu_p"><tr><th>アロマリラックス・ボディ矯正</th><td id="price"></td><td id="menu_s"></td></tr></table></dt>
				    <dd>
				    	<span class="notice">じゆう庵のボディ矯正</span><br/>
						<p>ボディーラインの崩れは、筋肉の緊張と弛緩バランスが崩れることが原因です。このバランスの崩れは自律神経のバランスの崩れにも繋がり様々な不調の原因に繋がる可能性もあります。更に筋肉の緊張と弛緩のバランスの崩れによって、骨格や筋肉にゆがみが生じボディーラインの崩れに繋がっていきます。この骨格や筋肉の「ゆがみ」が全身の経絡の流れを妨害し、最終的にはエネルギーの流れを詰まらせてしまいます。</p><br/>

						<p>じゆう庵のボディ矯正では、骨格・筋肉が正しい位置に戻り、身体が本来持っている生体機能が正常に作用できる理想的なボディーラインへと矯正を行うことを目的としています。</p><br/>
						<span class="notice">メンテナンスの流れ</span><br/>
						<p>アロマオイルでリラックスしながら行うボディメンテナンスです。オイルのご利用に抵抗があるお客様には水溶性のジェルでケアを行うこともできます。時間によってケアの場所は変わってきますが、施術の流れは変わりません。まずお部屋に到着後、専用ショーツと施術着にお着替えいただきます。その後オイルか水溶性のジェルを塗布しマッサージを行っていきます。オイルやジェルを拭き取り、お着替えをしていただいて終了です。</p><br/>

						<p>より大きな効果をお望みであれば、可能な限り全身のケアをお勧めします。</p>
					</dd>
				    <dt><table id="menu_p"><tr><th class="min">30分パーツケア</th><td id="price">（1800円/30分）</td><td id="menu_s"></td></tr></table></dt>
				    <dd>疲れの大きい部分を中心に、その疲れが和らぐ経絡に沿いながらメンテナンスを行います。部分的な軽い疲労であれば充分に効果を実感できるメンテナンスです。</dd>

				    <dt><table id="menu_p"><tr><th class="min">60分全身ケア</th><td id="price">（3600円/60分）</td><td id="menu_s"></td></tr></table></dt>
				    <dd>疲れの大きい部分を中心にメンテナンスを行うことは30分コースと変わりませんが、全身のメンテナンスを行うことが出来るのでより一層大きなリラックス効果を楽しめます。</dd>

				    <dt><table id="menu_p"><tr><th  class="min">90分全身リラックス</th><td id="price">（5400円/90分）</td><td id="menu_s"></td></tr></table></dt>
				    <dd>疲れの大きい部分はもちろんのこと、デコルテから足先までしっかりとメンテナンスを行います。オイルによる全身のしっとり感も楽しむことの出来る至福のコースです。</dd>

				    <dt><table id="menu_p"><tr><th>揉みだしリンパドレナージュ</th><td id="price"></td><td id="menu_s"></td></tr></table></dt>
				    <dd>
					    <span class="notice">じゆう庵の揉み出しリンパドレナージュ</span><br/>
						<p>長期間を経過して固まってしまった脂肪をすぐに燃焼させることはできません。いくら運動をしてもすぐに結果が出ないのはこのことが理由です。その固まった脂肪（セルライト）をほぐし、脂肪を柔らかくするのが「揉み出し」です。脂肪を柔らかくすることでより燃焼しやすい状態にするのがじゆう庵の揉み出しマッサージです。</p><br/>

						<p>通常、痛みを伴うこの脂肪の揉み出しにリラックス効果もあるリンパドレナージュを加えることで、痛い揉み出しの後にリラックス効果も得ることができるのがじゆう庵の「揉み出しリンパドレナージュ」です。</p><br/>
						<span class="notice">メンテナンスの流れ</span><br/>
						<p>まずは気になる箇所を中心に脂肪の揉み出しを行います。痛みを伴うことも多いメンテナンスですのでオイルを利用してできるだけ摩擦を最小限に抑えます。施術の流れはメンテナンスの時間が変わっても同じです。まずお部屋に到着後、専用ショーツと施術着にお着替えいただきます。その後オイルを塗布して揉み出しマッサージを行っていきます。揉み出しからリンパドレナージュを行った後、オイルを拭き取り、お着替えをしていただいて終了です。</p><br/>

						<p>継続してのご利用と、ご自身での運動によってより大きな効果を得ることもできます。</p>
				    </dd>
				    <dt><table id="menu_p"><tr><th class="min">30分パーツケア</th><td id="price">（1800円/30分）</td><td id="menu_s"></td></tr></table></dt>
				    <dd>おなか周り、両腿、両ふくらはぎなど気になるご希望のボディーパーツ１ヶ所を徹底的に揉み出しを行います。まずは効果を実感いただくためにお試しとして利用もできるコースです。</dd>
				    <dt><table id="menu_p"><tr><th class="min">60分半身ケア</th><td id="price">（3600円/60分）</td><td id="menu_s"></td></tr></table></dt>
				    <dd>上半身、下半身、どちらかご希望の半身の揉み出しとリンパドレナージュを行います。全身ケア90分のコースよりもよりしっかりと揉み出しを行うことができるコースです。</dd>
				    <dt><table id="menu_p"><tr><th class="min">90分全身ケア</th><td id="price">（5400円/90分）</td><td id="menu_s"></td></tr></table></dt>
				    <dd>全身の揉み出しを行うコースです。全身の揉み出しをしっかりと行うことができるお得感が特徴です。よりしっかりとした全身揉み出しをご希望の場合には60分半身コースを上半身、下半身それぞれに利用することもできます。</dd>
				    <dt><table id="menu_p"><tr><th>リラックス脚むくみケア</th><td id="price">（2400円/40分）</td><td id="menu_s"></td></tr></table></dt>
				    <dd>足裏からひざ上までをむくみをとるブレンドオイルでケアします。全身の反射区をくまなく刺激することで代謝が促され、むくみが解消するだけでなく身体が軽くなったようにも感じます。</dd>
				</dl>
			</dd>
		<dt><table id="menu_p"><tr><th>オプションメニュー</th><td id="price">500円から</td><td id="menu_s"><span class="notice">メニュー以外のちょっとした部位のマッサージやプラスαにお答えします！</span></td></tr></table></dt>
			<dd>
				<dl id="acMenu_inner">
					<dt>
						<table id="menu_p"><tr><th>ヘッドマッサージ<span class="notice2">じゆう庵イチオシ！</span></th><td id="price">（1200円/20分）</td><td id="menu_s"></td></tr></table></dt>
					<dd>
						<p>頭には特に重要なツボが集中していて、それらを結ぶ経絡がたくさん流れています。日ごろの生活で生じてしまっているゆがみを正しい位置に戻るようにヘッドマッサージするだけでも、ポニーテールをしたときのように顔全体が自然にリフトアップされます。人によっては痛みを感じることもあるのでそのときは遠慮なく仰ってください。</p>
					</dd>
					<dt>
						<table id="menu_p"><tr><th>デコルテ・バストケア</th><td id="price">（1200円/20分）</td><td id="menu_s"></td></tr></table></dt>
					<dd>
						<p>デコルテ部分、そしてバスト周辺は実は女性にとって通年で外気に触れ、人目を引くケアがとても大切な部分です。集中的にこの分のケアを行うことでフェイスケアにも負けない効果を生むことができるのです。バストアップの効果も実感できる魅力的なケアです。</p>
					</dd>
					<dt>
						<table id="menu_p"><tr><th>首・肩ほぐし</th><td id="price">（1200円/20分）</td><td id="menu_s"></td></tr></table></dt>
					<dd>
						<p>パソコン普及も影響のひとつとなって、首や型に慢性的な「コリ」を抱えている人は少なくありません。肩こりを放置していればやがて、頭痛や吐き気などを引き起こすこともあります。目からくる肩こりにも効果を発揮するマッサージです。</p>
					</dd>
					<dt><table id="menu_p"><tr><th>各種パック</th><td id="price">500円</td><td id="menu_s"><span class="notice">（パックメニューのみでのご予約は受け付けておりません！）</span></td></tr></table></dt>
					<dd>うるおいセラミドパック、プラセンタパックなど。フェイシャルメニューに加えてご利用ください。</dd>
				</dl>
			</dd><br/>
		<dt id="acMenu_staff"><table id="menu_p"><tr><th>スタッフ紹介</th><td id="price"></td><td id="menu_s">じゆう庵のスタッフを紹介します！</td></tr></table></dt>
			<dd><table>
			<tr id="st_name_yum"><td colspan="3">ゆみ</td></tr>
			<tr id="st_img_yum"><td colspan="3"><img src="http://ji-yu-an.com/images/pic/001_re.gif"></td></tr>
			<tr id="st_rec_yum">
			<td colspan="3">
				<dl id="acMenu_st_rec">
					<dt>【技術】</dt>
					<dd>
						<p><a href="http://www.aromakankyo.or.jp/" target="_blank">公益社団法人日本アロマ環境協会（AEAJ）</a>アロマテラピー検定１級</p>
						<p><a href="http://www.environ.jp/" target="_blank">エンビロン（ENVIRON&reg;）</a>ディプロマ取得</p>
						<p><a href="http://www.montertherapie-society.jp/index.html" target="_blank">モンテセラピー（Monter therapie&reg;）</a>ボディ矯正、ヘッドマッサージ、小顔矯正技術習得</p>
						<p>バウエル（腸）セラピー　技術習得</p>
						<p>フラッシュリンパドレナージュ　技術習得</p>
						<p><a href="http://www.sothys.co.jp/" target="_blank">ソティス（SOTHYS&reg;）</a>にてスキンケアプルミエ技術習得</p>
						<p><a href="http://www.tourbillon.co.jp/" target="_blank">エステティック モリマサ プロフェッショナルスクール</a>にて季節肌別技術習得</p>
					</dd>
					<dt>【経歴】</dt>
					<dd>
						<p>熊本県玉名市出身。</p>
						<br/>
						<p>幼いころ、母の本棚にあった東洋医学の本を発見し興味本位で、家族にマッサージを施すことを覚える。</p>
						<br/>
						<p>その結果母が悩まされていた胃痛が治り、東洋医学の素晴らしさに感銘を受ける。</p>
						<br/>
						<p>高校時代、英国式リフレクソロジーのサロンに行き、美容と健康の分野へ進むことを考え始める。</p>
						<br/>
						<p>健康の分野の勉強をするために大学進学を決める。</p>
						<br/>
						<p>大学在学中に旅行の楽しさを知り、旅行会社とエステサロンで進路を悩む。</p>
						<br/>
						<p>九州看護福祉大学　看護福祉学部　社会福祉学科卒業。</p>
						<br/>
						<p>一旦、旅行代理店に勤務するもエステへの興味が大きくなり上京。</p>
						<br/>
						<p>東京都内会員制エステサロンにてマネージャー勤務。</p>
						<br/>
						<p>東京都新宿区（神楽坂）、目黒区（自由が丘）にて個人サロン運営。</p>
						<br/>
						<p>渋谷区（恵比寿）、目黒区（目黒）にて個人サロン運営。</p>
						<br/>
						<p>結婚を機に福岡に転居。</p>
						<br/>
						<p>福岡市内大手エステサロンにて勤務。</p>
						<br/>
						<p>当サロン退職後、派遣で働きながら趣味の範囲でできる自宅サロン「じゆう庵」を開業。</p>

					</dd>
					<dt>【好きなもの】</dt>
					<dd>
						<p>マリンスポーツ・スノボ・神社仏閣めぐり・たこやき・バレーボール・時刻表・海・猫・ジャズバー・水族館・動物園・温泉・二胡</p>
					</dd>
					<dt>【ひとこと】</dt>
					<dd>
						<p>癒し人として、皆様のお力になるようさらに日々精進しています。ぜひお気軽に遊びに来てください（人･ω･)</p>
					</dd>
				</dl>
			</td>
			</tr>
			<tr id="st_name_oth"><td>じん</td><td>もき</td><td>らいか</td></tr>
			<tr id="st_img_oth"><td></td><td><img src="http://ji-yu-an.com/images/pic/moki_pic.jpg"></td><td><img src="http://ji-yu-an.com/images/pic/raika_pic.jpg"></td></tr>
			<tr id="st_rec_oth">
				<td>
				<dl id="acMenu_st_rec">
					<dt>【技術】</dt>
					<dd>
						<p></p>
						<p></p>
						<p></p>
						<p></p>
						<p></p>
						<p></p>
						<p></p>
					</dd>
					<dt>【経歴】</dt>
					<dd>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>

					</dd>
					<dt>【好きなもの】</dt>
					<dd>

					</dd>
					<dt>【ひとこと】</dt>
					<dd>

					</dd>
				</dl>
			</td>
			<td>
				<dl id="acMenu_st_rec">
					<dt>【技術】</dt>
					<dd>
						<p></p>
						<p></p>
						<p></p>
						<p></p>
						<p></p>
						<p></p>
						<p></p>
					</dd>
					<dt>【経歴】</dt>
					<dd>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>

					</dd>
					<dt>【好きなもの】</dt>
					<dd>

					</dd>
					<dt>【ひとこと】</dt>
					<dd>

					</dd>
				</dl>
			</td>
			<td>
				<dl id="acMenu_st_rec">
					<dt>【技術】</dt>
					<dd>
						<p></p>
						<p></p>
						<p></p>
						<p></p>
						<p></p>
						<p></p>
						<p></p>
					</dd>
					<dt>【経歴】</dt>
					<dd>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>
						<br/>
						<p></p>

					</dd>
					<dt>【好きなもの】</dt>
					<dd>

					</dd>
					<dt>【ひとこと】</dt>
					<dd>

					</dd>
				</dl>
			</td></tr>
			</table></dd>
		</dl><br/>
</div>
</body>
</html>

aaa
?>