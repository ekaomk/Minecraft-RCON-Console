<?php
    require __DIR__ . '/MinecraftQuery.class.php';
    require '../config.php';

    $Query = new MinecraftQuery( );
	if(!isset($_POST["case"]))return;
	
    try
    {
		switch($_POST["case"])
		{
			case "getinfo": 
				$Query->Connect( $queryHost, $queryPort );
				echo json_encode($Query->GetInfo());
			break;
			case "getplayers": 
				$Query->Connect( $queryHost, $queryPort );
				echo json_encode($Query->GetPlayers());
			break;
			default: break;
		}
    }
    catch( MinecraftQueryException $e )
    {
        echo $e->getMessage( );
    }
?>