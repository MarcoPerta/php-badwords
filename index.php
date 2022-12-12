<?php
$paragraph = 'I will go back to Gotham and I will fight men Iike this but I will not become an executioner.
I ll be standing where l belong. Between you and the peopIe of Gotham. Swear to me! The first time I stole so that I wouldn t starve, yes. I lost many assumptions about the simple nature of right and wrong. And when I traveled I learned the fear before a crime and the thrill of success. But I never became one of them.
No guns, no killing. Someone like you.Someone wholl rattle the cages.
I m Batman Swear to me! It was a dog. It was a big dog. I ll be standing where l belong. Between you and the peopIe of Gotham. Does it come in black? Accomplice? I m gonna tell them the whole thing was your idea.' ;

$wordcensored = $_GET['wordcensored'];
 var_dump($wordcensored);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    
    <p><?php echo $paragraph ?></p>
    <span>il paragrafo ha una lunghezza di <?php echo strlen($paragraph) ?>  caratteri.</span>
    <!-- <?php var_dump($paragraph); ?> -->
    <form action="" method="GET">
        <input type="text" name="wordcensored">
        <button type="submit">Invio</button>
    </form>
    <?php $replace = str_replace($wordcensored,"***", $paragraph ); ?>
    <p><?php echo $replace  ?></p>

</body>
</html>