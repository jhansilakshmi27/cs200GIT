<html>
    <head>
        <title>
            diagnose
        </title>
        
       <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

header {
  background-color:  #DAF7A6 ;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

nav {
  float: left;
  width: 30%;
  height: 760px; 
  background:  #FFC300   ;
  padding: 20px;
}


article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: white;
  height: 760px; 
}


section::after {
  content: "";
  display: table;
  clear: both;
}

footer {
  background-color: 00674e ;
  padding: 10px;
  text-align: center;
  color: white;
}
</style>
        
    </head>
    <body>
        <div style="background-color:00674e; height:100; align:top">
        
        <h1 style="font-family:ways; text-align:center; color:white; font-size:70; ">HealthyMe</h1>
        
        </div>
        <header>
  	<h2>Diagnose</h2>
	</header>
        
        <section>
  <nav>
  
  
    <center>
    <img src ="https://media.istockphoto.com/id/537254156/vector/medical-diagnosis-flat-illustration-diagnosis-clinical-record-flat-vector-illustration.jpg?s=170667a&w=0&k=20&c=gDurh38YMUd5AJuaF8iULgJGtM5sbRqgWph2oQE38P8="
    width="95%" alt="img"  align="center"  />
    </center>
  </nav>
  
  <article>
   <h1>Identify </h1>
   <p>Select the options that match your symptoms :</p>

<form method="post">
   <input type="checkbox" name="symptoms[]" value="Fever">Fever<br>
   <input type="checkbox" name="symptoms[]" value="Headache">Headache<br>
   <input type="checkbox" name="symptoms[]" value="Cough">Cough<br>
   <input type="checkbox" name="symptoms[]" value="Sore throat">Sore throat<br>
   <input type="checkbox" name="symptoms[]" value="Fatigue">Fatigue<br>
   <input type="checkbox" name="symptoms[]" value="Body aches/pain">Body aches/pain<br>
   <input type="checkbox" name="symptoms[]" value="Chest pain">Chest pain<br>
   <input type="checkbox" name="symptoms[]" value="Shortness of breath">Shortness of breath<br>
   <input type="checkbox" name="symptoms[]" value="Nausea/Vomiting">Nausea/Vomiting<br>
   <input type="checkbox" name="symptoms[]" value="Diarrhea">Diarrhea<br>
   <input type="checkbox" name="symptoms[]" value="Dizziness">Dizziness<br>
   <input type="checkbox" name="symptoms[]" value="Lightheadedness">Lightheadedness<br>
   <input type="checkbox" name="symptoms[]" value="Skin rash">Skin rash<br>
   <input type="checkbox" name="symptoms[]" value="Itching">Itching<br><br>
   <input type="submit" name="Submit" value="Submit"><br><br>
</form>
<?php
if( isset($_POST['Submit'] ) )
{
	$diseases = array(
   "Common cold" => array("Fever", "Headache", "Cough", "Sore throat", "Fatigue", "Body aches/pain"),
   "Influenza" => array("Fever", "Headache", "Cough", "Fatigue", "Body aches/pain", "Nausea/Vomiting", "Diarrhea"),
   "Pneumonia" => array("Fever", "Cough", "Chest pain", "Shortness of breath", "Fatigue"),
   "Allergies" => array("Headache", "Sore throat", "Itching", "Skin rash"),
   "Anxiety" => array("Dizziness", "Lightheadedness")
   
);

$symptoms_a = $_POST['symptoms'];
$one=1;
$max=0;
$matches=0;
if(count($symptoms_a)==$one)
{
	foreach ($diseases as  $disease => $disease_symptoms) 
{
	$match=count(array_intersect($symptoms_a,$disease_symptoms));
   if ( $match == "1" ) 
   {
	$final_disease=$disease;
   	$encoded_disease = urlencode($final_disease);
	echo "<h2>Possible disease:<a href='remedies.php?disease=$encoded_disease'> " . $disease . "</a></h2>"; 
   }
   
}

}
else
{	
foreach ($diseases as  $disease => $disease_symptoms) 
{
	$matches=count(array_intersect($symptoms_a,$disease_symptoms));
   if ( $matches > $max ) 
   {
      $max=$matches;
   }
   
}
$count_dis=0;
$target="remedies.php";
$linkname="link";
echo nl2br("According to your symptoms :\n");
while ( $count_dis <= 3)
{
foreach ($diseases as  $disease => $disease_symptoms)
{
	if( count(array_intersect($symptoms_a,$disease_symptoms)) == $max )
	{	
		if($count_dis <= 3)
		{
			$final_disease=$disease;
			$encoded_disease = urlencode($final_disease);
			echo nl2br("<h3>Possible illness:<a href='remedies.php?disease=$encoded_disease' target='_blank'> " . $disease . "\n</a></h3>");
			$count_dis = $count_dis + 1;
		}
    	}
}
$max=$max-1;
}
}
echo nl2br("\nClick on the <i>illness</i> to know more about the remedies, food plans or OTC medicines you can take.");

}
?>
</article>
</section>
        
        
<footer>
  <p>This information has not been medically certified yet.</p>
  
</footer>
        

        

</body>
</html>
