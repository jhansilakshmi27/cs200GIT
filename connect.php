<html>
    <head>
        <title>
            connect
        </title>
    </head>
    <body>
        <div style="background-color:00674e; height:100; align:top">
        
        <h1 style="font-family:ways; text-align:center; color:white; font-size:70; ">Healthify</h1>
        
        </div>
          
        <img src ="https://thumbs.dreamstime.com/b/healthy-lifestyle-self-care-concept-healthy-lifestyle-self-care-concept-food-sports-nature-icons-arranged-173734174.jpg"
    width="500" alt="quote"  align="right" HSPACE="90" />
        <br><br> 
        <h1 style="margin-left:1em;"> Feel free to provide a feedback or submit any queries. </h1>
  	 <?php
       		if(isset($_POST['submit']))
       		{
       			$fp=fopen("userinfo.txt", "a+");
	
			if(isset($_POST["name"]))
			{
				$nam=$_POST['name'];
				fwrite($fp, "$nam,");
			}
			
			if(isset($_POST['email']))
			{
				$email=$_POST['email'];
				fwrite($fp, "$email," );
			}
			
			
			if(isset($_POST['address']))
			{
				$add=$_POST['address'];
				fwrite($fp, "$add\n" );
			}
			echo "Query submitted";
			
			fclose($fp);
		}
	?>
        
        <form method="POST" style="margin-left:2em;">
        <br height= '20' ><br>
       
        <b>
	NAME:<br> <input name="name" /><br><br>
	EMAIL:<br> <input name="email" /><br><br>
	QUERY/FEEDBACK: <br> <textarea rows="5" cols="40" name="address"></textarea><br><br>
	
	<input  type="submit" name="submit" value="submit"> <br><br>
	</b>
	</form>

	To view your past queries or responds click on <button onclick="document.location='login.php'">User Profile</button>
	<br><br> 
	
	
        <hr  width="50%" color="#00674e" >
       <br><br>      
       
       

   </body>
</html>
