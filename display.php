<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Names</th>
            <th>Password</th>
            <th colspan="2">Main Operation</th>
        </tr>
        <?php
        include('connection.php');
        $select=mysqli_query($conn,"SELECT * FROM ex");
        while($row=mysqli_fetch_array($select)){
        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['password'] ?></td>
            <td><a href="update.php?upd=<?php echo $row['id'] ?>">Update</a></td>
            <td><a href="delete.php?dlt=<?php echo $row['id'] ?>">Delete</a></td>
        </tr>
        <?php  } ?>
    </table>
</body>
</html>