<?php

namespace App\Player;

use App\Board\Board;

class Human extends Player
{
  public function drop(Board $board): Board
  {
    $column = null;
    $options = array_map(function ($v) {
      return ++$v;
    },$board->getAllowedCollumns());

    while (!in_array($column, $options)) {
      $column = readline('Please enter a column number (' . implode($options, ',') . '): ');
    }
    $board->drop(--$column,$this->disk);
    return $board;
  }
}