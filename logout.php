<?php
session_start();
session_destroy();
header('Location: monApplication.php');
exit();
?>