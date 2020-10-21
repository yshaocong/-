<?php

header('content-type:text/html;charset=utf8');

$id = $_GET['id'];//获取前端传递的用户名
$password = $_GET['password'];//获取前端传递的密码
$conn = mysqli_connect('127.0.0.1','root','root','user');
$sql = "SELECT * FROM `mine` WHERE `id`='$id' AND `password`='$password'";
$res = mysqli_query($conn,$sql);
$data = mysqli_fetch_all($res,MYSQLI_ASSOC);
$json = json_encode($data);
mysqli_close($conn);
if($data){
    echo json_encode(array("code"=>1));
}else{
    echo json_encode(array("code"=>0));
}
?>