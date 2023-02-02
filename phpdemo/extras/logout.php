<?php
session_start();

//destroy the session
session_destroy();
header('Location: /bolivar/phpdemo/13_sessions.php');