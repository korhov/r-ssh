<?php
$output = base64_decode(shell_exec('echo -e "help" | nc -U /tmp/mysql.sock | base64'));
print_r(unpack('J*', substr($output, 1)));