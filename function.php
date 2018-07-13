<?php
function writeMessage() {
	$myInput = $_POST["myInput"];
	$myfile = fopen("input.txt", "a") or die("Unable to open file!");
	$newInput = "%".$myInput;
	
	if(!isset($_POST["myInput"]) || trim($_POST["myInput"]) == '' ) {
	?>
		
		<h1>Don't play play!</h1>
		<p>Walao, you did not fill out the field.</p>
		<a href="index.php">Sorry boss, give me one more chance.</a>

	<?php
	} else {
		fwrite($myfile, $newInput);
	}
}

writeMessage();
header("location:index.php");
?>
