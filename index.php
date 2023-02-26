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


<?php require_once 'layout/navbar.php';
?>

    <h1 class="mt-5">Leaderboard</h1>

    <?php foreach ($leaderboard as $player) { ?>
      <div>
        <?php echo $player['email']; ?>
        <br />
        <?php echo $player['score']; ?>
      </div>
    <?php } ?>

  </body>
</html>