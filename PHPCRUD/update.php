<?php
// Include database connection file
require_once "include/dbConfiguration.php";
 
    if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE students set  firstName='" . $_POST['firstName'] . "',lastName='" . $_POST['lastName'] . "', address='" . $_POST['address'] . "' WHERE id='" . $_POST['id'] . "'");
      
     header("location: index.php");
     exit();
    }
    $result = mysqli_query($conn,"SELECT * FROM students WHERE id='" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($result);
   
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <?php include "include/linkCSSJS.php"; ?>
</head>
<body>
 
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="firstName" class="form-control" value="<?php echo $row["firstName"]; ?>" maxlength="50" required="">
                             
                        </div>
                        <div class="form-group ">
                            <label>Last Name</label>
                            <input type="test" name="lastName" class="form-control" value="<?php echo $row["lastName"]; ?>" maxlength="30" required="">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="test" name="address" class="form-control" value="<?php echo $row["address"]; ?>" maxlength="12"required="">
                        </div>
                        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>  
        </div>
</body>
</html>