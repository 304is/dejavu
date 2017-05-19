<?php
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: ../template/404.php");
}
?>