<?php
  $d = array(
    'hosszu' => '2020. október 17.',
    'ev'     => '2020.',
    'ho'     => '10.',
    'nap'    => '17.'
  )
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Sablonszerű megoldás</title>
</head>
<body>
  <acronym class="datum" title="<?= $d['hosszu'] ?>">
    <span class="ho"><?= $d['ho'] ?></span>
    <span class="nap"><?= $d['nap'] ?></span>
  </acronym>
</body>
</html>
