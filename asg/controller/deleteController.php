<?php 
    include("../connect.php");

    $nim = $_POST['nim'];

    $query = "DELETE FROM user WHERE nim= '$nim' ";

    if(mysqli_query($conn, $query)){
        header("location: ../view/index.php");
    }
    else{
        mysqli_error($conn);
    }
?>

