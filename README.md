# Minecraft RCON Console
##### Tool for send server command via RCON protocal of minecraft server by website.

![alt tag](https://github.com/ekaomk/Minecraft-RCON-Console/blob/master/screenshot/pc.jpg)

![alt tag](https://cdn.rawgit.com/ekaomk/Minecraft-RCON-Console/master/screenshot/mobile.png)

### Version

##### 2.1
* Change query library.
* Fix responsive on mobile.
* Update jquery version.
* Update bootstrap version.

##### 2.0
* Responsive design.
* Change theme.
* Fix file path.
* Console clear button.
* Update jquery version.
* Update bootstrap version.

##### 1.0
* Send command to server directly.
* Show server status and number of current player online.
* List all name of current player online.

# Setting up
1. Download/Clone source file
2. Edit "config.php" (port number and RCON password on you.)
```php
$rconHost = "localhost";
$rconPort = 25575;
$rconPassword = "rconpassword";
$queryHost = "localhost";
$queryPort = 25585;
```
3. Edit "authsys.php" to create accounts (information in file) - the default username is `admin`, default password `1234abcd`
4. Upload all file to your server.
5. Edit your "server.properties" file.
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
6. Restart your server.
7. Done.
