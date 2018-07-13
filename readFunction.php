<?php
function readMessage() {
	$myfile = fopen("input.txt", "r") or die("Unable to open file!");
	$filedata = fread($myfile,filesize("input.txt"));
	fclose($myfile);
	?>
	<div id="inputData"><?php echo $filedata; ?></div>
	<div id="inputDataList"></div>
	<?php
}

readMessage();
?>