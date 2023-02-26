<?php 
include_once('config.php');
include_once('library/mainFunctions.php');
include_once('library/CookieManager.php');
session_start();

loadPage($smarty, 'Index', 'index');