<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function table_mul($a,$b){
    echo("<table border='1'>");
    for($i=1;$i<=$a;$i++){
        echo("<tr>");
        for($j=1;$j<=$b;$j++){
            
            $res=$i*$j;
            echo("<td>$res</td>");
        }
        echo("</tr>");
    }
    echo("</table>");
    
     }
     table_mul(9,9)
    ?>
<br>
<br>


  <?php
    
    echo("<table border='1'>");
    for($i=1;$i<=9;$i++){
        echo("<tr>");
        for($j=1;$j<=9;$j++){
            
            $res=$i*$j;
            echo("<td>$res</td>");
        }
        echo("</tr>");
    }
    echo("</table>");
    
    
    ?>
</body>
</html>