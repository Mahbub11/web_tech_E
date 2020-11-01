<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
*{
  background-color: white;
}
</style>

</head>
<body>  

<?php
$nameErr=$degreeErr=$bloodGErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $date = $month = $year = $gender = $comment = $website = $dateErr = $monthErr=$yearErr = "";

$username=$_POST["name"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";

  } elseif (strlen($username) < 2) {
    
    $nameErr = "Must be at lest 2 Char";
  }
   

   else {
    $name = test_input($_POST["name"]);
    
    if (!preg_match("/^[a-zA-Z0-9' ]*$/",$name)) {
      $nameErr = "Firts One Must be a Letter then can be Number";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
   
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["date"])) {
    $dateErr=" Date is Required";

  }  else{

    if ($_POST["date"] > 0 && $_POST["date"] < 32) {
      
    } else{
       $date = test_input($_POST["date"]);
       $dateErr="Invalid Date";
    }

  }

  if (empty($_POST["month"])) {
    $monthErr=" Month is Required";

  }  else{

    if ($_POST["month"] > 0 && $_POST["month"] < 13) {
      
    } else{
       $month = test_input($_POST["month"]);
       $monthErr="Invalid Month";
    }

  }

   if (empty($_POST["year"])) {
    $yearErr="Year is Required";

  }  else{

    if ($_POST["year"] > 1952 && $_POST["year"] < 1999) {
      
    } else{
       $year = test_input($_POST["year"]);
       $yearErr="Invalid Year";
    }

  }


  

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}


if (empty($_POST["cb"])) {

   

    $degreeErr = "Degree is required";
  } else { 
    
    if (count($_POST['cb'])  < 2) {
      $degreeErr = "Need to Select At lest two ";
    }
   
  }


if (empty($_POST["select_box"])) {

   
    $bloodGErr = "Must Be Select";
  } 


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>INFO</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

 <label> Date of Birth: > </label>
  dd: <input type="text" name="date">
  <span class="error">* <?php echo $dateErr;?></span>

  mm: <input type="text" name="month">
  <span class="error">* <?php echo $monthErr;?></span>

  yy: <input type="text" name="year">
  <span class="error">* <?php echo $yearErr;?></span>
  <br> <br>




  

  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  DEGREE:
  <input type="checkbox" id="ssc" name="cb[]" />SSC
  <input type="checkbox" id="hsc" name="cb[]"/> HSC
  <input type="checkbox" id="bsc" name="cb[]"/><br/>BSC
  <input type="checkbox" id="msc" name="cb[]"/><br/>MSC
  <span class="error">* <?php echo $degreeErr;?></span>
  <br><br>

 <label>Blood Group> </label>
  <select name="select_box">
       <option value=""></option>  
        <option value="a">A+</option>
        <option value="aa">A-</option>
        <option value="ab">AB+</option>
         <option value="o">O+</option>
    </select>
    <span class="error">* <?php echo $bloodGErr;?></span>
    <br>
  

  <input type="submit" name="submit" value="Submit">  
</form>



</body>
</html>
