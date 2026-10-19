<!DOCTYPE html>
<html lang="pt-br"> 
<head>
<title>Calculo do fatorial</title>
</head>
<body>
<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
<label>Digite um número:</label>
<input type="number" name="num" value="<?=$num?>" required>
<input type="submit" value="Calcular">
</form>

<?php
$num = $_POST['num'] ?? 0;


//Exibe os números em ordem decrescente



if($num <> 0){
    for ($i = $num; $i >= 1; $i--){
        echo $i . "x" . "<br>";
        
    }
   

$fatorial = 1;
$i=0; 

do{ 

$i++; 

$fatorial = $fatorial * $i; 
}while($i < $num);
echo "fat ! $num" . "=". $fatorial; 

}


?>
</body>
</html>                         