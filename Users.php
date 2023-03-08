<?php
include './connection.php';
// fetching data
$table = array();
$query = mysqli_query($conn,'select * from user');
while($row=mysqli_fetch_assoc($query)){
    $table[]=$row;
}
// sending Data
if (mysqli_num_rows($query)>0){
    $data = array('responce' =>'1','message' => 'success','table'=>$table);
}else{
    $data = array('responce' =>'0','message' => 'failure');
}
$responce = json_encode($data);
echo $responce;
?>
