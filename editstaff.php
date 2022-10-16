<?php
$id = "";
require_once('database.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';
if($id == null){
    echo 'id is null';
}
$sql = mysqli_query($conn,"select * from staff where id='$id'");
$data = mysqli_fetch_array($sql); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
           $firstname = $_POST['fname'];
          $lastname = $_POST['lname'];
          $name = $_POST['name'];
          $bdate = $_POST['bdate'];
          $nic = $_POST['nic'];
          $gender= $_POST['gender'];
          $number = $_POST['number'];
          $address = $_POST['address'];
          $email = $_POST['email'];
          $selection = $_POST['selection'];
          $image= $_POST['empImage'];
     $id = $_POST['id'];
	
    $edit = mysqli_query($conn,"UPDATE staff set fname= ' $firstname', lname= '$lastname', initial= ' $name', dob = '$bdate', nic = '$nic', gender = '$gender', contact= ' $number ', address = '$address', email= '$email', post= '$selection', image='$image'  where id='$id'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
         echo 'New record updated successfully';
          header("location:viewstaff.php");
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>
<html>
    <head>
    <title>Add Staff Form</title>
           <link rel = "stylesheet" href="formstyle.css">
         <script type="text/javascript" src="staff_validation.js"></script>
  
    </head>
    
    <body>
        <h2>ADD STAFF</h2>
 <form action = "editstaff.php" method= "post">
    <div class = "container">
    
         
        
          <div class= "staff">
         <label for="fname"><b>First Name</b></label>
         <input type="text" id="fname" name="fname" value="<?php echo $data['fname'] ?>" placeholder= "Enter First Name" required>
        <input type="hidden" name ="id" value="<?php echo $data['id']?>">
          <span id="error_fname"></span>
         </div>
         
        <div class= "staff">
         <label for="lname"><b>Last Name</b></label>
         <input type="text" id="lname" name="lname" value="<?php echo $data['lname'] ?>" placeholder= "Enter Last Name" required>
         <span id="error_lname"></span>
         </div>
        
        <div class= "staff">
         <label for="name"><b>Name with Initials</b></label>
         <input type="text" id="name" name="name" value="<?php echo $data['initial'] ?>"  placeholder= "Enter Name with initials" required>
        <span id="error_initial"></span>
         </div>
         
         <div class= "staff">
         <label for="date"><b>Birth Date</b></label>
         <input type="date" id="bdate" name="bdate"value="<?php echo $data['dob'] ?>" >
         </div>
         
         <div class= "staff">
         <label for="nic"><b>NIC Number</b></label>
         <input type="text" id="nic" name="nic" value="<?php echo $data['nic'] ?>" placeholder= "Enter NIC Number" required>
         </div>
        
         <div class= "staff">
         <label for="gender">Gender</label>
         <label><input type="radio" name="gender" value = "Male" id = "m_gender"<?php echo ($data['gender'] =='Male')? 'checked':'' ?>>Male<input type="radio" name="gender" value = "Female" id = "f_gender"<?php echo ($data['gender'] =='Female')? 'checked':'' ?>>Female</label>
         <span id="error_gender"></span>
        </div>
          
         <div class= "staff">
         <label for="number"><b>Contact Number</b></label>
         <input type="text" id="number" name="number" placeholder= "Enter Contact Number" value="<?php echo $data['contact'] ?>" required>
         </div>
        
        <div class= "staff">
         <label for="address"><b>Permanent Adddress</b></label>
         <input type="text" id="address" name="address" value="<?php echo $data['address'] ?>" placeholder= "Enter Address" required>
         </div>
          
         <div class= "staff">
         <label for="email"><b>Email Address</b></label>
         <input type="text" id="email" name="email" value="<?php echo $data['email'] ?>" placeholder= "Enter Email address"required>
         </div>
        
          <div class= "staff">
          <label for="selection"><b>Post</b></label>
          <select name = "selection">
          <option value="Select">Select one</option>
          <option value="Admin">Admin</option>
          <option value="Principal">Principal</option>
          <option value="Matron">Matron</option>
        
          </select>
          </div>
         <div class= "staff">
         <label for="image"><b>Profile</b></label>
    
         <input type="file" name="empImage" placeholder="Drag the image here" class="fileBtnStyle" >
                       
         </div>
        
         <div class= "staff">
          
          <input type="submit" id= "submit_btn" name = "update" value = "Update" ">
          </div>
           
    </div>    
        
    </form>
    
    </body>
</html>