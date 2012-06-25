<?php
$init = "BLACKAGLY FORCE / fake kingz (from沖縄) / ACTACRA (from長崎) / CYANIDE CHRIST (from長崎) / CLOSER (from名古屋) / SIT UP LATE&THE LAST ROAR (from名古屋) / ANGAGEMENT / Deliverrance / SCARFACE / BLIND SIDE / WILL YOU REMEMBER";
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
		<title>フミカレコーズ | ライブ</title>

<link rel="stylesheet" href="css/default.css">
<link rel="shortcut icon" href="http://fumikarecords.com/favicon.ico"> 

<!--lightbox css -->
<link rel="stylesheet" href="../css/lightbox.css" type="text/css" media="screen" />
<!--lightbox.js load-->
<script type="text/javascript" src="../js/prototype.js"></script>
<script type="text/javascript" src="../js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="../js/lightbox.js"></script>

<!--スマートフォン用viewport指定-->
<meta name="viewport" content="width=device-width">

<!-- 登録用スクリプト -->
<script>
function loadPage(){
	var madoka = document.getElementById('madoka');
	madoka.focus();
	charlotte();
	madoka.addEventListener("input",charlotte,true);
}
function charlotte(){
    var inputStrings = document.getElementById('madoka');
    var data = inputStrings.value;
    var c = data.split(" / ");
    var bands = c.length;
    var homuhomu = document.getElementById('homuhomu');
    homuhomu.innerHTML = '<div id="kyouko" name="kyouko"></div>';
    for(i=0; i<bands; i++){
	var bandname = c[i];
	var bandid = 'band-' + (i + 1);
	var kyouko = document.getElementById('kyouko');
	kyouko.innerHTML += '<div class="kitaeri" id="' + bandid +'"></kitaeri>';
	var kitaeri = document.getElementById(bandid);
	kitaeri.innerHTML += "<h2>" + (i + 1) + ". " + bandname + "</h2>";
	kitaeri.innerHTML += '<a href="https://www.google.co.jp/search?q=' + bandname + ' site:myspace.com" target="_blank">myspace</a><br>';
	kitaeri.innerHTML += '<a href="https://www.google.co.jp/search?q=' + bandname + ' site:audioleaf.com" target="_blank">audioleaf</a><br>';
	kitaeri.innerHTML += '<a href="https://www.google.co.jp/search?q=' + bandname + '" target="_blank">google</a><br>';
	kitaeri.innerHTML += '<input type="text" id="registersite-' + bandid + '" value="" onkeyup="sayakachan(\''+bandid+'\');">';
	kitaeri.innerHTML += '<input type="hidden" name="' + bandid + '" value="' + bandname +'">';
	kitaeri.innerHTML += '<div id="result-' + bandid + '"></div></div>';
    }
    inputStrings.value = data;
}
</script>
  <!--↓↓Google Analytics 用トラッキングコード↓↓-->
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23233228-3']);
  _gaq.push(['_setDomainName', '.fumikarecords.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  <!--↑↑トラッキングコードここまで↑↑-->
<style>
p { color: #666666; 
    font-size: 14px;
}
blockquote {
    font: 14px sans-serif;
    padding: 3px 5px;
    margin: 0;
}
div.mami {
    background: #ffffff;
    border: 2px solid #ffccff;
border-radius: 7px;        /* CSS3草案 */  
    -webkit-border-radius: 7px;    /* Safari,Google Chrome用 */  
    -moz-border-radius: 7px;   /* Firefox用 */  
    width: 400px;
    margin: 15px;
    padding: 2px;
//    float: left;
}
div.mami h2 {
    color: #cc66cc;
	font-size: 16px;
	line-height 1em;
    margin: 3px;
    padding: 0;
}
div.mami p {
	margin: 0;
	padding: 2px;
}
div#sayaka {
    margin: 0;
    padding: 0;
    width: 200px;
}
</style>
</head>



<body onload="loadPage();">
<div id="top">
	<h1><a href="http://fumikarecords.com">フミカレコーズ</a> | <a href="http://live.fumikarecords.com/">ライブ</a> | <a href="http://live.fumikarecords.com/antiknock.html">新宿Antiknock</a></h1>

<div id="seq">
	<a href="http://live.fumikarecords.com/">live</a> | <a href="http://philosophy.fumikarecords.com/">philosophy</a> | <a href="http://aesthetics.fumikarecords.com/">aesthetics</a> | <a href="http://wiki.fumikarecords.com/">wiki</a> | <a href="http://music.fumikarecords.com/">music</a> | <a href="http://critique.fumikarecords.com/">critique</a> | <a href="http://curation.fumikarecords.com/">curation</a>
</div><!-- #seq -->
<form action="" method="POST">
<div class="mami">
<p>
    直接バンド名をスラッシュで区切りながら入力するか、または
    <a href="http://www.antiknock.net/schedule/schedule.html" target="_blank">新宿アンチノック月例スケジュール</a>、
    <a href="http://www.facebook.com/pages/ANTIKNOCK/122859707815146" target="_blank">新宿アンチノックFacebookページ</a>から、「◆出演」で始まる</p>
    <blockquote>Valows / Hi-Gi / s-explode / 羊 数える / andsole / 一寸笑劇</blockquote>
    <p>といった表現の出演バンド名リストをコピーし、下のテキストボックスに貼り付けます。</p>
    <input type="text" id="madoka" value="<?php echo $init; ?>" size="50">
</div><!-- .mami -->
<div class="mami">
    <p id="homuhomu">データを入力してください。</p>
	<div id="sayaka">
	</div><!-- #sayaka -->
</div><!-- .mami -->
<input type="submit">
</form>
<?php
foreach($_POST as $row){
	echo $row;
echo "<br>";
}
?>

</div><!-- #top -->
</body>														
</html>														
