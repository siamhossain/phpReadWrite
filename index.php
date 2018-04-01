<?php
if(isset($_POST['submit']))
$name = $_POST['name'];
$file = fopen("test.txt","w+");
fwrite($file, $name);
?>
<html>
<body>
<form action="#" method = "post">
<input type =  "text" name = "name">
<input type = "submit" name = "submit"> 
</body>
