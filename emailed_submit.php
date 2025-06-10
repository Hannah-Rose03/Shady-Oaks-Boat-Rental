<?php
$to = "sdean@mscok.edu";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: sdean@mscok.edu" . "\r\n" .
"CC: sdean7070@gmail.com";

mail($to,$subject,$txt,$headers);
?>
