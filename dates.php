<?php
//d inside gives date
echo date('d');
echo "\n";
// m gives month
echo date('m');
echo "\n";
//y gives year
echo date('Y');
//day of week
echo "\n";
echo date('l');
// combine of d/m/y
echo "\n";
echo date('Y/m/d');
//
echo "\n";
echo date('h');//hours
echo "\n";
echo date('i');//minutes
echo "\n";
echo date('s');//seconds
echo "\n";
echo date('a');//am or pm
echo "\n";
//combine of time
echo date('h:i:sa');
// set time zone
echo "\n";
date_default_timezone_set('Indian/Comoro');
// timestamp it is total no of seconds between a given date and todays date
$times= mktime(11, 55, 22, 9, 11, 2000);
echo $times;
echo date('d/m/Y h:i:sa',$times);
//pass input to timestamp as string
echo "\n";
$time=strtotime('2:30pm April 22 2015');
echo $time;
echo "\n";
echo date('d/m/y',$time);
echo "\n";
$time1=strtotime('yesterday');
echo $time1;
echo "\n";
echo date('d/m/y',$time1);
$time2=strtotime('next wednesday');
//echo $time2;
echo "\n";
echo date('d/m/y h:i:sa',$time2);
// add extra  months,days,years
$time2=strtotime('+2 Days,+2Months,+1 Year');
echo "\n";
echo date('d/m/y h:i:sa',$time2);
// 
?>