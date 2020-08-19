<?php
session_start();
session_unset();
session_destroy();

echo "you have logged out successfully";

header("refresh:3;url=index.php");





?>