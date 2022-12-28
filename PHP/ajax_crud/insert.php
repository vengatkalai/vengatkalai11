<?php 


include 'db.php';


if(isset($_POST['name'])){

    extract($_POST);

    // $en_pass = md5($password);

    $sql = "INSERT INTO `student`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";

    
    if($db1->query($sql)){
        $insert_id = $db1->insert_id;
        $result['id'] = $insert_id;
        $result['status'] = true;
        $result['msg'] = "Data Inserted";
        $result['data'] = $_POST;
        // $result['password'] = $en_pass;
    } else{
        $result['status'] = false;
        $result['msg'] = "Data Not Inserted";
    }

    echo json_encode($result);

}

?>