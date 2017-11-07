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
</body>
</html>