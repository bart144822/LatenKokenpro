<?php
// Query afsluiten 
mysqli_free_result($result); 
// Connectie verbreken
mysqli_close($db);
?>