<?php
$leaderboard = [
  [
    'email' => 'if@nivwev.ni',
    'score' => 816,
  ],
  [
    'email' => 'diteris@hajkowpof.je',
    'score' => 798,
  ],
  [
    'email' => 'nahefun@zip.bz',
    'score' => 793,
  ],
  [
    'email' => 'zogputeh@roz.et',
    'score' => 688,
  ],
  [
    'email' => 'wa@tetaptaw.pl',
    'score' => 530,
  ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Leaderboard</title>
</head>

<body>

  <h1>Leaderboard</h1>

  <?php foreach ($leaderboard as $player) { ?>
    <div>
      <?php echo $player['email']; ?>
      <br />
      <?php echo $player['score']; ?>
    </div>
  <?php } ?>

</body>

</html>