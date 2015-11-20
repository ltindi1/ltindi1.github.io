<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"       
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">       
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">       
  <head>       
    <title>Compare Ivy Leagues</title>       
    <meta http-equiv="content-type"       
        content="text/html; charset=utf-8"/> 
    <link href="css/styles.css" rel="stylesheet">      
  </head>       
  <body> 
  <h2> Comparison of Ivy Leagues Results: </h2>        
  	<?php
  		
  		//Connect to database
		$link = mysqli_connect('localhost', 'root', '');
		
		//If can't connect to database output error message
		if (!$link){ 
  			$output = 'Unable to connect to the database server.'; 
			include 'output.html.php'; 
			exit(); 
		}
		
		//Select database 'poisonivy'
		mysqli_select_db('poisonivy');
		
		//If can't find database output error message
		if (!mysqli_select_db($link, 'poisonivy')){ 
  			$output = 'Unable to locate the poisonivy database.'; 
			include 'output.html.php'; 
			exit(); 
		}
		
		//Assigns checkbox values for each school to respective variables
		$brown=$_POST['brown']; 
		$cornell=$_POST['cornell'];
		$columbia=$_POST['columbia'];
		$dartmouth=$_POST['dartmouth'];
		$harvard=$_POST['harvard'];
		$princeton=$_POST['princeton'];
		$penn=$_POST['penn'];
		$yale=$_POST['yale'];
		
		//Assigns checkbox values to respective variables
		$tuition=$_POST['tuition'];
		$enrollment=$_POST['enrollment'];
		$ratio=$_POST['ratio'];
		$location=$_POST['location'];
	?>	
	
	<table style="width:70%"> <!--Creates table-->
	<tr> <!--Table Row-->
		<td> <!--Table Data-->
	
			<?php
				//Determines if the variable brown is set and is not null
 				if (isset($brown)) {
 					//Outputs the name of school
 					echo "Brown University <br />";
 					
 					//Assigns MySQL query to a variable
 					$query1 = "SELECT * FROM college WHERE name='Brown University' ";
 			
 					//Runs MySQL query and assigns it to a variable
 					$query = mysqli_query($link, $query1);
					$numrows = mysqli_num_rows($query);
			
					//Determines if the variable enrollment is set and is not null then retrives enrollment information
					//and outputs the value for brown
					if (isset($enrollment)) { 
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$enrollment = $row['enrollment'];
        						echo "Enrollment: $enrollment <br />";
        
        					}
        				$query = mysqli_query($link,$query1);
     	    			}
    				}
    		
    				//Determines if the variable tuition is set and is not null then retrives tuition information
					//and outputs the value for brown
    				if (isset($tuition)) {   
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$tuition = $row['tuition'];
        						echo "Tuition: $$tuition <br />";
        
        					}
     	    				$query = mysqli_query($link, $query1);
     	    			}
    				}
    		
    				//Determines if the variable ratio is set and is not null then retrives student-faculty ratio information
					//and outputs the value for brown
    				if (isset($ratio)) { 
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$ratio = $row['ratio'];
        						echo "Student-Faculty Ratio: $ratio <br />";
        					}
        					$query = mysqli_query($link,$query1);
     	    			}
    				}

					//Determines if the variable location is set and is not null then retrives location information
					//and outputs the value for brown
  					if (isset($location)) { 
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$location = $row['location'];
        						echo "Location: $location <br />";
        					}
        					$query = mysqli_query($link,$query1);
     	    			}
    				}   		   		    
 				}
 			?>
 	
 		</td>
		
		<td> <!--Table Data-->

			<?php
			
				//Determines if the variable cornell is set and is not null
				if (isset($cornell)) {	
				
					//Outputs the name of school	
 					echo "Cornell University <br />";
 			 		
 			 		//Assigns MySQL query to a variable	
 					$query1 = "SELECT * FROM college WHERE name='Cornell University' ";
 		
 					//Runs MySQL query and assigns it to a variable
 					$query = mysqli_query($link, $query1);
 					$numrows = mysqli_num_rows($query);
    		
    				//Determines if the variable enrollment is set and is not null then retrives enrollment information
					//and outputs the value for cornell
					if (isset($enrollment)) { 
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$enrollment = $row['enrollment'];
        						echo "Enrollment: $enrollment <br />";
        
        					}
        					$query = mysqli_query($link,$query1);
     	    			}
    				}
    		
    				//Determines if the variable tuition is set and is not null then retrives tuition information
					//and outputs the value for cornell
    				if (isset($tuition)) {   
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$tuition = $row['tuition'];
        						echo "Tuition: $$tuition <br />";
        					}
     	    				$query = mysqli_query($link, $query1);
     	    			}
    				}
    				
    				//Determines if the variable ratio is set and is not null then retrives ratio information
					//and outputs the value for cornell
    				if (isset($ratio)) { 
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$ratio = $row['ratio'];
        						echo "Student-Faculty Ratio: $ratio <br />";
        					}
        					$query = mysqli_query($link,$query1);
     	    			}
    				}

					//Determines if the variable location is set and is not null then retrives location information
					//and outputs the value for cornell
		  			if (isset($location)) { 
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$location = $row['location'];
        						echo "Location: $location <br />";
        					}
        					$query = mysqli_query($link,$query1);
     	    			}
    				}   
 				}
 			?>
	
		</td>
		<td> <!--Table Data--> 	
	
			<?php	
 		
 				//Determines if the variable columbia is set and is not null
 				if (isset($columbia)) {
 				
 					//Outputs the name of the school
 					echo "Columbia University <br />";
 			
 					//Assigns MySQL query to a variable
 					$query1 = "SELECT * FROM college WHERE name='Columbia University' ";
 			
 					//Runs MySQL query and assigns it to a variable
 					$query = mysqli_query($link, $query1);
					$numrows = mysqli_num_rows($query);
    		
    				//Determines if the variable enrollment is set and is not null then retrives enrollment information
					//and outputs the value for columbia
					if (isset($enrollment)) { 
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$enrollment = $row['enrollment'];
        						echo "Enrollment: $enrollment <br />";
        
       			 			}
        					$query = mysqli_query($link,$query1);
     	    			}
    				}
    		
    				//Determines if the variable tuition is set and is not null then retrives tuition information
					//and outputs the value for columbia
    				if (isset($tuition)) {   
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$tuition = $row['tuition'];
        						echo "Tuition: $$tuition <br />";
        					}
     	    				$query = mysqli_query($link, $query1);
     	    			}
    				}
    		
    				//Determines if the variable ratio is set and is not null then retrives ratio information
					//and outputs the value for columbia
    				if (isset($ratio)) { 
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$ratio = $row['ratio'];
        						echo "Student-Faculty Ratio: $ratio <br />";
        					}
        					$query = mysqli_query($link,$query1);
     	    			}
    				}

					//Determines if the variable location is set and is not null then retrives location information
					//and outputs the value for columbia
  					if (isset($location)) { 
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$location = $row['location'];
        						echo "Location: $location <br />";
        					}
        					$query = mysqli_query($link,$query1);
     	    			}
    				}   
 				}
 			?>

		</td>
		<td> <!--Table Data-->
	
			<?php
			
				//Determines if the variable dartmouth is set and is not null
 				if (isset($dartmouth)) {
 				
 					//Outputs the name of the school
 					echo "Dartmouth College <br />";
 			
 					//Assigns MySQL query to a variable
 					$query1 = "SELECT * FROM college WHERE name='Dartmouth College' ";
 			
 					//Runs MySQL query and assigns it to variable query
 					$query = mysqli_query($link, $query1);
					$numrows = mysqli_num_rows($query);
    		
    				//Determines if the variable enrollment is set and is not null then retrives enrollment information
					//and outputs the value for dartmouth
					if (isset($enrollment)) { 
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$enrollment = $row['enrollment'];
        						echo "Enrollment: $enrollment <br />";
        
       			 			}
        					$query = mysqli_query($link,$query1);
     	    			}
    				}
    		
    				//Determines if the variable tuition is set and is not null then retrives tuition information
					//and outputs the value for dartmouth
    				if (isset($tuition)) {   
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$tuition = $row['tuition'];
        						echo "Tuition: $$tuition <br />";
        
       			 			}
     	    				$query = mysqli_query($link, $query1);
     	    			}
    				}
    		
    				//Determines if the variable ratio is set and is not null then retrives ratio information
					//and outputs the value for dartmouth
    				if (isset($ratio)) { 
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$ratio = $row['ratio'];
        						echo "Student-Faculty Ratio: $ratio <br />";
        					}
        					$query = mysqli_query($link,$query1);
     	    			}
    				}

					//Determines if the variable location is set and is not null then retrives location information
					//and outputs the value for dartmouth
		  			if (isset($location)) { 
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$location = $row['location'];
        						echo "Location: $location <br />";
        					}
        					$query = mysqli_query($link,$query1);
     	    			}
    				}   
 				}
 			?>

		</td>
		<td> <!--Table Data-->

			<?php
 		
 				//Determines if the variable harvard is set and is not null
 				if (isset($harvard)) {
 				
 					//Outputs the name of the school
 					echo "Harvard University <br />";
 			
 					//Assigns the MySQL query to variable query1
 					$query1 = "SELECT * FROM college WHERE name='Harvard University' ";
 			
 					//Runs MySQL query and assigns it to variable query
 					$query = mysqli_query($link, $query1);
					$numrows = mysqli_num_rows($query);
    		
    				//Determines if the variable enrollment is set and is not null then retrives enrollment information
					//and outputs the value for harvard
					if (isset($enrollment)) { 
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$enrollment = $row['enrollment'];
        						echo "Enrollment: $enrollment <br />";
        
        					}
        					$query = mysqli_query($link,$query1);
     	    			}
    				}
    		
    				//Determines if the variable tuition is set and is not null then retrives tuition information
					//and outputs the value for harvard
    				if (isset($tuition)) {   
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$tuition = $row['tuition'];
        						echo "Tuition: $$tuition <br />";
        
        					}
     	    				$query = mysqli_query($link, $query1);
     	    			}
    				}
    				
    				//Determines if the variable ratio is set and is not null then retrives ratio information
					//and outputs the value for dartmouth
    				if (isset($ratio)) { 
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$ratio = $row['ratio'];
        						echo "Student-Faculty Ratio: $ratio <br />";
        					}
        					$query = mysqli_query($link,$query1);
     	    			}
    				}

  					//Determines if the variable location is set and is not null then retrives location information
					//and outputs the value for harvard
  					if (isset($location)) { 
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$location = $row['location'];
        						echo "Location: $location <br />";
        					}
        					$query = mysqli_query($link,$query1);
     	    			}
    				}   
 				}
 			?>
		</td>
		<td> <!--Table Data-->
	
			<?php
 				
 				//Determines if the variable princeton is set and is not null
 				if (isset($princeton)) {
 				
 					//Outputs the name of the school
 					echo "Princeton University <br />";
 			
 					//Assigns a MySQL query to variable query1
 					$query1 = "SELECT * FROM college WHERE name='Princeton University' ";
 					
 					//Runs MySQL query and assigns it to variable query
 					$query = mysqli_query($link, $query1);
					$numrows = mysqli_num_rows($query);
    		
					//Determines if the variable enrollment is set and is not null then retrives enrollment information
					//and outputs the value for princeton
					if (isset($enrollment)) { 
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$enrollment = $row['enrollment'];
        						echo "Enrollment: $enrollment <br />";
        					}
        					$query = mysqli_query($link,$query1);
     	    			}
    				}
    		
    				//Determines if the variable tuition is set and is not null then retrives tuition information
					//and outputs the value for princeton
    				if (isset($tuition)) {   
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$tuition = $row['tuition'];
        						echo "Tuition: $$tuition <br />";
        
        					}
     	    				$query = mysqli_query($link, $query1);
     	    			}
    				}
    		
    				//Determines if the variable ratio is set and is not null then retrives ratio information
					//and outputs the value for princeton
    				if (isset($ratio)) { 
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$ratio = $row['ratio'];
        						echo "Student-Faculty Ratio: $ratio <br />";
        					}
        					$query = mysqli_query($link,$query1);
     	    			}
    				}

					c
  					if (isset($location)) { 
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$location = $row['location'];
        						echo "Location: $location <br />";
        					}
        					$query = mysqli_query($link,$query1);
     	    			}
    				}   
 				}
 			?>

		</td>
		<td> <!--Table Data-->

			<?php
 		
 				//Determines if the variable penn is set and is not null
 				if (isset($penn)) {
 				
 					//Outputs the name of the school
 					echo "University of Pennsylvania <br />";
 			
 					//Assigns a MySQL query to variable query1
 					$query1 = "SELECT * FROM college WHERE name='University of Pennsylvania' ";
 			
 					//Runs MySQL query and assigns it to variable query
 					$query = mysqli_query($link, $query1);
					$numrows = mysqli_num_rows($query);
    		
    				//Determines if the variable enrollment is set and is not null then retrives enrollment information
					//and outputs the value for penn
					if (isset($enrollment)) { 
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$enrollment = $row['enrollment'];
        						echo "Enrollment: $enrollment <br />";
        
        					}
        					$query = mysqli_query($link,$query1);
     	    			}
    				}
    		
    				//Determines if the variable tuition is set and is not null then retrives tuition information
					//and outputs the value for penn
    				if (isset($tuition)) {   
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$tuition = $row['tuition'];
        						echo "Tuition: $$tuition <br />";
        
        					}
     	    				$query = mysqli_query($link, $query1);
     	    			}
    				}
    		
    				//Determines if the variable ratio is set and is not null then retrives ratio information
					//and outputs the value for princeton
    				if (isset($ratio)) { 
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$ratio = $row['ratio'];
        						echo "Student-Faculty Ratio: $ratio <br />";
        					}
        					$query = mysqli_query($link,$query1);
     	    			}
    				}

  					//Determines if the variable location is set and is not null then retrives location information
					//and outputs the value for location
  					if (isset($location)) { 
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$location = $row['location'];
        						echo "Location: $location <br />";
        					}
        					$query = mysqli_query($link,$query1);
     	    			}
    				}   
 				}
 			?>

		</td>	
		<td>

			<?php
			
				//Determines if the variable yale is set and is not null
 				if (isset($yale)) {
 				
 					//Outputs the name of the school
 					echo "Yale University <br />";
 			
 					//Assigns a MySQL query to variable query1
 					$query1 = "SELECT * FROM college WHERE name='Yale University' ";
 			
 					//Runs MySQL query and assigns it to variable query
 					$query = mysqli_query($link, $query1);
					$numrows = mysqli_num_rows($query);
    		
    				//Determines if the variable enrollment is set and is not null then retrives enrollment information
					//and outputs the value for yale
					if (isset($enrollment)) { 
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			 		 			$enrollment = $row['enrollment'];
        						echo "Enrollment: $enrollment <br />";
        
        					}
        					$query = mysqli_query($link,$query1);
     	    			}
    				}
    		
    				//Determines if the variable tuition is set and is not null then retrives tuition information
					//and outputs the value for yale
    				if (isset($tuition)) {   
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   					  			$tuition = $row['tuition'];
        						echo "Tuition: $$tuition <br />";
        					}
     	    				$query = mysqli_query($link, $query1);
     	    			}
    				}
    		
    				//Determines if the variable ratio is set and is not null then retrives student-faculty ratio information
					//and outputs the value for yale
    				if (isset($ratio)) { 
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			 		 			$ratio = $row['ratio'];
        						echo "Student-Faculty Ratio: $ratio <br />";
        					}
        					$query = mysqli_query($link,$query1);
     	    			}
    				}

					//Determines if the variable location is set and is not null then retrives location information
					//and outputs the value for yale
  					if (isset($location)) { 
    					if ($numrows > 0){
   							while ($row = mysqli_fetch_assoc($query)){
   			  					$location = $row['location'];
        						echo "Location: $location <br />";
        					}
        					$query = mysqli_query($link,$query1);
     	   		 	}
    			}   
 			}
 		?>

	</td>
	</tr>
	</table> 

  </body>       
</html>
