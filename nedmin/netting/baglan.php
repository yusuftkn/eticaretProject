<?php
try{

    $db=new PDO("mysql:host=localhost;dbname=eticaret;charset=utf8" , 'root', 'root');
    // echo "veritabanı bağlantısı başaralı";

}
catch(PDOExpception $e) {
    echo $e->getMassage();

}







?>

