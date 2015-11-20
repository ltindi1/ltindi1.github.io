<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"       
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">       
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">       
  <head>       
    <title>Search Engine - Search</title>       
    <meta http-equiv="content-type"       
        content="text/html; charset=utf-8"/> 
    <link href="css/styles.css" rel="stylesheet">        
  </head>       
  <body>       
  
  		<h2> Search Engine </h2>
  		
  		<!--Search form that uses get method and search.php-->
  		<form action='./search.php' method='get'>
  			<input type='text' name='k' size='50' value='<?php echo $_GET['k']; ?>' />
  			<input type='submit' value='Search'>	 
  		</form>
  		<hr /> <!--Horizontal line-->
  		
  		<?php
  			
  			//Gets k variable from search and assigns it to k
  			$k = $_GET['k'];		
  			$terms = explode(" ",$k); //Splits a string by string
  			
  			//Assigns MySQL query to variable query
  			$query = "SELECT * FROM college WHERE ";
  		
  			//Goes through the terms variable which is the value that is being searched and looks for it
			foreach ($terms as $each){
				$i++;
				
				if($i == 1)
					$query .= "name LIKE '%$each%' ";
				else
					$query .= "OR name LIKE '%$each%' "; 
			}
			
			//Connects to database
			$link = mysqli_connect('localhost', 'root', ''); 
			
			//If it does not connect output error message
			if (!$link){ 
  				$output = 'Unable to connect to the database server.'; 
				include 'output.html.php'; 
				exit(); 
			}
			
			//Selects database
			mysqli_select_db('poisonivy');
			
			//If it does not find database output error message
			if (!mysqli_select_db($link, 'poisonivy')){ 
  				$output = 'Unable to locate the poisonivy database.'; 
				include 'output.html.php'; 
				exit(); 
			}
			
			//Runs MySQL query and assigns it to variable query
			$query = mysqli_query($link, $query);
			$numrows = mysqli_num_rows($query);
			if ($numrows > 0){
			
				//Retrieves id, name, location, tuition, enrollment, setting and founded values from database and outputs the values
				while ($row = mysqli_fetch_assoc($query)){
					$id = $row['id'];
					$name = $row['name'];
					$location = $row['location'];
					$tuition = $row['tuition'];
					$enrollment = $row['enrollment'];
					$setting = $row['setting'];
					$founded = $row['founded'];
					
					echo "<h2>$name</h2>
					Location: $location <br /><br />
					Tuition: $tuition <br /><br />
					Enrollment: $enrollment <br /><br />
					Setting: $setting <br /><br />
					Founded: $founded <br /><br />	";
				}
			}
			else
				echo "No results found for \"<b>$k</b>\"";
		?>
  </body>       
</html>
