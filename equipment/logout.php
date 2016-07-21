<?php
session_start();
session_destroy();
Header("LocationL../login/loginAjax.php");
?>