<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

    <!-- tag php -->
    <?php

        // inclusione file esterno
        include 'data/data.php';

    ?>
</head>
<body>
    
    <?php
        foreach ($hotels as $key => $item) {
            // var_dump($item);
            
            foreach ($item as $key => $value) {
                // var_dump($key);

                // condizione che sostituisce _ sulla key della distanza
                str_replace('_', ' ', $key);

                // condizione che sostituisce valore del parcheggio
                if ($value === true) {
                    $value = 'yes';
                } else if ($value === false) {
                    $value = 'no';
                }

                // stampa
                echo $key . ': ' . $value . '<br>';

            }

            echo '<br>';
        }
    ?>

    <!-- Stampare tutti i nostri hotel con tutti i dati disponibili.
    Avremo un file PHP con il nostro "database" e un file con tutta la logica. -->

</body>
</html>
