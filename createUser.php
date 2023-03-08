<?php
include './connection.php';
// fetching data
$query;
try{
    $post=json_decode(file_get_contents("php://input"),true);
    $query = mysqli_query($conn,'insert into user (email,password,name) values("'.$post['UEmail'].'","'.$_GET['UPwd'].'","'.$_GET['UName'].'")');
}catch(Exception $e) {
    echo 'Message: '.$e->getMessage();
}
// sending Data
if ($query==true){
    $data = array('responce' =>'1','message' => 'User Created Successfully..!');
}else{
    $data = array('responce' =>'0','message' => 'failure try after some times..');
}
$responce = json_encode($data);
echo $responce;
?>
