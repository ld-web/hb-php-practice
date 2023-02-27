<?php
require_once 'data/leaderboard.php';
require_once 'layout/navbar.php';
?>

    <h1 class="my-5 text-center text-decoration-underline">Leaderboard</h1>

    <?php foreach ($replaceChar as $leaderboardValue) { ?>
      <Section class="container">
      <div class="row flex-column align-items-center">
        <div class="col-md-3 border rounded mb-2">
          <?php echo $leaderboardValue['email']; ?>
          <br />
          <?php echo $leaderboardValue['score']; ?>
        </div>
      </div>
      </Section>
    <?php } ?>
  <?php require_once 'layout/footer.php';
  ?>
 
