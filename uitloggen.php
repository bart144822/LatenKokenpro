<?php 
session_start();
?>
<html>
<title>Uitgelogd</title>
<link href="uitlog.css" rel="stylesheet" type="text/css">
<body>
<?php
session_unset();

session_destroy();

?>
<h1> U bent uitgelogd </h1>
<form>
<input type="submit" formaction="index.php" ID="button" value="Home">
</form>
<?php
include 'footer.php';
?>
</body>
</html>