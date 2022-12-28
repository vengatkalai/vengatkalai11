<?php
include 'db.php';

if(isset($_POST['id'])){
    $id=$_POST['id'];
    // print_r($id);
    $sql="delete from `student` where id=$id";

    if($db1->query($sql)){
        $result['status']=true;
        $result['msg']="Data deleted successfully";
    }else{
        $result['status']=false;
        $result['msg']="Error";
    }
   echo json_encode($result);
}
?>