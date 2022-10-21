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
    $title = "Delete Data Mahasiswa";
    include("../header.php"); 

?>

    <?php 
        echo "<table class='table table-bordered table-striped'>";
    ?>
    <form action="../controller/deleteController.php" method="POST">
        <input type="hidden" name="nim" value="<?php echo $nim ?>">
        <h2>Delete this user?</h2>
            <?php 
                echo "<thead>";
                    echo "<tr>";
                        echo "<th>NIM</th>";
                        echo "<th>Name</th>";
                        echo "<th>Address</th>";
                        echo "<th>Major</th>";
                        echo "<th>Department</th>";
                    echo "</tr>";
                echo "</thead>"; 
                
                echo "<tbody>";
                    echo "<tr>";
                        echo "<td>" . $nim . "</td>";
                        echo "<td>" . $name . "</td>";
                        echo "<td>" . $address . "</td>";
                        echo "<td>" . $major . "</td>";
                        echo "<td>" . $department . "</td>";
                    echo "</tr>";
                echo "</tbody>";
            echo "</table>";

                ?>
        <button type="submit" class="btn btn-success">YES</button>
        <a href="index.php" class="btn btn-danger">NO</a>
    </form>

<?php 
    include("../footer.php");
?>