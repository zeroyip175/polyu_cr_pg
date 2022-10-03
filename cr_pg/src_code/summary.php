<?php
require_once('../src_code/db/connection.php');
$sql = "SELECT Serial_No FROM stuprofiles ORDER BY `stuprofiles`.`Serial_No` ASC" ;
$results = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html>
	<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script type= "text/javascript" src="../src_code/javascript/displayprofile.js">
	</script>
	</head>
	<body>
		<h1>Summary</h1>
        <?php
		include '../src_code/pagination/pagination.php';
		?>
		<table class="table">
            <thead class="thead-dark">
			<tr>
				<th>SID</th>
				<th>Actions</th>
			</tr>
            </thead>
                
            
            <?php while($row = mysqli_fetch_assoc($results)) { ?>
			<tr>
                <!-- Right now the id can pass to profile.php using isset_($_Post[])-->
                <form action="details.php" method="POST">
					<td>
						<?php echo $row['Serial_No'];?>
						<input type="text" name="sid" value="<?php echo $row['Serial_No'];?>" hidden="true" readonly>
					</td>
					<td>
						<!-- echo the button class according to the status of suggestion -->
						<input type="submit" name = "submit" class="btn btn-danger" value="Make Suggetion" />
					</td>
                </form>
			</tr>
            <?php } ?>
            
			
		</table>
		<nav aria-label="Page navigation example">
		<ul class="pagination">
			<li class="page-item"><a class="page-link" href="summary.php?page=<? echo $pervious?>">Previous</a></li>
			<?php for($page=1; $page<=$number_of_page; $page++) :?>
            <li class="page-item"><a class="page-link" href="summary.php?page=<? echo $page?>"><? echo $page?></a></li>
            <?php endfor?>
			<li class="page-item"><a class="page-link" href="summary.php?page=<? echo $next?>">Next</a></li>
		</ul>
		</nav>
		<br>
		<input type="button" id="logout" value="logout" class="btn btn-primary" name="logout" onclick="logout()"/>
	</body>
</html>