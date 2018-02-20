<?php
/*
This file is part of Minecraft-RCON-Console.

Minecraft-RCON-Console is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Minecraft-RCON-Console is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Minecraft-RCON-Console.  If not, see <http://www.gnu.org/licenses/>.
*/

require 'config.php';
?>

<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Minecraft RCON Console</title>

	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<script type="text/JavaScript" src="script.js"></script>

	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>


<body>
	<!-- Stack the columns on mobile by making one full-width and the other half-width -->
	<div class="container-fluid content" style="padding-top: 15px;">
		<div class="alert alert-info" id="alertMessenge">Welcome to Minecraft RCON Console.</div>
		<div class="alert alert-info"><center><?php echo $serverName; ?></center></div>
		<div class="row">
			<div class="col-md-8 col-lg-8 console">
				<div class="panel panel-primary" >
					<div class="panel-heading">
						<h3 class="panel-title">Console</h3>
					</div>
					<div class="panel-body">
						<ul class="list-group" id="groupConsole">
							<li class="list-group-item list-group-item-info">Welcome to Minecraft RCON Console.</li>
							<li class="list-group-item list-group-item-info">View all command at <a href="http://minecraft.gamepedia.com/Commands" target="_blank">http://minecraft.gamepedia.com/Commands</a></li>
							<li class="list-group-item list-group-item-info">View item name and id at <a href="http://www.minecraftinfo.com/idlist.htm" target="_blank">http://www.minecraftinfo.com/idlist.htm</a></li>
						</ul>

					</div>
				</div>

				<div class="checkbox panel panel-default panel-body">
					<label style="padding-top: 1%;">
						<input type="checkbox" id="chkAutoScroll" checked="true" > Auto scroll
					</label>
					<button type="button" class="btn btn-primary" tabindex="0" id="btnClearLog" style="float:right;"><span class="glyphicon glyphicon-remove-sign"></span> Clear Console</button>
				</div>

				<div class="input-group">
					<input type="text" class="form-control" id="txtCommand">
					<div class="input-group-btn">
						<button type="button" class="btn btn-primary" tabindex="-1" id="btnSend"><span class="glyphicon glyphicon-arrow-right"></span> Send</button>
					</div>
				</div>
			</div>



			<div class="col-md-4 col-lg-4 status">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Server Status & Info</h3>
					</div>
					<div class="panel-body">
						<iframe src="query/status.php" width="100%" height="378px" frameBorder="0">Browser not compatible.</iframe>
					</div>

				</div>
				<div class="panel panel-default">
					<div class="panel-body">
						Minecraft RCON Console 1.1 | Develop by ekaomk
					</div>
				</div>

			</div>

		</div>
	</div>



</body>

<footer id = "footer">
	<div class="container-fluid">

	</div>
</footer>

</html>
