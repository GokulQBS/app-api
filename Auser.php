<?php 
include './connection.php';
// fetching data

$post=json_decode(file_get_contents("php://input"),true);
$userId= $post['UserId'];
$table = array();
$query = mysqli_query($conn,'select * from user WHERE id ='.$userId);
while($row=mysqli_fetch_assoc($query)){
    $table[]=$row;
}
