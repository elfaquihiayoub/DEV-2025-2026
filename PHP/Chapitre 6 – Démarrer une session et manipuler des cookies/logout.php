<?php

session_start();
session_unset();
session_destroy();
setcookie("user","",time()-7200);
header("location: login.php")


?>