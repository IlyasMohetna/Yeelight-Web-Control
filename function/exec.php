<?php
require "Yeelight.class.php";

$yee = new Yeelight("192.168.0.23", 55443);
switch($_POST['action']){
	case'power':
	$yee->set_power($_POST['status']);
	break;

	case'color':
	$color = "0x".str_replace('#','',$_POST['color']);
	$color = "0x".str_replace('#','',$_POST['color']);
	$yee->set_power("on");
	$yee->set_rgb(hexdec($color));
	break;

	case'luminosity':
	// comming soon on the next update
	break;
}

$yee->commit(); // changes are not sent to the bulb before commit() is called
// $status = $yee->get_prop("power")->commit(); // get current status
$yee->disconnect();
?>