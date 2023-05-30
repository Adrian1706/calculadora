<?php 

    echo <<<HTML
    <button><a href="index.html" style="text-decoration:none; color:black">Volver </a></button><br><br>
    HTML;
    // var_dump($_POST);
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];
    switch ($operation){
        case "+": 
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            $result = $num1 / $num2;
            break;
    } 
    echo $result;
?> 