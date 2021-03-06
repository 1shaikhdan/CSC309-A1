<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Games - Guess Game</title>
	</head>
	<body>
		<header><h1>Guess Game: Congratulations!</h1></header>
		<nav>
			<ul>
			<li> <a href="?nav=GameStats">Game Stats</a>	
			<li> <a href="?nav=GuessGame">Guess Game</a>
			<li> <a href="?nav=15Puzzle">15 Puzzle</a>
			<li> <a href="?nav=PegSolitaire">Peg Solitaire</a>
			<li> <a href="?nav=Mastermind">Mastermind</a>
			<li> <a href="?nav=UserProfile">User Profile</a>
			<li> <a href="?nav=login">Logout</a>
			</ul>
		</nav>
		<main>
		<?php echo(view_errors($errors)); ?>
		<?php 
			foreach($_SESSION['GuessGame']->history as $key=>$value){
				echo("<br/> $value");
			}
		?>
		<br> <br>
		<form method="post">
			<button type='submit' name='newgame' value='a'>New Game</button>
		</form>
		</main>	
	</body>
</html>

