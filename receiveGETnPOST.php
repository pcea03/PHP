<?php
print_r($_POST);
foreach($_POST as $post):
    echo $post['name'];
endforeach;

echo "<br>";
$name=$_POST['name'];
$lastname = $_POST['surname'];
$age = $_POST['age'];

echo $name."<br>";
echo $lastname."<br>";
echo $age;
echo "test";

$no = 6;
echo ($no == 1 ? '1' :
     ($no == 2 ? '2' :
     ($no == 3 ? '3' :
     ($no == 4 ? '4' :
     ($no == 5 ? '5' :
        "Please Enter 1 to 5 only")))));

?>



<script>

alert("Hi there <?php echo $name;?>");


</script>