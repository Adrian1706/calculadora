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
    
    if ($_POST['numero'] == "c") {
            $_SESSION['num1'] = null;
        } else if ($_POST['numero'] == "←") {              
    $_SESSION['num1'] = substr($_SESSION['num1'], 0, -1);   
        }   
    else if ($_POST['numero'] == "=") {
                  
    if (isset($_SESSION['num1'])) {
                                              
    $resultado = eval('return '.$_SESSION['num1'].';');
                          
    $_SESSION['num1'] = $resultado;
            }
        } 
           
    else {
            if (isset($_SESSION['num1'])) {
                $_SESSION['num1'] .= $_POST['numero'];
            } else {
                $_SESSION['num1'] = $_POST['numero'];
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
    <title>Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
        }
        
        .container {
            margin: 50px auto;
            width: 250px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        
        h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        
        .caja {
            width: 220px;
            padding: 10px;
            font-size: 18px;
            text-align: right;
            margin-bottom: 10px;
        }
        
        button {
            width: 50px;
            height: 50px;
            font-size: 18px;
            border: none;
            background-color: #e0e0e0;
            color: #333;
            margin: 2px;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #ccc;
        }
        
        button:active {
            background-color: #bbb;
        }
        
        button.operaciones {
            background-color: #ff9500;
            color: #fff;
        }
        
        button.operaciones:hover {
            background-color: #ffad33;
        }
        
        button.operaciones:active {
            background-color: #ff8c00;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora bonita</h1>
        <form method="POST">
            <input class="caja" type="text" name="resultado" value="<?php echo isset($_SESSION['num1']) ? $_SESSION['num1'] : 0; ?>" readonly> <br><br>
            <button type="submit" name="numero" value="7">7</button>
            <button type="submit" name="numero" value="8">8</button>
            <button type="submit" name="numero" value="9">9</button>
            <button type="submit" name="numero" value="-" class="operaciones">-</button> <br><br>
            <button type="submit" name="numero" value="4">4</button>
            <button type="submit" name="numero" value="5">5</button>
            <button type="submit" name="numero" value="6">6</button>
            <button type="submit" name="numero" value="+" class="operaciones">+</button> <br><br>
            <button type="submit" name="numero" value="1">1</button>
            <button type="submit" name="numero" value="2">2</button>
            <button type="submit" name="numero" value="3">3</button>
            <button type="submit" name="numero" value="*" class="operaciones">x</button> <br><br>
            <button type="submit" name="numero" value="←">←</button>
            <button type="submit" name="numero" value="0">0</button>
            <button type="submit" name="numero" value="c">c</button>
            <button type="submit" name="numero" value="/" class="operaciones">/</button> <br><br>
            <button type="submit" name="numero" value="." style="margin-left:55px">.</button>
            <button type="submit" name="numero" value="=" class="operaciones">=</button>
        </form>
    </div>
</body>
</html>