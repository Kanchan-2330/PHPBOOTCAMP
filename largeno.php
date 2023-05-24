<?php
$a = 233;
$b = 44;
$c = 91;
if(($a > $b )&& ($a > $c)){
    echo "$a is greater!";
}
elseif(($b > $a )&& ($b > $c)){
    echo "$b is greater!";
}else{
    echo "$c is greater!";
}
?>