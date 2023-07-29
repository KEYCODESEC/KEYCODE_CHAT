<?php

require('functions.php');

$filename = 'messages.txt';
$messages = file($filename,FILE_IGNORE_NEW_LINES);


?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP Practice</title>
</head>
<body>

<ul>
<?php foreach($messages as $message): ?>
  <li><?= h($message) ?></li>
<?php endforeach; ?>
</ul>

<form action = "result.php" method="post">
  <input type="text" name="message">
  <button>post</button>
</form>


</body>
</html>

