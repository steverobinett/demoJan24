<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> Basics Lab </h1>

<?php 
    $catNo = 'T001';
    $descr = '2N2222';
    $cost = .14;
    $qoh = 200;
    $onSale = True;

    if ($onSale == TRUE){
        echo "<p>It's a Sale<br>";
        echo "BUY NOW</p>";
    }
    else{
        echo "Not on sale";
    }

    echo "---$onSale---";

    $displayStr = "<p>Our transistor of the day is $descr</p>";

    echo "<p>The cat number is $catNo</p>";
    echo '<p>The cat number is $catNo</p>';
    echo "<p>The cat number is".$catNo."</p>";
    echo $displayStr;
?>
    
</body>
</html>