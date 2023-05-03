<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ACTIVITY 2.7 - David Zhong</title>	
	
	<meta name="description" content="Activity 2-7">
	<meta name="author" content="David Zhong">

	<style>
		body {
			font-family: 'Trebuchet MS', sans-serif;
			color: #ffffff;
			background-image: url("https://static.vecteezy.com/system/resources/previews/001/217/210/non_2x/binary-code-background-vector.jpg");
	        background-repeat: no-repeat;
	        background-size: cover;
			font-size: 1.5em;
			text-align: center;
		}

		.input_container {
			position: relative;
			display: inline-block;
			box-sizing: border-box;
			background: #000000; 
			padding: 20px;
			padding-top: 1px;
			border-radius: 0.5em 0.5em 0.5em 0.5em;
			box-shadow: 0px 0px 10px #39FF14;
		}

		.container {
			position: relative;
			display: inline-block;
			box-sizing: border-box;
			background: #000000; 
			padding: 20px;
			border-radius: 0.5em 0.5em 0.5em 0.5em;
			box-shadow: 0px 0px 10px #FFFF33;
		}

		.container_error {
			position: relative;
			display: inline-block;
			box-sizing: border-box;
			background: #000000; 
			padding: 20px;
			border-radius: 0.5em 0.5em 0.5em 0.5em;
			box-shadow: 0px 0px 10px #ff0000;
		}

	</style>
</head>
<body>
	<h1>Binary to Decimal</h1>

	<p>Binary is known as a base-2 system and the digits are represented by just 1s and 0s.  The decimal system is a base-10 system.  In mathematics and in computing systems, a binary digit, or bit, is the smallest unit of data. Each bit has a single value of either 1 or 0, which means it can't take on any other value.</p>

	<p>The binary number system is the base of all computing systems and operations. It enables devices to store, access and manipulate all types of information directed to and from the CPU or memory. For more information, visit this site, <a href="https://www.techtarget.com/whatis/definition/binary" style="display: inline; color:#FF5F1F;">TechTarget.com</a>.</p>

	<div class='input_container'><h3>Input must only contain 0s and 1s</h3>

	<form>
		<label for="BinaryInput">Input Binary: </label>
	    <input type="text" id="BinaryInput" name="BinaryInput" pattern="[01]+">

	    <input type="submit" value="Submit" name="Submit" id="submitbtn">
	</form></div>

	<?php

	if(isset($_GET['Submit'])) {
		$BinaryInput = $_GET['BinaryInput'];
		$SplitInput = str_split($BinaryInput);
		$Count = count($SplitInput) - 1;
		$FinalSum = 0;

		if(!empty($BinaryInput)) {

			echo "<br><br><div class='container'>";

			foreach ($SplitInput as $number) {
				$Term = $number * pow(2, $Count);
				$Sum += $Term;

				echo "($number*2<sup>$Count</sup>)";

				$Count -= 1;

				if($Count >= 0) {
        			echo " + ";
        		} else {
        			echo " = $Sum";
        		}

			}

			echo "<br><br><span style='color: green;'>$BinaryInput<sub>2</sub> = $Sum<sub>10</sub></span>";
			echo "</div>";

		} else {
			echo "<br><br><div class='container_error'>Error! Input cannot be blank</div>";
		}
	}

	?>



</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>
</html>
