<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pulcinella e Pinocchio</title>
</head>

<body style="text-align: center;">
    <?php
    $censoredword = $_GET["censoredword"];
    $text = "C'era una volta Pulcinella e Pinocchio. I due si amavano moltissimo fino a quando Pulcinella decise di accoltellare Pinocchio senza un valido motivo.\rQuesto gesto fu, per lei, la scelta più bella mai presa in tutta la sua vita. La morale della favola?\rIl gesto di accoltellare le persone è molto liberatorio.";
    $text_length = trim(str_replace(" ", "", $text));
    $text_countwords = explode(" ", trim($text));
    $text_censored = str_replace($censoredword, "***", $text);
    ?>
    <h1>Pulcinella e Pinocchio</h1>

    <h2> Lunghezza della storia <br>
        <?php echo "Caratteri: " . strlen($text_length) . "</br>";
        echo "Parole: " . count($text_countwords);
        ?>
    </h2>

    <p><?php echo nl2br($text_censored) ?>
    </p>

</body>

</html>