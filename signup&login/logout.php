<?php

require_once 'source/session.php';

session_destroy();
header('location: http://localhost/Cholo_Bangladesh/index.php');

?>
