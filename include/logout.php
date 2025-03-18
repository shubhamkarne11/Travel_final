<?php

require('../include/db.php');

session_start();
session_unset();
session_destroy();

header('location:../Admin_Panel_Team_B/login.php');

?>