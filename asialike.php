<?php
system('clear');
echo "     ASIA FOLLOWERS COINUP\n\n".PHP_EOL;

$userid=readline("User id : ");
$token=readline("Token : ");

while(true){
$link="https://sillakkii66.000webhostapp.com/ass.php?uid=$userid&token=$token&submit=submit";

$run=file_get_contents($link);
$cc=explode('</center>',$run)[0];
$tt=explode('<body>',$cc)[1];
$jj=explode("\n",$tt);
$msg=$jj[6];
$bal=$jj[8];

$ebal=explode('<br>',$bal)[1];
$exx=explode('<hr></font>',$ebal)[0];
echo $msg.PHP_EOL;
echo $exx.PHP_EOL;
echo "---------------------------------------".PHP_EOL;
}