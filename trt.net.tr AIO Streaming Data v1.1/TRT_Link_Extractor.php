<?php
/*
 ┌────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
 |                                                NOTE FOR SOME MOTHERFUCKERS                                                 |
 └────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
 ┌────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
 | DISA MOTER QIRA I NDRYSHOJNE EMRIN OSE VALUES KETYRE SCRIPTAVE EDHE I SHPERNDAJNE NE FORUME TE NDRYSME EDHE HIQEN SI AUTOR |
 | KETA SCRIPTA JANE KRIJUAR NGA ALBDROID.AL EDHE JANE FREE PER TE GJITHE!                                                    |
 └────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
 ┌────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
 | SOME MOTHERS FUCKERS CHANGING NAME OR VALUES OF SCRIPT AND SHARE IN DIFFERENT FORUMS ALSO SAYS CREATED BY ME               |
 | THESE SCRITS ARE CREATED BY ALBDROID.AL AND ARE FREE FOR EVERYONE!                                                         |
 └────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
 ┌────────────────────────────────────────────────────────────┐
 |  For More Modules Or Updates Stay Connected to Kodi dot AL |
 └────────────────────────────────────────────────────────────┘
 ┌───────────┬────────────────────────────────────────────────┐
 │ Product   │ TRT TURK Link Extractor                        │
 │ Version   │ v1.1                                           │
 │ Provider  │ http://www.trt.net.tr                          │
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
*/

define('sxt',TRUE);
error_reporting(0);
set_time_limit(0);
date_default_timezone_set("Europe/Tirane");

ini_set("user_agent","iPad");
function get_link_data($url)
{
    $ch = curl_init();
    $timeout = 3;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.3; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0");
    curl_setopt($ch, CURLOPT_REFERER, "http://www.trt.net.tr/");
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept-Charset: utf-8','Accept-Language: en-us,en;q=0.7,bn-bd;q=0.3','Accept: text/xml,application/xml,application/xhtml+xml,text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5')); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_ENCODING, ""); 
	curl_setopt ($ch, CURLOPT_COOKIEJAR, 'cookies.txt');
    curl_setopt ($ch, CURLOPT_COOKIEFILE, 'cookies.txt');
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $get_links = curl_exec($ch);
    curl_close($ch);
    return $get_links;
}

$vari_karin = "http://www.trt.net.tr/anasayfa";
$data_link = get_link_data('http://www.trt.net.tr/anasayfa/canli.aspx?y=tv&k=trtavaz');
preg_match_all('/a href=".([^"]+)".title="(.*?)\s-\s/',$data_link,$matches, PREG_SET_ORDER);
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
foreach ($matches as $item)
{
$title = $item[2];
$link = $item[1];
echo $title."\n";
echo $vari_karin.$link."\n\n";
}
?>