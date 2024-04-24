<?php
  include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
</head>
<body>

<section class="symptom">
    <form id="symptomForm" action="symptoms.php" method="get">
        <h2>Select Symptoms</h2>
        <p>Please select any symptoms you are experiencing from the list below:</p>

<input type="checkbox" class="btn-check" id="1" autocomplete="off" name="1" value="1">
<label class="btn btn-outline-primary" for="1">Fever</label>
<input type="checkbox" class="btn-check" id="2" autocomplete="off" name="2" value="2">
<label class="btn btn-outline-primary" for="2">Cough</label>
<input type="checkbox" class="btn-check" id="3" autocomplete="off" name="3" value="3">
<label class="btn btn-outline-primary" for="3">Sore Throat</label>
<input type="checkbox" class="btn-check" id="4" autocomplete="off" name="4" value="4">
<label class="btn btn-outline-primary" for="4">Fatigue</label>
<input type="checkbox" class="btn-check" id="5" autocomplete="off" name="5" value="5">
<label class="btn btn-outline-primary" for="5">Body Aches</label>
<input type="checkbox" class="btn-check" id="6" autocomplete="off" name="6" value="6">
<label class="btn btn-outline-primary" for="6">Runny or Stuffy Nose</label>
<input type="checkbox" class="btn-check" id="7" autocomplete="off" name="7" value="7">
<label class="btn btn-outline-primary" for="7">Sneezing</label>
<input type="checkbox" class="btn-check" id="8" autocomplete="off" name="8" value="8">
<label class="btn btn-outline-primary" for="8">Sore Throat</label>
<input type="checkbox" class="btn-check" id="9" autocomplete="off" name="9" value="9">
<label class="btn btn-outline-primary" for="9">Cough</label>
<input type="checkbox" class="btn-check" id="10" autocomplete="off" name="10" value="10">
<label class="btn btn-outline-primary" for="10">Mild Fatigue</label>
<input type="checkbox" class="btn-check" id="11" autocomplete="off" name="11" value="11">
<label class="btn btn-outline-primary" for="11">High Fever</label>
<input type="checkbox" class="btn-check" id="12" autocomplete="off" name="12" value="12">
<label class="btn btn-outline-primary" for="12">Cough with Phlegm</label>
<input type="checkbox" class="btn-check" id="13" autocomplete="off" name="13" value="13">
<label class="btn btn-outline-primary" for="13">Chest Pain</label>
<input type="checkbox" class="btn-check" id="14" autocomplete="off" name="14" value="14">
<label class="btn btn-outline-primary" for="14">Breathlessness</label>
<input type="checkbox" class="btn-check" id="15" autocomplete="off" name="15" value="15">
<label class="btn btn-outline-primary" for="15">Fatigue</label>
<input type="checkbox" class="btn-check" id="16" autocomplete="off" name="16" value="16">
<label class="btn btn-outline-primary" for="16">Shortness of Breath</label>
<input type="checkbox" class="btn-check" id="17" autocomplete="off" name="17" value="17">
<label class="btn btn-outline-primary" for="17">Blurred Vision</label>
<input type="checkbox" class="btn-check" id="18" autocomplete="off" name="18" value="18">
<label class="btn btn-outline-primary" for="18">Nausea</label>
<input type="checkbox" class="btn-check" id="19" autocomplete="off" name="19" value="19">
<label class="btn btn-outline-primary" for="19">Vomiting</label>
<input type="checkbox" class="btn-check" id="20" autocomplete="off" name="20" value="20">
<label class="btn btn-outline-primary" for="20">Abdominal Pain</label>
<input type="checkbox" class="btn-check" id="21" autocomplete="off" name="21" value="21">
<label class="btn btn-outline-primary" for="21">Loss of Appetite</label>
<input type="checkbox" class="btn-check" id="22" autocomplete="off" name="22" value="22">
<label class="btn btn-outline-primary" for="22">Dark Urine</label>
<input type="checkbox" class="btn-check" id="23" autocomplete="off" name="23" value="23">
<label class="btn btn-outline-primary" for="23">Swelling in Legs/Feet/Face</label>
<input type="checkbox" class="btn-check" id="24" autocomplete="off" name="24" value="24">
<label class="btn btn-outline-primary" for="24">Difficulty Concentrating</label>
<input type="checkbox" class="btn-check" id="25" autocomplete="off" name="25" value="25">
<label class="btn btn-outline-primary" for="25">Weight Loss</label>
<input type="checkbox" class="btn-check" id="26" autocomplete="off" name="26" value="26">
<label class="btn btn-outline-primary" for="26">Fever Chills</label>
<input type="checkbox" class="btn-check" id="27" autocomplete="off" name="27" value="27">
<label class="btn btn-outline-primary" for="27">Headache</label>
<input type="checkbox" class="btn-check" id="28" autocomplete="off" name="28" value="28">
<label class="btn btn-outline-primary" for="28">Dizziness</label>
<input type="checkbox" class="btn-check" id="29" autocomplete="off" name="29" value="29">
<label class="btn btn-outline-primary" for="29">Chest Pain</label>
<input type="checkbox" class="btn-check" id="30" autocomplete="off" name="30" value="30">
<label class="btn btn-outline-primary" for="30">Back Pain</label>
<input type="checkbox" class="btn-check" id="31" autocomplete="off" name="31" value="31">
<label class="btn btn-outline-primary" for="31">Joint Pain</label>
<input type="checkbox" class="btn-check" id="32" autocomplete="off" name="32" value="32">
<label class="btn btn-outline-primary" for="32">Muscle Stiffness</label>
<input type="checkbox" class="btn-check" id="33" autocomplete="off" name="33" value="33">
<label class="btn btn-outline-primary" for="33">Loss of Height</label>
<input type="checkbox" class="btn-check" id="34" autocomplete="off" name="34" value="34">
<label class="btn btn-outline-primary" for="34">Stooped Posture</label>
<input type="checkbox" class="btn-check" id="35" autocomplete="off" name="35" value="35">
<label class="btn btn-outline-primary" for="35">Bone Fractures</label>
<input type="checkbox" class="btn-check" id="36" autocomplete="off" name="36" value="36">
<label class="btn btn-outline-primary" for="36">Tremors</label>
<input type="checkbox" class="btn-check" id="37" autocomplete="off" name="37" value="37">
<label class="btn btn-outline-primary" for="37">Psychic Symptoms (Fear, Anxiety)</label>
<input type="checkbox" class="btn-check" id="38" autocomplete="off" name="38" value="38">
<label class="btn btn-outline-primary" for="38">Numbness or Weakness in Limbs</label>
<input type="checkbox" class="btn-check" id="39" autocomplete="off" name="39" value="39">
<label class="btn btn-outline-primary" for="39">Coordination/Balance Problems</label>
<input type="checkbox" class="btn-check" id="40" autocomplete="off" name="40" value="40">
<label class="btn btn-outline-primary" for="40">Pelvic Pain</label>
<input type="checkbox" class="btn-check" id="41" autocomplete="off" name="41" value="41">
<label class="btn btn-outline-primary" for="41">Pain During Intercourse</label>
<input type="checkbox" class="btn-check" id="42" autocomplete="off" name="42" value="42">
<label class="btn btn-outline-primary" for="42">Painful Bowel Movements</label>
<input type="checkbox" class="btn-check" id="43" autocomplete="off" name="43" value="43">
<label class="btn btn-outline-primary" for="43">Excessive Bleeding During Menstruation</label>
<input type="checkbox" class="btn-check" id="44" autocomplete="off" name="44" value="44">
<label class="btn btn-outline-primary" for="44">Infertility</label>
<input type="checkbox" class="btn-check" id="45" autocomplete="off" name="45" value="45">
<label class="btn btn-outline-primary" for="45">Seizures</label>
<input type="checkbox" class="btn-check" id="46" autocomplete="off" name="46" value="46">
<label class="btn btn-outline-primary" for="46">Temporary Confusion</label>
<input type="checkbox" class="btn-check" id="47" autocomplete="off" name="47" value="47">
<label class="btn btn-outline-primary" for="47">Uncontrollable Jerking Movements</label>
<input type="checkbox" class="btn-check" id="48" autocomplete="off" name="48" value="48">
<label class="btn btn-outline-primary" for="48">Loss of Consciousness</label>
<input type="checkbox" class="btn-check" id="49" autocomplete="off" name="49" value="49">
<label class="btn btn-outline-primary" for="49">Memory Loss</label>
<input type="checkbox" class="btn-check" id="50" autocomplete="off" name="50" value="50">
<label class="btn btn-outline-primary" for="50">Disorientation</label>
<input type="checkbox" class="btn-check" id="51" autocomplete="off" name="51" value="51">
<label class="btn btn-outline-primary" for="51">Mood Swings</label>
<input type="checkbox" class="btn-check" id="52" autocomplete="off" name="52" value="52">
<label class="btn btn-outline-primary" for="52">Challenges in Problem-Solving</label>
<input type="checkbox" class="btn-check" id="53" autocomplete="off" name="53" value="53">
<label class="btn btn-outline-primary" for="53">Slowed Movement</label>
<input type="checkbox" class="btn-check" id="54" autocomplete="off" name="54" value="54">
<label class="btn btn-outline-primary" for="54">Impaired Posture</label>
<input type="checkbox" class="btn-check" id="55" autocomplete="off" name="55" value="55">
<label class="btn btn-outline-primary" for="55">Loss of Automatic Movements</label>
<input type="checkbox" class="btn-check" id="56" autocomplete="off" name="56" value="56">
<label class="btn btn-outline-primary" for="56">Reduced Range of Motion</label>
<input type="checkbox" class="btn-check" id="57" autocomplete="off" name="57" value="57">
<label class="btn btn-outline-primary" for="57">Redness of Skin Around Joint</label>
<input type="checkbox" class="btn-check" id="58" autocomplete="off" name="58" value="58">
<label class="btn btn-outline-primary" for="58">Changes in a Mole or Wart</label>
<input type="checkbox" class="btn-check" id="59" autocomplete="off" name="59" value="59">
<label class="btn btn-outline-primary" for="59">Loss of Vision</label>
<input type="checkbox" class="btn-check" id="60" autocomplete="off" name="60" value="60">
<label class="btn btn-outline-primary" for="60">Loss of Hearing</label>
<input type="checkbox" class="btn-check" id="61" autocomplete="off" name="61" value="61">
<label class="btn btn-outline-primary" for="61">Loss of Smell or Taste</label>
<input type="checkbox" class="btn-check" id="62" autocomplete="off" name="62" value="62">
<label class="btn btn-outline-primary" for="62">Difficulty Speaking</label>
   
