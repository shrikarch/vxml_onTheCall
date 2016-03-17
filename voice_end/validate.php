<?php
$pnumber = $_GET['phone_number'];
$pid = $_GET['pin'];


$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
fwrite($myfile, $pid);
//$myfile = fopen("newfile.txt", "w");
//fwrite($myfile, $pid);

echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<!DOCTYPE vxml SYSTEM "http://www.w3.org/TR/voicexml20/vxml.dtd">';
echo '<vxml version="2.0" xmlns="http://www.w3.org/2001/vxml">';
echo '</vxml>';
?>
