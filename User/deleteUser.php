<?php 
include '../connection.php';
// fetching data
$userId= $_GET['UserId'];
$table = array();
$query = mysqli_query($conn,'delete from user WHERE id ='.$userId);

// sending Data
if ($query== true){
    $data = array('responce' =>'1','message' => 'User deleted Successfully');
}else{
    $data = array('responce' =>'0','message' => 'failure, cannot delete user');
}
$responce = json_encode($data);
echo $responce;
?>