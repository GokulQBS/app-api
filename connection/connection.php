<?php 
//connection
$servername = 'localhost';
$databasename = 'App';
$username='root';
$password='';
$conn = new mysqli($servername,$username,$password,$databasename);
if($conn->connect_error){
    echo "there is an error while connecting database.! Plz try again later..";
}
header('Content-type:application/json;charset=utf-8');
?>