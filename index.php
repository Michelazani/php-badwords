<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>


    <?php
        // creo variabile con testo
        $chorusSleepwalingBmth= 'Your eyes are swallowing me.
        Mirrors start to whisper, shadows start to sing.
        My skin is smothering me.
        Help me find a way to breathe.
        Time stood still the way it did before.
        It is like I am sleepwalking.
        Fell into another hole again.
        It is like I am sleepwalking';
        $songTitle='Sleepwalinking';
        $bandName='Bring Me The Horizon';
        // scelgo la parola da rimpiazzare dentro '', '' inserisco la parola con cui voglio rimpiazzarla, inserisco il testo dentro la quale voglio sostituirla. il tutto dentro str_replace
        $censoredWord=str_replace('me', '***', $chorusSleepwalingBmth) 
    ?>


    <div>
        <!-- tramite echo e $nomeVariabile riporto nell'html quello che voglio -->
        <h1> <?php echo $bandName; ?> </h1>
        <h2> <?php echo $songTitle; ?> </h2>
        <p> <?php echo $chorusSleepwalingBmth; ?></p>
        <!-- strlen serve per calcolare la lunghezza della stringa -->
        <p>number of words: <?php echo strlen($chorusSleepwalingBmth); ?></p>
    </div>

    <div>
        <h4>Censored Chorus</h4>
        <p> <?php echo $censoredWord; ?></p>
        <p>number of words: <?php echo strlen($censoredWord); ?></p>


    </div>
</body>
</html>



<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
