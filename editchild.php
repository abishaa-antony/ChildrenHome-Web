<?php
$id = "";
require_once('database.php');

$id = isset($_GET['id']) ? $_GET['id'] : '';
if($id == null){
    echo 'id is null';
}
$sql = mysqli_query($conn,"select * from child where id='$id'");
$data = mysqli_fetch_array($sql); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
           $initial = $_POST['name'];
          $name = $_POST['fname'];
          $bdate = $_POST['bdate'];
          $gender= $_POST['gender'];
          $image= $_POST['empImage'];
          $id = $_POST['id'];
	
    $edit = mysqli_query($conn,"UPDATE child set initial='$initial', name='$name', dob='$bdate', gender='$gender', image='$image' where id='$id'");
	
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
         echo 'New record updated successfully';
        header("location:viewchild.php");
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>
<html>
    <head>
        
        <title>Update Child Form</title>
      <link rel = "stylesheet" href="formstyle.css">
     <script type="text/javascript" src="Validation.js"></script>
    
    </head>
    
    <body>
         <h2>UPDATE CHILD</h2>
        
         <form action = "editchild.php" method= "post">
    <div class = "container">
    
         <div class= "child">
         <label for="name"><b>Name with Initials</b></label>
         <input type="text" id="initials" name="name" value="<?php echo $data['initial'] ?>" placeholder= "Enter Name with initials" required>
          <input type="hidden" name ="id" value="<?php echo $data['id']?>">
         <span id="error_initial"></span>
         </div>
         
        <div class= "child">
         <label for="fname"><b>Full Name</b></label>
         <input type="text" id="fullname" name="fname" value="<?php echo $data['name'] ?>" placeholder= "Enter Full Name"  required>
         <span id="error"></span>
         </div>       
         
         <div class= "child">
         <label for="date"><b>Birth Date</b></label>
         <input type="date" id="bdate" name="bdate" value="<?php echo $data['dob'] ?>"required>
         <span id="error_date"></span>
         </div>
         
        <div class= "child">
          <label for="gender"><b>Gender</b></label>
         <label><input type="radio"  name="gender" id= "male" <?php echo ($data['gender'] =='Male')? 'checked':'' ?> value = "Male" >Male<input type="radio" name="gender" id= "female" <?php echo ($data['gender'] =='Female')? 'checked':'' ?> value = "Female">Female</label>
           <span id="error_radio"></span>  
    
        </div>
          
         <div class= "child">
         <label for="image"><b>Profile</b></label>
         <input type="file" name="empImage" id = "empImg" placeholder="Drag the image here" class="fileBtnStyle" value="<?php echo $data['image'] ?>" >
         <span id="error_file"></span>

         </div>
        
         <div class= "child">
         <input type="submit" name = "update" value = "Update" id = "submit_btn" >
           
    </div>    
        
    </form>
    
    </body>
</html>



