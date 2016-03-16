<?php
$xml = simplexml_load_file("users.xml");

$resultArr = $xml -> xpath("//user[last()]/id");
foreach($resultArr as $result){
    echo $result;
};


?>