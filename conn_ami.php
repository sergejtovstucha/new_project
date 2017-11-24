<?php
$socket = fsockopen("127.0.0.1","5038", $errno, $errstr, $timeout);
fputs($socket, "Action: Login\r\n");
fputs($socket, "UserName: login\r\n");
fputs($socket, "Secret: password\r\n\r\n");
fputs($socket, "Action: ListCommands\r\n\r\n");
fputs($socket, "Action: Logoff\r\n\r\n");
while (!feof($socket)) {
$wrets .= fread($socket, 8192);
}
fclose($socket);
echo $wrets;
?>
