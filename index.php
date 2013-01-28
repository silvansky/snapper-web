<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<head>
	<title>Snapper-Web: silvansky</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<script type="text/javascript" src="snapper.js"></script>
	<link rel="stylesheet" type="text/css" href="snapper.css" />
</head>

<body onload="JavaScript:timedRefresh(5000);">

<?php

$time = exec("./lastsnap.sh");

print("<div class=snapdiv><img class=snap src='lastsnap.png?" . rand() . "' /></div>");

print("<p class=time>Snapshot time: " . $time . "\n</p>");

?>

</body>
</HTML>