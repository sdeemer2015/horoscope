 <?php
include "class.ahoroscope.php";
print "<html><head></head><body>\n";
print "<table border='1' ><tr><td colspan='2' align='center'>\n";
print "<h2>Get Your Horoscope For Today, ".date('l j F Y')."</h2>\n";
print "</td></tr><tr><td width='250'>\n";
print "<br><a href='$PHP_SELF?s=capricorn'>Capricorn (Dec 22 - Jan 19)</a>\n";
print "<br><a href='$PHP_SELF?s=aquarius'>Aquarius (Jan 21 - Feb 18)</a>\n";
print "<br><a href='$PHP_SELF?s=pisces'>Pisces (Feb 19 - Mar 20)</a>\n";
print "<br><a href='$PHP_SELF?s=aries'>Aries (Mar 21 - Apr 19)</a>\n";
print "<br><a href='$PHP_SELF?s=taurus'>Taurus (Apr 20 - May 20)</a>\n";
print "<br><a href='$PHP_SELF?s=gemini'>Gemini (May 21 - June 21)</a>\n";
print "<br><a href='$PHP_SELF?s=cancer'>Cancer (June 22 - July 22)</a>\n";
print "<br><a href='$PHP_SELF?s=leo'>Leo (July 23 - Aug 22)</a>\n";
print "<br><a href='$PHP_SELF?s=virgo'>Virgo (Aug 23 - Sept 22)</a>\n";
print "<br><a href='$PHP_SELF?s=libra'>Libra (Sept 23 - Oct 22)</a>\n";
print "<br><a href='$PHP_SELF?s=scorpio'>Scorpio (Oct 23 - Nov 21)</a>\n";
print "<br><a href='$PHP_SELF?s=sagittarius'>Sagittarius (Nov 22 - Dec 21)</a>\n";
print "</td><td width=450' align='center'>\n";
if($sign=$_GET['s']){
$hs=new ahoroscope();
$h=$hs->getHoroscope($sign);
print "<b>Horoscope for $sign:</b><br>$h";
}else{
 print "This is an example script of how to use the ahoroscope class. Just\n";
 print " click on one of the links to get your horoscope for today from \n";
 print " the <b>http://www.astrology.com/</b> website.";
}

print "</td></tr></table>\n";
print "</body></html>\n";
?> 
