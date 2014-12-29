<?php
$id = $_GET['id'];
$link= mysqli_connect("localhost",
						"root",
						"",
						"information");

$query="SELECT * FROM `references` WHERE `id` = '$id'";

$result=mysqli_query($link,$query);

$row = mysqli_fetch_assoc($result);


//$row = mysqli_fetch_assoc($result);

?>


<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />
    <label>Name: </label>
    <input type="text" name="name" value="<?php echo $row['name'];?>" />
    <br>
    <label>organization: </label>
    <input type="text" name="organization" value="<?php echo $row['organization'];?>">
    <br>
<label>address</label>
    <input type="text" name="address" value="<?php echo $row['address'];?>">
    <br>
<label>phone</label>
    <input type="text" name="phone" value="<?php echo $row['phone'];?>">
    <br>
    <label>email</label>
    <input type="text" name="email" value="<?php echo $row['email'];?>">
    <br>
    <label>relation</label>
    <input type="text" name="relation" value="<?php echo $row['relation'];?>">
    <br>
     <?php
    $date=explode(",",$row['hobby']);
    list($tennis, $cricket, $dance,$sketching)=$date;
    ?>
    <label>Hobby</label>
     <input type="checkbox" <?php if ($tennis == "tennis") echo 'checked'; ?> value="tennis">tennis;
     <input type="checkbox" <?php if ($cricket == "cricket") echo 'checked'; ?> value="cricket">cricket;
     <input type="checkbox" <?php if ($dance == "dance") echo 'checked'; ?> value="dance">Dance;
     <input type="checkbox" <?php if ($sketching == "sketching") echo 'checked'; ?> value="sketching">sketching;
    <button type="submit">Update</button>
</form>

<a href="list.php">Cancel</a>