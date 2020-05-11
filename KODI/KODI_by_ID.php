<?php
/*
 ┌────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
 |                                                NOTE FOR SOME MOTHERFUCKERS                                                 |
 └────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
 |────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
 | DISA MOTER QIRA I NDRYSHOJNE EMRIN OSE VALUES KETYRE SCRIPTAVE EDHE I SHPERNDAJNE NE FORUME TE NDRYSME EDHE HIQEN SI AUTOR |
 | KETA SCRIPTA JANE KRIJUAR NGA ALBDROID.AL EDHE JANE FREE PER TE GJITHE!                                                    |
 └────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
 |────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
 | SOME MOTHERS FUCKERS CHANGING NAME OR VALUES OF SCRIPT AND SHARE IN DIFFERENT FORUMS ALSO SAYS CREATED BY ME               |
 | THESE SCRITS ARE CREATED BY ALBDROID.AL AND ARE FREE FOR EVERYONE!                                                         |
 └────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┘

 ┌────────────────────────────────────────────────────────────┐
 |  For More Modules Or Updates Stay Connected to Kodi dot AL |
 └────────────────────────────────────────────────────────────┘
 ┌───────────┬────────────────────────────────────────────────┐
 │ Product   │ TRT TURK Live Stream Extractor                 │
 │ Version   │ v1.0                                           │
 │ Provider  │ http://www.trt.net.tr                          │
 │ Support   │ M3U8/VLC/KODI/SMART TV/Xream Codes Panel ETC   │
 │ Licence   │ MIT                                            │
 │ Author    │ Olsion Bakiaj                                  │
 │ Email     │ TRC4@USA.COM                                   │
 │ Author    │ Endrit Pano                                    │
 │ Email     │ INFO@ALBDROID.AL                               │
 │ Website   │ https://kodi.al                                │
 │ Facebook  │ /albdroid.official/                            │
 │ Created   │ Monday, May 11, 2020                           │
 │ Modified  │ 00:00:0000                                     │
 └────────────────────────────────────────────────────────────┘
 [x] To Get Live Stream Required Full Link From trt.net.tr 
 Streams Formats: Auto Get [M3U8]
*/

/* STREAMS LINKS
TRT 1
http://www.trt.net.tr/anasayfa/canli.aspx?y=tv&k=trt1

TRT 2
http://www.trt.net.tr/anasayfa/canli.aspx?y=tv&k=trt2

TRT WORLD
http://www.trt.net.tr/anasayfa/canli.aspx?y=tv&k=trtworld

TRT SPORTS
http://www.trt.net.tr/anasayfa/canli.aspx?y=tv&k=trtspor

TRT SPORTS 2
http://www.trt.net.tr/anasayfa/canli.aspx?y=tv&k=trtspor2

TRT DOCUMENTARY
http://www.trt.net.tr/anasayfa/canli.aspx?y=tv&k=trtbelgesel

TRT KIDS
http://www.trt.net.tr/anasayfa/canli.aspx?y=tv&k=trtcocuk

TRT AVAZ
http://www.trt.net.tr/anasayfa/canli.aspx?y=tv&k=trtavaz

TRT MUSIC
http://www.trt.net.tr/anasayfa/canli.aspx?y=tv&k=trtmuzik

TRT TÜRK
http://www.trt.net.tr/anasayfa/canli.aspx?y=tv&k=trtturk

TRT KURDÎ
http://www.trt.net.tr/anasayfa/canli.aspx?y=tv&k=trt6

TRT CAR
http://www.trt.net.tr/anasayfa/canli.aspx?y=tv&k=trtarapca

TRT 3 - TBMM TV
http://www.trt.net.tr/anasayfa/canli.aspx?y=tv&k=trt3tbmmtv
*/

error_reporting(0);
set_time_limit(0);
date_default_timezone_set("Europe/Tirane");
// ?stream=trtarapca
$id = htmlspecialchars($_GET['stream']);
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
  $protocol = 'http://';
} else {
  $protocol = 'https://';
}

