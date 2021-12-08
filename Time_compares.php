<?php
date_default_timezone_set('Asia/Kolkata');
//$stTime1 = strtotime("2021-11-12 14:50:00");
//$stTime1 = strtotime("2021-11-12 00:50:00");//if 12:50:00 then it is afternoon and 00:50 morning 12 0' clock

$ss="2021-11-13 14:50:00";
$stTime1 = strtotime($ss);
 //$edTime1 = strtotime("2021-11-11 14:40:00")+30*60;
 $edTime1 =$stTime1+60*30;//30 minute converted into second
 //$edTime1 =$stTime1+60*60*30;
      // $edTime = strtotime($rs->vall_timess)+$rs->vall_durations*60;
       $ctTime = strtotime(date("j F Y h:i:s A"));
       //$ctTime = strtotime(date("j F Y h:i:s "));
       echo "start".$stTime1;
       echo "end" . $edTime1;
      echo "cur" . $ctTime;
      if ($ctTime >= $stTime1 && $ctTime <= $edTime1) {
       echo  "live"; //if live then join button
   } else if ($ctTime < $stTime1) {
       echo  "upcoming";
   } else if($ctTime > $edTime1 ){
       echo "completed";
   }

?>