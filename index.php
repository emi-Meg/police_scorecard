<?php
// Specify the URL to redirect to
$url = 'psms_user';

// Perform the redirect
header("Location: $url");

// Ensure that no further code is executed after the redirect
exit();
?>
