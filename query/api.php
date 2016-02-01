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

require 'query.php';

require '../config.php';

if(!isset($_POST["case"])) return;

try
{
  switch($_POST["case"])
  {
    case "getinfo":{
      $Query = new Query($queryHost, $queryPort);
      if ($Query->connect())
      {
        header("Content-type: application/json");
        echo json_encode($Query->get_info());
      }


      break;
    }
    default: break;
  }
}
catch( Exception $e )
{
  echo $e->getMessage( );
}
?>
