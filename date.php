<?php

//===================   get friday ====================

$time = time();
$daySecond = 86400;
$weekMin = 7 * $daySecond;


$time =  $time + 2*$daySecond;

//今天周几 (Unix时间戳是从1970/1/1 08:00:00开始的，那天周四),周日的话，为0
$curDay = floor((($time  + 28800) % $weekMin) / $daySecond + 7 - 3   ) % 7  ;


echo date('Y-m-d',$time) , "\r\n";
//exit;

if($curDay > 5) {
    $friday = $time + $daySecond * (12 - $curDay);
}else{
    $friday = $time + $daySecond * (5 - $curDay);
}

echo date('Y-m-d H:i:s',$friday) , "\r\n";



//===================   get last friday ====================



/*
 * 获取上一个周五
 * 如：	周日是 1/25 对应上周五是 1/23
 * 		周六是 1/24 对应上周五是 1/23
 * 		周五是 1/23 对应上周五是 1/16
 * 		周四是 1/22 对应上周五是 1/16
 */


$time = time();
$daySecond = 86400;
$weekMin = 7 * $daySecond;


$time =  $time + 2*$daySecond;

//今天周几 (Unix时间戳是从1970/1/1 08:00:00开始的，那天周四),周日的话，为0
$curDay = floor((($time  + 28800) % $weekMin) / $daySecond + 7 - 3   ) % 7  ;


echo date('Y-m-d',$time) , "\r\n";
//exit;


echo $curDay;

if($curDay > 5) {
    $friday = $time + $daySecond * (5 - $curDay);
}else{
    $friday = $time - $daySecond * ( 2 + $curDay );
}

echo date('Y-m-d H:i:s',$friday) , "\r\n";


//===================   get last month ====================




$time = time();
$daySecond = 86400;
$weekMin = 7 * $daySecond;


$time =  $time + 2*$daySecond;

//今天周几 (Unix时间戳是从1970/1/1 08:00:00开始的，那天周四),周日的话，为0
$curDay = floor((($time  + 28800) % $weekMin) / $daySecond + 7 - 3   ) % 7  ;


echo date('Y-m-d',$time) , "\r\n";
//exit;


echo $curDay , "\r\n";

if($curDay == 0) {
    $monday = $time + $daySecond;
}else{
    $monday = $time + $daySecond * (8 - $curDay);
}

echo date('Y-m-d H:i:s',$monday) , "\r\n";



//===================   get this month last day ====================


$time = time();
$daySecond = 86400;

$curMonth = intval(date('m'));
$curYear = intval(date('Y'));
if($curMonth == 12) {

	$nextMonth = '01';
	$nextYear = $curYear + 1;

}else{
	$nextMonth = $curMonth + 1;
	$nextYear = $curYear;
	if($nextMonth<10){
		$nextMonth = '0'.$nextMonth;
	}
}

$result = strtotime(date("{$nextYear}-{$nextMonth}-01 00:00:00")) - $daySecond;
echo date('Y-m-d H:i:s',$result) , "\r\n";



