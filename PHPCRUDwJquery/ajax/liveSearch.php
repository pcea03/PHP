<?php

require_once "db_connection.php";
    
    $data = '<table class="table table-bordered table-stiped">
            <tr>
                <th>No.</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email Address</th>
                <th>Update</th>
                <th>Delete</th>
            </td>';


  $query = "SELECT * FROM users WHERE first_name LIKE '%{$_POST['query']}%' or last_name LIKE '%{$_POST['query']}%' or email LIKE '%{$_POST['query']}%' LIMIT 100";
  $result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
   while ($user = mysqli_fetch_assoc($result)) 
    {
        $data .= '<tr>
            <td>'.$user['id'].'</td>
            <td>'.$user['first_name'].'</td>
            <td>'.$user['last_name'].'</td>
            <td>'.$user['email'].'</td>
            <td>
                <button onclick="GetUserDetails('.$user['id'].')" class="btn btn-warning">Update</button>
            </td>
            <td>
                <button onclick="DeleteUser('.$rowp['id'].')" class="btn btn-danger">Delete</buttong>
            </td>
                </tr>
        ';
    }
} else {
    $data .= "<div class='d-flex justify-content-center'><p style='color:red' class='align-center'>User not found...</p></div>";
}
$data .='</table>';

echo $data;

?>