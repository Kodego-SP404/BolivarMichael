<?php
session_start();

if (isset($_SESSION['usename'])){
  echo '<h1>Welcome, Michael' . $_SESSION['username'] . '</h1>';
  echo '<a href="logout.php">Logout</a>';
} else {
  echo '<h1>Welcome, Michael</h1>';
  echo '<a href="/bolivar/phpdemo/13_sessions.php">Home</a>';
}