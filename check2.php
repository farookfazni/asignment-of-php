<!DOCTYPE html>

<head>
    <title>PHP CALCULATOR</title>
</head>

<?php
$param1 = $_GET['param1'] ?? "";
$param2 = $_GET['param2'] ?? "";
$operator = $_GET['operator'] ?? "";
$result = '';
if (is_numeric($param1) && is_numeric($param2)) {
    switch ($operator) {
        case "Add":
            $result = $param1 + $param2;
            break;
        case "Subtract":
            $result = $param1- $param2;
            break;
        case "Multiply":
            $result = $param1 * $param2;
            break;
        case "Divide":
            $result = $param1 / $param2;
    }
}

?>

<body>
    <div>
        <h1>PHP CALCULATOR</h1>
        <form action="" method="get">
            <p>
                <input type="number" name="param1" value="<?php echo $param1; ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="param2" value="<?php echo $param2; ?>" /> <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
            </p>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
        </form>
    </div>
</body>

</html>