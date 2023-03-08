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


// sending Data
if (mysqli_num_rows($query)>0){
    $data = array('responce' =>'1','message' => 'User Found..!','table'=>$table);
}else{
    $data = array('responce' =>'0','message' => 'No User Found!');
}
$responce = json_encode($data);
echo $responce;
?>