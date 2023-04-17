<?php
 $db = 'C:\Users\faris\Documents\VSCode\Kuliah\Praktikum\Pemrograman Web\Praktikum_5\php\kontak.accdb';

 $db_username = '';
 $db_password = '';

 if(!file_exists($db)){
 die("Error finding access database");
 }
 
 $db_conn = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb, *.accdb)}; DBQ=$db; Uid=$db_username; Pwd=$db_password;");

?>