$ROOT_URL = $protocol . $_SERVER['SERVER_NAME'] . ($_SERVER['PHP_SELF']) . "";
// $ROOT_URL = $protocol . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . "/";
//$VLC_RAW = $ROOT_URL . "VLC_by_ID.php?stream=" . "trtarapca";
$GET_Example = $ROOT_URL . "?stream=" . "trtarapca";
if(!$id) die("
<b>
<center>
<font color=lime><h2>TRT TURK Live Stream Extractor </h2></b>
</center>
<center>
<font color=red><b>STRUKTURA!!!</b>
</center>
<br/>
<b>
<center>
<font color=lime>Platform: Smart TV VLC Kodi ETC</b>
</center>
</font>
<br/>
<body style='background-color:black'>
<b>
<center>
<font color=lime>?stream={STREAM NAME}</b>
</center>
</font>
<br/>
<b>
<center>
<font color=lime>Pershembull:<br>
<font color=lime>GET Example:<font color=red> $GET_Example<br>
</b>
</center>
</font>
<br/>
<b>
<center>
<font color=lime>API: https://kodi.al/</b></center></font>
<br/>
<b><center><font color=lime>FB: /albdroid.official/</b></center></font><br/>
"
);
header("Content-Type: application/rss+xml; charset=utf-8");

$STREAM_URL = file_get_contents("http://www.trt.net.tr/anasayfa/canli.aspx?y=tv&k=".$id);
//$STREAM_URL = file_get_contents("http://www.trt.net.tr/anasayfa/canli.aspx?y=tv&k=trt6");
// START GET STREAM TITLES
$STREAM_TITLE_URL = ($STREAM_URL);
preg_match("/title>(.*\w)</",$STREAM_TITLE_URL,$GET_STREAM_TITLE);
$TITULLI = $GET_STREAM_TITLE[1];
// END GET STREAM TITLES
$REPLACE_TITLES = str_replace(
    array(" - Canlı İzle - TRT", "Î", "î", "ç", "Ç", "ğ", "Ğ", "ö", "Ö", "ş", "Ş", "ü", "Ü"),
    array("", "I", "i", "c", "C", "g". "Ğ", "o", "O", "s", "S", "u", "U"),
	$TITULLI
);
// START BASE64 DECODE AND GET M3U8 STREAM
preg_match('/dcm1\("([^"]+)"/', $STREAM_URL, $getbase64);
$decodifikim = $getbase64[1];
$BASE64_DECODED = base64_decode($decodifikim);
$BASE64_STRING = ($BASE64_DECODED);
preg_match("/var prmfi = '(.*?)'/", ($BASE64_STRING), $STREAM_MACHES);
$M3U_STREAM = $STREAM_MACHES[1];
// END BASE64 DECODE AND GET M3U8 STREAM
// PRINT CLEARED TITLES AND STREAMS
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
$albdroidlogo = "https://png.kodi.al/tv/albdroid/";
echo "<item>\n";
echo "<title>[COLOR lime][B]".$REPLACE_TITLES."[/COLOR][/B]</title>\n";
echo "<link>".$M3U_STREAM."</link>\n";
echo "<thumbnail>".$albdroidlogo."black.png</thumbnail>\n";
echo "<fanart>".$albdroidlogo."black.png</fanart>\n";
echo "<genre>[COLOR lime][B][I]Albdroid[/I][/B][/COLOR][COLOR lime] [B][I][COLOR red]([/COLOR]".$REPLACE_TITLES."[COLOR red])[/COLOR] [/I][/B][/COLOR]</genre>\n";
echo "<info>[COLOR lime][B]Website:[/B][/COLOR] [COLOR red][B]([/B][/COLOR][COLOR lime][B]Albdroid.AL[/B][/COLOR] [COLOR red][B]&amp;[/B][/COLOR] [COLOR lime][B]Kodi.AL[/B][/COLOR][COLOR red][B])[/B][/COLOR]</info>\n";
echo "</item>\n";
?>