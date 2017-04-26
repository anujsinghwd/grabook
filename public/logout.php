<?php include("../include/session.php"); ?>
<?php include("../include/functions.php"); ?>
<?php
session_unset($_SESSION['user_login']);
session_destroy();
redirect_to('home.php');



?>