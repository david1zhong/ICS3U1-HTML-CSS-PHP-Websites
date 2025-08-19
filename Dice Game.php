<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dice Game Activity - David Zhong</title>	
	
	<meta name="description" content="Dice Game Activity">
	<meta name="author" content="David Zhong">

	<style>
		body {
			font-family: 'Trebuchet MS', sans-serif;
			color: #ffffff;
			background: #8aaae5;
	    	font-size: 30px;
	    	text-align: center;
		}
	</style>
</head>
<body>


	<h1>Dice Game!</h1>

	<form method="get">
		<label for="creditsinput">Enter number of credits:</label>
		<input type="number" id="creditsinput" name="creditsinput" step="1" 
		style="width: 6em; height: 1em; font-size: 1em" required>

		<br><br>

    	<label for="dienumber">Guess the number on the die:</label>
    	<select id="dienumber" name="dienumber" style="width: 6em; height: 1.2em; font-size: 1em" required>
      		<option value="1">1</option>
      		<option value="2">2</option>
      		<option value="3">3</option>
      		<option value="4">4</option>
      		<option value="5">5</option>
      		<option value="6">6</option>
    	</select>

		<br><br>

		<input type="submit" value="Submit" id="submitbtn" name="submitbtn" style="width: 6em; height: 1.4em; font-size: 1em">
		<input type="submit" value="Reset" id="resetbtn" name="resetbtn" style="width: 6em; height: 1.4em; font-size: 1em">
	</form>

	<br><br>


	<?php

	if (!isset($_SESSION['balance'])) {
		$_SESSION['balance'] = 100;
		$_SESSION['wins'] = 0;
		$_SESSION['losses'] = 0;
	}


	$roll = rand(1, 6);
	$credits = $_GET['creditsinput'];
	$die = $_GET['dienumber'];

	if ($_GET['resetbtn']) {
		unset($_SESSION['balance']);
		unset($_SESSION['wins']);
		unset($_SESSION['losses']);
		unset($_SESSION['creditsinput']);
		unset($_SESSION['dienumber']);

	}

	if ($_GET['submitbtn']) {
		echo "Die landed on a " . $roll . ". " . "You picked " . $die . ".";
	?>

	<br>

	<?php
		echo "<img src=\"images/die" . $roll . ".gif\" alt=\"die image\" style=\"height:200px; width:200px;\">";

	?>

	<br>

	<?php
		if ($roll == $die) {
			$_SESSION['balance'] += $credits;
			echo "Correct! Your balance is now: " . $_SESSION['balance'];
	?>

	<br>

	<?php
			$_SESSION['wins']++;
			echo "You are at " . $_SESSION['wins'] . " wins | " . $_SESSION['losses'] . " losses";
	?>

	<br>

	<?php
		} else {
			$_SESSION['balance'] -= $credits;
			echo "Wrong! Your balance is now: " . $_SESSION['balance'];
	?>

	<br>

	<?php
			$_SESSION['losses']++;
			echo "You are at " . $_SESSION['wins'] . " wins | " . $_SESSION['losses'] . " losses";
		}
	}
	?>

	<br>


</body>
</html>
