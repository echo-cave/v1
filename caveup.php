<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://cdn.jsdelivr.net/gh/echo-cave/cave@main/cave.txt");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$st = curl_exec($ch);   //将curl的结果存到变量里
$fd = fopen("cave.txt", 'w');
fwrite($fd, $st);  //将curl的结果写入文件里
fclose($fd);
curl_close($ch);