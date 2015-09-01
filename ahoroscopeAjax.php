 <?php
// This script uses the Simple Ajax by Rochak Chauhan to display
// the horoscopes. It can be found here:
// http://www.phpclasses.org/browse/package/2718.html
// The ahoro.php script is called by ajax from this script and must
// placed int he same folder as this script and the ahoroscoope class file.
// The ahoroscope class file was not changed.
//
require_once('ajax.inc.php');
$ajax = new Ajax('main');
print "<html><head>";
print "</head><body>\n";
print "<table border='1' ><tr><td colspan='2' align='center'>\n";
print "<h2>Get Your Horoscope For Today, ".date('l j F Y')."</h2>\n";
print "</td></tr><tr><td width='250'>\n";
print "<br><a href='#' onclick=\"sendReq('ahoro.php', 's', 'capricorn');\">Capricorn (Dec 22 - Jan 19)</a>\n";
print "<br><a href='#' onclick=\"sendReq('ahoro.php', 's', 'aquarius');\">Aquarius (Jan 21 - Feb 18)</a>\n";
print "<br><a href='#' onclick=\"sendReq('ahoro.php', 's', 'pisces');\">Pisces (Feb 19 - Mar 20)</a>\n";
print "<br><a href='#' onclick=\"sendReq('ahoro.php', 's', 'aries');\">Aries (Mar 21 - Apr 19)</a>\n";
print "<br><a href='#' onclick=\"sendReq('ahoro.php', 's', 'taurus');\">Taurus (Apr 20 - May 20)</a>\n";
print "<br><a href='#' onclick=\"sendReq('ahoro.php', 's', 'gemini');\">Gemini (May 21 - June 21)</a>\n";
print "<br><a href='#' onclick=\"sendReq('ahoro.php', 's', 'cancer');\">Cancer (June 22 - July 22)</a>\n";
print "<br><a href='#' onclick=\"sendReq('ahoro.php', 's', 'leo');\">Leo (July 23 - Aug 22)</a>\n";
print "<br><a href='#' onclick=\"sendReq('ahoro.php', 's', 'virgo');\">Virgo (Aug 23 - Sept 22)</a>\n";
print "<br><a href='#' onclick=\"sendReq('ahoro.php', 's', 'libra');\">Libra (Sept 23 - Oct 22)</a>\n";
print "<br><a href='#' onclick=\"sendReq('ahoro.php', 's', 'scorpio');\">Scorpio (Oct 23 - Nov 21)</a>\n";
print "<br><a href='#' onclick=\"sendReq('ahoro.php', 's', 'sagittarius');\">Sagittarius (Nov 22 - Dec 21)</a>\n";
print "</td><td width=450' align='left'>\n";
print "<div id='main'>This is an example script of how to use the ahoroscope class. Just\n";
print " click on one of the links to get your horoscope for today from \n";
print " the <b>http://www.astrology.com/</b> website.</div>";
print "</td></tr></table>\n";
print "</body></html>\n";
?> 
