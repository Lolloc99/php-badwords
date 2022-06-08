<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP Approch</title>
</head>
<body>
    <?php
    $testo = "Se l’arcivescovo di Costantinopoli si disarcivescoviscostantinopolizzasse, tu ti disarcivescoviscostantinopolizzeresti come si è disarcivescoviscostantinopolizzato l’arcivescovo di Costantinopoli?";
    $badword = $_GET['badword'];
    $testo_riadattato = str_replace($badword, '***', $testo);
    ?>

    <h2>Questo è il paragrafo di prova:</h2>
    <h3><?php echo $testo . $prova; ?></h3>

    <h2>La lunghezza del testo è di: <?php echo strlen($testo);?> caratteri</h2>

    <h2>Badword: </h2>
    <h3><?php echo $badword;?></h3>

    <h2>Testo riadattato</h2>
    <h3>
        <?php echo $testo_riadattato;?>
    </h3>

    <h2>La lunghezza del testo riadattato è di: <?php echo strlen($testo_riadattato);?> caratteri</h2>
</body>
</html>