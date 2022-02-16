<?php
/*
	errorlog.php v1.0
	by @aaviator42
*/

if(isset($_GET["clear"]) && $_GET["clear"] === "yolo"){
	if(file_exists("error_log")){
		unlink("error_log");
	}
	header("location: errorlog.php");
}

printHeader();

if(file_exists("error_log")){
	$x = file_get_contents("error_log");
	echo $x;
} else {
	echo "<b>>> Empty error_log!</b>" . PHP_EOL;
}

printFooter();



function printHeader(){
echo <<<ENDEND
	
<!DOCTYPE html>
<!-- errorlog.php v1.0 by @aaviator42 -->
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>errorlog.php</title>
	<style>
	body {
		font-family: Verdana, sans-serif;
		padding: 2rem;
		margin: auto;
		font-size: 1rem !important;
	}
	code, pre {
		font-family: monospace;
		background-color: #E6E6E6;
		white-space: pre-wrap;
	}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	<meta name="robots" content="noindex, nofollow, noarchive">

</head>
<body>
	<h2>error_log</h2>
	[<a href="?">refresh</a>] 
	[<a href="?clear=yolo">clear</a>]
	<pre>


ENDEND;
}

function printFooter(){
	echo<<<ENDEND
	</pre>
</body>
</html>

ENDEND;
}