<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $a=$_POST["a"];
    if($a%2==0){
        echo $a."est paire";
        }
    else{
        echo $a."est inpaire";
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