<?php
$socket = socket_create(AF_UNIX, SOCK_RAW, 0);
socket_bind($socket, '/tmp/server.sock');