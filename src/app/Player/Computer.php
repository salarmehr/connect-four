<?php

namespace App\Player;

use App\Board\Board;

class Computer extends Player
{
  public function drop(Board $board): Board
  {
    $options = $board->getAllowedCollumns();
    return $board->drop($options[array_rand($options)], $this->disk);
  }
}