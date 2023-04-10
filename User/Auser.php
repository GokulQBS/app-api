<?php 
include '../connection/connection.php';

// fetching data
$post=json_decode(file_get_contents("php://input"),true);
$userId= $post['UserId'];
$userPwd= $post['Userpwd'];
$table = array();

if(!empty($userId)){

if($userId != null){
    $query = mysqli_query($conn,'select * from user where email ="'.$userId.'" and password="'.$userPwd.'"');
    while($row=mysqli_fetch_assoc($query)){
        $table[]=$row;
    }
    if (mysqli_num_rows($query)>0){
        $data = array('response' =>'1','message' => 'Yes user Found','table'=>$table);
    }else{
        $data = array('response' =>'0','message' => 'No User Found');
    }
    $response = json_encode($data);
    echo $response;
}
else{
    $data = array('response' =>'0','message' => 'Wrong input');
    $response = json_encode($data);
    echo $response;
}
}else{
    $data = array('response' =>'0','message' => 'received an empty data');
    $response = json_encode($data);
    echo $response;
}
?>