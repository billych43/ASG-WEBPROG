
<?php 
    require("../connect.php");

    $name = $_POST['name'];
    $nim = $_POST['nim'];
    $address = $_POST['address'];
    $major =$_POST['major'];
    $department =$_POST['department'];

    $query = "UPDATE user SET `name` = '$name', `address` = '$address', `major` = '$major', `department` = '$department' WHERE `nim` = '$nim'";

    if(mysqli_query($conn,$query)){
        header("location: ../view/index.php");
    }
    else{
        echo mysqli_error($conn);
    }
    mysqli_close($conn);
?> 