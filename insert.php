<?php
include('connection.php');
if(isset($_POST['submit'])){
    $insert=mysqli_query($conn,"INSERT INTO ex VALUES('','$_POST[names]','$_POST[password]')");
    if($insert){
        header('location: display.php');
    }else{
        echo "Not inserted";
    }
}
?>