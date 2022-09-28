<?php

define('HOST', 'mysql.hostinger.in');
define('USERNAME', 'username');
define('PASSWORD', 'password');
define('DB', 'u286580799_calct');

$con = mysqli_connect(HOST, USERNAME, PASSWORD, DB) or die('Unable to connect');
