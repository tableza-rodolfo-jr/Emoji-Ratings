<?php

session_start();
unset($_SESSION['UserLogin']);
unset($_SESSION['Access']);
unset($_SESSION["email"]);
unset($_SESSION["password"]);
echo header("Location: index.php");

?>