<?php
    $testo_principale = "Il popolo hobbit è discreto e modesto, ma di antica origine, meno numeroso oggi che nel passato; amante della pace, della calma e della terra ben coltivata, il suo asilo preferito era una campagna scrupolosamente ordinata e curata. Ora come allora, essi non capiscono e non amano macchinari più complessi del soffietto del fabbro, del mulino ad acqua o del telaio a mano, quantunque abilissimi nel maneggiare attrezzi di ogni tipo. Anche in passato erano estremamente timidi; ora, poi, evitano addirittura con costernazione «la Gente Alta», come ci chiamano, ed è diventato difficilissimo trovarli. Hanno una vista ed un udito particolarmente acuti, e benché tendano ad essere grassocci e piuttosto pigri, sono agili e svelti nei movimenti. Sin dal principio possedevano l’arte di sparire veloci e silenziosi al sopraggiungere di genti che non desideravano incontrare, ma ora quest’arte l’hanno talmente perfezionata, che agli Uomini può sembrare quasi magica. Gli Hobbit, invece, non hanno mai effettivamente studiato alcun tipo di magia; e quella loro rara dote è unicamente dovuta ad una abilità professionale che l’eredità, la pratica, e un’amicizia molto intima con la terra hanno reso inimitabile da parte di razze più grandi e goffe.";

    if (empty($_GET["badword"])) {
        $testo_corretto = $testo_principale;
        $censor = "Parola non fornita";
    } else {
        $censor = $_GET["badword"];
        $testo_corretto = str_ireplace($censor, "***", $testo_principale);
    }

    $lunghezza_testo = "Lunghezza testo: " . strlen($testo_principale);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>Esercitazione #35 - First PHP exercise</title>
    </head>
    <body>
        <header>
            <h1>***Censorship machine***</h1>
        </header>
        <main>
            <p>
                <?php echo $testo_corretto ?>
            </p>
            <h2>
                <?php echo $lunghezza_testo ?>
            </h2>
            <h3>Parola da censurare: <?php echo $censor ?></h3>
        </main>
    </body>
</html>
