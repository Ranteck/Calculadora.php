<?php 
$resultado= 0;
$numero1= $_REQUEST["num1"];
$numero2= $_REQUEST["num2"];


if (isset ($_REQUEST["num1"]) && ($_REQUEST["num2"])){
    $numero1= $_REQUEST["num1"];
    $numero2= $_REQUEST["num2"];
} else {
    $numero1 = 0;
    $numero2 = 0;
}
//echo $_REQUEST["cuenta"];

switch ($_REQUEST["cuenta"]){
    case "suma": $resultado= $numero1 +$numero2;
break;
    case "resta": $resultado= $numero1 - $numero2;
break;
    case "mult": $resultado= $numero1 * $numero2;
break;
    case "div": $resultado= $numero1 / $numero2;    
break;   
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
</head>
<body>
    <form action="Calculadora.php" method="POST">
        <label for="num1">Numero 1: <input type="text" name="num1" id="num1"></label>
        <br>
        <br>
        <label for="num2">Numero 2: <input type="text" name="num2" id="num2"></label>
        <br>
        <?php echo "El resultado es $resultado"?>

        <br>
        <br>
        <div style="margin-left: 40px;">
            <label for="suma">+ <input type="radio" name="cuenta" value="suma"></label>
            <label for="resta">- <input type="radio" name="cuenta" value="resta"></label>
            <label for="mult">* <input type="radio" name="cuenta" value="mult"></label>
            <label for="div">/ <input type="radio" name="cuenta" value="div"></label>
        </div>
        <br>
        <br>
        <div style="margin-left: 15px;">
        <input type="submit" name="submit">
        <input type="reset" name="reset">
        </div>
    </form>
</body>
</html>