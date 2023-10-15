<html>
    <head>
        <title>
            Sign-in
        </title>
    </head>
    <body>
	<div style="background-color:00674e; height:100; align:top">
        
        <h1 style="font-family:ways; text-align:center; color:white; font-size:70; ">Healthify</h1>
        
        </div>
        <br>
        
        <h1><center><u>Sign-in</u></center></h1>
        <img src="https://img.freepik.com/free-vector/login-concept-illustration_114360-739.jpg?w=2000" width="600" alt="quote"  align="right" style="margin-right:5em;"/><br><br>
        

 <?php
	if(isset($_POST['submit']))
	{
		$fp=fopen("logininfo.txt", "a+");
	
	
		if(isset($_POST['email']))
		{
			$email=$_POST['email'];
			fwrite($fp, "$email," );
		}
		
		
		if(isset($_POST['password']))
		{
			$add=$_POST['password'];
			fwrite($fp, "$add," );
		}
		if(isset($_POST['name']))
		{
			$nam=$_POST['name'];
			fwrite($fp, "$nam," );
		}
		if(isset($_POST['gender']))
		{
			$gen=$_POST['gender'];
			fwrite($fp, "$gen," );
		}
		if(isset($_POST['age']))
		{
			$ag=$_POST['age'];
			fwrite($fp, "$ag," );
		}
		if(isset($_POST['dise']))
	    	{
			$diseases = $_POST['dise'];
			$diseases_str = implode(",", $diseases);
			fwrite($fp, "$diseases_str");
	  	}
		fwrite($fp, "\n");
		fclose($fp);
		
		header("Location:login.php");
		
	}
	
?>
	<form method="POST" style="margin-left:5em;">
	EMAIL:<br>
	<input name="email" /><br><br>
	PASSWORD:<br>
	<input type="password" name="password" /><br><br>

	NAME:<br>
	<input name="name" /><br><br><BR>
	Since you're a new user we'd like a keep a track of your past medicals records.
	<h3>MEDICAL HISTORY.</h3><br>
	AGE:<br>
	<input type="number" name="age" /><br><br>
	<u>GENDER:</u><br>
	<input type="radio"  name="gender" value="male" /> Male<br>
	<input type="radio"  name="gender" value="female" />Female<br>
	<input type="radio"  name="gender" value="others" checked />Prefer not to say<br><br>
	<u>CHRONIC DISEASES:</u><br>
	   <input type="checkbox" name="dise[]" value="Diabetes">Diabetes<br>
	   <input type="checkbox" name="dise[]" value="Cholestrol">Cholestrol<br>
	   <input type="checkbox" name="dise[]" value="Blood pressure">Blood Pressure<br>
	   <input type="checkbox" name="dise[]" value="Thyroid">Thyroid<br>
	   <input type="checkbox" name="dise[]" value="Arthritis">Arthiritis<br>
	   <input type="checkbox" name="dise[]" value="Kidney Problems">Kidney Problems<br>
	   <input type="checkbox" name="dise[]" value="Asthma">Asthma<br>
	   <input type="checkbox" name="dise[]" value="Depression">Depression<br>
	   <input type="checkbox" name="dise[]" value="Cardiac Arrest">Cardiac Arrest<br>
	   <input type="checkbox" name="dise[]" value="Allergies">Allergies<br>
	   <input type="checkbox" name="dise[]" value="PCOD">PCOD<br>
	   <input type="checkbox" name="dise[]" value="Diarrhea">Diarrhea<br>
	<BR> <input  type="submit" name="submit" value="submit"> <br><br>


	</form>


	</body>
	</html>
