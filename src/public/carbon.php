<?php
require '../vendor/autoload.php';

use Carbon\Carbon;

// 年
$dt = Carbon::now();
echo $dt->year . '<br>';

// 月
$dt = Carbon::now();
echo $dt->month . '<br>';

// 日
$dt = Carbon::now();
echo $dt->day . '<br>';

// 時
$dt = Carbon::now();
echo $dt->hour . '<br>';

// 分
$dt = Carbon::now();
echo $dt->minute . '<br>';

// 秒
$dt = Carbon::now();
echo $dt->second . '<br>';

// 日付の加算・減算
$dt = Carbon::now();
echo '現在→1年後・1年前' . '<br>';
echo $dt->addYear() . '<br>';
$dt = Carbon::now();
echo $dt->subYear() . '<br>';

$dt = Carbon::now();
echo '現在→1月後・1月前' . '<br>';
echo $dt->addMonth() . '<br>';
$dt = Carbon::now();
echo $dt->subMonth() . '<br>';

$dt = Carbon::now();
echo '現在→1日後・1日前' . '<br>';
echo $dt->addDay() . '<br>';
$dt = Carbon::now();
echo $dt->subDay() . '<br>';

$dt = Carbon::now();
echo '現在→1時間後・1時間前' . '<br>';
echo $dt->addHour() . '<br>';
$dt = Carbon::now();
echo $dt->subHour() . '<br>';

$dt = Carbon::now();
echo '現在→1分後・1分前' . '<br>';
echo $dt->addMinute() . '<br>';
$dt = Carbon::now();
echo $dt->subMinute() . '<br>';

$dt = Carbon::now();
echo '現在→1分後・1分前' . '<br>';
echo $dt->addSeconds() . '<br>';
$dt = Carbon::now();
echo $dt->subSeconds() . '<br>';