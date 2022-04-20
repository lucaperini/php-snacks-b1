<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-Snack-5</title>
</head>
<body>
    <p>
        <?php
        $text = "Nel Capitolo 8 vedremo come personalizzare la configurazione del tuo ambiente di Git. Questo include la configurazione degli script di aggancio (hook in inglese) per imporre o incoraggiare linee guida personalizzate e usare le configurazioni ambientali per lavorare come vuoi tu. Vedremo anche come creare i tuoi script, per imporre le tue linee guida. Il Capitolo 9 tratta l’interazione tra Git e altri sistemi di VCS. E vedremo quindi come usare Git in un gruppo che usa Subversion (SVN) e come convertire i progetti da alcuni VCS a Git. Molte aziende usano ancora SVN e non sono in procinto di cambiare sistema, ma a questo punto avrai imparato lo straordinario potere di Git e con questo capitolo vedremo come convivere con un server SVN. Vedremo anche come importare i progetti da diversi sistemi, nel caso tu riesca a convincere qualcuno a lanciarsi.Il Capitolo 10 scava  into the nelle oscure, ma bellissime, profondità dei meccanismi interni di Git. Ora che sai tutto su Git e puoi maneggiarlo con forza e agilità, possiamo vedere come Git gestisce i “suoi oggetti, cos’è il modello a oggetti, i dettagli dei pacchetti di file, i protocolli dei server e molto altro.";
        $textArray = explode('.', $text);
        echo $text;
        
        
        ?>
    </p> 
</body>
</html>