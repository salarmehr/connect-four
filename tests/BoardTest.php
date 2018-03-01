<?php

namespace App\Board;

class BoardTest extends \PHPUnit\Framework\TestCase
{

    public function testDrop()
    {

    }

    public function testGetAllowedMoves()
    {
    }

    public function testDetectWin()
    {
        $columns = [
            0 =>
                [
                    0 => 'R',
                    1 => 'R',
                    2 => 'R',
                    3 => 'R',
                    4 => null,
                    5 => null,
                ],
            1 =>
                [
                    0 => 'Y',
                    1 => null,
                    2 => null,
                    3 => null,
                    4 => null,
                    5 => null,
                ],
            2 =>
                [
                    0 => 'Y',
                    1 => null,
                    2 => null,
                    3 => null,
                    4 => null,
                    5 => null,
                ],
            3 =>
                [
                    0 => null,
                    1 => null,
                    2 => null,
                    3 => null,
                    4 => null,
                    5 => null,
                ],
            4 =>
                [
                    0 => null,
                    1 => null,
                    2 => null,
                    3 => null,
                    4 => null,
                    5 => null,
                ],
            5 =>
                [
                    0 => null,
                    1 => null,
                    2 => null,
                    3 => null,
                    4 => null,
                    5 => null,
                ],
            6 =>
                [
                    0 => 'Y',
                    1 => 'Y',
                    2 => null,
                    3 => null,
                    4 => null,
                    5 => null,
                ],
        ];

        $board = new Console;
        $board->columns = $columns;
        $this->assertTrue($board->detectWin());
    }

    public function testDetectConnection()
    {

    }

    public function testGetLines()
    {

    }
}
