<?php 
include '../connection.php';
// fetching data
$query = mysqli_query($conn,'update user set email="'.$_GET['UEmail'].'",password="'.$_GET['UPwd'].'",name="'.$_GET['UName'].'" where id="'.$_GET['UId'].'"');

// sending Data
if ($query==true){
    $data = array('responce' =>'1','message' => 'Data Updated successfully..!');
}else{
    $data = array('responce' =>'0','message' => 'something not right, try again later..');
}
$responce = json_encode($data);
echo $responce;
?>