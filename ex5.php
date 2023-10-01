<?php
echo"<h1>calcul sur les variables</h1>";
$TVA=0.2;
$PRIX=150;
$nombre=10;
$prixhtp=$PRIX/(1+$TVA);
$prixttcp=$PRIX*(1+$TVA);
$pthtt=$prixhtp*$nombre;
$pttctt=$prixttcp*$nombre;
echo"prix ht par article: ".$prixhtp;
echo"prix ttc par article: ".$prixttcp;
echo"prix totale ht pour 10 articles: ".$pthtt;
echo"prix totale tcc pour 10 articles: ".$pttctt;