<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Minecraft RCON Console</title>

	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script type="text/JavaScript" src="script.js"></script>

	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>


<body>
		<!-- Stack the columns on mobile by making one full-width and the other half-width -->
		<div class="container-fluid content" style="padding-top: 15px;">
			<div class="alert alert-info" id="alertMessenge">Welcome to Minecraft RCON Console.</div>
			<div class="row">
				<div class="col-md-8 col-lg-8">	
					<div class="panel panel-primary console" >
						<div class="panel-heading">
							<h3 class="panel-title">Console</h3> 
						</div>
						<div class="panel-body">
							<ul class="list-group" id="groupConsole">
								<li class="list-group-item list-group-item-info">Welcome to Minecraft RCON Console.</li>
								<li class="list-group-item list-group-item-info">View all command at <a href="http://minecraft.gamepedia.com/Commands" target="_blank">http://minecraft.gamepedia.com/Commands.</a></li>
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



				<div class="col-md-4 col-lg-4">
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
							Minecraft RCON Console 1.0 | Develop by iamnoT
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