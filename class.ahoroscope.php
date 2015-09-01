 <?php
// class.ahoroscope.php
// version 1.0.0, 6 August, 2005
//
// Ahoroscope is a small class to load the webpage from http://www.astrology.com/
// for the given astrology sign, then extract the horoscope and return
// it as a string. The following are the twelve possible values for the $sign.
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
//
// License
//
// Copyright (C) 2005 George A. Clarke, webmaster@gaclarke.com, http://gaclarke.com/
//
// This program is free software; you can redistribute it and/or modify it under
// the terms of the GNU General Public License as published by the Free Software
// Foundation; either version 2 of the License, or (at your option) any later
// version.
//
// This program is distributed in the hope that it will be useful, but WITHOUT
// ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
// FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License along with
// this program; if not, write to the Free Software Foundation, Inc., 59 Temple
// Place - Suite 330, Boston, MA 02111-1307, USA.
//

class ahoroscope
{
 function getHoroscope($sign)
{
 $lnk="http://horoscopes.astrology.com/dailylong".$sign.".html";
 $pg=file_get_contents($lnk);
 if(strpos($pg,"iTxt")!==false)
 {
  $ii=strpos($pg,"iTxt")+6;
  $ij=strpos($pg,'<',$ii);
  $hor=substr($pg,$ii,$ij-$ii);
 }else{
  $hor="Not found";
 }
return $hor;
}
}
?> 
