<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a=$_POST["a"];
    $b=$_POST["b"];
    $s=$a+$b;
    echo $s;

}
?>
<!doctype html>
<html>
<head>
    <title>ex6</title>
</head>
<body>
    <form name="f" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="a">a</lable><input id="a" type="text" name="a">
    <label for="b">b</lable><input id="b" type="text" name="b">
    <input type="submit" value="calculer">
    </form>
</body>