<html>
    <head>
        <title>
            User Profile
        </title>
    </head>
    <body>
     <div style="background-color:00674e; height:100; align:top">
        <h1  style="font-family:ways; text-align:center; color:white; font-size:70;">Healthify</h1>
        </div>
        <br>
        <h1><center><u>USER INFORMATION</u></center></h1>
        <img src="https://img.freepik.com/free-vector/user-research-concept-illustration_114360-8143.jpg?w=2000" width="400" alt="quote"  align="right" style="margin-right:5em;"/><br><br>
        
   <?php
	#$fr = fopen("logininfo.txt", "r");
	$matchemail = $_POST['email'];
	$matchpassword = $_POST['password'];
	$userinfo = file_get_contents("logininfo.txt");
	$users = explode("\n", $userinfo);
	$results = array();
	$diseases = array();
	foreach($users as $user)
	{
		$fields = explode(",", $user);
		#echo "". $matchemail. "  " .$fields[0] . "<br>";
		#echo "".$matchpassword  . "  " . $fields[1] . "<br>";
		#echo "$fields[0] == $matchemail";
		if ("$fields[0]" == "$matchemail" && "$fields[1]" == "$matchpassword")  
			{
				$results[] = array($fields[0], $fields[1]);
				$user_name=$fields[2];
				$gender=$fields[3];
				$age=$fields[4];
				for($i=5; $i < count($fields); $i++)
				{
					$diseases[] = $fields[$i];
				}
				break;
			} 
	}   
	$queryinfo = file_get_contents("userinfo.txt");
	$query = explode("\n", $queryinfo);
	
	
	if (count($results) > 0)
	{
		
		echo "<h3>Name: ".  $user_name . "<br><br></h3>";
		echo "<h3>Gender: ".  $gender . "<br><br></h3>";
		echo "<h3>Medical History: <br><br></h3>";
		foreach ($diseases as $disease)
		{
    			echo "<li>". $disease . "</li><br>";
		}
		
	}
	else 
	{
		echo "<b>No results found.</b>";
		header("Location: login.php");
	}
	
	$queryinfo = file_get_contents("userinfo.txt");
	$query = explode("\n", $queryinfo);
	
	foreach($query as $queries)
	{
		$field = explode(",", $queries);
		
		if($field[1] == $results[0][0])
		{
			echo "<h3><p>Past Queries: </p></h3>";
			echo "<i> ". $field[2]."</i><br>";
		}
	}
?>
 <footer>
         <center>
        <button onclick="document.location='index.html'">Home</button>
        
        <button onclick="document.location='connect.php'">Next</button>
        
        </center>
        </footer>  
        
        </body>
        </html>
