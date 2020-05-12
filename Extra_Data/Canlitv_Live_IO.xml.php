<?php
error_reporting(0);
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
/*
DUHET LiveStreamsPro.zip
https://addons.kodi.al/LiveStreamsPro.zip
*/
?>

<item>  <!-- Ka Active Cloudflare Firewall ky Rop Qiri -->
<title>[COLOR lime][B]Canlitv Live IO[/B][/COLOR][COLOR red][B] ([/B][/COLOR][COLOR lime][B]Cloudflare Firewall[COLOR red][B])[/B][/COLOR]</title>
<thumbnail>http://png.kodi.al/tv/albdroid/black.png</thumbnail>
<fanart>http://png.kodi.al/tv/albdroid/black.png</fanart>
<link>$doregex[makelist]</link>
<regex>
<name>makelist</name>
<listrepeat><![CDATA[
<title>[UPPERCASE][COLOR lime][B]$doregex[replace_titles][/B][/COLOR][/UPPERCASE]</title>
<link>$doregex[replace_url]|User-Agent=Vari-Karin-Dava-Arixhinjsh&amp;Referer=[makelist.param2]</link>
<thumbnail>https://png.kodi.al/tv/albdroid/black.png</thumbnail>
<fanart>https://png.kodi.al/tv/albdroid/black.png</fanart>
<genre>[COLOR lime][B][I]Albdroid[/I][/B][/COLOR][COLOR lime] [B][I][COLOR red]([/COLOR]Turk TV[COLOR red])[/COLOR][/I][/B][/COLOR]</genre>
<info>[COLOR lime][B]Website:[/B][/COLOR] [COLOR red][B]([/B][/COLOR][COLOR lime][B]Albdroid.AL[/B][/COLOR] [COLOR red][B]&amp;[/B][/COLOR] [COLOR lime][B]Kodi.AL[/B][/COLOR][COLOR red][B])[/B][/COLOR]</info>
<date>[COLOR lime][B]<?php echo $data2; ?>[/B][/COLOR]</date>

<SetViewMode>504</SetViewMode>

]]></listrepeat>
<expres><![CDATA[item.*\n.*.*\n.*title>(.*)<.*\n.*.*\n.*link>(.*)<]]></expres>
<page>http://mobile.canlitvlive.io/feed.xml</page>
</regex>

<regex>
<name>replace_titles</name>
<expres>$pyFunction:'[makelist.param1]'.replace(']]>','').replace('!','').replace('[CDATA[','').replace("<",' ')</expres>
<page></page>
</regex>

<regex>
<name>replace_url</name>
<expres>$pyFunction:'$doregex[get_stream]'.replace('\/','/')</expres>
<page></page>
</regex>
<regex>
<name>get_stream</name>
<expres>,file:"(.*?)"</expres>
<page>[makelist.param2]|Referer=[makelist.param2]</page>
</regex>
<genre>[COLOR lime][B][I]Albdroid[/I][/B][/COLOR][COLOR lime] [B][I][COLOR red]([/COLOR]Canlitv Live IO[COLOR red])[/COLOR][/I][/B][/COLOR]</genre>
<info>[COLOR blue][B]Author:[/B][/COLOR] [COLOR lime][B]Olsion Bakiaj[/B][/COLOR][COLOR red] &amp;[/COLOR][COLOR lime][B] Endrit Pano[/B][/COLOR]</info>
<date>[COLOR lime][B]2020[/B][/COLOR]</date>
<proxy>[COLOR lime][B]<?php echo $proxy.$proxy1; ?>[/B][/COLOR]</proxy>
</item>