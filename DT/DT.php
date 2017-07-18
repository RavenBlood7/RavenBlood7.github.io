<!DOCTYPE>
<html>
<head>
	<title>well done</title>
</head>
<body>
Thank you for contributing. The details have been added:
<br/>
<br/>

<?php

$format = "d F 'y ,h:m:s";
$toWrite = 	date_format(date_create(), $format).',';
$toWrite .= 	$_POST["TOD"].','.
			$_POST["overall"].','.
			$_POST["feelings"].','.
			$_POST["thoughts"].','.
			$_POST["confidence"].','.
			$_POST["emo_energy"].','.
			$_POST["ment_energy"].','.
			$_POST["phy_energy"].','.
			$_POST["popcorn"].','.
			$_POST["circumstance"].','.
			$_POST["pain"].','.
			$_POST["loneliness"].','.
			$_POST["depression"].','.
			$_POST["diet"].','.
			$_POST["social"].','.
			$_POST["location"].','.
			$_POST["input"].','.
			$_POST["comment"]."\n";
			
file_put_contents("DT.dat", $toWrite, FILE_APPEND);
echo $toWrite;

?>
</body>
</html>
