<?php 
include './connection.php';
// fetching data
$post=json_decode(file_get_contents("php://input"),true);
$query = mysqli_query($conn,'update user set email="'.$post['UEmail'].'",password="'.$post['UPwd'].'",name="'.$post['UName'].'" where id="'.$post['UId'].'"');

// sending Data
if ($query==true){
    $data = array('responce' =>'1','message' => 'Data Updated successfully..!');
}else{
    $data = array('responce' =>'0','message' => 'something not right, try again later..');
}
$responce = json_encode($data);
echo $responce;
?>