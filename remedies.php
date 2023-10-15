<html>
<head>
<title>remedies</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
td{
  background-color:#fdffcd;
  height:60;
  text-align:center;
}
</style>
</head>
<body>
<div style="background-color:00674e; height:100; align:top">
        
        <h1 style="font-family:ways; text-align:center; color:white; font-size:70; ">HealthyMe</h1>
</div>
        <br><br>
        <center>
<table border="1" cellspacing="10" bgcolor=" #00674e " height="80%" width="83%">
<tr bgcolor="#ffd13d"><th colspan="3"><h1><u>Remedies for <?php echo $_GET['disease']; ?>:</u></h1></th></tr>
<tr bgcolor="#f1ffa2"><th><strong><h3>Home Remedies:</h3></strong></th><th><strong><h3>Dietary Advice:</h3></strong></th><th><strong><h3>OTC Medicines:</h3></strong></th></tr>


<?php
$x=urldecode($_GET['disease']);
$home_remedies = array(
   "Common cold" => "Drink warm fluids, Use a humidifier, Gargle with saltwater, Use Throat lozenge to soothe soar throat",
   "Pneumonia" => "Get plenty of rest, Use a humidifier, Take over-the-counter pain relievers, Seek professional help to avoid worsening of condition",
   "Influenza" => "Get plenty of rest, Take over-the-counter pain relievers, Use a humidifier, Use Throat lozenge to soothe soar throat",
   "Allergies" => "Avoid allergens, Use over-the-counter antihistamines, Use nasal irrigation, Use essential oils",
   "Anxiety" => "Practice relaxation techniques, Exercise regularly, Get enough sleep, Limit Caffeine intake"
);
$food_plans = array(
   "Common cold" => "Drink warm fluids, Eat foods high in vitamin C and zinc, Avoid dairy products, Use ginger paste or Honey for throat relief.",
   "Pneumonia" => "Drink fluids, Eat foods high in vitamin C and zinc, Avoid dairy products, Use ginger paste or Honey for throat relief",
   "Influenza" => "Drink fluids, Eat foods high in vitamin C and zinc, Avoid dairy products, Use ginger paste or Honey for throat relief",
   "Allergies" => "Eat foods high in vitamin C and omega-3 fatty acids, Drink Green tea in the morning, Avoid processed foods and sugar, Use ginger paste or Honey in throat",
   "Anxiety" => "Eat foods rich in omega-3 fatty acids, Complex carbohydrates, Magnesium, Dark chocolate may help ease anxiety"
);
$otc_medicines = array(
   "Common cold" => "Acetaminophen, Ibuprofen, Decongestants, Cough suppressants",
   "Pneumonia" => "Antibiotics, Acetaminophen, Ibuprofen, Decongestants",
   "Influenza" => "Acetaminophen, Ibuprofen, Decongestants, Antiviral medication",
   "Allergies" => "Antihistamines, Decongestants, Nasal corticosteroids, Allergy shots",
   "Anxiety" => "Antidepressants, Anti-anxiety medication"
);
$remedies = $home_remedies[$x];
$remedies_list = explode(",", $remedies);
$meds = $otc_medicines[$x];
$meds_list = explode(",", $meds);
$food = $food_plans[$x];
$food_list = explode(",", $food);

for ($i = 0; $i < count($remedies_list) || $i < count($meds_list) || $i < count($food_list); $i++) {
    echo ;
    if ($i < count($remedies_list)) {
        echo .$remedies_list[$i].;
    } else {
        echo "<td></td>";
    }
    if ($i < count($food_list)) {
        echo .$food_list[$i].;
    } else {
        echo "<td></td>";
    }
    if ($i < count($meds_list)) {
        echo .$meds_list[$i].;
    } else {
        echo ;
    }
    echo ;
    }


?>

</table>
</center>
<br>









</body>
</html>
