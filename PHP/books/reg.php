<form action="" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="submit" name="submit" value="submit">
    </form>

    <?php

    session_start();
    ob_start();

    if(isset($_SESSION['id']) && $_SESSION['id'] != ''){
        header('location: profile.php');
    }

    include '../crud/db.php';

    if(isset($_POST['submit'])){
        
        extract($_POST);

        if($username!='' && $email!='' && $password!=''){

            $select = "SELECT * FROM `users` WHERE  name = '$username' OR email = '$email'";
            $result = $db1->query($select);

            print_r($result);

            //print_r($_POST);

            if($result->num_rows > 0){
                echo "user already exists";
            } else {

            //    extract($_POST);
              // print_r($_POST);

               // $en_pass = md5('$password');

                $sq ="INSERT INTO `users`(`name`, `email`, `password`, `created_on`) VALUES ('username','email','password',now())";
               // $out = $db1->query($sql);

               print_r($_POST);

               if($db1->query($sq)){
                    echo "Data inserted successfully";
                }else{
                    echo "Data not inserted".$db1->error;
                }
            }

        }else{
            echo "please fill all the fields";
        }

    }
    ?>
    