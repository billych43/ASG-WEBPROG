<?php 
    include("../connect.php");

    $nim = $_GET['nim'];
    $query = "SELECT * FROM user WHERE nim='$nim'";
    $result = mysqli_query($conn, $query);

    while($row=mysqli_fetch_assoc($result)){
        $nim = $row['nim'];
        $name = $row['name'];
        $address = $row['address'];
        $major = $row['major'];
        $department = $row['department'];
    }
?>
<?php
    $title = "Update Data Mahasiswa";
    include("../header.php");
?>
    <form action="../controller/updateController.php" method="POST">
        <input type="hidden" name="nim" value="<?php echo $nim ?>">
        <div class="container">


            <div>
                <label for="">Name</label> <br>
                <input type="text" name="name" id="" value="<?php echo $name ?>" required maxlength="128"><br>
            </div>
            <div>
                <label for="">Address</label> <br>
                <input type="text" name="address" id="" value="<?php echo $address ?>" required maxlength="128"><br>
            </div>
            <div>
                <label for="">Major</label> <br>
                <input type="text" name="major" id="" value="<?php echo $major ?>" required maxlength="128"><br>
            </div>
            <div>
                <label for="">Department</label> <br>
                <input type="text" name="department" id="" value="<?php echo $department ?>" required maxlength="128"><br>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-danger">Back</a>
        </div>
        </form>

<?php 
    include("../footer.php");
?>