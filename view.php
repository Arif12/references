<?php
$id = $_GET['id'];
$link= mysqli_connect("localhost",
    "root",
    "",
    "information");
$query = "SELECT * FROM `references` WHERE `id` = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
//print_r($row);
?>

<html>
<head>
    <title></title>
</head>
<body style="text-align: center;">
<ul>
    <li><a href="create.php">Create New Record</a> </li>
    <li><a href="list.php">View Full List</a> </li>
</ul>
<table border="1" width="100%">
    <tr>
        <td>id</td>
        <td>Name</td>
        <td>Organization</td>
        <td>address</td>
        <td>Phone</td>
        <td>email</td>
        <td>Relation</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['organization']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['phone']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['relation']?></td>
            <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |
        </tr>
    <?php
    }
    ?>
</table>
</body>
</html>