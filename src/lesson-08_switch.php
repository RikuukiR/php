<?php

// switch文
$day = "Saturday";

switch ($day) {
case "Monday":
echo "月曜日です。";
break;
case "Tuesday":
echo "火曜日です。";
break;
case "Wednesday":
echo "水曜日です。";
break;
case "Thursday":
echo "木曜日です。";
break;
case "Friday":
echo "金曜日です。";
break;
case "Saturday":
echo "土曜日です。";
break;
case "Sunday":
echo "日曜日です。";
break;
default:
echo "無効な日付です。";
}