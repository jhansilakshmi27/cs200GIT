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
		
		fclose($fp);
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

<BR> <input  type="submit" name="submit" value="submit"> <br><br>


</form>


	</body>
	</html>
