<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $word = ucwords('decidi te quale parola deve essere censurata nel testo seguente che viene appunto mostrato sullo schermo!');

    echo $word;

    $badword = $_GET['badword'];
    
    echo '<pre>';
    echo 'lunghezza: '.strlen($badword);
    echo '<pre>';

    $censWord = str_replace($badword, '***', $word);
    echo $censWord;

    
    ?>
</body>
</html>