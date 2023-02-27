<?php
require_once 'data/leaderboard.php';
require_once 'layout/navbar.php';
?>

    <h1 class="mt-5">Leaderboard</h1>

    <?php foreach ($replaceChar as $leaderboardValue) { ?>
      <div>
        <?php echo $leaderboardValue['email']; ?>
        <br />
        <?php echo $leaderboardValue['score']; ?>
      </div>
      
    <?php } ?>
  <?php require_once 'layout/footer.php';
  ?>
 
