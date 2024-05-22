<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('connection.php');
    $select=mysqli_query($conn,"SELECT * FROM ex where id='$_GET[upd]' ");
    $row=mysqli_fetch_array($select);
    ?>
    <form action="" method="post">
        Names: <input type="text" name="names" value="<?php echo $row['name'] ?>"><br>
        Password: <input type="password" name="password" value="<?php echo $row['password'] ?>"><br>
        <input type="submit" name="submit" value="Add">
    </form>
</body>
</html>
<?php
include('connection.php');
if(isset($_POST['submit'])){
    $update=mysqli_query($conn,"UPDATE ex SET name='$_POST[names]',password='$_POST[password]' where id='$_GET[upd]'");
    if($update){
        header('location: display.php');
    }
    else{
        echo "Not updated";
    }
}
?>