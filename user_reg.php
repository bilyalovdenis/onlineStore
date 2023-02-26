<?php

include_once('config.php');
include_once('library/mainFunctions.php');
session_start();

loadPage($smarty, 'User', 'registerNewUser');
