<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$tab = [10, 20, 30, 40];
$index = array_search(30, $tab);
unset($tab[$index]);
print_r($tab);
?> 

</body>
</html>