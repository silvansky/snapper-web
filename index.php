<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<head>
	<title>Snapper-Web: Valentine Silvansky</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<script type="text/javascript" src="snapper.js"></script>
	<link rel="stylesheet" type="text/css" href="snapper.css" />
</head>

<body onload="JavaScript:timedRefresh(1);">
	<div class=main>

<?php

$time = exec("./lastsnap.sh");

print("	<div class=snapdiv><img class=snap src='lastsnap.png?" . rand() . "' /></div>");

print("	<p class=time>Snapshot time: " . $time . "\n</p>\n");

print("	<p class=footer>\n");
print("	<a href='https://github.com/silvansky/snapper-web'>src@github</a><br>\n");
print("	© 2013 silvansky\n");
print("	</p>");

?>

	</div>
</body>
</HTML>
