<?php
// syntax
// mysqli_connect("server" , "username" , "password" , "database");
#$cfg['Servers'][$i]['port'] = '3307';
$conn = mysqli_connect("localhost:3307" , "root" , "" , "tripify_new") or die ("Connection Failed");
?>