<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    if (isset($_GET['submit'])) {
       function relation($nme1){
         echo $nme1; 
         echo '<button>';
         echo 'ADD Relation';
         echo '</button>';
       } 
       
    }
    ?>
    <h1>Family Tree</h1>
    <form action="check.php" method="GET">
        Your Name : <input type="text" name="nme1">
        <input type="submit">
        <input type="reset">
    </form>
    <p><?php echo relation($_GET['nme1'] ?? ""); ?></p>
</body>

</html>