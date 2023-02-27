<?php
    require_once (__DIR__.'/../data/leaderboard.php');
    require_once (__DIR__.'/../services/replaceAtByDiez.php');
?>

<h1>Leaderboard</h1>

<?php 
    foreach ($leaderboard as $player) { 
        echo '<div>'.
                replaceAtByDiez($player['email']).
                '<br />'.
                $player['score'].
            '</div>';
    } 
?>