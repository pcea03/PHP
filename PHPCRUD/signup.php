<?php
require_once "include/dbConfiguration.php";
 
if(isset($_POST['save']))
{    

     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
     $address = $_POST['address'];
     $sql = "INSERT INTO students (firstName,lastName,address) VALUES ('$first_name','$last_name','$address')";
     if (mysqli_query($conn, $sql)) {
        header("location: index.php");
        exit();
     } else {
        echo "Error: " . $sql . " " . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHPCrud: Signup</title>
	<?php include 'include/linkCSSJS.php';?>
</head>
<body>
  
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h2>Signup</h2>
                    </div>
                    <p>Please fill this form and submit to add student record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" class="form-control" value="" maxlength="50" required="">
                        </div>
                        <div class="form-group ">
                            <label>Last Name</label>
                            <input type="text" name="last_name" class="form-control" value="" maxlength="30" required="">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="" required="">
                        </div>
 
                        <input type="submit" class="btn btn-primary" name="save" value="submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
 
            </div> 
                
        </div>
 
</body>
</html>