<?php
// 現在時刻
$date = new DateTime();
echo $date->format('Y-m-d H:i:s') . '<br>';

// 指定日時
$date = new DateTime('1999-11-02 05:27:42');
echo $date->format('Y-m-d H:i:s') . '<br>';

// 年
$date = new DateTime();
echo $date->format('Y') . '<br>';

// 月
$date = new DateTime();
echo $date->format('m') . '<br>';

// 日
$date = new DateTime();
echo $date->format('d') . '<br>';

// 曜日
$date = new DateTime();
echo $date->format('D') . '<br>';

// 時
$date = new DateTime();
echo $date->format('H') . '<br>';

// 分
$date = new DateTime();
echo $date->format('i') . '<br>';

// 秒
$date = new DateTime();
echo $date->format('s') . '<br>';

// ATOM
$date = new DateTime();
echo 'ATOM' . '<br>';
echo $date->format(DateTime::ATOM) . '<br>';

// COOKIE
$date = new DateTime();
echo 'COOKIE' . '<br>';
echo $date->format(DateTime::COOKIE) . '<br>';

// RSS
$date = new DateTime();
echo 'RSS' . '<br>';
echo $date->format(DateTime::RSS) . '<br>';

// W3C
$date = new DateTime();
echo 'W3C' . '<br>';
echo $date->format(DateTime::W3C) . '<br>';

// 日付の計算
$date = new DateTime();
echo '現在→1年前・1年後' . '<br>';
echo $date->modify('-1 years')->format('Y-m-d H:i:s') . '<br>';
$date = new DateTime();
echo $date->modify('1 years')->format('Y-m-d H:i:s') . '<br>';

$date = new DateTime();
echo '現在→1ヶ月前・1ヶ月後' . '<br>';
echo $date->modify('-1 months')->format('Y-m-d H:i:s') . '<br>';
$date = new DateTime();
echo $date->modify('1 months')->format('Y-m-d H:i:s') . '<br>';

$date = new DateTime();
echo '現在→1日前・1日後' . '<br>';
echo $date->modify('-1 days')->format('Y-m-d H:i:s') . '<br>';
$date = new DateTime();
echo $date->modify('1 days')->format('Y-m-d H:i:s') . '<br>';

$date = new DateTime();
echo '現在→1時間前・1時間後' . '<br>';
echo $date->modify('-1 hours')->format('Y-m-d H:i:s') . '<br>';
$date = new DateTime();
echo $date->modify('1 hours')->format('Y-m-d H:i:s') . '<br>';

$date = new DateTime();
echo '現在→1分前・1分後' . '<br>';
echo $date->modify('-1 minutes')->format('Y-m-d H:i:s') . '<br>';
$date = new DateTime();
echo $date->modify('1 minutes')->format('Y-m-d H:i:s') . '<br>';

$date = new DateTime();
echo '現在→1分前・1分後' . '<br>';
echo $date->modify('-1 seconds')->format('Y-m-d H:i:s') . '<br>';
$date = new DateTime();
echo $date->modify('1 seconds')->format('Y-m-d H:i:s') . '<br>';