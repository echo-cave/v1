<?php
date_default_timezone_set('Asia/Shanghai');

$jieshaos=file("cave.txt");
$jieshaoc=count($jieshaos);
$jieshaor=rand(0,$jieshaoc-1);
$jieshao=@$jieshaos[$jieshaor];
$text=str_replace("\n","",$jieshao);
$text=str_replace("\r","",$text);
$text=str_replace("\r\n","",$text);
$jieshao=$text;
if($_GET["encode"] == "js")
{
echo '(function cave(){var cave="' . $jieshao . '";var dom=document.querySelector(".cave");Array.isArray(dom)?dom[0].innerText=cave:dom.innerText=cave;})()';
}
else if($_GET["encode"] == "json")
{
$arr = array('code' => 0, 'cave' => $jieshao);
echo json_encode($arr);
}else{
echo "$jieshao";
}
?>
