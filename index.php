<?php
if(isset($_POST['submit']))
$name = $_POST['name'];
$text = $_POST['text'];
$add = $name."\n".$text;
$file = fopen("test.txt","w+");
fputs($file, $add);
?>
<html>
<body>
<form action="#" method = "post">
Name : 
<input type =  "text" name = "name"><br><br>
<textarea rows="4" cols="50" name = "text">
</textarea><br><br>
<input type = "submit" name = "submit"> 
</form>
</body>
</html>
