<?php $url = "http://akamaicache.dof6.com/vod/yomvi.svc/samsung_tizen/profiles/OTT/channels?parentalRating=M18&showNonRated=true";
$json = file_get_contents($url);
echo $json;?>
