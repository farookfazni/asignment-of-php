<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CALCULATOR</title>
</head>

<body>
    <?php

    //gets the parameters
    $param1 = $_GET['param1'] ?? "";
    $param2 = $_GET['param2'] ?? "";
    $operator = $_GET['operator'] ?? "";
    $result = '';

    //checking the parameter
    if (is_numeric($param1) && is_numeric($param2)) {
        switch ($operator) { // checking the operator
            case "Add":
                $result = $param1 + $param2; //adding values if Add button clicked
                break;
            case "Minus":
                $result = $param1 - $param2; //substracking values if substract button clicked
                break;
            case "Multiply":
                $result = $param1 * $param2; //multiplying values if multiply button clicked
                break;
            case "Divide":
                $result = $param1 / $param2; //dividing values if dividebutton clicked
        }
    }



    ?>

    <form method="get" action="">
        <input name="param1" type="number" value="<?php echo $param1; ?>" /> 
        <input name="param2" type="number" value="<?php echo $param2; ?>" />

        <input type="submit" name="operator" value="Add" />
        <input type="submit" name="operator" value="Minus" />
        <input type="submit" name="operator" value="Multiply" />
        <input type="submit" name="operator" value="Divide" />

        <p><b>Result</b></p>
        <input readonly="readonly" name="result" value="<?php echo $result; ?>"> 
    </form>


</body>

</html>