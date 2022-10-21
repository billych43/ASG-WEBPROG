<?php 
    $title = "Input Data Mahasiswa";
    include("../header.php");
?>
    <form action="../controller/createController.php" method="POST">
        <div class="container">

            <div>
                <label for="">Name</label> <br>
                <input type="text" name="name" id="" required maxlength="128"><br>
            </div>
            <div>
                <label for="">NIM</label> <br>
                <input type="number" name="nim" id="" required maxlength="10" ><br>
            </div>
            <div>
                <label for="">Address</label> <br>
                <input type="text" name="address" id="" required maxlength="128"><br>
            </div>
            <div>
                <label for="">Major</label> <br>
                <input type="text" name="major" id="" required maxlength="128"><br>
            </div>
            <div>
                <label for="">Department</label> <br>
                <input type="text" name="department" id="" required maxlength="128"><br>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href='index.php' class='btn btn-danger'>Back</a>
        </div>
    </form>
    
<?php 
    include("../footer.php");
?>