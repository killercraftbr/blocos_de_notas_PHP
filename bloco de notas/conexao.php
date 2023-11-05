<?php
$host ="localhost";
$db = "bloco_de_notas";
$user= "root";
$pass ="";
$mysqli = new mysqli($host,$user,$pass,$db);
if($mysqli->connect_errno){
    die("vish maiquinho, o banco deu erro");}
    
?>