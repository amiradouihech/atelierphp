<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $a=$_POST["a"];
    if($a%3==0 && $a%5==0){
        echo $a." mutiple de 3 et de 5";
    }
    elseif($a%3==0){
        if($a%5!=0){
            echo $a." mutiple de 3 mais pas de 5";
        }
    }
    elseif($a%5==0){
        if($a%3!=0){
            echo $a." mutiple de 5 mais pas de 3";
        }
    }
    else{
        echo $a." ne peux pas étre multiple de 5 et 3";
    }}
?>
<!doctype html>
<html>
    <head>
        <title>ex7</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
    <lable for="a">a<input id="a" type="text" name="a">
    <input type="submit" value="nombre">
</body>
</html>