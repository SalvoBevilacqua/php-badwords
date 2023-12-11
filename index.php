<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
    </head>

    <body>
        <form action="censored.php" method="GET">
            <label for="word">Inserisci la parola da censurare</label>
            <input type="text" id="word" name="word">

            <label for="text">Inserisci il testo</label>
            <input type="text" id="text" name="text">

            <button type="submit">Invia</button>
        </form>
    </body>
</html>