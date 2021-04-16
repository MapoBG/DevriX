<?php
require_once 'common.php';

unset($_SESSION["id"]);
unset($_SESSION["username"]);
header("Location:index.php");
