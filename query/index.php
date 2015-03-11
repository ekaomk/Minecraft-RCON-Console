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