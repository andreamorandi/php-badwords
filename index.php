<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <form action="censored.php" method="GET">
        <label for="paragraph">Paragrafo</label>
        <input type="text" id="paragraph" name="paragraph">
        <label for="bad_word">Parola da censurare</label>
        <input type="text" id="bad_word" name="bad_word">
        <hr>
        <button type="submit">Invia</button>
        <button type="reset">Cancella</button>
    </form>
</body>
</html>