<br><input type="submit" class="submit" name="submit" value="submit"></input>      
</form>

<div id="result">
<?php
    $symps=array();
    for($i=0;$i<=100;$i++){
         if(isset($_GET["submit"])){
             if(isset($_GET[$i])){
                array_push($symps,$i);
             }
             
         }
     }


    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "project";
    $connect = "";

    $connect = mysqli_connect($db_server,$db_user,$db_password,$db_name);

    $prt=array();
    foreach ($symps as $symp){
       
        $sql="SELECT D.DNAME FROM DIS D INNER JOIN RESULT R ON D.ID = R.DID
        WHERE R.SID={$symp}
        GROUP BY D.DNAME";
        $r= mysqli_query($connect, $sql);

        if(mysqli_num_rows($r)>0){
            $row= mysqli_fetch_assoc($r);
            $d=$row["DNAME"];
            if(!in_array($d,$prt)){
                echo "{$d} <br>";
                $prt[]=$d;
            }
        }
    }
  ?>
  </div>
</section>


<section id="consult-doctor">
    <div class="doctor-container">
      <div class="doctor-info">
        <h2>Consult a Doctor</h2>
        <p>If you are experiencing any of the above symptoms or any other concerning symptoms, it is important to consult a doctor for proper diagnosis and treatment.</p>
        <p>Your health is important, and seeking professional medical advice is always the best course of action.</p>
      </div>
      <a href="find_doctors.php" class="cta-button">Find a Doctor</a>

    </div>
  </section>
  
  
<script src="script.js"></script>

  
</body>
</html>

<?php
  include 'footer.php';
  mysqli_close($connect);
?>