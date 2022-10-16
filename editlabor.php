<?php
$id = "";
require_once('database.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($id == null){
    echo 'id is null';
}
$sql = mysqli_query($conn,"select * from labor where id='$id'");
$data = mysqli_fetch_array($sql); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
          $fullname = $_POST['name'];
         $firstname = $_POST['fname'];
         $bdate = $_POST['bdate'];
         $gender= $_POST['gender'];
         $number = $_POST['number'];
         $address = $_POST['address'];
         $selection = $_POST['selection'];
     $idx = $_POST['id'];
	
    $edit = mysqli_query($conn,"UPDATE labor set fullname=' $fullname', fname=' $firstname', bdate='$bdate', gender='$gender', contact='$number', address='$address', company='$selection' where id='$idx'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
         echo 'New record updated successfully';
          header("location:viewlabor.php");
    }
    else
    {
        echo mysqli_error();
    }    	
    
}
?>

<html>
    <head><title>UPDATE Labor Form</title>
    <link rel = "stylesheet" href="formstyle.css">
     <script type="text/javascript" src="laborvalidation.js"></script>
    
    </head>
    
    <body>
    <h2>UPDATE LABOR</h2>
        
     <form action = "editlabor.php" method="post">
    <div class = "container">
    
         <div class= "labor">
         <label for="name"><b>Name with Initals</b></label>
         <input type="text" id="name" name="name" value="<?php echo $data['fullname'] ?>" placeholder= "Name with initials" required>
         <input type="hidden" name ="id" value="<?php echo $data['id']?>">
         <span id="error_name"></span>
         </div>
         
         <div class= "labor">
         <label for="fname"><b>Full Name</b></label>
         <input type="text" id="fname" name="fname" value="<?php echo $data['fname'] ?>" placeholder= "Enter Full Name" required>
          <span id="error_fname"></span>
         </div>
         
         <div class= "labor">
         <label for="date"><b>Birthdate</b></label>
         <input type="date" id="bdate" name="bdate" value="<?php echo $data['bdate'] ?>" required>
          <span id="error_date"></span>
         </div>
         
         <div class= "labor">
          <label for="gender"><b>Gender</b></label>
          <label><input type="radio"  name="gender" value = "Male" id= "male"<?php echo ($data['gender'] =='Male')? 'checked':'' ?>>Male<input type="radio" name="gender" value = "Female" id= "female"<?php echo ($data['gender'] =='Female')? 'checked':'' ?>>Female</label>
          <span id="error_gender"></span>
        </div>
         
         <div class= "labor">
         <label for="number"><b>Contact Number</b></label>
         <input type="text" id="number" name="number" value="<?php echo $data['contact'] ?>" placeholder= "Enter Contact Number" required>
          <span id="error_number"></span>
         </div>
          
         <div class= "labor">
         <label for="address"><b>Permanent Address </b></label>
         <input type="text" id="address" name="address" value="<?php echo $data['address'] ?>" required>
          <span id="error_naddress"></span>
         </div>
          
         <div class = "labor">
         <label for="selection"><b>Hiring Company </b></label>
         <select name = "selection" required >
         
         <option value="Select">Select one</option>
         <option value="Sunshine">Sunshine</option>
         <option value="Moonlight">Moonlight</option>
         </select>
          <span id="error_selection"></span>
        </div>
         
         <div class= "labor">
         <input type="submit" name = "update" value = "Update" id = "submit_btn" >
         </div>
          
    </div>    
        
    </form>
    
    </body>
</html>