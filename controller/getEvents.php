<?php 
session_start();
include('../inc/config.php');
include('../inc/db.php');

$db = new edb();

$event_id = $_POST['event_id'];

$events = $db->getBooked($event_id);


echo json_encode($events);

?>