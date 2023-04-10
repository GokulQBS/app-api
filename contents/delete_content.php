<?php
include '../connection/connection.php';

$query;
try{
    $post=json_decode(file_get_contents("php://input"),true);
    $query = mysqli_query($conn,'DELETE FROM contents WHERE id = "'.$post['id'].'"');
}
catch(Exception $e){
    echo 'Message: '.$e->getMessage();
}

if ($query){
    $data = array('response' =>'1','message' => 'Deleted successfully..!');
}else{
    $data = array('response' =>'0','message' => 'failure');
}
$response = json_encode($data);
echo $response;
?>