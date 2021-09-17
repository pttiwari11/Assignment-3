<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pushpendra Tiwari</title>
</head>
<body>
<?php
$str1= '082307'; 
echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n";
echo "<br>";
?>

</body>
</html>