<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ACTIVITY 2.3c - David Zhong</title>	
	
	<meta name="description" content="Activity 2-3c">
	<meta name="author" content="David Zhong">

	<style>
		body {
			font-family: 'Trebuchet MS', sans-serif;
			color: #ffffff;
			background: #8aaae5;
			text-align: center;
		}

		.buttons {
			font-size: 2em;
			text-align: center;
		}


	</style>
</head>
<body>

<?php
$chosen_option = $_GET['option'];

if ($chosen_option == "") {
	echo "<h1>Given the following position, choose the best move out of the 2 provided moves:</h1>"; ?>
	
	<img src="https://lichess1.org/export/fen.gif?fen=3r3r%2Fp2Q1pkp%2F2p1pp2%2F8%2F5q2%2F6N1%2FPPP3PP%2F3R2K1+w+-+-+7+19&color=white&lastMove=a8d8&variant=standard&theme=blue&piece=cburnett" alt="Starting Position">

	<br />

	<a href="choose-your-adventure.php?option=aa358f4c167b67e25fce8470301f2284" class='buttons'>Rxd8</a> | <a href="choose-your-adventure.php?option=f66e818eb2b5e0f874c819b87c8df10b" class='buttons'>Nh5+</a>

<?php } elseif ($chosen_option == "aa358f4c167b67e25fce8470301f2284") {
	echo '<p style="font-size: 2.5em";>This is the incorrect move! There is a better move, thus sacrificing the queen is not necessary.</p>'; ?>

	<img src="https://lichess1.org/export/fen.gif?fen=3r3r%2Fp2Q1pkp%2F2p1pp2%2F8%2F5q2%2F6N1%2FPPP3PP%2F3R2K1+w+-+-+7+19&color=white&lastMove=a8d8&variant=standard&theme=blue&piece=cburnett" alt="Starting Position">

	<br />

	<a href="choose-your-adventure.php?option=aa358f4c167b67e25fce8470301f2284" class='buttons'>Rxd8</a> | <a href="choose-your-adventure.php?option=f66e818eb2b5e0f874c819b87c8df10b" class='buttons'>Nh5+</a>

<?php } elseif ($chosen_option == "f66e818eb2b5e0f874c819b87c8df10b") {
	echo '<p style="font-size: 2.5em";>This is the correct move! Moving the knight to h5 gives a check and also threatens to win the queen, which is called a fork. </p>'; ?>

	<h1>The king has moved to h6 to get out of check. Find the continuation:</h1>
	<img src="https://lichess1.org/export/fen.gif?fen=3r3r%2Fp2Q1p1p%2F2p1pp1k%2F7N%2F5q2%2F8%2FPPP3PP%2F3R2K1+w+-+-+9+20&color=white&lastMove=g7h6&variant=standard&theme=blue&piece=cburnett" alt="First Move Position">

	<br />

	<a href="choose-your-adventure.php?option=0714fdfec28131c77324eef95e7656c9" class='buttons'>Nxf4</a> | <a href="choose-your-adventure.php?option=eae17726528f1afeea44e5c185cf7975" class='buttons'>Qxf7</a>	

<?php } elseif ($chosen_option == "eae17726528f1afeea44e5c185cf7975") {
	echo '<p style="font-size: 2.5em";>This is the incorrect move! Although it looks like you are protecting the knight from being captured by the king using our queen, this in-turn hangs our rook, which is not good. </p>'; ?>

	<img src="https://lichess1.org/export/fen.gif?fen=3r3r%2Fp2Q1p1p%2F2p1pp1k%2F7N%2F5q2%2F8%2FPPP3PP%2F3R2K1+w+-+-+9+20&color=white&lastMove=g7h6&variant=standard&theme=blue&piece=cburnett" alt="First Move Position">

	<br />

	<a href="choose-your-adventure.php?option=0714fdfec28131c77324eef95e7656c9" class='buttons'>Nxf4</a> | <a href="choose-your-adventure.php?option=eae17726528f1afeea44e5c185cf7975" class='buttons'>Qxf7</a>	

<?php } elseif ($chosen_option == "0714fdfec28131c77324eef95e7656c9") {
	echo '<p style="font-size: 2.5em";>This is the correct move! Capturing the queen with the knight. </p>'; ?>

	<h1>After capturing the opponent's queen, the opponent has then captured our queen. Pick the best response:</h1>
	<img src="https://lichess1.org/export/fen.gif?fen=7r%2Fp2r1p1p%2F2p1pp1k%2F8%2F5N2%2F8%2FPPP3PP%2F3R2K1+w+-+-+0+21&color=white&lastMove=d8d7&variant=standard&theme=blue&piece=cburnett" alt="Second Move Position">

	<br />

	<a href="choose-your-adventure.php?option=491adbb3a617fb36f84853268f4a7dc2" class='buttons'>Nd3</a> | <a href="choose-your-adventure.php?option=171d795a6e827d864b831ca08e2ff857" class='buttons'>Rxd7</a>

<?php } elseif ($chosen_option == "491adbb3a617fb36f84853268f4a7dc2") {
	echo '<p style="font-size: 2.5em";>This is the incorrect move! There is a better move. </p>'; ?>

	<h1>After capturing the opponent's queen, the opponent has then captured our queen. Pick the best response:</h1>
	<img src="https://lichess1.org/export/fen.gif?fen=7r%2Fp2r1p1p%2F2p1pp1k%2F8%2F5N2%2F8%2FPPP3PP%2F3R2K1+w+-+-+0+21&color=white&lastMove=d8d7&variant=standard&theme=blue&piece=cburnett" alt="Second Move Position">

	<br />

	<a href="choose-your-adventure.php?option=491adbb3a617fb36f84853268f4a7dc2" class='buttons'>Nd3</a> | <a href="choose-your-adventure.php?option=171d795a6e827d864b831ca08e2ff857" class='buttons'>Rxd7</a>

<?php } elseif ($chosen_option == "171d795a6e827d864b831ca08e2ff857") {
	echo '<p style="font-size: 2.5em";>This is the correct move! We can take back with our rook, and we are now up material. </p>'; ?>

	<h1>Success! You have completed the puzzle!</h1>
	<img src="https://lichess1.org/export/fen.gif?fen=7r%2Fp2R1p1p%2F2p1pp1k%2F8%2F5N2%2F8%2FPPP3PP%2F6K1+b+-+-+0+21&color=white&lastMove=d1d7&variant=standard&theme=blue&piece=cburnett" alt="Final Position">
<?php } ?>


</body>
</html>
