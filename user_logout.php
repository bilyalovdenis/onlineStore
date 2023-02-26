<?php

include_once('config.php');
include_once('library/mainFunctions.php');
session_start(); 
session_unset();
session_destroy();

echo json_encode($_SESSION['user']);