<?php
include_once "config.php";
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (!$conn) {
    echo "No connection database!";
    exit();
    }
function fetchAll($sql){
    global $conn;
    $arr = [];
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        echo 'Ошибка: '.mysqli_errno($conn).': '.mysqli_error($conn);
        exit();
    }
    if (mysqli_num_rows($res) == 0) {
    
        return false;
    } else {
        while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)){
            $arr[] = $row;
        }
        
        return $arr;
    }
}
function fetchOne($sql){
    global $conn;
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        echo 'Ошибка: '.mysqli_errno($conn).': '.mysqli_error($conn);
        exit();
    }
    if (mysqli_num_rows($res) == 0) {
    
        return false;
    } else {
        $row = mysqli_fetch_array($res, MYSQLI_ASSOC))
        
        return $row;
    }
}
