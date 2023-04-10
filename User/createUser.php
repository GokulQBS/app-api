<?php
include '../connection/connection.php';
// fetching data
$query;
try{
    $post=json_decode(file_get_contents("php://input"),true);
    $query = mysqli_query($conn,'insert into user (email,password,name) values("'.$_POST['UEmail'].'","'.$_POST['UPwd'].'","'.$_POST['UName'].'")');
}catch(Exception $e) {
    echo 'Message: '.$e->getMessage();
}
// sending Data
if ($query==true){
    $data = array('response' =>'1','message' => 'User Created Successfully..!');
}else{
    $data = array('response' =>'0','message' => 'failure try after some times..');
}
$response = json_encode($data);
echo $response;
?>
