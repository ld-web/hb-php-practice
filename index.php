<?php 
require_once __DIR__.'/data.php';
?>
<?php 
require_once __DIR__.'/header.php';
?>

  <div class="d-flex gap-2">
    <?php foreach ($leaderboard as $player) { ?>
        <div class="card" style="width: 18rem;">
        <img src="image.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <?php echo $player['email']; ?>
            <br />
            <?php echo $player['score']; ?>
          </div>
        </div>
    <?php } ?>
  </div>

    <?php
    require_once __DIR__.'/footer.php';
    ?>
