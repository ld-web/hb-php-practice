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

// La fonction "array_map" prend en premier argument une fonction anonyme qui sera appliquée à chaque élément du tableau "$leaderboard". Cette fonction anonyme a un argument "$leaderboard" qui représente chaque joueur dans le tableau.

$replaceChar = array_map(function($leaderboard) {
    $leaderboard['email'] = str_replace('@', '/', $leaderboard['email']);
    return $leaderboard;
}, $leaderboard);