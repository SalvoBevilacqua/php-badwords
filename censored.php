<?php
$word = $_GET['word'];
$text = $_GET['text'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords Result</title>
    </head>

    <body>
        <div class="result">
            <p>Testo originale:</p>
            <p><?php echo $text; ?></p>
            <p>La lunghezza del testo è di <?php echo strlen($text); ?> caratteri.</p>
            <?php
            $lowerCase = strtolower($text);
            $lowerWord = strtolower($word);
            $newText = str_replace($lowerWord, '***', $lowerCase);
            ?>
            <p>Il testo censurato è:</p>
            <p><?php echo $newText; ?></p>
            <p>La lunghezza del testo censurato è di <?php echo strlen($newText); ?> caratteri.</p>
        </div>
    </body>
</html>