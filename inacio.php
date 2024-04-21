<?php

$ss = 12;
$sd = 16;
if ($ss < $sd){
	$du = (24 - $ss) + $sd;
}else{
	$du = $sd - $ss;
}
echo "O JOGO DUROU $du HORA(S)\n";