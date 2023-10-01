<?php 
/*
ex1:
$abc/$prenom
ex2:
<?php
$var = 'World';
$2var = 13; faux /$var2=13
echo "$var+ "<BR>".$2var; faux/echo "$var< <br>".var2
print "Hello", $var;faux/echo "hello".$var;
ex3:
1)faux
2-1)0
2-2)1
3-1)"inconnu"
3-2)"monsieur"
4)"Cherif"/"bonjour inconnu"
ex4 */
$nom="douihech";
$prenom="amira";
echo $nom.$prenom;
echo"<table border='5'><tr><th>nom</th><th>Prénom</th></tr><tr><td>".$nom."</td><td>".$prenom."</td></tr></table>";
$info=$nom.$prenom;
?>
<script>
    alert("<?php echo $info ?>");
</script>