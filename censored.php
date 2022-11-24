<?php
$paragraph = $_GET["paragraph"];
$bad_word = $_GET["bad_word"];
$paragraph_length = strlen($paragraph);
$censored_paragraph = str_replace($bad_word, "***", $paragraph);
$censored_paragraph_length = strlen($censored_paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words Censored</title>
</head>
<body>
    <p><?php echo $paragraph; ?></p>
    <span><?php echo $paragraph_length; ?></span>
    <p><?php echo $censored_paragraph; ?></p>
    <span><?php echo $censored_paragraph_length; ?></span>
</body>
</html>