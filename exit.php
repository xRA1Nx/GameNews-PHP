<?php
session_start();
session_unset();
// $_SESSION = [];
header("location:index.php");
