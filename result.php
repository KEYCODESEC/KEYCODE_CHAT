<?php

require('functions.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $message = trim(filter_input(INPUT_POST,'message'));
    $message = $message !== ''? $message : '...';

    $filename = 'messages.txt';
    $fp = fopen($filename,'a');
    fwrite($fp,$message."\n");
    fclose($fp);
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP Practice</title>
</head>
<body>

<?php header('Location:index.php'); ?>

</body>
</html>