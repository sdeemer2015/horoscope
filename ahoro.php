 <?php
// to extract the horoscope and return it as a string in $h.
//
// The possible values for the 's' are:
// capricorn
// aquarius
// pisces
// aries
// taurus
// gemini
// cancer
// leo
// virgo
// libra
// scorpio
// sagittarius

if(isset($_REQUEST['s'])){
include "class.ahoroscope.php";
$sign=$_REQUEST['s'];
$hs=new ahoroscope();
$h=$hs->getHoroscope($sign);
print "<b>Horoscope for $sign:</b><br>$h";
}else{
print "Not Found";
}
?> 
