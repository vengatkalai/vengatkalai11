<?php 

include 'login_check.php';

?>


<table>
    
    <tr>
        <th>Sno</th>
        <th>Book</th>
        <th>Student</th>
        <th>Out Time</th>
        <th>In Time</th>
        <th>Action</th>
    </tr>
    </table>
    <?php 
    $sql = "SELECT * FROM `rent_book` WHERE id = ".$_SESSION['id'];
    $result = $db1->query($sql);
    
    ?>
