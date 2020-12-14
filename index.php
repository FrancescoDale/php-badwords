<?php

$paragraph = "SpaceX inaugurò la produzione di veicoli di lancio con il Falcon 1, il quale venne progettato e fabbricato tra il 2008 e il 2009.È un razzo orbitale a due stadi che usa ossigeno liquido e RP-1 per entrambi gli stadi: il primo è spinto da un unico motore di classe Merlin e il secondo da un unico razzo di classe Kestrel. Il veicolo è stato lanciato per cinque volte, riuscendo a raggiungere l'orbita durante il quarto tentativo, nel settembre 2008, con della zavorra al posto del carico utile.In sostituzione del Falcon 1 venne pianificato anche un lanciatore denominato Falcon 5, ma il suo sviluppo è stato interrotto in favore dei Falcon 9.";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Php Badwords</title>
    </head>
    <body>
        <div class="container">
            <h1 class="text-capitalize text-center mt-2">php badwords</h1>

            <h2>
                <?php echo $paragraph; ?>
            </h2>

            <h2 class="text-center mt-4 mb-4">Lunghezza del paragrafo : </h2>
            <p> <?php echo strlen($paragraph) ?> caratteri </p>

            <h2 class="text-center mt-4 mb-4">Applicazione della censura</h2>
            <p> <?php echo str_replace() ?> </p>

        </div>

    </body>
</html>
