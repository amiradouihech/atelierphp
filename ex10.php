<?php
$n=rand(1,100);
while($n%2!=0){
    $n=rand(1,100);
}
echo "le premier nombre paire aléatoire".$n;