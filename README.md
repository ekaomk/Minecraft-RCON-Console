# Minecrafe RCON Console
#####Tool for send server command via RCON protocal of minecraft server by website.

### Version

#####2.0
* Responsive design.
* Change theme.
* Fix file path.
* Console clear button.
* Update jquery version.
* Update bootstrap version.

#####1.0
* Send command to server directly.
* Show server status and number of current player online.
* List all name of current player online.

#Setting up
1. Download/Clone source file on Bitbucket.
2. Edit "config.php" (port number and RCON password on you.)
```php
$rconHost = "localhost";
$rconPort = 25575;
$rconPassword = "rconpassword";
$queryHost = "localhost";
$queryPort = 25585;
```
3. Upload all file to your server.
4. Edit your "server.properties" file.
add (port number and RCON password on you.)
```
query.port=25585
rcon.port=25575
rcon.password=rconpassword
```
and change
```
enable-rcon=true
enable-query=true
```
5. Restart your server.
6. Done.
