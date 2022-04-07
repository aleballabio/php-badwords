<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pulcinella e Pinocchio</title>
</head>

<body>
    <?php
    $censoredword = $_GET["censoredword"];
    $text = "C'era una volta Pulcinella e Pinocchio. I due si amavano moltissimo fino a quando Pulcinella decise di accoltelare Pinocchio senza un valido motivo.\rQuesto gesto fu, per lei, la scelta più bella mai presa in tutta la sua vita. La morale della favola?\rIl gesto di accoltelare le persone è molto liberatorio.";
    $text_length = trim($text);
    $text_countwords = explode(" ", $text);
    $text_censored = str_replace($censoredword, "***", $text);
    ?>
    <h1>Pulcinella e Pinocchio</h1>

    <h2> Lunghezza in caratteri della storia: <br>
        <?php echo "Caratteri:" . strlen($text_length) . "</br>";
        echo "Parole:" . count($text_countwords);
        ?>
    </h2>

    <p><?php echo nl2br($text_censored) ?>
    </p>

</body>

</html>