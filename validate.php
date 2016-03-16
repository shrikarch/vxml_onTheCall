<?php
//test for regEnd
$pName = $_POST['name'];
$pEmail = $_POST['email'];
$cid = $_POST['custId'];
$pid = $_POST['pin'];

$together = $pName.$pEmail.$pid;

//$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
//fwrite($myfile, $together);

echo "succeess";

$file = 'users.xml';
$xml = simplexml_load_file($file);

$users = $xml->users;

$user = $xml->addChild('user');
$user->addChild('name', $pName);
$user->addChild('email', $pEmail);
$user->addChild('id', $cid);
$user->addChild('pin', $pid);

$xml->asXML($file);
//$xml->save($file)
?>
