<?php
declare(strict_types=1);

include '../config/conn.php';

$_SESSION['user'] = null;

header("Location: /");
die();
