<?php
	require "../src_code/db/connection.php";
    // To be passed from summary page
	if (isset($_POST["submit"])) {
		$sid_num = $_POST["sid"];
	}
	else if (isset($_GET['sid'])){
		$sid_num = $_GET["sid"];
	}
	else{
		echo 'Oopss... you are not allow to this page yet';
	}
	$sql = "SELECT * FROM stuprofiles WHERE `Serial_No` = $sid_num";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		$programme = $row["Programme"];
		$gender = $row["Gender"];
		$p_score = $row["P_Score"];
		$eng = $row["English"];
		$chin = $row["Chinese"];
		$math = $row["Mathematics"];
		$math_stat = $row["Math_Statistics"];
		$math_alg = $row["Math_Algebra"];
		$ls = $row["Liberal_Studies"];
		$realistic = $row["Realistic_(R)"];
		$investigative = $row["Investigative_(I)"];
		$artistic = $row["Artistic_(A)"];
		$social = $row["Social_(S)"];
		$enterprising = $row["Enterprising_(E)"];
		$conventional = $row["Conventional_(C)"];
		$lifelong_learner = $row["Lifelong_Learner_Average"];
		$competent = $row["Competent_Associate_Professional_Average"];
		$critical_thinker = $row["Critical_Thinker_Average"];
		$effective_communicator = $row["Effective_Communicator_Average"];
		$problem_solver = $row["Problem_Solver_Average"];
		$ethical_citizen = $row["Ethical_Citizen_Average"];
		$global_awareness = $row["Global_Awareness_Average"];
	} else {
		echo "No results";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/details_style.css">
	</head>
	<body>
		<div class="student_profile_num">
			<h1>Student Profile of <?php echo $sid_num?></h1>
		</div>
		<div class="student_profile">
			<table>
				<!-- Demographics -->
				<tr>
					<td colspan = "2" class = "sub_head">Demographics</td>
					<td>Average</td>
					<td>25<sup>th</sup> Percentile</td>
				</tr>
				<tr class = "zebra">
					<td><i>Programme</i></td>
					<td><?php echo $programme?></td>
					<td>N/A</td>
					<td>N/A</td>
				</tr>
				<tr class = "zebra">
					<td><i>Gender</i></td>
					<td><?php echo $gender?></td>
					<td>N/A</td>
					<td>N/A</td>
				</tr>
				<!-- DSE Results -->
				<tr>
					<td colspan = "2" class = "sub_head">DSE Results</td>
					<td></td>
					<td></td>
				</tr>
				<tr class = "zebra">
					<td><i>P Score</i></td>
					<td><?php echo $p_score?></td>
					<td>15.66</td>
					<td>14.00</td>
				</tr>
				<tr class = "zebra">
					<td><i>English</i></td>
					<td><?php echo $eng?></td>
					<td>2.70</td>
					<td>2.00</td>
				</tr>
				<tr class = "zebra">
					<td><i>Chinese</i></td>
					<td><?php echo $chin?></td>
					<td>2.89</td>
					<td>2.00</td>
				</tr>
				<tr class = "zebra">
					<td><i>Mathematics</i></td>
					<td><?php echo $math?></td>
					<td>3.18</td>
					<td>3.00</td>
				</tr>
				<tr class = "zebra">
					<td><i>Mathematics Statistics</i></td>
					<td><?php echo $math_stat?></td>
					<td>0.14</td>
					<td>0.00</td>
				</tr>
				<tr class = "zebra">
					<td><i>Mathematics Algebra</i></td>
					<td><?php echo $math_alg?></td>
					<td>0.37</td>
					<td>0.00</td>
				</tr>
				<tr class = "zebra">
					<td><i>Liberal Studies</i></td>
					<td><?php echo $ls?></td>
					<td>3.15</td>
					<td>3.00</td>
				</tr>
				<!-- Holland Code (0 - 3) -->
				<tr>
					<td colspan = "2" class = "sub_head">Holland Code (0 - 3)</td>
					<td></td>
					<td></td>
				</tr>
				<tr class = "zebra">
					<td><i>Realistic (R)</i></td>
					<td><?php echo $realistic?></td>
					<td>2.10</td>
					<td>2.00</td>
				</tr>
				<tr class = "zebra">
					<td><i>Investigative (I)</i></td>
					<td><?php echo $investigative?></td>
					<td>2.35</td>
					<td>2.00</td>
				</tr>
				<tr class = "zebra">
					<td><i>Artistic (A)</i></td>
					<td><?php echo $artistic?></td>
					<td>1.94</td>
					<td>1.00</td>
				</tr>
				<tr class = "zebra">
					<td><i>Social (S)</i></td>
					<td><?php echo $social?></td>
					<td>2.37</td>
					<td>2.00</td>
				</tr>
				<tr class = "zebra">
					<td><i>Enterprising (E)</i></td>
					<td><?php echo $enterprising?></td>
					<td>1.89</td>
					<td>1.00</td>
				</tr>
				<tr class = "zebra">
					<td><i>Conventional</i></td>
					<td><?php echo $conventional?></td>
					<td>2.39</td>
					<td>2.00</td>
				</tr>
				<!-- SDAS (1 - 5) -->
				<tr>
					<td colspan = "2" class = "sub_head">SDAS (1 - 5)</td>
					<td></td>
					<td></td>
				</tr>
				<tr class = "zebra">
					<td>Lifelong Learner Average</td>
					<td><?php echo $lifelong_learner?></td>
					<td>3.50</td>
					<td>3.00</td>
				</tr>
				<tr class = "zebra">
					<td>Competent (Associate) Professional Average</td>
					<td><?php echo $competent?></td>
					<td>3.96</td>
					<td>3.67</td>
				</tr>
				<tr class = "zebra">
					<td>Critical Thinker Average</td>
					<td><?php echo $critical_thinker?></td>
					<td>3.47</td>
					<td>3.00</td>
				</tr>
				<tr class = "zebra">
					<td>Effective Communicator Average</td>
					<td><?php echo $effective_communicator?></td>
					<td>3.78</td>
					<td>3.33</td>
				</tr>
				<tr class = "zebra">
					<td>Problem Solver Average</td>
					<td><?php echo $problem_solver?></td>
					<td>3.73</td>
					<td>3.33</td>
				</tr>
				<tr class = "zebra">
					<td>Ethical Citizen Average</td>
					<td><?php echo $ethical_citizen?></td>
					<td>3.88</td>
					<td>3.67</td>
				</tr>
				<tr class = "zebra">
					<td>Global Awareness Average</td>
					<td><?php echo $global_awareness?></td>
					<td>3.39</td>
					<td>3.00</td>
				</tr>
			</table>
			<p>For Holland Code and SDAS, higher means more</p>
			<p>Click <a href="https://www.careerkey.org/fit/personality/holland-code-assessment-riasec">here</a> for the meaning of Holland Code</p>
		</div>
		<div class="form_title">
			<h2>Recommended Projects to join</h2>
		</div>
		<div class="row">
			<div class="column">
				<p>Priority</p>
				<p>1st</p>
				<p>2nd</p>
				<p>3nd</p>
			</div>
			<div class="column">
				<p>Project</p>
				<!--Select project session-->
				<form method="post" action="db/store_to_db.php">
					<input type="hidden" name="sid" value="<?php echo $sid_num ?>" />
					<select name="project_options1" id="project_options1">
						<option selected="true" disabled="disabled" hidden="true">------------------ Select a Project ------------------</option>
						<option value="A Capella Ensemble">A Capella Ensemble</option>
						<option value="Artist-in-Campus">Artist-in-Campus</option>
						<option value="Volunteer and Community Services">Volunteer and Community Services</option>
						<option value="Global Exploration and Cultural Exchange">Global Exploration and Cultural Exchange</option>
						<option value="Campus TV">Campus TV</option>
						<option value="Photography Production Crew">Photography Production Crew</option>
						<option value="Ceremony Presenter Training">Ceremony Presenter Training</option>
						<option value="Student Ambassador Programme">Student Ambassador Programme</option>
						<option value="Rotaract Projects">Rotaract Projects</option>
						<option value="Chinese Enhancement Programme">Chinese Enhancement Programme</option>
						<option value="English Enhancement Programme">English Enhancement Programme</option>
						<option value="Complementary Studies Programme">Complementary Studies Programme</option>
						<option value="Sports and Fitness">Sports and Fitness</option>
						<option value="Psychological Wellness">Psychological Wellness</option>
						<option value="Career Projects">Career Projects</option>
						<option value="Mentorship Programme">Mentorship Programme</option>
						<option value="Follow Your Heart Funding Scheme">Follow Your Heart Funding Scheme</option>
						<option value="Young Entrepreneur Scheme">Young Entrepreneur Scheme</option>
						<option value="Future and New Skills Training">Future and New Skills Training</option>
						<option value="Work Ethics Awareness">Work Ethics Awareness</option>
						<option value="Challenge and Explore Series">Challenge and Explore Series</option>
						<option value="Executive Leadership Programme (ELP)">Executive Leadership Programme (ELP)</option>
						<option value="Hydroponic Gardening">Hydroponic Gardening</option>
						<option value="Overseas Service Trips">Overseas Service Trips</option>
						<option value="Self-learning Language Centre Coordination">Self-learning Language Centre Coordination</option>
					</select>
					<br><br>

					<select name="project_options2" id="project_options2">
						<option selected="true" disabled="disabled" hidden="true">------------------ Select a Project ------------------</option>
						<option value="A Capella Ensemble">A Capella Ensemble</option>
						<option value="Artist-in-Campus">Artist-in-Campus</option>
						<option value="Volunteer and Community Services">Volunteer and Community Services</option>
						<option value="Global Exploration and Cultural Exchange">Global Exploration and Cultural Exchange</option>
						<option value="Campus TV">Campus TV</option>
						<option value="Photography Production Crew">Photography Production Crew</option>
						<option value="Ceremony Presenter Training">Ceremony Presenter Training</option>
						<option value="Student Ambassador Programme">Student Ambassador Programme</option>
						<option value="Rotaract Projects">Rotaract Projects</option>
						<option value="Chinese Enhancement Programme">Chinese Enhancement Programme</option>
						<option value="English Enhancement Programme">English Enhancement Programme</option>
						<option value="Complementary Studies Programme">Complementary Studies Programme</option>
						<option value="Sports and Fitness">Sports and Fitness</option>
						<option value="Psychological Wellness">Psychological Wellness</option>
						<option value="Career Projects">Career Projects</option>
						<option value="Mentorship Programme">Mentorship Programme</option>
						<option value="Follow Your Heart Funding Scheme">Follow Your Heart Funding Scheme</option>
						<option value="Young Entrepreneur Scheme">Young Entrepreneur Scheme</option>
						<option value="Future and New Skills Training">Future and New Skills Training</option>
						<option value="Work Ethics Awareness">Work Ethics Awareness</option>
						<option value="Challenge and Explore Series">Challenge and Explore Series</option>
						<option value="Executive Leadership Programme (ELP)">Executive Leadership Programme (ELP)</option>
						<option value="Hydroponic Gardening">Hydroponic Gardening</option>
						<option value="Overseas Service Trips">Overseas Service Trips</option>
						<option value="Self-learning Language Centre Coordination">Self-learning Language Centre Coordination</option>
					</select>
					<br><br>

					<select name="project_options3" id="project_options3">
						<option selected="true" disabled="disabled" hidden="true">------------------ Select a Project ------------------</option>
						<option value="A Capella Ensemble">A Capella Ensemble</option>
						<option value="Artist-in-Campus">Artist-in-Campus</option>
						<option value="Volunteer and Community Services">Volunteer and Community Services</option>
						<option value="Global Exploration and Cultural Exchange">Global Exploration and Cultural Exchange</option>
						<option value="Campus TV">Campus TV</option>
						<option value="Photography Production Crew">Photography Production Crew</option>
						<option value="Ceremony Presenter Training">Ceremony Presenter Training</option>
						<option value="Student Ambassador Programme">Student Ambassador Programme</option>
						<option value="Rotaract Projects">Rotaract Projects</option>
						<option value="Chinese Enhancement Programme">Chinese Enhancement Programme</option>
						<option value="English Enhancement Programme">English Enhancement Programme</option>
						<option value="Complementary Studies Programme">Complementary Studies Programme</option>
						<option value="Sports and Fitness">Sports and Fitness</option>
						<option value="Psychological Wellness">Psychological Wellness</option>
						<option value="Career Projects">Career Projects</option>
						<option value="Mentorship Programme">Mentorship Programme</option>
						<option value="Follow Your Heart Funding Scheme">Follow Your Heart Funding Scheme</option>
						<option value="Young Entrepreneur Scheme">Young Entrepreneur Scheme</option>
						<option value="Future and New Skills Training">Future and New Skills Training</option>
						<option value="Work Ethics Awareness">Work Ethics Awareness</option>
						<option value="Challenge and Explore Series">Challenge and Explore Series</option>
						<option value="Executive Leadership Programme (ELP)">Executive Leadership Programme (ELP)</option>
						<option value="Hydroponic Gardening">Hydroponic Gardening</option>
						<option value="Overseas Service Trips">Overseas Service Trips</option>
						<option value="Self-learning Language Centre Coordination">Self-learning Language Centre Coordination</option>
					</select>
					<br><br>

					<button type="submit" class="submit_btn">Submit</button>
					<button type="reset"class="reset_btn">Clear</button>
					<!-- Make the cancel button blue -->
					<button type="button"class="cancel_btn">Cancel</button>
				</form>
			</div>
		</div>
	</body>
</html>
