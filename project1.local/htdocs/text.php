<?php
    //$link = mysqli_connect("localhost","root","root0902","practice");
    $link = mysqli_connect("127.0.0.1:3306","root","kostya.1100","mysql");
    if($link == false){
	   exit( 'Ошибка подключения к БД');
	}
    
?>