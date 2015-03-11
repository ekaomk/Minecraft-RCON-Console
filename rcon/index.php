<?php
require 'rcon.php';
require '../config.php';

$host = $rconHost; // Server host name or IP
$port = $rconPort;                      // Port rcon is listening on
$password = $rconPassword; // rcon.password setting set in server.properties
$timeout = 3;                       // How long to timeout.
 
$rcon = new Rcon($host, $port, $password, $timeout);

if(!isset($_POST['cmd'])) return;

if ($rcon->connect())
{
	$rcon->send_command($_POST['cmd']);
	//echo $rcon->get_response();
	echo preg_replace("/§./", "", $rcon->get_response()); //remove some invalid char
}

//if(!isset($_REQUEST['case'])) return;

/*switch ($_REQUEST['case'])
{
case "give" : 
if(!isset($_REQUEST[playername]) || !isset($_REQUEST[itemid]) || !isset($_REQUEST[amount])) return;
$playername = $_REQUEST[playername];
$itemid = $_REQUEST[itemid];
$amount = $_REQUEST[amount];
if ($rcon->connect())
{
	$rcon->send_command("give $playername $itemid $amount");
	echo $rcon->get_response();
}
break;
default: break;

}
*/
?>