<?php
class ahoroscope
{
	function getHoroscope_daily($sign)
	{       
		$lnk="http://my.horoscope.com/astrology/free-daily-horoscope-".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg, 'class="fontdef1" style="padding-right:10px;" id="textline"')!==false)
		{
			$aa=strpos($pg,'class="fontdef1" style="padding-right:10px;" id="textline"')+59;
			$ab=strpos($pg,'</div>',$aa);
			$hor="<div class='date'>".substr($pg,$aa,$ab-$aa)."</div>";
			/*
			$ii=strpos($pg,'id="textline"')+14;
			$ij=strpos($pg,'</div>',$ii);
			$hor.="<div class='mytext'>".substr($pg,$ii,$ij-$ii)."</div>";
*/
			
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	
//	
	
	function getHoroscope_yesterday($sign)
	{       
		$lnk="http://my.horoscope.com/astrology/yesterday-horoscope-".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg, 'id="advert"')!==false)
		{
			$aa=strpos($pg,'id="advert"')+12;
			$ab=strpos($pg,'</div>',$aa);
			$hor="<div class='date'>".substr($pg,$aa,$ab-$aa)."</div>";
			
			$ii=strpos($pg,'id="textline"')+14;
			$ij=strpos($pg,'</div>',$ii);
			$hor.="<div class='mytext'>".substr($pg,$ii,$ij-$ii)."</div>";

			
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	
	
	
	function getHoroscope_weekly($sign)
	{
		$lnk="http://my.horoscope.com/astrology/free-weekly-horoscope-".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="textline"')!==false)
		{
			$ii=strpos($pg,'id="textline"')+14;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_monthly($sign)
	{
		$lnk="http://my.horoscope.com/astrology/free-monthly-horoscope-".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="textline"')!==false)
		{
			$ii=strpos($pg,'id="textline"')+14;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	
	
	
	function getHoroscope_teen($sign)
	{
		$lnk="http://astrology.horoscope.com/free-weekly-teen-horoscope-".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="textline"')!==false)
		{
			$ii=strpos($pg,'id="textline"')+14;
			$ij=strpos($pg,'</div',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	
	
	function getHoroscope_romance($sign)
	{
		$lnk="http://love.horoscope.com/love/daily-love-horoscope-".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="textline"')!==false)
		{
			$ii=strpos($pg,'id="textline"')+14;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	
	
	
	
	
	
	
	
	
	function getHoroscope_single($sign)
	{
		$lnk="http://horoscopes.astrology.com/dailysingles".$sign.".html";
		//echo $lnk;
		$pg=file_get_contents($lnk);
		if(strpos($pg,"textline")!==false)
		{
			$ii=strpos($pg,"textline")+14;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_couple($sign)
	{
		$lnk="http://horoscopes.astrology.com/dailyrom".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="textline"')!==false)
		{
			$ii=strpos($pg,'id="textline"')+14;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	
	
	function getHoroscope_wromance($sign)
	{
		$lnk="http://horoscopes.astrology.com/weeklyrom".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="textline"')!==false)
		{
			$ii=strpos($pg,'id="textline"')+14;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_career($sign)
	{
		$lnk="http://horoscopes.astrology.com/monthlycar".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="textline"')!==false)
		{
			$ii=strpos($pg,'id="textline"')+14;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_fitness($sign)
	{
		$lnk="http://horoscopes.astrology.com/monthlyfit".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="textline"')!==false)
		{
			$ii=strpos($pg,'id="textline"')+14;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	
	function getHoroscope_tech($sign)
	{
		$lnk="http://horoscopes.astrology.com/dailytech".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="textline"')!==false)
		{
			$ii=strpos($pg,'id="textline"')+14;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_flirt($sign)
	{
		$lnk="http://horoscopes.astrology.com/dailyfunflirty".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="textline"')!==false)
		{
			$ii=strpos($pg,'id="textline"')+14;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_beauty($sign)
	{
		$lnk="http://horoscopes.astrology.com/dailybeauty".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="textline"')!==false)
		{
			$ii=strpos($pg,'id="textline"')+14;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_slam($sign)
	{
		$lnk="http://horoscopes.astrology.com/dailyslam".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="textline"')!==false)
		{
			$ii=strpos($pg,'id="textline"')+14;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_baby($sign)
	{
		$lnk="http://horoscopes.astrology.com/dailybabyscope".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="textline"')!==false)
		{
			$ii=strpos($pg,'id="textline"')+14;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_cat($sign)
	{
		$lnk="http://horoscopes.astrology.com/dailycatscope".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="textline"')!==false)
		{
			$ii=strpos($pg,'id="textline"')+14;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_dog($sign)
	{
		$lnk="http://horoscopes.astrology.com/dailydogscope".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="textline"')!==false)
		{
			$ii=strpos($pg,'id="textline"')+14;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_h_g($sign)
	{
		$lnk="http://horoscopes.astrology.com/dailyhomeandgarden".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="textline"')!==false)
		{
			$ii=strpos($pg,'id="textline"')+14;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	
	
	function getHoroscope_bus($sign)
	{
		$lnk="http://horoscopes.astrology.com/weeklybus".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="textline"')!==false)
		{
			$ii=strpos($pg,'id="textline"')+14;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_travel($sign)
	{
		$lnk="http://horoscopes.astrology.com/weeklytravel".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="textline"')!==false)
		{
			$ii=strpos($pg,'id="textline"')+14;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_wflirt($sign)
	{
		$lnk="http://horoscopes.astrology.com/weeklyfunflirty".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="textline"')!==false)
		{
			$ii=strpos($pg,'id="textline"')+14;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_year($sign)
	{
		$lnk="http://www.astrology.com/year/overview/".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'OVERVIEW:</b>')!==false)
		{
			$ii=strpos($pg,'OVERVIEW:</b>')+13;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
}
?>
