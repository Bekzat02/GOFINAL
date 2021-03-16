<?php
sleep(1);
require('user.php');
$user1=new User();
$name1=$_POST['email'];
$resultAccount=$user1->select_user($name1);
if(empty($resultAccount['resultDB'][0])) {
    $array_name=array('Name'=>'absent', 'password'=>'absent');
    echo json_encode($array_name);
}
else{
    echo json_encode($resultAccount['resultDB'][0]);
}
