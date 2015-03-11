<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Minecraft RCON Console</title>

	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../script.js"></script>

	<meta http-equiv="refresh" content="30">

</head>


<body>
	<div class="container-fluid">
		<div class="list-group-item list-group-item-info">

			<?php
			$url = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/index.php';
			$params= 'case=getinfo';

			$ch = curl_init( $url );
			curl_setopt( $ch, CURLOPT_POST, 1);
			curl_setopt( $ch, CURLOPT_POSTFIELDS, $params);
			curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt( $ch, CURLOPT_HEADER, 0);
			curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

			$purejson = curl_exec( $ch );
			if($purejson != "Failed to receive challenge.") {
				echo "Server status : Online<br>";
			}
			else
			{
				echo "Server status : Offline<br>";
				return;
			}

			$json = json_decode($purejson);

			echo format("Host Name : {0}{1}", $json->HostName, "<br>");
			echo format("Game Type : {0}{1}", $json->GameType, "<br>");
			echo format("Version : {0}{1}", $json->Version, "<br>");
			echo format("Plugins : {0}{1}", $json->Plugins[0], "<br>");
			echo format("Map Name : {0}{1}", $json->Map, "<br>");
			$division = $json->Players / $json->MaxPlayers;
			$percent = $division * 100;
			echo format("Online : {0} / {1} ({2}%){3}", $json->Players, $json->MaxPlayers, $percent, "<p>");

			$progressClass = "progress-bar";
			if($percent > 80) $progressClass = "progress-bar progress-bar-danger";

			echo format("<div class='progress progress-striped'>
				<div class='{0}' role='progressbar' aria-valuenow='{1}' aria-valuemin='0' aria-valuemax='{2}' style='width: {3}%;'>
				<span class='sr-only'>{3}% Complete</span>
				</div>
				</div>", $progressClass, $json->Players, $json->MaxPlayers, $percent);

			echo format("Host Port : {0}{1}", $json->HostPort, "<br>");
			echo format("Host IP : {0}{1}", $json->HostIp, "<br>");
			echo format("Software : {0}{1}", $json->Software, "<br>");



			function format($format) {
				$args = func_get_args();
				$format = array_shift($args);

				preg_match_all('/(?=\{)\{(\d+)\}(?!\})/', $format, $matches, PREG_OFFSET_CAPTURE);
				$offset = 0;
				foreach ($matches[1] as $data) {
					$i = $data[0];
					$format = substr_replace($format, @$args[$i], $offset + $data[1] - 1, 2 + strlen($i));
					$offset += strlen(@$args[$i]) - 2 - strlen($i);
				}

				return $format;
			}

			//////////////////////////////////////////////////////
			echo "<br>";

			$params="case=getplayers";

			$ch = curl_init( $url );
			curl_setopt( $ch, CURLOPT_POST, 1);
			curl_setopt( $ch, CURLOPT_POSTFIELDS, $params);
			curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt( $ch, CURLOPT_HEADER, 0);
			curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

			$purejson = curl_exec( $ch );

			$allPlayer = "";
			$json = json_decode($purejson);
			if($json != false){
				foreach ($json as &$value) {
					$allPlayer .= $value;
					$allPlayer .= ",";
				}
			}

			$allPlayer = rtrim($allPlayer, ",");

			echo "Name of current players online : ". $allPlayer;

			?>
		</div>

	</body>

	</html>