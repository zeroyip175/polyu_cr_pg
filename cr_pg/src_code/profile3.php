<?php
    #just for demo
    #need to find it on the DB
    $sid_num = "20211069";
	$Programme = "8C108-NS";
	$Gender = "M";
	$P_Score = "15";
	$English = "3";
	$Chinese = "3";
	$Mathematics = "3";
	$Mathematics_Statistics = "0";
	$Mathematics_Algebra = "0";
	$Liberal_Studies = "3";
	$Realistic = "3";
	$Investigative = "3";
	$Artistic = "1";
	$Social = "3";
	$Enterprising = "3";
	$Conventional = "3";
	$Lifelong_Learner = "4";
	$Competent = "4.3";
	$Critical_Thinker = "4";
	$Effective_Communicator = "4";
	$Problem_Solver = "4";
	$Ethical_Citizen = "4.7";
	$Global_Awareness = "4.3";
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="css/style.css">
		<!-- /* Set additional styling options for the columns*/ -->
	</head>
	<body>
		<div class="student_profile_num">
			<h1>Student Profile of <?php echo $sid_num?></h1>
		</div>
		<div class="student_profile">
			<!-- The stu_profile just for demo, we need to read it on the database -->
			<!-- <img src="img/demo_stu_profile/stu_profile_demo_img.png" alt=""> -->
			<table>
				<!-- Demographics -->
				<tr>
					<td colspan = "2" class = "sub_head">Demographics</td>
					<td>Average</td>
					<td>25<sup>th</sup> Percentile</td>
				</tr>
				<tr class = "zebra">
					<td><i>Programme</i></td>
					<td><?php echo $Programme?></td>
					<td>N/A</td>
					<td>N/A</td>
				</tr>
				<tr class = "zebra">
					<td><i>Gender</i></td>
					<td><?php echo $Gender?></td>
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
					<td><?php echo $P_Score?></td>
					<td>15.66</td>
					<td>14.00</td>
				</tr>
				<tr class = "zebra">
					<td><i>English</i></td>
					<td><?php echo $English?></td>
					<td>2.70</td>
					<td>2.00</td>
				</tr>
				<tr class = "zebra">
					<td><i>Chinese</i></td>
					<td><?php echo $Chinese?></td>
					<td>2.89</td>
					<td>2.00</td>
				</tr>
				<tr class = "zebra">
					<td><i>Mathematics</i></td>
					<td><?php echo $Mathematics?></td>
					<td>3.18</td>
					<td>3.00</td>
				</tr>
				<tr class = "zebra">
					<td><i>Mathematics Statistics</i></td>
					<td><?php echo $Mathematics_Statistics?></td>
					<td>0.14</td>
					<td>0.00</td>
				</tr>
				<tr class = "zebra">
					<td><i>Mathematics Algebra</i></td>
					<td><?php echo $Mathematics_Algebra?></td>
					<td>0.37</td>
					<td>0.00</td>
				</tr>
				<tr class = "zebra">
					<td><i>Liberal Studies</i></td>
					<td><?php echo $Liberal_Studies?></td>
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
					<td><?php echo $Realistic?></td>
					<td>2.10</td>
					<td>2.00</td>
				</tr>
				<tr class = "zebra">
					<td><i>Investigative (I)</i></td>
					<td><?php echo $Investigative?></td>
					<td>2.35</td>
					<td>2.00</td>
				</tr>
				<tr class = "zebra">
					<td><i>Artistic (A)</i></td>
					<td><?php echo $Artistic?></td>
					<td>1.94</td>
					<td>1.00</td>
				</tr>
				<tr class = "zebra">
					<td><i>Social (S)</i></td>
					<td><?php echo $Social?></td>
					<td>2.37</td>
					<td>2.00</td>
				</tr>
				<tr class = "zebra">
					<td><i>Enterprising (E)</i></td>
					<td><?php echo $Enterprising?></td>
					<td>1.89</td>
					<td>1.00</td>
				</tr>
				<tr class = "zebra">
					<td><i>Conventional</i></td>
					<td><?php echo $Conventional?></td>
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
					<td><?php echo $Lifelong_Learner?></td>
					<td>3.50</td>
					<td>3.00</td>
				</tr>
				<tr class = "zebra">
					<td>Competent (Associate) Professional Average</td>
					<td><?php echo $Competent?></td>
					<td>3.96</td>
					<td>3.67</td>
				</tr>
				<tr class = "zebra">
					<td>Critical Thinker Average</td>
					<td><?php echo $Critical_Thinker?></td>
					<td>3.47</td>
					<td>3.00</td>
				</tr>
				<tr class = "zebra">
					<td>Effective Communicator Average</td>
					<td><?php echo $Effective_Communicator?></td>
					<td>3.78</td>
					<td>3.33</td>
				</tr>
				<tr class = "zebra">
					<td>Problem Solver Average</td>
					<td><?php echo $Problem_Solver?></td>
					<td>3.73</td>
					<td>3.33</td>
				</tr>
				<tr class = "zebra">
					<td>Ethical Citizen Average</td>
					<td><?php echo $Ethical_Citizen?></td>
					<td>3.88</td>
					<td>3.67</td>
				</tr>
				<tr class = "zebra">
					<td>Global Awareness Average</td>
					<td><?php echo $Global_Awareness?></td>
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
				<p>3rd</p>
			</div>
			<div class="column">
				<p>Project</p>
				<!--Select project session-->
				<form action="">
					<select name="project_options" id="project_options">
						<option value="">------ Select a Project ------</option>
						<option value="1">A Capella Ensemble</option>
						<option value="2">Artist-in-Campus</option>
						<option value="3">Volunteer and Community Services</option>
						<option value="4">Global Exploration and Cultural Exchange</option>
						<option value="5">Campus TV</option>
						<option value="6">Photography Production Crew</option>
						<option value="7">Ceremony Presenter Training</option>
						<option value="8">Student Ambassador Programme</option>
						<option value="9">Rotaract Projects</option>
						<option value="10">Chinese Enhancement Programme</option>
						<option value="11">English Enhancement Programme</option>
						<option value="12">Complementary Studies Programme</option>
						<option value="13">Sports and Fitness</option>
						<option value="14">Psychological Wellness</option>
						<option value="15">Career Projects</option>
						<option value="16">Mentorship Programme</option>
						<option value="17">Follow Your Heart Funding Scheme</option>
						<option value="18">Young Entrepreneur Scheme</option>
						<option value="19">Future and New Skills Training</option>
						<option value="20">Work Ethics Awareness</option>
						<option value="21">Challenge and Explore Series</option>
						<option value="22">Executive Leadership Programme (ELP)</option>
						<option value="23">Hydroponic Gardening</option>
						<option value="24">Overseas Service Trips</option>
						<option value="25">Self-learning Language Centre Coordination</option>
					</select>
					<br><br>

					<select name="project_options" id="project_options">
						<option value="">------ Select a Project ------</option>
						<option value="1">A Capella Ensemble</option>
						<option value="2">Artist-in-Campus</option>
						<option value="3">Volunteer and Community Services</option>
						<option value="4">Global Exploration and Cultural Exchange</option>
						<option value="5">Campus TV</option>
						<option value="6">Photography Production Crew</option>
						<option value="7">Ceremony Presenter Training</option>
						<option value="8">Student Ambassador Programme</option>
						<option value="9">Rotaract Projects</option>
						<option value="10">Chinese Enhancement Programme</option>
						<option value="11">English Enhancement Programme</option>
						<option value="12">Complementary Studies Programme</option>
						<option value="13">Sports and Fitness</option>
						<option value="14">Psychological Wellness</option>
						<option value="15">Career Projects</option>
						<option value="16">Mentorship Programme</option>
						<option value="17">Follow Your Heart Funding Scheme</option>
						<option value="18">Young Entrepreneur Scheme</option>
						<option value="19">Future and New Skills Training</option>
						<option value="20">Work Ethics Awareness</option>
						<option value="21">Challenge and Explore Series</option>
						<option value="22">Executive Leadership Programme (ELP)</option>
						<option value="23">Hydroponic Gardening</option>
						<option value="24">Overseas Service Trips</option>
						<option value="25">Self-learning Language Centre Coordination</option>
					</select>
					<br><br>

					<select name="project_options" id="project_options">
						<option value="">------ Select a Project ------</option>
						<option value="1">A Capella Ensemble</option>
						<option value="2">Artist-in-Campus</option>
						<option value="3">Volunteer and Community Services</option>
						<option value="4">Global Exploration and Cultural Exchange</option>
						<option value="5">Campus TV</option>
						<option value="6">Photography Production Crew</option>
						<option value="7">Ceremony Presenter Training</option>
						<option value="8">Student Ambassador Programme</option>
						<option value="9">Rotaract Projects</option>
						<option value="10">Chinese Enhancement Programme</option>
						<option value="11">English Enhancement Programme</option>
						<option value="12">Complementary Studies Programme</option>
						<option value="13">Sports and Fitness</option>
						<option value="14">Psychological Wellness</option>
						<option value="15">Career Projects</option>
						<option value="16">Mentorship Programme</option>
						<option value="17">Follow Your Heart Funding Scheme</option>
						<option value="18">Young Entrepreneur Scheme</option>
						<option value="19">Future and New Skills Training</option>
						<option value="20">Work Ethics Awareness</option>
						<option value="21">Challenge and Explore Series</option>
						<option value="22">Executive Leadership Programme (ELP)</option>
						<option value="23">Hydroponic Gardening</option>
						<option value="24">Overseas Service Trips</option>
						<option value="25">Self-learning Language Centre Coordination</option>
					</select>
					<br><br>

					<button type="submit" class="submit_btn">Submit</button>
					<button type="reset"class="reset_btn">Clear</button>
				</form>
			</div>
		</div>
	</body>
</html>
