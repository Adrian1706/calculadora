<?php 

    // echo <<<HTML
    // <button><a href="index.html" style="text-decoration:none; color:black">Volver </a></button><br><br>
    // HTML;
    // var_dump($_POST);
    // $num1 = $_POST["num1"];
    // $num2 = $_POST["num2"];
    // $operation = $_POST["operation"];
    // switch ($operation){
    //     case "+": 
    //         $result = $num1 + $num2;
    //         break;
    //     case "-":
    //         $result = $num1 - $num2;
    //         break;
    //     case "*":
    //         $result = $num1 * $num2;
    //         break;
    //     case "/":
    //         $result = $num1 / $num2;
    //         break;
    // } 
    // echo $result;
?> 
<?php
    session_start();
    if (isset($_POST['numero'])) {
        if($_POST['numero'] == "c"){
            $_SESSION['num1'] = null;
        }else if($_POST['numero'] == "←"){
            $_SESSION['num1'] = substr($_SESSION['num1'],0, -1);
            // $_SESSION['num1'] = substr($_SESSION['num1'], 0, strlen($_SESSION['num1']) - 1);
        }else{
            if (isset($_SESSION['num1'])) {
                $_SESSION['num1'] .= $_POST['numero'];
            } else {
                $_SESSION['num1'] =  $_POST['numero'];
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="sp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button{
            width:50px
        }
    </style>
</head>
<body>
    <form method="POST">
        <input type="text" name="resultado" value="<?php echo isset($_SESSION['num1']) ? $_SESSION['num1'] :0;?>">
        <br><br>
        <button type="submit" name="numero" value="1">1</button>
        <button type="submit" name="numero" value="2">2</button>
        <button type="submit" name="numero" value="3">3</button>
        <button type="submit" name="operacion" value="+">+</button>
        <br>
        <button type="submit" name="numero" value="4">4</button>
        <button type="submit" name="numero" value="5">5</button>
        <button type="submit" name="numero" value="6">6</button>
        <button type="submit" name="operacion" value="-">-</button>
        <br>
        <button type="submit" name="numero" value="7">7</button>
        <button type="submit" name="numero" value="8">8</button>
        <button type="submit" name="numero" value="9">9</button>
        <button type="submit" name="operacion" value="x">x</button>
        <br>
        <button type="submit" name="numero" value="←">←</button>
        <button type="submit" name="numero" value="0">0</button>
        <button type="submit" name="numero" value="c">c</button>
        <button type="submit" name="operacion" value="%">%</button>
        <br>
        <input type="submit" value="=" style="width:90px">
    </form>
</body>
</html>