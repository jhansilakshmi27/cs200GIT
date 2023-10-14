<html>
    <head>
        <title>
            User Profile
        </title>
    </head>
    <body>
        <h1>HealthyMe</h1>
        
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
				
				break;
			} 
	}   
	
?>
        
        </body>
        </html>
