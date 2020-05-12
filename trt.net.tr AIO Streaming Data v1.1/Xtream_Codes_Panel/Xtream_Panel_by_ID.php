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
 │ Version   │ v1.1                                           │
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
 │ Modified  │ Tuesday, May 12, 2020                          │
 └────────────────────────────────────────────────────────────┘
 [x] To Get Live Stream Required Full Link From trt.net.tr 
 Streams Formats: Auto Get [M3U8]
*/

define('sxt',TRUE);
error_reporting(0);
set_time_limit(0);
date_default_timezone_set("Europe/Tirane");

// DISA NGA KETO JANE ME Cloudflare FIREWALL
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
  $protocol = 'http://';
} else {
  $protocol = 'https://';
}
$ROOT_URL = $protocol . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . "/";
$PHP_PATH = $protocol . ($_SERVER['SERVER_NAME']) . ($_SERVER['PHP_SELF']) . "";
$id = $_GET['stream'];
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
if(!$id) die("
 ┌────────────────────────────────────────────────────────────┐
 |  For More Modules Or Updates Stay Connected to Kodi dot AL |
 └────────────────────────────────────────────────────────────┘
 ┌───────────┬────────────────────────────────────────────────┐
 │ Product   │ TRT TURK Live Stream Extractor                 │
 │ Version   │ v1.1                                           │
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
 │ Modified  │ Tuesday, May 12, 2020                          │
 └────────────────────────────────────────────────────────────┘

 ┌────────────────────────────────────────────────────────────┐
 |   LISTA E KANALEVE / CHANNELS LIST FOR Xtream Codes Panel  |
 └────────────────────────────────────────────────────────────┘
 ┌────────────────────────────────────────────────────────────
 | TRT1 => $PHP_PATH?stream=trt1
 └────────────────────────────────────────────────────────────
 ┌────────────────────────────────────────────────────────────
 | TRT2 => $PHP_PATH?stream=trt2
 └────────────────────────────────────────────────────────────
 ┌────────────────────────────────────────────────────────────
 | TRT WORLD => $PHP_PATH?stream=trtworld
 └────────────────────────────────────────────────────────────
 ┌────────────────────────────────────────────────────────────
 | TRT HABER => $PHP_PATH?stream=trthaber
 └────────────────────────────────────────────────────────────
 ┌────────────────────────────────────────────────────────────
 | TRT SPOR => $PHP_PATH?stream=trtspor
 └────────────────────────────────────────────────────────────
 | TRT SPOR2 => $PHP_PATH?stream=trtspor2
 └────────────────────────────────────────────────────────────
 ┌────────────────────────────────────────────────────────────
 | TRT BELGESEL => $PHP_PATH?stream=trtbelgesel
 └────────────────────────────────────────────────────────────
 ┌────────────────────────────────────────────────────────────
 | TRT COCUK => $PHP_PATH?stream=trtcocuk
 └────────────────────────────────────────────────────────────
 ┌────────────────────────────────────────────────────────────
 | TRT AVAZ => $PHP_PATH?stream=trtavaz
 └────────────────────────────────────────────────────────────
 ┌────────────────────────────────────────────────────────────
 | TRT MUZIK => $PHP_PATH?stream=trtmuzik
 └────────────────────────────────────────────────────────────
 ┌────────────────────────────────────────────────────────────
 | TRTTURK => $PHP_PATH?stream=trtturk
 └────────────────────────────────────────────────────────────
 ┌────────────────────────────────────────────────────────────
 | TRT KURDI => $PHP_PATH?stream=trt6
 └────────────────────────────────────────────────────────────
 ┌────────────────────────────────────────────────────────────
 | TRT ARAPCA => $PHP_PATH?stream=trtarapca
 └────────────────────────────────────────────────────────────
 ┌────────────────────────────────────────────────────────────
 | TRT 3 TBMM => $PHP_PATH?stream=t-trt3tbmmtv
 └────────────────────────────────────────────────────────────
"
);

$STREAM_URL  = file_get_contents("http://www.trt.net.tr/anasayfa/canli.aspx?y=tv&k=$id");
$b64_regex = '/dcm1\("([^"]+)/';
preg_match_all($b64_regex, $STREAM_URL , $match, PREG_PATTERN_ORDER, 0);
    $decodifikim = base64_decode(trim($match[1][0]));

preg_match_all("/var prmfi = '(.*?)'/",
    $decodifikim,
    $streaming_content,
    PREG_SET_ORDER
);

foreach ($streaming_content as $item)
{
$stream = trim($item[1]);

//echo $stream;
//header('Access-Control-Allow-Origin: *');
//header('Content-type: application/json');
header("Content-type: application/vnd.apple.mpegurl");
header("Location: $stream");

// WEB DIRECTORY /var/www/html
// USE AS 127.0.0.1 IN PANEL AND NO YOUR REAL IP 192.168.0.1 ETC
// http://127.0.0.1/SCRIPT_PATH/Xtream_Panel_by_ID.php?stream=trtarapca

}
ob_end_flush();
?>