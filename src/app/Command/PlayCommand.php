<?php

namespace App\Command;

use App\Player\Computer;
use App\Player\Human;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PlayCommand extends Command
{
  protected function configure()
  {
    $this
      // the name of the command (the part after "bin/console")
      ->setName('play')
      // the short description shown while running "php bin/console list"
      ->setDescription('Play now!')
      // the full command description shown when running the command with
      // the "--help" option
      ->setHelp('Start playing with a super-dump computer!');
  }

  protected function execute(InputInterface $input, OutputInterface $output)
  {
    $board = new \App\Board\Console();

    $output->writeLn([
      'Welcome to the Connect Four game',
      '=================================',
    ]);

    $redPlayer = new Human('Human','R');
//    $redPlayer = new Computer('Red', 'R');
    $yellowPlayer = new Computer('Robot', 'Y');

    $output->writeln([
      "$redPlayer->name ($redPlayer->disk) vs $yellowPlayer->name ($yellowPlayer->disk)"
    ]);

    $players = [$redPlayer, $yellowPlayer];
    $turn = 0; // which player should drop next

    while ($board->getAllowedCollumns()) {
      $turn = ($turn + 1) % count($players);
      $player = $players[$turn];
      $player->drop($board);
      $board->render($output);
      if ($board->detectWin()) {
        $output->writeln("$player->name won!");
        var_export($board->columns);
        break;
      }
    }
  }
}