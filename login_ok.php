<?php
if(!isset($_POST['uid']) || !isset($_POST['upw'])) exit;
$uid = $_POST['uid'];
$upw = $_POST['upw'];
$members = array('admin'=>array('pw'=>'password', 'name'=>'이지우'),
                'user'=>array('pw'=>'password', 'name'=>'머스트노우', 'user'=>true),
                'corp'=>array('pw'=>'password', 'name'=>'김이박사장', 'admin'=>true));
 
if(!isset($members[$uid])) {
        echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";
        exit;
}
if($members[$uid]['pw'] != $upw) {
        echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";
        exit;
}
session_start();
$_SESSION['uid'] = $uid;
$_SESSION['uname'] = $members[$uid]['name'];
$_SESSION['uuser'] = $members[$uid]['user'];
$_SESSION['ucorp'] = $members[$uid]['admin'];
?>
<meta http-equiv='refresh' content='0;url=index.php'>