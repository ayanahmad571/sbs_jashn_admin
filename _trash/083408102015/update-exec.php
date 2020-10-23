<?php include('conn.php'); ?>
<?php #givepost('news',$conn); 
?>
<?php  if(isset($_REQUEST['botd'])){
	echo $_POST['1'];
	var_dump($_POST);

	$midsection = getcolrest($tname,$conn,$_GET);
	$tname = 'botd';
	$sql = "UPDATE ".$tname." SET ".$midsection."
 WHERE `".getcolfirst($tname,$conn)."`='".$_GET[getcolfirst($tname,$conn)]."'";


dbug($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	
	
	} ?>
<?php if(isset($_GET['gallery'])){
	
	$sql = "UPDATE gallery SET
 WHERE `".getcolfirst('gallery',$conn)."`='".$_GET[getcolfirst('gallery',$conn)]."'";


dbug($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	
	
	} ?>
<?php if(isset($_GET['news'])){
	
	$sql = "UPDATE news SET
 WHERE `".getcolfirst('news',$conn)."`='".$_GET[getcolfirst('news',$conn)]."'";

dbug($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	
	} ?>
<?php if(isset($_GET['jashn_1_images'])){
	
	
	$sql = "UPDATE jashn_1_images SET
 WHERE `".getcolfirst('jashn_1_images',$conn)."`='".$_GET[getcolfirst('jashn_1_images',$conn)]."'";

dbug($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	
	} ?>
<?php if(isset($_GET['qotd'])){
	
	$sql = "UPDATE qotd SET
 WHERE `".getcolfirst('qotd',$conn)."`='".$_GET[getcolfirst('qotd',$conn)]."'";

dbug($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	
	} ?>
<?php if(isset($_GET['guestart'])){
	
	
	$sql = "UPDATE guestart SET
 WHERE `".getcolfirst('guestart',$conn)."`='".$_GET[getcolfirst('guestart',$conn)]."'";

dbug($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	} ?>


<?php if(isset($_GET['interview'])){
	
	
	$sql = "UPDATE interview SET
 WHERE `".getcolfirst('interview',$conn)."`='".$_GET[getcolfirst('interview',$conn)]."'";

dbug($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	} ?>


<?php if(isset($_GET['headings'])){
	
	
	$sql = "UPDATE headings SET
 WHERE `".getcolfirst('headings',$conn)."`='".$_GET[getcolfirst('headings',$conn)]."'";

dbug($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
	} ?>


