
<?php 
include('conn.php');
?>

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/needs.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<?php
												$tablename= 'gallery';
$sql = "SELECT `id`,`imgsrc`,`about` FROM ".$tablename." WHERE `about`=''";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
						echo '';
						while($row = $result->fetch_assoc()) {
							echo  '<form action="gallery_com-exec.php" method="post"><div class="row">
							<div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
							<div class="col-sm-4 col-xs-6 col-md-4 col-lg-4">
      
      	<div class="panel panel-default">
          <div class="panel-thumbnail"><img width="100%" class="img-thumbnail img-responsive" src="../images/'.$row['imgsrc'].'"></div>
          <div class="panel-body">
            <p><input class="input" placeholder="About the pic" type="text" name="about" '. $row['about'].'/>
			
			<input type="hidden" name="id" value="'.$row['id'].'" />
			<input type="submit" name="submit" />
			</p>

            
          </div>
        </div><!--/panel--> 

      </div><!--/col--></div> </div></form>
							
							
						';
						}
						echo''; 
					} else {
						echo "<h1>Thats it for today, Later Folks</h1>";
					}
									?>	