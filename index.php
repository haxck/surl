<?php
ini_set("display_errors", "On");
error_reporting(E_ALL);

$DB = new mysqli("localhost", "user", "psd", "dataName");

$shortUrl = $_GET['q'];

$surl = "SELECT short_url,long_url FROM url where short_url='".$shortUrl."'";


$res = $DB->query($surl);

$row = $res->fetch_assoc();
if($row){
        header('location:'. $row['long_url']);
}else{
        echo "No website location";
}

?>
