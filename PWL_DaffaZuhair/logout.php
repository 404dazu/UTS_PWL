<?php
session_start();
//session_destroy();
unset($_SESSION['MEMBER']);
//landing page
header('location:http://localhost/PWL_DaffaZuhair/index.php?hal=home');