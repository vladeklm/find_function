<?php
function findStart($x,$step){
    while (true){
        if ($x%$step===0){
            return $x;
        }
        else {
            $x++;
        }
    }
}
function writeThem($n){
    $i=$d=1;
    $num=0;
    while ($n>0){
        echo $num.", ";
        $n--;
        $num+=$i;
        if ($num>=10**$d){
            $num=10**$d;
            $i++;
            $d++;
            $num=findStart($num,$i);
        }
    }
}
writeThem(20000);
