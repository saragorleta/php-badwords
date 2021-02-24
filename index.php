<?php
$parola=$_GET['badword'];
$frase = 'Oggi studiamo PHP, vi sta piacendo?';
$fraseVariata = str_replace('PHP',$parola,$frase);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<p><?php echo $frase ?></p>
<p><?php echo $fraseVariata ?></p>



<?php $lunghezzaFrase = strlen($frase);
echo 'la prima frase è lunga: ' .$lunghezzaFrase;
 ?>
 <?php echo '<br>'; ?>
 <?php $lunghezzaFrase = strlen($fraseVariata);
 echo 'la seconda frase è lunga: ' .$lunghezzaFrase;
  ?>









</body>
</html>
