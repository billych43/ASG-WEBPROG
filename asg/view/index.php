<?php 
    $title = 'List Mahasiswa';
    include("../header.php");
?>

<?php
    require_once "../connect.php";

    $query = "SELECT * FROM user";
    if($result = mysqli_query($conn, $query)){
        if(mysqli_num_rows($result) > 0){
            echo "<table class='table table-bordered table-striped'>";
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
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>" . $row['nim'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td>" . $row['major'] . "</td>";
                        echo "<td>" . $row['department'] . "</td>";
                        echo "<td>";
                            echo "<a href='update.php?nim=". $row['nim'] ."' title='Update Data' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                            echo "<a href='delete.php?nim=". $row['nim'] ."' title='Delete Data' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                        echo "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
            echo "</table>";
            echo "<a href='create.php' class='btn btn-primary'>Tambah Mahasiswa</a>";
            mysqli_free_result($result);
        } else{
            echo "<p class='lead'><em>No data were found.</em></p>";
            echo "<a href='create.php' class='btn btn-primary'>Tambah Mahasiswa</a>";
        }
    } else{
        echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
    }
    mysqli_close($conn);
                    
include("../footer.php");                    
?>


