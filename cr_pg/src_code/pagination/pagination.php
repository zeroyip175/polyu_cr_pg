<?php
//setting the page number
$result_per_page = 40;
//getting the total rows of the db
$number_of_results = mysqli_num_rows($results);
//determin num of total pages available
$number_of_page = ceil($number_of_results/$result_per_page);
//determin which page number visitor is currently on
if (!isset($_GET['page'])) {
    $page = 1;
}else{
    $page = $_GET['page'];
}

//determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$result_per_page;
//retrieve selected results from dastabase and display them on page
$sql = "SELECT * FROM stuprofiles ORDER BY `stuprofiles`.`Serial_No` ASC LIMIT " . $this_page_first_result.','.$result_per_page;
$results = mysqli_query($conn, $sql);
echo $this_page_first_result, $result_per_page;
//setup previous and next page
		//if() -> control the page number fits to the total number of page
		$pervious = $page - 1;
		if($page < 1){
			//use header to bring use to correct page unless the page trun to index 0 -> error
			header("Location: summary.php?page=1");
		}
		if($page > $number_of_page){
			//make sure number of page is on the range 1-5
			$next = $number_of_page;
		}
		if($page < $number_of_page){
			$next = $page + 1;
		}

?>