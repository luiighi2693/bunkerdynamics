<?php
/**
 * Created by PhpStorm.
 * User: luisc
 * Date: 25/7/2016
 * Time: 8:58 PM
 */

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$headers = 'From: '.$email . "\r\n" .
    'Reply-To: yr000226@bunkerdynamics.net' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

//mail('yr000226@bunkerdynamics.net', 'titulo', $message, $headers);

header("Location: index.php");
die();