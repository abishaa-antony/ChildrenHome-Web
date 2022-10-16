<html>
    <head>
        
        <title>Add Child Form</title>
     <link rel = "stylesheet" href="formstyle.css">
     <script type="text/javascript" src="Validation.js"></script>
        
    
    </head>
    
    <body>
         <h2>ADD CHILD</h2>
    <div>
       <?php
    require_once('database.php');
        
    if(isset($_POST['create'])) {
         $initial = $_POST['name'];
          $name = $_POST['fname'];
          $bdate = $_POST['bdate'];
          $gender= $_POST['gender'];
          $image= $_POST['empImage'];
          
          $sql = "INSERT INTO child (initial, name, dob, gender, image) VALUES( '$initial','$name','$bdate','$gender','$image')";
         
           if ($conn->query($sql) === TRUE) {
            echo 'New record created successfully';
           } else {
            echo 'Error: ' . $sql . '<br>' . $conn->error;
           }  
      }
     mysqli_close($conn);
      
        ?>
        
    </div>
    <form action = "addchild.php" method= "post">
    <div class = "container">
    
         <div class= "child">
         <label for="name"><b>Name with Initials</b></label>
         <input type="text" id="initials" name="name" placeholder= "Enter Name with initials" required>
         <span id="error_initial"></span>
         </div>
         
        <div class= "child">
         <label for="fname"><b>Full Name</b></label>
         <input type="text" id="fullname" name="fname" placeholder= "Enter Full Name"  required>
         <span id="error"></span>
         </div>       
         
         <div class= "child">
         <label for="date"><b>Birth Date</b></label>
         <input type="date" id="bdate" name="bdate" required>
         <span id="error_date"></span>
         </div>
         
        <div class= "child">
          <label for="gender"><b>Gender</b></label>
          <label><input type="radio"  name="gender" id= "male" value = "Male"><b>Male</b><input type="radio" name="gender" id= "female" value = "Female"><b>Female</b></label>
           <span id="error_radio"></span>
        </div>
          
         <div class= "child">
         <label for="image"><b>Profile</b></label>
         <input type="file" name="empImage" id = "empImg" placeholder="Drag the image here" class="fileBtnStyle" >
         <span id="error_file"></span>

         </div>
        
         <div class= "child">
         <input type="submit" name = "create" value = "Insert" id = "submit_btn" >
          </div>
           
    </div>    
        
    </form>
    
    </body>
</html>