<?php

    $password = $_POST['password'];
    $Testo = $_POST['Testo'];
    $my_string = str_replace('Ciao','***',$Testo )

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>risposta</title>
</head>
<body>
    <div>
        <h1>Ecco il tuo testo <?php echo $my_string ?><h1>
        <h1>Il paragrafo è lungo <?php echo strlen($Testo)?> caratteri</h1>
    </div>
    <div>
        <h1>Ecco il tuo testo <?php echo $Testo ?><h1>
        <h1>Il paragrafo è lungo <?php echo strlen($Testo)?> caratteri</h1>
    </div>   
</body>
</html>