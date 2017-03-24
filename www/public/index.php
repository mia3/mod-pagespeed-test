<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="/scripts/header_foo.js"></script>
	<link rel="stylesheet" type="text/css" href="styles/foo.css" />
	<link rel="stylesheet" type="text/css" href="styles/bar.css" />
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="styles/bootstrap-theme.css" />
</head>
<body>

<?php

$files = scandir('./images/');
foreach ($files as $file) {
	if (substr($file, 0, 1) == '.') {
		continue;
	}
	echo '<img src="/images/' . $file . '" />' . chr(10);
}
?>

<script type="text/javascript" src="/scripts/foo.js"></script>
<script type="text/javascript" src="/scripts/bar.js"></script>
</body>
</html>