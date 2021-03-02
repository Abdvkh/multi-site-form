<?php
$config = require 'config.php';

$connection = mysqli_connect(
    $config['mysql']['host'],
    $config['mysql']['username'],
    $config['mysql']['password'],
    $config['mysql']['database'],
    $config['mysql']['port']
);

/* check connection */
if (mysqli_connect_errno()) {
    die("Connect failed: %s\n" . mysqli_connect_error());
}

if (isset($_REQUEST['lead'])){
    // Могу реализовать валидацию на стороне сервера при необходимости, но так как срочное задание не сделал
    $name = $_REQUEST['name'] ? sanitize($_REQUEST['name']) : '';
    $number = $_REQUEST['number'] ? sanitize($_REQUEST['number']) : '';
    $sql = "INSERT INTO leads(name, number) VALUES ('$name', '$number')";
    $result = mysqli_query($connection, $sql);

    if ($result){
        $status_code = 201;
    } else {
        $status_code = 500;
    }
    http_send_status($status_code);
}

function sanitize($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}