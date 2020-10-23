<?php include('conn.php'); ?>
<?php 




if(isset($_POST['id'])){
	if(isset($_POST['submit'])){
		if(isset($_POST['about'])){
						
						
						
						$sql = "UPDATE gallery SET about='".$conn->escape_string($_POST['about'])."' WHERE id=".$_POST['id']."";

						if ($conn->query($sql) === TRUE) {
							echo "Record updated successfully"; header('Location: gallery_comment.php');
						} else {
							echo "Error updating record: " . $conn->error;
						}
						
						
			}else{echo 'no about';}
		}else{echo 'no submit';}
	}else{echo 'no id';}

?>