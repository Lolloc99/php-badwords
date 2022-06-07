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