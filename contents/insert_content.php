<?php
include '../connection/connection.php';

$query;
try{
    $post=json_decode(file_get_contents("php://input"),true);
    $query = mysqli_query($conn,'insert into contents (heading,content,description) values("'.$post['heading'].'","'.$post['content'].'","'.$post['description'].'")');
}
catch(Exception $e){
    echo 'Message: '.$e->getMessage();
}

if ($query){
    $data = array('response' =>'1','message' => 'inserted successfully..!');
}else{
    $data = array('response' =>'0','message' => 'failure');
}
$response = json_encode($data);
echo $response;
?>