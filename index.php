<?php
require_once 'data/leaderboard.php';
// La fonction "array_map" prend en premier argument une fonction anonyme qui sera appliquée à chaque élément du tableau "$leaderboard". Cette fonction anonyme a un argument "$leaderboard" qui représente chaque joueur dans le tableau.

$replaceChar = array_map(function($leaderboard) {
    $leaderboard['email'] = str_replace('@', '/', $leaderboard['email']);
    return $leaderboard;
}, $leaderboard);
?>



<?php require_once 'layout/navbar.php';
?>

    <h1 class="mt-5">Leaderboard</h1>

    <?php foreach ($replaceChar as $leaderboardValue) { ?>
      <div>
        <?php echo $leaderboardValue['email']; ?>
        <br />
        <?php echo $leaderboardValue['score']; ?>
      </div>
    <?php } ?>

  </body>
</html>
