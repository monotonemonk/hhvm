<?php
parse_str("a[a][]=foo&a[a][b][c]=bar", $_GET);
$_REQUEST = array_merge($_REQUEST, $_GET);

parse_str("1[a][]=foo&1[a][b][c]=bar", $_POST);
$_REQUEST = array_merge($_REQUEST, $_POST);

print_r($_GET);
print_r($_POST);