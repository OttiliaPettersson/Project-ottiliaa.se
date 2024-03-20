<?php
session_start();
 
// Förstör alla sessioner
session_destroy();
 
// Omdirigera till startsidan (index.php)
header("Location: home");
exit();
?>