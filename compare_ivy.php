<!DOCTYPE html>
<html lang="en">
  <head>	
	<link href="css/styles.css" rel="stylesheet">
  </head>
  
  <body>
   	<center><h2> Choose Two or More Ivy Leagues and the Categories Below to Compare: </h2><center>
	
	<!--Table form that takes in user input from checkboxes and uses POST method to compareivy.php-->
	<form action='./compareivy.php' method='POST'>
		<table style="width:100%">
			<tr> <!--Table Row-->
				<td> <!--Table Data-->
					<input type="checkbox" name="brown" value="Brown University"> Brown University<br> <!--Brown University checkbox-->
					<ul style="list-style-type:none"> <!--Unordered list-->
						<li><input type="checkbox" name="tuition" value="1"> Tuition</li><br> <!--Tuition checkbox-->
						<li><input type="checkbox" name="ratio" value="2"> Student-Faculty Ratio</li><br> <!--Student-Faculty Ratio checkbox-->
						<li><input type="checkbox" name="enrollment" value="3"> Enrollment</li><br> <!--Enrollment checkbox-->
						<li><input type="checkbox" name="location" value="4"> Location</li><br> <!--Location checkbox-->
					</ul>
				</td>
			
				<td> <!--Table Data-->
					<input type="checkbox" name="cornell" value="Cornell University"> Cornell University<br> <!--Cornell University checkbox-->
					<ul style="list-style-type:none"> <!--Unordered list-->
						<li><input type="checkbox" name="tuition" value="1"> Tuition</li><br> <!--Tuition checkbox-->
						<li><input type="checkbox" name="ratio" value="2"> Student-Faculty Ratio</li><br> <!--Student-Faculty Ratio checkbox-->
						<li><input type="checkbox" name="enrollment" value="3"> Enrollment</li><br> <!--Enrollment checkbox-->
						<li><input type="checkbox" name="location" value="4"> Location</li><br>  <!--Location checkbox-->
					</ul>
				</td>

				<td> <!--Table Data-->
					<input type="checkbox" name="columbia" value="Columbia University"> Columbia University<br> <!--Columbia University checkbox-->
					<ul style="list-style-type:none">  <!--Unordered List-->
						<li><input type="checkbox" name="tuition" value="1"> Tuition</li><br>  <!--Tuition checkbox-->
						<li><input type="checkbox" name="ratio" value="2"> Student-Faculty Ratio</li><br> <!--Student-Faculty Ratio checkbox-->
						<li><input type="checkbox" name="enrollment" value="3"> Enrollment</li><br> <!--Enrollment checkbox-->
						<li><input type="checkbox" name="location" value="4"> Location</li><br> <!--Location checkbox-->
					</ul>
				</td>
		
				<td> <!--Table Data-->	
					<input type="checkbox" name="dartmouth" value="Dartmouth College"> Dartmouth College<br> <!--Darmouth College checkbox-->
					<ul style="list-style-type:none"> <!--Unordered List-->
						<li><input type="checkbox" name="tuition" value="1"> Tuition</li><br> <!--Tuition checkbox-->
						<li><input type="checkbox" name="ratio" value="2"> Student-Faculty Ratio</li><br> <!--Student-Faculty Ratio checkbox-->
						<li><input type="checkbox" name="enrollment" value="3"> Enrollment</li><br> <!--Enrollment checkbox-->
						<li><input type="checkbox" name="location" value="4"> Location</li><br> <!--Location checkbox-->
					</ul>
				</td>
			</tr>
		
			<tr> <!--Table Row-->
				<td> <!--Table Data-->
					<input type="checkbox" name="harvard" value="Harvard University"> Harvard University<br> <!--Harvard University checkbox-->
					<ul style="list-style-type:none"> <!--Unordered List-->
						<li><input type="checkbox" name="tuition" value="1"> Tuition</li><br> <!--Tuition checkbox-->
						<li><input type="checkbox" name="ratio" value="2"> Student-Faculty Ratio</li><br> <!--Student-Faculty Ratio checkbox-->
						<li><input type="checkbox" name="enrollment" value="3"> Enrollment</li><br> <!--Enrollment checkbox-->
						<li><input type="checkbox" name="location" value="4"> Location</li><br> <!--Location checkbox-->
					</ul>
				</td>
			
				<td> <!--Table Data-->
					<input type="checkbox" name="princeton" value="Princeton University"> Princeton University<br> <!--Princeton University checkbox-->
					<ul style="list-style-type:none"> <!--Unordered List-->
						<li><input type="checkbox" name="tuition" value="1"> Tuition</li><br> <!--Tuition checkbox-->
						<li><input type="checkbox" name="ratio" value="2"> Student-Faculty Ratio</li><br> <!--Student-Faculty Ratio checkbox-->
						<li><input type="checkbox" name="enrollment" value="3"> Enrollment</li><br> <!--Enrollment checkbox-->
						<li><input type="checkbox" name="location" value="4"> Location</li><br> <!--Location checkbox-->
					</ul>
				</td>

				<td> <!--Table Data-->	
					<input type="checkbox" name="penn" value="University of Pennsylvania"> University of Pennsylvania<br> <!--University of Pennsylvania checkbox-->
					<ul style="list-style-type:none"> <!--Unordered List-->
						<li><input type="checkbox" name="tuition" value="1"> Tuition</li><br> <!--Tuition checkbox-->
						<li><input type="checkbox" name="ratio" value="2"> Student-Faculty Ratio</li><br> <!--Student-Faculty Ratio checkbox-->
						<li><input type="checkbox" name="enrollment" value="3"> Enrollment</li><br> <!--Enrollment checkbox-->
						<li><input type="checkbox" name="location" value="4"> Location</li><br> <!--Location checkbox-->
					</ul>
				</td>
		
				<td> <!--Table Data-->	
					<input type="checkbox" name="yale" value="Yale University"> Yale University<br> <!--Yale University checkbox-->
					<ul style="list-style-type:none"> <!--Unordered List-->
						<li><input type="checkbox" name="tuition" value="1"> Tuition</li><br> <!--Tuition checkbox-->
						<li><input type="checkbox" name="ratio" value="2"> Student-Faculty Ratio</li><br> <!--Student-Faculty Ratio checkbox-->
						<li><input type="checkbox" name="enrollment" value="3"> Enrollment</li><br> <!--Enrollment checkbox-->
						<li><input type="checkbox" name="location" value="4"> Location</li><br> <!--Location checkbox-->
					</ul>
				</td>
				
			</tr>	
		</table>
		<input type="Submit" name="Submit" value="Submit"> <!--Submit button-->
	</form>
  </body>
</html>	
