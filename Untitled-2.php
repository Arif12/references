<?php
mysqli_connect("localhost",
						"root",
						"",
						"information");

 $name=addslashes(file_get_contents($_FILES['file']['tmp_name']));
 
 $imagename=addslashes($_FILES['file']['name'];
 $insert="INSERT INTO `information`.`store` (`id`, `name`, `image`) VALUES('NULL','$image','$imagename') ";


$upload=move_uploaded_file();


?>


