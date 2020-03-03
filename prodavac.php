<?php
$age = 18;


if ($age >= 18) {
    $deal ="tady maš, dik za kšeft boyo";
$img ="bourbon.png";}
else { $deal ="seš mladej, chlast nemožeš";
$img="ne.jpg";}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?=$deal?></p>
    <p><img src="<?= $img;?>"></p>
    
</body>
</html>