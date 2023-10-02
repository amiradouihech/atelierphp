<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $a=$_POST["a"];
    $b=$_POST["b"];
$s=$a<=>$b;
switch($s){
    case 0:
        echo $a."=".$b;
        break;
    case 1:
        echo $a.">".$b;
        break;
    case -1:
        echo $a."<".$b;
        break;
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
    <lable for="b">b<input id="b" type="text" name="b">
    <input type="submit" value="Comparer">
</form>
</body>



