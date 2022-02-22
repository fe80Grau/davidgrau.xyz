<?php

$output = shell_exec('/var/www/html/davidgrau.xyz/pull.sh 2>&1');

echo($output);

?>
