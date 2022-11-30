<form action="" method="get">
    <input type="text" name="search">
    <input type="submit" value="Search">
</form>


<table border=1>
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Phone</td>
        <td>Dob</td>
        <td>Action</td>
        <td>Action</td>
    </tr>


    <?php

    include 'db.php';

    if (isset($_GET['search'])) {
        $keyword = $_GET['search'];
        $search = " WHERE name LIKE '%$keyword%'  OR phone LIKE '%$keyword%'";
    } else {
        $search = '';
    }


    $sql = "SELECT * FROM `table1`" . $search;
    $result = $db1->query($sql);

    //print_r($result);

    $total = $result->num_rows;



    if ($total > 0) {
        // $en_id = base64_encode($row['id']);

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[phone]</td>
                    <td>$row[dob]</td>
                    <td><a href='edit.php?id=$row[id]'>Edit </a></td>
                    <td><a href='delete.php?id=$row[id]'>Delete</a></td>
                    </tr>";
        }
    } else {
        echo "No records found";
    }

    ?>

</table>
<?php

if (isset($_GET['mse'])) {
    echo $_GET['mse'];
}

?>