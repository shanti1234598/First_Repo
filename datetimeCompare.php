<?php

date_default_timezone_set("Asia/Kolkata");

//$curr_timestamp = date("Y-m-d H:i:s a");
//$curr_timestamp = date("Y-m-d H:i:s");

//$date = new DateTime();
//echo  " timestamp :".$date->getTimestamp();

$objDateTime = new DateTime('NOW');
echo $objDateTime->format('Y-m-d H:i');
$dt=$objDateTime->format('Y-m-d H:i');

$curr_time= new DateTime($dt);


$datetime1 = new DateTime('2021-09-30 01:20:00');
$datetime2 = new DateTime('2021-09-30 12:12:00');
$datetime5 = new DateTime('2021-09-30 09:12:00');

if ($datetime1 > $datetime2) {
    echo 'datetime1 greater than datetime2';
}

if ($datetime1 < $datetime2) {
    echo 'datetime1 lesser than datetime2';
}

if ($datetime1 == $datetime2) {
    echo 'datetime2 is equal than datetime1';
}

$minutes_to_add = 30;
//$time = new DateTime('2011-11-17 05:05');
//$result = $datetime2->format('Y-m-d H:i:s');
//$time = new DateTime($result);
$ss = $datetime2 ->add(new DateInterval('PT'.$minutes_to_add.'M'));
//$stamp = $time->format('Y-m-d H:i');
$new_Date=$ss->format('Y-m-d H:i');

echo "new date".$new_Date;
$datetime3=new DateTime($new_Date);
//echo "new date in string form is".$datetime3;

if($curr_time>=$datetime1 && $curr_time<=$datetime3)
{
echo "meeting is live";
}
if($curr_time<$datetime2 )
{
    echo "upcoming lecture";
}
if($curr_time > $datetime5)
{
    echo "lecture is completed";
}
?>