# connect-four
A basic  console implementation of Connect Four

How to play
===========
1. `composer install`
2. `php src/applicaton.php`

You can set arbitrary board size, players number and the connection length (diameter) by modifying 
`App\Board\Board.php` consonants.

By default game is started by computer which selects a column randomly.

Sample output
=============

```
Welcome to the Connect Four game
=================================
Human (H) vs Robot (R)
+---+---+---+---+---+---+---+
| 1 | 2 | 3 | 4 | 5 | 6 | 7 |
+---+---+---+---+---+---+---+
|   |   |   |   |   |   |   |
|   |   |   |   |   |   |   |
|   |   |   |   |   |   |   |
|   |   |   |   |   |   |   |
|   |   |   |   |   |   |   |
|   |   |   |   |   |   | R |
+---+---+---+---+---+---+---+
Please enter a column number (1,2,3,4,5,6,7):       
```